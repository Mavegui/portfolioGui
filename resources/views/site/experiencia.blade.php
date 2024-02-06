@extends('site.layout')

@section('title', 'Habilidades')
    
@section('conteudo')

<section class="bg-gray-900">
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-white">Habilidades</h2>
        
        <ul class="space-y-4 list-disc list-inside text-gray-200">
            <li>
                Linguagens
                <ol class="ps-5 mt-2 space-y-1 list-disc list-inside">
                    <li><span class="font-semibold text-gray-900 dark:text-white">PHP</span> - Principal linguagem <span class="font-semibold text-gray-900 dark:text-white">estudada</span></li>
                    <li>JavaScript</li>
                    <li>Python</li>
                    <li>Java</li>
                </ol>
            </li>
            <li>
                Bancos de dados
                <ul class="ps-5 mt-2 space-y-1 list-disc list-inside">
                    <li>MySQL</li>
                    <li>MongoDB</li>
                </ul>
            </li>
            <li>
                Frameworks
                <ul class="ps-5 mt-2 space-y-1 list-disc list-inside">
                    <li>Laravel</li>
                    <li>Bootstrap</li>
                    <li>Tailwind CSS</li>
                    <li>Pure CSS</li>
                    <li>Materialize CSS</li>
                </ul>
            </li>
            <li>
                Outros conhecimentos
                <ul class="ps-5 mt-2 space-y-1 list-disc list-inside">
                    <li>HTML e CSS</li>
                    <li>WordPress</li>
                    <li>Node JS</li>
                    <li>Git</li>
                    <li>Composer</li>
                    <li>
                        <button data-tooltip-target="tooltip-default1" data-tooltip-style="light" type="button">Linux</button>
                        <div id="tooltip-default1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                          Use linux jovem!
                          <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</section>

@endsection


