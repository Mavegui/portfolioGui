@extends('site.layout')

@section('title', 'Portfólio')
    
@section('conteudo')

  <section>
    <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-24 max-w-7xl">
      <div class="grid w-full grid-cols-1 gap-6 mx-auto lg:grid-cols-3">
        
        <div class="p-6 border-2 border-sky-800 rounded flex flex-col justify-between flex-grow bg-black">

          <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-white lg:text-3xl">Blog</h1>
          <p class="mx-auto text-base leading-relaxed text-gray-200">
          Criacão de um blog onde o usuário se cadastra e faz o gerenciamento de postagens. <br>
          Feito com intuito de aprendizado, usando Node JS e MongoDB. 
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

          <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-white lg:text-3xl">Site escolar</h1>
          <p class="mx-auto text-base leading-relaxed text-gray-200">
          Site escolar onde o professor e o aluno se cadastram, o professor no site pode criar provas e ver os resultados dos alunos. Os estudantes na aba deles podem ver provas existentes, acessar, resolver e no fim visualizar sua nota. <br>
          Este projeto foi o trabalho que realizei para conclusão do meu curso técnico em informática, linguagem PHP, banco de dados MySQL e framework Bootstrap. 
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

          <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-white lg:text-3xl">Codificação básica</h1>
          <p class="mx-auto text-base leading-relaxed text-gray-200">
          Os dois projetos citados são os principais realizados até o momento, entretanto tenho criações menores no meu Github com objetivo de prática. <br>
          Meus conhecimentos são Full Stack, com linguagem mais abordada o PHP. Veja a minha página de experiência para mais informações.
          </p>                
          <div class="mt-3 text-black inline-flex items-center">
            <a href="https://github.com/Mavegui" class="inline-flex items-center mt-4 font-semibold text-sky-800 lg:mb-0 hover:text-blue-500" title="Ver">
              Projetos menores 
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

