@extends('components.layout')
@section('title', 'Autenticação')
@section('content')
    <div class="mt-16">
        <form class="max-w-sm mx-auto">
            <h1 class="text-xl">Digite seu e-mail para recuperação da senha</h1>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
            <input type="email" id="email" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="xdxddasilva@gmail.com">
            <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">Nós nunca vamos compartilhar suas informações. Leia as nossas <a href="#" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Politicas de privacidade</a>.</p>
            <div class="flex justify-between">
                <button type="submit" class="text-white bg-green-700 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-700 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-700 dark:hover:bg-green-700 dark:focus:ring-green-700">Enviar</button>
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <a href="{{route('auth')}}">
                        Voltar
                    </a>
                </button>
            </div>
        </form>
    </div>
@endsection
