<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livros = Livro::all();
        return view('livros.index', ['livros' => $livros]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('livros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $regras = [
            'titulo'=>'required',
            'autor'=>'required',
            'descricao'=>'required',
            'ano_lancamento'=>'required',
            'capa'=>'required| image | mimes:jpeg,jpg,png',
        ];

        $feedback = [
            'required' => 'O campo :attribute precisa ser preenchido',
        ];
        $request->validate($regras, $feedback);

        $livro = new Livro();
        $livro->titulo = $request->input('titulo');
        $livro->autor = $request->input('autor');
        $livro->ano_lancamento = $request->input('ano_lancamento');
        $livro->descricao = $request->input('descricao');
        if ($request->hasFile('capa')) {
            $capa = $request->file('capa');

            // Salvando a imagem no diretório public/img
            $caminho = 'img';

            // Dando um nome para a imagem de acordo com seu timestamp tornando-a única
            $nomeImagem = time() . '.' . $capa->getClientOriginalExtension();

            // Movendo a imagem para o diretório public
            $capa->move(public_path($caminho), $nomeImagem);

            // Armazenar o nome da imagem no banco de dados, se necessário
            $livro->capa = $nomeImagem;
        }

        $livro->save();

        return redirect()->route('livros.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
