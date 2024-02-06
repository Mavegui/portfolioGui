@extends('site.layout')

@section('title', 'Dev_Gui Interesses')
    
@section('conteudo')


<div class="container relative flex flex-col justify-between h-full max-w-6xl px-10 mx-auto xl:px-0 mt-5">
    <h2 class="mb-1 text-3xl font-extrabold leading-tight text-white">Interesses</h2>
    <p class="mb-12 text-lg text-gray-200">Gui além de programador</p>
    <div class="w-full">
        <div class="flex flex-col w-full mb-10 sm:flex-row">
            <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                <div class="relative h-full ml-0 mr-0 sm:mr-10">
                    <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-indigo-800 rounded-lg"></span>
                    <div class="relative h-full p-5 bg-black border-2 border-indigo-800 rounded-lg">
                        <div class="flex items-center -mt-1">
                            <h3 class="my-2 ml-3 text-lg font-bold text-white">Gamer ~ Mavegui</h3>
                        </div>
                        <hr class="h-px my-4 border-2 border-indigo-800 rounded">
                        <p class="mb-2 text-gray-200">Desde pequeno sempre gostei de jogar, ainda hj sou assim! <br>
                            Game favorito Chrono Trigger.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2">
                <div class="relative h-full ml-0 md:mr-10">
                    <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-fuchsia-800 rounded-lg"></span>
                    <div class="relative h-full p-5 bg-black border-2 border-fuchsia-800 rounded-lg">
                        <div class="flex items-center -mt-1">
                            <h3 class="my-2 ml-3 text-lg font-bold text-white">Tecnologia</h3>
                        </div>
                        <hr class="h-px my-4 border-2 border-fuchsia-800 rounded">
                        <p class="mb-2 text-gray-200">Junto com o meu amor por jogos cresceu junto o amor pela Tecnologia. <br>
                        Sou um curioso nato, gosto de ler notícias da área e mexer em novas tecnologias.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-full mb-5 sm:flex-row">
            <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                <div class="relative h-full ml-0 mr-0 sm:mr-10">
                    <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-green-800 rounded-lg"></span>
                    <div class="relative h-full p-5 bg-black border-2 border-green-800 rounded-lg">
                        <div class="flex items-center -mt-1">
                            <h3 class="my-2 ml-3 text-lg font-bold text-white">Futebol</h3>
                        </div>
                        <hr class="h-px my-4 border-2 border-green-800 rounded">
                        <p class="mb-2 text-gray-200">Algo normal de um BR, aprecio muito o futebol em geral, ver um futebol sempre bom. <br>
                        Time do coração Santos.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                <div class="relative h-full ml-0 mr-0 sm:mr-10">
                    <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-yellow-800 rounded-lg"></span>
                    <div class="relative h-full p-5 bg-black border-2 border-yellow-800 rounded-lg">
                        <div class="flex items-center -mt-1">
                            <h3 class="my-2 ml-3 text-lg font-bold text-white">Pets</h3>
                        </div>
                        <hr class="h-px my-4 border-2 border-yellow-800 rounded">
                        <p class="mb-2 text-gray-200">Amo animais, tenho alguns se for falar nome de cada um aqui vai uma lista grande. <br>
                        Tenho gatos e cachorros.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2">
                <div class="relative h-full ml-0 md:mr-10">
                    <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-rose-800 rounded-lg"></span>
                    <div class="relative h-full p-5 bg-black border-2 border-rose-800 rounded-lg">
                        <div class="flex items-center -mt-1">
                            <h3 class="my-2 ml-3 text-lg font-bold text-white">Família</h3>
                        </div>
                        <hr class="h-px my-4 border-2 border-rose-800 rounded">
                        <p class="mb-2 text-gray-200">A base de tudo, grato a Deus por tudo!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection