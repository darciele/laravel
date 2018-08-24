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
    public function edit($id){
        $filme = Filme::find($id);
        dd($filme);
    }
    public function delete ($id){
       // Filme::findOrFail($id)->get();
       // dd(Filme::find($id));
    	Filme::findOrFail($id)->delete();

    	return redirect('/');
    }
}
