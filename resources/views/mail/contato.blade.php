@extends('site.layout')

@section('title', 'Contato')
    
@section('conteudo')


    <section class="bg-gray-900">
        
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-white">Contato</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-400 sm:text-xl">Deseja ter seu pr贸prio site? Entre em contato.</p>
            
            
            <!-- Mensagem se deu certo envio  -->
            @if ($mensagem = Session::get('sucesso'))
            
            <div id="alert-additional-content-3" class="p-2 mb-2 border rounded-lg bg-gray-800 text-green-400 border-green-800" role="alert">
                <div class="flex items-center">
                  <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                  </svg>
                  <span class="sr-only">Info</span>
                  <h3 class="text-lg font-medium">Mensagem enviada!</h3>
                </div>
                
                <div class="mt-2 mb-4 text-sm">
                    <p>{{ $mensagem }}</p>
                </div>
                
                <div class="flex">
                  <button type="button" class="bg-transparent border focus:outline-none font-medium rounded-lg text-xs px-3 py-1.5 text-center hover:bg-green-600 border-green-600 text-green-400 hover:text-white focus:ring-green-800" data-dismiss-target="#alert-additional-content-3" aria-label="Close">
                    Fechar
                  </button>
                </div>
            </div>

            @endif

            <form action="{{ route('mail.contato') }}" method="POST" class="space-y-8">
                
                @csrf
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-300">Seu nome</label>
                    <input name="name" type="text" id="name" class="shadow-sm bg-gray-50 border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-primary-500 focus:border-primary-500 shadow-sm-light" required>
                </div>
                <div>
                    <input name="email" type="hidden" id="email" class="shadow-sm bg-gray-50 border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-primary-500 focus:border-primary-500 shadow-sm-light" value="gui77feitosa@porfoliogui.com.br">
                </div>
                <div>
                    <label for="email1" class="block mb-2 text-sm font-medium text-gray-300">Seu email</label>
                    <input name="email1" type="email" id="email1" class="shadow-sm bg-gray-50 border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-primary-500 focus:border-primary-500 shadow-sm-light" required>
                </div>
                <div>
                    <label for="subject" class="block mb-2 text-sm font-medium text-gray-300">Assunto</label>
                    <input name="subject" type="text" id="subject" class="block p-3 w-full text-sm rounded-lg border border-gray-300 shadow-sm  bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-primary-500 focus:border-primary-500 shadow-sm-light" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-300">Sua mensagem</label>
                    <textarea name="message" id="message" rows="6" class="block p-2.5 w-full text-sm rounded-lg shadow-sm border bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-primary-500 focus:border-primary-500" required></textarea>
                </div>
                <button type="submit" class="my-2 text-gray-200 block rounded-lg text-center font-medium leading-6 px-6 py-3 bg-blue-500 hover:bg-sky-900 hover:text-white">Enviar mensagem</button>
            </form>

        </div>
    </section>

@endsection
