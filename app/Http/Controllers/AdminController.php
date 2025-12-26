<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Quiz;
use Symfony\Contracts\Service\Attribute\Required;

class AdminController extends Controller
{
    public function login(Request $request){

       $validate= $request->validate([
            "name"=>"required",
            "password"=>"required",
        ]);

        $admin=Admin::where([
        "name"=>$request->name,
        "password"=>$request->password])->first();

        if(!$admin){
            $validate= $request->validate([
                "user"=>"required",
            ],["user.required"=>"User does not exist"]);
        }
        Session::put("admin",$admin);
        return redirect("dashboard");
    }

    public function dashboard(){
        $admin=Session::get("admin");
        if(!$admin){
            return redirect("admin-login");
        }else{
            return view("admin",["name"=>$admin->name]);
        }
    }
    public function categories(){
        $categories=Category::get();
        $admin=Session::get("admin");
        if(!$admin){
            return redirect("admin-login");
        }else{
            return view("categories",["name"=>$admin->name,"categories"=>$categories]);
        }
    }

    public function logout(){
        Session::forget("admin");
        return redirect("admin-login");
    }

    public function addCategories(Request $request){
       $validate = $request->validate(
        [
            "categoryname" => "required|min:3|unique:categories,name"
        ],
        [
            "categoryname.required" => "Category field is required!",
            "categoryname.min"      => "Category must be at least 3 characters.",
            "categoryname.unique"   => "Category already exists!"
        ]
        );

        $category=new Category();
        $admin=Session::get("admin");

        $category->name=$request->categoryname;
        $category->creator=$admin->name;
        if($category->save()){
            Session::flash("category","Category $request->categoryname Successfully Saved ! ");
            return redirect("admin-categories");
        }
    }

    // public function editCategory($id){
    //     $result=Category::where("id",$id)->first();
    //     return redirect("admin-categories",["editCategory"=>$result]);
    // }

    public function deleteCategory($id){
        $result=Category::where("id",$id)->delete();
        if($result){
            Session::flash("category","Category Deleted ! ");
            return redirect("admin-categories");   
        }
    }

    public function addQuiz(Request $request){
        $categories=Category::get();
        $admin=Session::get("admin");      
      
        if($admin){
             if($request->quizname && $request->category_id && !Session::has("quizDetails")){
                $quizz=new Quiz();
                $quizz->name=$request->quizname;
                $quizz->category_id=$request->category_id;
                if($quizz->save()){
                    Session::put("quizDetails",$quizz);
                }
            }
            return view("add-quiz",["name"=>$admin->name,"categories"=>$categories]);           
        }else{
             return redirect("admin-login");
        }
    }

}
