@extends('components.layout')
@section('title', 'Cadastrar Novo Livro')
@section('content')
    <div class="mx-auto max-w-md px-4 py-8 bg-white rounded-lg shadow-md">
        <form enctype="multipart/form-data" action="{{route('livros.store')}}" class="space-y-6" method="POST">
            @csrf
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Dados do Livro</h2>

            <div>
                <label for="titulo" class="block mb-2 text-sm font-medium text-gray-700">Título</label>
                <input type="text" id="titulo" name="titulo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <span class="text-red-500">{{ $errors->has('titulo') ? $errors->first('titulo') : '' }}</span>
            </div>

            <div>
                <label for="autor" class="block mb-2 text-sm font-medium text-gray-700">Autor</label>
                <input type="text" id="autor" name="autor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
               <span class="text-red-500">{{ $errors->has('autor') ? $errors->first('autor') : '' }}</span>
            </div>


            <div>
                <label for="ano_publicacao" class="block mb-2 text-sm font-medium text-gray-700">Ano de Lançamento</label>
                <input type="text" id="ano_lancamento" name="ano_lancamento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <span class="text-red-500">{{ $errors->has('ano_lancamento') ? $errors->first('ano_lancamento') : '' }}</span>
            </div>

            <div class="flex flex-col gap-16">
                <div class="h-10">
                    <label for="descricao" class="block mb-2 text-sm font-medium text-gray-700">Descrição do Livro:</label>
                    <input type="text" id="descricao" name="descricao" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                 <span class="text-red-500">{{ $errors->has('descricao') ? $errors->first('descricao') : '' }}</span>
                </div>

                <div>
                    <input type="file" id="capa" name="capa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    <span class="text-red-500">{{ $errors->has('capa') ? $errors->first('capa') : '' }}</span>
                </div>

                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cadastrar Livro</button>
            </div>

        </form>
    </div>
@endsection
