<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
  </head>
  <body class="  bg-gray-100 ">
    <x-navbar name={{$name}}></x-navbar>
    <div class=" flex  justify-center bg-gray-100  pt-10">
      <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
          Add Categories
        </h2>
        <form action="\add-category" method="post">
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
              name="categoryname"
              placeholder="Enter Category Name"
               value="{{ old('categoryname', $editCategory->name ?? '') }}"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              >
            <span class="text-red-500 bg-red-100 flex mt-2">@error("categoryname") {{$message}} @enderror</span>
          </div>
          <!-- Login Button -->
          <button
            type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
          Save
          </button>
        </form>
        <p class="text-center text-sm text-gray-500 mt-4">
          <!-- © 2025 Admin Panel -->
        </p>
      </div>
    </div>
 
    <div class="bg-gray-100 min-h-screen p-10">

  <!-- Heading -->
  <h1 class="text-2xl font-bold text-blue-600 text-center mb-8">
    Category List
  </h1>

  <!-- Table Wrapper -->
  <div class="flex justify-center">
    <div class="w-full max-w-6xl bg-white rounded-xl shadow-lg p-6">

    <div class="pt-5 p-8">
      
      <div class="">
              <div class="overflow-x-auto">

        <table class="w-full text-amber-900 text-center border border-gray-200">
          <thead class="bg-gray-100">
            <tr>
              <th class="px-4 py-2">S.No</th>
              <th class="px-4 py-2">Name</th>
              <th class="px-4 py-2">Creator</th>
              <th class="px-4 py-2">Date</th>
              <th class="px-4 py-2">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $key => $value)
            <tr class="border-t hover:bg-gray-50">
              <td class="px-4 py-2">{{ $key + 1 }}</td>
              <td class="px-4 py-2">{{ $value->name }}</td>
              <td class="px-4 py-2">{{ $value->creator }}</td>
              <td class="px-4 py-2">{{ $value->created_at }}</td>
              <td class="px-4 py-2">
                <div class="flex justify-center items-center gap-4">
                  <a href="/delete-category/{{ $value->id }}" class="text-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" width="20px" viewBox="0 -960 960 960" fill="#eb7373">
                      <path d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Z"/>
                    </svg>
                  </a>

                  <a href="/quiz-list/{{ $value->id }}/{{ $value->name }}" class="text-red-600">
                  <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#0000F5"><path d="M480-312q70 0 119-49t49-119q0-70-49-119t-119-49q-70 0-119 49t-49 119q0 70 49 119t119 49Zm0-72q-40 0-68-28t-28-68q0-40 28-68t68-28q40 0 68 28t28 68q0 40-28 68t-68 28Zm0 192q-142.6 0-259.8-78.5Q103-349 48-480q55-131 172.2-209.5Q337.4-768 480-768q142.6 0 259.8 78.5Q857-611 912-480q-55 131-172.2 209.5Q622.6-192 480-192Zm0-288Zm0 216q112 0 207-58t146-158q-51-100-146-158t-207-58q-112 0-207 58T127-480q51 100 146 158t207 58Z"/></svg>
                  </a>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <x-footer></x-footer>
  </body>
</html>