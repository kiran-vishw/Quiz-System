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
    <br>
    <div class="pt-5 p-8">
      <h1 class="text-xl font-bold text-blue-600 text-center">
        Category List
      </h1>
      <div class="flex justify-center p-8">
        <table class="w-[60%] text-amber-900 bg-white rounded-xl shadow-lg border border-red-500 text-center">
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
                  <a href="/edit-category/{{ $value->id }}" class="text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" width="20px" viewBox="0 -960 960 960" fill="#75FB4C">
                      <path d="M216-144q-29.7 0-50.85-21.15Q144-186.3 144-216v-528q0-30.11 21-51.56Q186-817 216-816h346l-72 72H216v528h528v-274l72-72v346q0 29.7-21.15 50.85Q773.7-144 744-144H216Zm168-240v-153l354-354q11-11 24-16t26.5-5q14.4 0 27.45 5 13.05 5 23.99 15.78L891-840q11 11 16 24.18t5 26.82q0 13.66-5.02 26.87-5.02 13.2-15.98 24.13L537-384H384Z"/>
                    </svg>
                  </a>
                  <a href="/delete-category/{{ $value->id }}" class="text-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" width="20px" viewBox="0 -960 960 960" fill="#eb7373">
                      <path d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Z"/>
                    </svg>
                  </a>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <x-footer></x-footer>
  </body>
</html>