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
      <main class="flex-grow max-w-7xl mx-auto px-4 py-8">
         <h1 class="text-2xl font-bold text-gray-800 mb-4">
            Welcome to Dashboardaa
            dashboard view
         </h1>
      </main>
       <x-footer></x-footer>
   </body>
</html>