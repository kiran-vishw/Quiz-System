<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Admin Login</title>
      <script src="https://cdn.tailwindcss.com"></script>
   </head>
   <body class="min-h-screen flex items-center justify-center bg-gray-100">
      <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8">
         <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
            Admin Login
         </h2>
         <form action="\admin-login" method="post">
            <!-- Email -->
            @csrf 
            <span class="text-red-500">@error("user") {{$message}} @enderror</span>
            <div class="mb-4">
               <label class="block text-gray-700 font-medium mb-2">
               Email
               </label>
               <input
                  type="text"
                  name="name"
                  placeholder="admin@example.com"
                  class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                  >
               <span class="text-red-500">@error("name") {{$message}} @enderror</span>
            </div>
            <!-- Password -->
            <div class="mb-6">
               <label class="block text-gray-700 font-medium mb-2">
               Password
               </label>
               <input
                  type="password"
                  name="password"
                  placeholder="••••••••"
                  class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                  >
               <span class="text-red-500">@error("password") {{$message}} @enderror</span>
            </div>
            <!-- Login Button -->
            <button
               type="submit"
               class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
            Login
            </button>
         </form>
         <p class="text-center text-sm text-gray-500 mt-4">
            © 2025 Admin Panel
         </p>
      </div>
   </body>
</html>