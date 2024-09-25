@extends('site.layout')

@section('title', 'Portfólio')
    
@section('conteudo')

  <section>
    <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-24 max-w-7xl">
      <div class="grid w-full grid-cols-1 gap-6 mx-auto lg:grid-cols-3">
        
        <div class="p-6 border-2 border-sky-800 rounded flex flex-col justify-between flex-grow bg-black">

          <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-white lg:text-3xl">Blog</h1>
          <p class="mx-auto text-base leading-relaxed text-gray-200">
            Criação de um blog onde o usuário se cadastra e gerencia suas postagens. <br> 
            Feito com o intuito de aprendizado, utilizando Node.js e MongoDB.
          </p>                
          <div class="mt-3 text-black inline-flex items-center">
            <a href="https://github.com/Mavegui/Blog" class="inline-flex items-center mt-4 font-semibold text-sky-800  lg:mb-0 hover:text-blue-500" title="Ver">
              Ver código 
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
        
        <div class="p-6 border-2 border-sky-800 rounded flex flex-col justify-between flex-grow bg-black">

          <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-white lg:text-3xl">Site Escolar</h1>
          <p class="mx-auto text-base leading-relaxed text-gray-200">
            Site escolar onde professores e alunos se cadastram. O professor pode criar provas e visualizar os resultados dos alunos. Os estudantes, em sua aba, podem ver as provas existentes, acessá-las, resolvê-las e, ao final, visualizar suas notas.

            Este projeto foi o trabalho que realizei para a conclusão do meu curso técnico em Informática, utilizando a linguagem PHP, banco de dados MySQL e o framework Bootstrap.
          </p>                
          <div class="mt-3 text-black inline-flex items-center">
            <a href="https://github.com/Mavegui/Site_Escolar" class="inline-flex items-center mt-4 font-semibold text-sky-800  lg:mb-0 hover:text-blue-500" title="Ver">
              Ver código 
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
        
        <div class="p-6 border-2 border-sky-800 rounded flex flex-col justify-between flex-grow bg-black">

          <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-white lg:text-3xl">Minhas Artes</h1>
          <p class="mx-auto text-base leading-relaxed text-gray-200">
            Os dois projetos citados são apenas uma amostra das minhas criações. Acesse meu GitHub e veja outros! Estou sempre estudando, aprimorando minhas habilidades e trabalhando em novos projetos.
          </p>                
          <div class="mt-3 text-black inline-flex items-center">
            <a href="https://github.com/Mavegui" class="inline-flex items-center mt-4 font-semibold text-sky-800 lg:mb-0 hover:text-blue-500" title="Ver">
              Outros projetos 
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      
      </div>
    </div>
  </section>

@endsection

