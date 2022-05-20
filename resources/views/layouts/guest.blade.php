<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}" defer></script>


    <!-- Scripts para FullCalendar-->
    <link rel="stylesheet" href="{{ asset('css/fullcalendar/main.css') }}">
    <script src="{{ asset('js/fullcalendar/main.js') }}" defer></script>
    <script src="{{ asset('js/fullcalendar/locales-all.js') }}" defer></script>




</head>

<body>
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>

    <div class=" bg-gray-900">
        <div class="max-w-2xl mx-auto text-white py-10">
            <div class="text-center">
                <h3 class="text-3xl mb-3"> Bienvenido a la aplicación gestora </h3>
                <p> Puedes encontrar tambien el codigo del proyecto en: </p>
                <div class="flex justify-center my-10">
                    <button>
                        <a href="https://github.com/noonehtml/Proyecto">
                            <div class="flex items-center border  rounded-lg px-4 py-2 w-52 mx-2">
                                <img src="{{ asset('imagenes/generales/github-11-64.png') }}" alt=""
                                    class="w-7 md:w-8">
                                <div class="text-left ml-3">
                                    <p class='text-xs text-gray-200'>Download on </p>
                                    <p class="text-sm md:text-base"> Github </p>
                                </div>
                            </div>
                        </a>
                    </button>

                    <button>
                        <a href="https://github.com/noonehtml/Proyecto">
                            <div class="flex items-center border  rounded-lg px-4 py-2 w-44 mx-2">
                                <img src="{{ asset('imagenes/generales/google-drive.png') }}" alt=""
                                    class="w-7 md:w-8">
                                <div class="text-left ml-3">
                                    <p class='text-xs text-gray-200'>Download on </p>
                                    <p class="text-sm md:text-base"> Google Drive </p>
                                </div>
                            </div>
                        </a>
                    </button>
                </div>
            </div>
            <div class="mt-20 flex flex-col md:flex-row md:justify-between items-center text-sm text-gray-400">
                <p class="order-2 md:order-1 mt-8 md:mt-0"> &copy; Angel Eduardo. 2022 </p>
                <div class="order-1 md:order-2">
                    <span class="px-2">About us</span>
                    <span class="px-2 border-l">Contact us</span>
                    <span class="px-2 border-l">Privacy Policy</span>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
