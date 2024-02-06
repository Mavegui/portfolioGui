<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Caminho errado chapa!</title>
    
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico')}}"/>
    <!-- CDN Tailwind/Flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    

</head>
<body>

    <div class="relative h-screen w-full">
        <img src="{{ asset('img/imgFalha.jpg')}}" alt="Background Image" class="absolute inset-0 w-full h-full object-cover filter blur-sm">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center">
            
            <div class="bg-gray-800 bg-opacity-50 p-8 rounded-lg shadow-lg max-w-md w-full">
                <h1 class="mb-8 text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-800 to-red-400">
                    ERRO 404 jovem!
                </h1>
                <p class="mb-3 text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-200 to-red-950">
                    Como você chegou aqui? Problema em URL?
                </p>
                <a href="{{ route('site.index') }}" class="inline-block py-3 px-6 bg-gray-700 hover:bg-sky-800 text-white rounded-lg font-semibold">
                Voltar ao home
                </a>
            </div>

        </div>
    </div>
    
    <!--Flowbite script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</body>
</html>