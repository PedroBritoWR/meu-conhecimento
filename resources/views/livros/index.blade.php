@extends('components.layout')
@section('title', 'livros')
@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($livros as $livro)
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><span class="text-red-500">Titulo</span> - {{ $livro->titulo }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><span class="text-yellow-500">Descrição</span> - {{ $livro->descricao }}</p>

                        <div>
                            <img src="{{asset('img/' . $livro->capa )}}" class="object-cover h-48 w-full" />
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
