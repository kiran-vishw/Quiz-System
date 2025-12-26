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
      <!-- <main class="flex-grow max-w-7xl mx-auto px-4 py-8">
              <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8"> -->
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
        <h3 class="text-2xl font-bold text-green-800 mb-4">Quiz: {{session("quizDetails")->name}}</h3>
        <h1 class="text-2xl font-bold text-gray-800 mb-4">
           Add MCQs
         </h1>

         <form method="" action="">
          
         <div class="mb-4">
            <!-- <label class="block text-gray-700 font-medium mb-2">
            Option A
            </label> -->
            <textarea
              type="text"
              name="quizname"
              placeholder="Enter Question"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              ></textarea>
          </div>
          
           <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">
            Option A
            </label>
            <input
              type="text"
              name="quizname"
              placeholder="Enter Option A"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              >
          </div>
           <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">
            Option B
            </label>
            <input
              type="text"
              name="quizname"
              placeholder="Enter Option B"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              >
          </div>
           <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">
            Option C
            </label>
            <input
              type="text"
              name="quizname"
              placeholder="Enter Option C"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              >
          </div>
           <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">
            Option D
            </label>
            <input
              type="text"
              name="quizname"
              placeholder="Enter Option D"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              >
          </div>
           <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">
            Correct Answer:
            </label>
            <select name="right_answer" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
              <option>A</option>
              <option>B</option>
              <option>C</option>
              <option>D</option>
            </select>
          </div>
         </form>

         <button
            type="text"
            class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
          Add More
          </button>
        
          <button
            type="submit"
            class="w-full bg-green-600 text-white py-2 mt-5 rounded-lg font-semibold hover:bg-blue-700 transition">
          Add and Save
          </button>

        @endif
              </div>
      </main>
       <x-footer></x-footer>
   </body>
</html>