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
    MCQ List : {{$quizName}}
  </h1>

  <!-- Table Wrapper -->
  <div class="flex justify-center">
    <div class="w-full max-w-6xl bg-white rounded-xl shadow-lg p-6">

      <div class="overflow-x-auto">
        <table class="w-full text-amber-900 text-center border border-gray-200">
          <thead class="bg-gray-100">
            <tr>
              <th class="px-4 py-2">S.No</th>
              <th class="px-4 py-2">Question</th>
              <th class="px-4 py-2">Action</th>
            </tr>
          </thead>

          <tbody>
            @foreach($mcq_questions as $key => $value)
            <tr class="border-t hover:bg-gray-50">
              <td class="px-4 py-2">{{ $key + 1 }}</td>
              <td class="px-4 py-2">{{ $value->question }}</td>
              <td class="px-4 py-2">
                <div class="flex justify-center items-center gap-4">
                  <a href="/delete-category/{{ $value->id }}" class="hover:scale-110 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 -960 960 960" fill="#eb7373">
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
  </div>

</div>

    
    <x-footer></x-footer>
  </body>
</html>