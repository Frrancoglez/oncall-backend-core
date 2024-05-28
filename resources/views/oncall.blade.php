<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oncall</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body class="font-sans antialiased bg-[#f5f5f5]">
        <nav class='h-20 mb-20 shadow-sm bg-[#ffffff] rounded-lg'>
            <div class='container mx-auto h-full flex items-center px-20'>
                <h2 class='text-[#1633ff] font-semibold text-3xl'>H A U L M E R</h2>
            </div>
        </nav>
        <main class='container h-screen mx-auto py-20 space-y-20 p-6'>
            <h2 class='text-4xl font-semibold text-gray-700 text-center'>Turnos de Emergencia Operacional</h2>
            @foreach($groups as $date => $oncalls)
                <div class="w-full max-w-md mx-auto p-4 bg-[#ffffff]  rounded-2xl shadow-md md:p-8">
                    <div class="flex items-center justify-between mb-4">
                        <h5 class="text-xl font-semibold leading-none text-gray-800"> {{$date}}</h5>
                </div>
                <div class="flow-root">
                        <ul role="list" class="divide-y divide-gray-300">
                        @foreach($oncalls as $oncall)
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <!-- <img class="w-8 h-8 rounded-full" href="usuario-de-perfil.png" alt="Neil image"> -->
                                </div>
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-700">
                                    <i class="bi bi-person text-[#1633ff]"></i>
                                    {{$oncall->engineer->name}}
                                    </p>
                                    <p class="text-sm text-gray-500 truncate">
                                    <i class="bi bi-envelope text-[#1633ff]"></i>
                                    {{$oncall->engineer->mail}}
                                    </p>
                                    <p class="text-sm text-gray-500 truncate">
                                    <i class="bi bi-phone text-[#1633ff]"></i>
                                    {{$oncall->engineer->phone}}
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-[#1633ff]">
                                    {{$oncall->engineer->team->name}}
                                </div>
                            </div>
                        </li>
                    @endforeach
                    </ul>
            </div>
            </div>
            @endforeach
        </main>
</body>
</html>