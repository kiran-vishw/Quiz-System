<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mcq_questions</title>
  </head>
  <body class="  bg-gray-100 ">
    <x-navbar name={{$name}}></x-navbar>
   <div class="bg-gray-100 min-h-screen p-10">

  <!-- Heading -->
  <h1 class="text-2xl font-bold text-blue-600 text-center mb-8">
    Quiz List {{$category}}
  </h1>

  <!-- Table Wrapper -->
  <div class="flex justify-center">
    <div class="w-full max-w-6xl bg-white rounded-xl shadow-lg p-6">

      <div class="overflow-x-auto">
        <table class="w-full text-amber-900 text-center border border-gray-200">
          <thead class="bg-gray-100">
            <tr>
              <th class="px-4 py-2">Quiz ID</th>
              <th class="px-4 py-2">Quiz Name</th>
              <th class="px-4 py-2">Action</th>
            </tr>
          </thead>

          <tbody>
            @foreach($mcq_questions as $key => $value)
            <tr class="border-t hover:bg-gray-50">
              <td class="px-4 py-2">{{ $value->id }}</td>
              <td class="px-4 py-2">{{ $value->name }}</td>
              <td class="px-4 py-2">
                <div class="flex justify-center items-center gap-4">
                  <a href="/show-mcq/{{ $value->id }}/{{ $value->name }}" class="text-red-600">
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

    
    <x-footer></x-footer>
  </body>
</html>