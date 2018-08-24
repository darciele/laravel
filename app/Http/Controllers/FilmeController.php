<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\Filme;


class FilmeController extends Controller
{
    //
    public function index (){
        $filmes = Filme::orderBy('created_at', 'asc')->get();

        return view('filmes', [
            'filmes' => $filmes
        ]);
    }
    public function create (Request $request){
    $validator = Validator::make($request->all(), [
        'titulo' => 'required|max:255',

    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $filme = new Filme;
    $filme->titulo = $request->titulo;
    $filme->genero = $request->genero;
    $filme->sinopse = $request->sinopse;
    $filme->duracao = $request->duracao;
    
    $filme->save();

    return redirect('/');

    }
    public function salvar(Request $request){
        dd($request);
        $filme->id = $request->id;
        $filme->titulo = $request->titulo;
        $filme->genero = $request->genero;
        $filme->sinopse = $request->sinopse;
        $filme->duracao = $request->duracao;
        $filme->save();
        return redirect('/');
    }
    public function edit($id){
        $filme = Filme::find($id);

  //      $filme->titulo = "Star trek";

        return view('editFilme', [
            'filme' => $filme
        ]);

        $filme->save();
    }
    public function delete ($id){
       // Filme::findOrFail($id)->get();
       // dd(Filme::find($id));
    	Filme::findOrFail($id)->delete();

    	return redirect('/');
    }
}
