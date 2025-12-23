<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Layout</title>
      <script src="https://cdn.tailwindcss.com"></script>
   </head>
   <body class="min-h-screen flex flex-col bg-gray-100">
      <!-- ================= HEADER / NAVBAR ================= -->
      <header class="bg-white shadow">
         <div class="max-w-7xl mx-auto px-4">
            <div class="flex h-16 items-center">
               <!-- Logo (Left) -->
               <div class="text-xl font-bold text-blue-600">
                  Quiz-System
               </div>
               <!-- Menu (Right aligned) -->
               <nav class="ml-auto flex space-x-6">
                  <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Categories</a>
                  <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Quiz</a>
                  <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Welcome {{$name}}</a>
                  <div>
                     <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                     Login
                     </button>
                  </div>
               </nav>
            </div>
         </div>
      </header>
      <!-- ================= MAIN CONTENT ================= -->
      <main class="flex-grow max-w-7xl mx-auto px-4 py-8">
         <h1 class="text-2xl font-bold text-gray-800 mb-4">
            Welcome to Dashboard
         </h1>
      </main>
      <!-- ================= FOOTER ================= -->
      <footer class="bg-gray-800 text-white">
         <div class="max-w-7xl mx-auto px-4 py-6 text-center">
            <p class="text-sm">
               © 2025 MyWebsite. All rights reserved.
            </p>
         </div>
      </footer>
   </body>
</html>