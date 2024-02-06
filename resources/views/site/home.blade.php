@extends('site.layout')

@section('title', 'Dev Gui')
    
@section('conteudo')

  <div class="container mx-auto my-28">
    <div>
     
      <div class="bg-black relative shadow rounded w-5/6 md:w-5/6  lg:w-4/6 xl:w-3/6 mx-auto">
        <div class="flex justify-center">
          <img src="{{ asset('img/guiIMG.jpg')}}" alt="" class="rounded-full mx-auto absolute -top-20 w-32 h-32 shadow-md border-4 border-black transition duration-200 transform hover:scale-110">
        </div>
        
        <div class="mt-16">
          <h1 class="font-bold text-center text-3xl text-white">Guilherme Feitosa</h1>
          <p class="text-center text-sm text-gray-200 font-medium">Desenvolvedor Full stack</p>
          <p>
            <span><!-- Nada aqui! --></span>
          </p>
          
          <div class="my-5 px-6">
            <a href="{{ route('mail.contato') }}" class="text-gray-200 block rounded-lg text-center font-medium leading-6 px-6 py-3 bg-blue-500 hover:bg-sky-900 hover:text-white">Desenvolvedor Full stack <span class="font-bold">contato</span></a>
          </div>
          <div class="flex justify-between items-center my-5 px-6">
            
            {{-- Tooltip 1 e 2--}}
              <button data-tooltip-target="tooltip-default" data-tooltip-style="light" type="button" class="text-gray-200 hover:text-gray-900 hover:bg-gray-100 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3">Técnico em informática</button>
              <div id="tooltip-default" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                Concluído ensino médio técnico, 2017 - 2019.
                <div class="tooltip-arrow" data-popper-arrow></div>
              </div>
            
              <button data-tooltip-target="tooltip-default1" data-tooltip-style="light" type="button" class="text-gray-200 hover:text-gray-900 hover:bg-gray-100 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3">Engenheiro de software</button>
              <div id="tooltip-default1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                Cursando atualmente, 2023 - 2026.
                <div class="tooltip-arrow" data-popper-arrow></div>
              </div>
            {{-- Fim Tooltip's --}}
          
          </div>

          <div class="w-full my-5 px-6 ">
            <h5 class="block mb-2 font-sans text-xl text-center antialiased font-semibold leading-snug tracking-normal text-white">Sobre mim</h5>
            <div class="p-6 text-center">
              <p class="mb-3 font-normal text-gray-200 ">Jovem fascinado pela tecnologia! Em busca de oportunidades, tenho diploma técnico em informática e atualmente cursando engenharia de Software. Full stack, PHP, LINUX</p> 
            </div>
          </div>
        </div>
      </div>
    
    </div>
  </div>

@endsection