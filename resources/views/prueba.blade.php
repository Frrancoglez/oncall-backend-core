
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Haulmer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/app.css">
</head>
<body class=" antialiased bg-[#ffffff]">
        <nav class='h-20'>
            <div class='max-w-6xl mx-auto h-full flex items-center px-10'>
                <img class='w-[150px] bg-gradient-to-t' src="{{ asset('haulmer_logo.png')}}" alt="Imagen de ejemplo">
            </div>
        </nav>

        <main class=' min-h-screen py-20'>
            <div class=' max-w-5xl mx-auto drop-shadow-sm rounded-3xl py-18 px-2'>

                <!-- This weeek On Call Engineers -->
                <h3 class="text-3xl font-bold text-black mb-14 text-center md:text-4xl lg:text-5xl">Turno Semana <span class='text-[#1633ff]'>Actual</span></h3>
                <section class=' space-y-10 pb-20 mb-20'>
                    
                <!-- current = ´fecha' => [oncall, oncall, oncall] -->
                @foreach($oncalls['current'] as $key => $oncall)
                <div class="w-full max-w-md mx-auto p-4 bg-[#ffffff] drop-shadow-2xl rounded-2xl shadow sm:p-8">
                    <div class="flex justify-start gap-4 mb-4">
                        <h5 class="text-xl font-bold leading-none text-black">{{ Carbon\Carbon::parse($key)->format("l d F") }}</h5>
                    </div>
                    <div class="flow-root">
                            <ul role="list" class="divide-y divide-gray-200">
                            @foreach($oncall as $key => $onc)
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center">
                                        <div class="flex-1 min-w-0 ms-4">
                                            <p class="text-md font-semibold truncate text-black">
                                                <i class="bi bi-person text-[#1633ff] mr-1"></i>
                                                {{$onc->engineer->name}}
                                            </p>
                                            <p class="text-sm  text-black truncate">
                                                <i class="bi bi-envelope  text-[#ff36c7] mr-1"></i>
                                                {{$onc->engineer->mail}}
                                            </p>
                                            <p class="text-sm text-black truncate">
                                                <i class="bi bi-people  text-[#1633ff] mr-1"></i>
                                                {{$onc->engineer->team->name}}
                                            </p>
                                        </div>
                                        <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                            <button class="inline-flex  text-base font-semibold text-white space-x-2 bg-[#1633ff] py-2 px-3 rounded-xl">
                                                <i class="bi bi-telephone-outbound-fill"></i>
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            @endforeach    
                            </ul>
                        </div>
                    </div>
                    @endforeach
            </section>    

                
                <!-- next weeek On Call Engineers -->

                <h3 class='text-3xl font-bold text-black mb-14 text-center md:text-4xl lg:text-5xl'>Turnos Semana <span class='text-[#1633ff]'>Próxima</span></h3>
                    <section class="drop-shadow-2xl rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-black">
                            <tbody class=''>
                            @foreach($oncalls['next'] as $oncall)
                                <tr class="border-b bg-[#ffffff]">
                                    <th scope="row" class="px-6 py-4 font-md font-semibold text-black whitespace-nowrap ">
                                        <i class="bi bi-calendar-check text-[#ff36c7]"></i>
                                        {{ Carbon\Carbon::parse($oncall->date)->format("l d F") }}
                                    </th>
                                    <th  class="px-6 py-5 font-medium text-black whitespace-nowrap ">
                                        <i class="bi bi-person font-bold text-[#1633ff]"></i>
                                        {{$oncall->engineer->name}}
                                    </th>
                                    <td class="px-6 py-4">
                                        <i class="bi bi-envelope text-[#ff36c7]"></i>
                                        {{$oncall->engineer->mail}}
                                    </td>
                                    <td class="px-6 py-4">
                                        <i class="bi bi-people text-[#1633ff]"></i>
                                        {{$oncall->engineer->team->name}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </section>


                </div>
        </section>    

            
        </main>          
    </body>
</html>