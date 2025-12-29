<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Layout</title>
      <script src="https://cdn.tailwindcss.com"></script>
   </head>
   <body class="min-h-screen flex flex-col bg-gray-100">
     <x-navbar name={{$name}}></x-navbar>
      <!-- ================= MAIN CONTENT ================= -->
      
    <main class="flex-grow flex items-center justify-center px-4 py-8">
    <div class="w-full max-w-xl bg-white rounded-xl shadow-lg p-8">
        @if(!session("quizDetails"))
         <h1 class="text-2xl font-bold text-gray-800 mb-4">
           Add Quizz
         </h1>
         <form action="\add-quiz" method="get">
          <!-- Email -->
          @csrf 
          <span class="text-green-600 bg-emerald-100 flex">
          @if(session('category')) 
          {{session('category')}}
          @endif
          </span>
          
          <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">
            Category
            </label>
            <input
              type="text"
              name="quizname"
              placeholder="Enter Quizz Name"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              >
            <span class="text-red-500 bg-red-100 flex mt-2">@error("categoryname") {{$message}} @enderror</span>
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">
            Select Category
            </label>
            <select name="category_id" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Select</option>
                @foreach($categories as $key=>$value)
                <option value="{{$value->id}}">{{ $value->name }}</option>
                @endforeach
            </select>
            
            <span class="text-red-500 bg-red-100 flex mt-2">@error("categoryname") {{$message}} @enderror</span>
          </div>
          <!-- categories -->
          <!-- Login Button -->
          <button
            type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
          Save
          </button>
        </form>
        @else
        <h3 class=" font-bold text-green-800 mb-4">Quiz: {{session("quizDetails")->name}}</h3>

        <h3 class=" font-bold text-green-800 mb-4">Total MCQs: {{$totalMCQ}} &nbsp;<a href="\show-mcq\{{session('quizDetails')->id}}\{{session('quizDetails')->name}}" class="text-yellow-600" >Show MCQs</a></h3>

        <h5 class="text-2md font-bold text-gray-800 mb-4">
           Add MCQs
         </h5>
         <form method="post" action="\add-mcq">
         <div class="mb-4">
           @csrf
        
            <textarea
              type="text"
              name="question"
              placeholder="Enter Question"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              ></textarea>
              <span class="text-red"> @error("question") <span class="text-red-500">  {{$message}}  </span> @enderror </span>
          </div>
          
           <div class="mb-4">
            <input
              type="text"
              name="a"
              placeholder="Enter Option A"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              >
              <span class="text-red"> @error("a") <span class="text-red-500">  {{$message}}  </span> @enderror </span>
          </div>
           <div class="mb-4">
            <input
              type="text"
              name="b"
              placeholder="Enter Option B"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              >
              <span class="text-red"> @error("b") <span class="text-red-500">  {{$message}}  </span> @enderror </span>
          </div>
           <div class="mb-4">
            <input
              type="text"
              name="c"
              placeholder="Enter Option C"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              >
              <span class="text-red"> @error("c") <span class="text-red-500">  {{$message}}  </span> @enderror </span>
          </div>
           <div class="mb-4">
            <input
              type="text"
              name="d"
              placeholder="Enter Option D"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              >
              <span class="text-red"> @error("d") <span class="text-red-500">  {{$message}}  </span>@enderror </span>
          </div>
           <div class="mb-4">
            </label> -->
            <select name="correct_ans" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
              <option value="">Select</option>
              <option value="a">A</option>
              <option value="b">B</option>
              <option value="c">C</option>
              <option value="d">D</option>
            </select>
            @error("correct_ans") <span class="text-red-500">  {{$message}}  </span> @enderror
          </div>

          <button
            type="submit" name="add_more" value="add_more"
            class="w-full bg-blue-600  text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
          Add More
          </button>
        
          <button
            type="submit" name="done" value="done"
            class="w-full bg-green-600  text-center text-white py-2 mt-2 rounded-lg font-semibold hover:bg-blue-700 transition">
          Add and Save
          </button>

          <a href="\end-quiz"
            class="w-full bg-red-600 block text-center text-white py-2 mt-2 rounded-lg font-semibold hover:bg-blue-700 transition">
          Finish Quiz
        </a>
          </form>

        @endif
              </div>
      </main>
       <x-footer></x-footer>
   </body>
</html>