<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
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

}
