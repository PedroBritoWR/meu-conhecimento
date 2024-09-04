<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'Gerenciamento de Livro')</title>
</head>
<body class="flex flex-col min-h-screen">
<header class="bg-gray-800 text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl">Gerenciamento de Livros</h1>
        <div class="mr-[580px] flex justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
            </svg>
        </div>

        <nav>
            <ul class="flex space-x-4">
                @auth
                    <li><a href="{{ url('/') }}" class="hover:underline">Home</a></li>
                    <li><a href="{{ route('livros.index') }}" class="hover:underline">Livros Cadastrados</a></li>
                    <li><a href="{{ route('livros.create') }}" class="hover:underline">Cadastrar Novo Livro</a></li>
                @endauth
                @guest
                    <li><a href={{route('login')}}>Login</a></li>
                    <li><a href={{route('register')}}>Registrar</a></li>
                @endguest
            </ul>

        </nav>
    </div>
</header>
<main class="flex-grow container mx-auto py-8">
    @yield('content')
</main>
<footer class="p-4 bg-gray-200 text-center">
    <div>PWR - Todos os direitos reservados.</div>
</footer>
</body>
</html>


{{--Para exibir os links de navegação apenas quando o usuário estiver logado, você pode usar a lógica de autenticação no seu layout. Em Laravel, isso geralmente é feito verificando se o usuário está autenticado usando o helper auth()->check() ou o @auth blade directive.

Aqui está um exemplo de como você pode fazer isso:

php

<header>
    <h1>Seu Projeto</h1>

    @auth
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/available-books">Available Books</a></li>
                <li><a href="/registered-books">Registered Books</a></li>
                <li><a href="/register-book">Register a New Book</a></li>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
    @endauth

    @guest
        <nav>
            <ul>
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
            </ul>
        </nav>
    @endguest
</header>

Explicação:

    @auth: O bloco de código dentro de @auth será exibido apenas se o usuário estiver autenticado.
    @guest: O bloco de código dentro de @guest será exibido apenas se o usuário não estiver autenticado.

Essa lógica garante que os links de navegação só aparecem quando o usuário está logado, e quando ele não está, são exibidos os links de login e registro.--}}
