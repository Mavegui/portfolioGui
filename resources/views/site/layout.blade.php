<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico')}}"/>
    <!-- CDN Tailwind/Flowbite -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
   
</head>
<body>
<div>
    <!-- MENU -->
    <nav class="bg-black">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            
            <!-- Logo -->
            <a href="{{route('site.index')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('img/logo.png') }}" class="h-8" alt="GuiLogo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Mavegui</span>
            </a>
            
            <!-- MENU Mobile -->
            <button id="hamburger" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-lg md:hidden hover:bg-gray-700 focus:outline-none text-white">
               
                <!-- Ícone de menu (hamburger) -->
                <span class="sr-only">Abrir menu</span>
                <svg id="hamburger-icon" class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
                <!-- Ícone de fechar (X) -->
                <span class="sr-only">Fechar menu</span>
                <svg id="close-icon" class="toggle hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded md:space-x-8  md:flex-row md:mt-0 md:border-0 bg-black md:black border-black">
                    <li>
                        <a href="{{route('site.index')}}" class="block py-2 px-3 text-white rounded md:bg-transparent md:text-blue-500 md:p-0 bg-blue-600 md:bg-transparent" aria-current="page">Home</a>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-500 md:p-0 md:w-auto text-white focus:text-white border-gray-700 hover:bg-gray-700">Mais opções 
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar" class="z-10 hidden font-normal bg-black divide-y divide-gray-600 rounded-lg shadow w-44">
                            <ul class="py-2 text-sm text-gray-100" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="{{route('site.index')}}" class="block px-4 py-2 hover:bg-sky-800">Sobre mim</a>
                                </li>
                                <li>
                                    <a href="{{route('site.experiencia')}}" class="block px-4 py-2 hover:bg-sky-800">Experiência</a>
                                </li>
                                <li>
                                    <a href="{{route('site.interesses')}}" class="block px-4 py-2 hover:bg-sky-800">Interesses</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{route('site.portfolio')}}" class="block py-2 px-3 rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-blue-500 md:p-0 text-white hover:text-white">Portfólio</a>
                    </li>  
                    <li>
                        <a href="{{route('mail.contato')}}" class="block py-2 px-3 rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-blue-500 md:p-0 text-white hover:text-white">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>        

    <!-- Conteúdo -->
    <div class="bg-gray-900 flex flex-col min-h-screen">
        <div class="flex-grow">  
            @yield('conteudo')
        </div>
    </div>

    <!-- Rodapé -->
    <footer class="p-4 bg-black sm:p-6">
        <div class="mx-auto max-w-screen-xl">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="#" class="flex items-center">
                        <img src="{{ asset('img/logo.png')}}" class="mr-3 h-8" alt="GuiLogo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Mavegui</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase text-white">Recursos</h2>
                        <ul class="text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="{{route('site.index')}}" class="hover:underline">Sobre mim</a>
                            </li>
                            <li>
                                <a href="{{route('mail.contato')}}" class="hover:underline">Contato</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase text-white">#Gui</h2>
                        <ul class="text-gray-400">
                            <li class="mb-4">
                                <a href="{{route('site.experiencia')}}" class="hover:underline">Experiência</a>
                            </li>
                            <li>
                                <a href="{{route('site.portfolio')}}" class="hover:underline">Portfólio</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="#" class="hover:underline">Mavegui™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <a href="https://www.facebook.com/Sr.Guillermo77/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                    </a>
                    <a href="https://github.com/mavegui" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                    </a>
                    <a href="https://www.linkedin.com/in/gui77feitosa/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M7.979 5v1.586a3.5 3.5 0 0 1 3.082-1.574C14.3 5.012 15 7.03 15 9.655V15h-3v-4.738c0-1.13-.229-2.584-1.995-2.584-1.713 0-2.005 1.23-2.005 2.5V15H5.009V5h2.97ZM3 2.487a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" clip-rule="evenodd"/><path d="M3 5.012H0V15h3V5.012Z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

</div>

    <!--Flowbite script -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    
    <script>
        // Lógica de alternância do menu e ícones no mobile
        document.getElementById('hamburger').addEventListener('click', function() {
            const menu = document.getElementById('navbar-dropdown');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');
            menu.classList.toggle('hidden');
            hamburgerIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
    </script>

</body> 
</html>


    