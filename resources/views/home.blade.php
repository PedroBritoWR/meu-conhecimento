@extends('components.layout')
@section('title', 'Home')
@section('content')
    <div>
        <div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
            <div class="absolute inset-0 -z-10 overflow-hidden">
                <!-- Pode adicionar um fundo ou imagem de fundo se desejar -->
            </div>
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
                <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                    <div class="lg:pr-4">
                        <div class="lg:max-w-lg">
                            <h2 class="text-2xl font-bold">Veja os melhores livros clássicos da literatura Brasileira!</h2>
                            <p class="mt-4 text-base text-gray-700">Descubra uma seleção especial de livros clássicos e registre novos livros no nosso sistema. Adicione, visualize e gerencie os livros com facilidade.</p>
                            <div class="mt-8 flex gap-4">
                                <a href="{{ route('livros.create') }}" class="inline-block px-6 py-3 text-white bg-blue-600 rounded-lg shadow hover:bg-blue-700">Cadastrar Novo Livro</a>
                                <a href="{{ route('livros.index') }}" class="inline-block px-6 py-3 text-white bg-gray-600 rounded-lg shadow hover:bg-gray-700">Ver Livros Cadastrados</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="-ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
                    <img class="w-[48rem] max-w-none rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]" src="{{ asset('images/livros-classicos.jpg') }}" alt="Livros Clássicos">
                </div>
                <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                    <div class="lg:pr-4">
                        <div class="max-w-xl text-base leading-7 text-gray-700 lg:max-w-lg">
                            <p>O nosso sistema permite que você adicione e gerencie uma coleção de livros de forma prática e eficiente. Aproveite para registrar novos títulos e manter sua biblioteca atualizada com as obras mais importantes da literatura.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
