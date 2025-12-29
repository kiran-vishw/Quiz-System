       <script src="https://cdn.tailwindcss.com"></script>

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
                  <a href="/dashboard" class="text-gray-700 hover:text-blue-600 font-medium">Dashboard</a>
                  <a href="/admin-categories" class="text-gray-700 hover:text-blue-600 font-medium">Categories</a>
                  <a href="/add-quiz" class="text-gray-700 hover:text-blue-600 font-medium">Quiz</a>
                  <a href="/admin-categories" class="text-gray-700 hover:text-blue-600 font-medium">Welcome {{$name}}</a>
                  <div>
                     <a href="/admin-logout"  class="bg-red-300 text-white px-4 py-2 rounded-lg hover:bg-red-600">
                     Logout 
    </a>
                  </div>
               </nav>
            </div>
         </div>
      </header>