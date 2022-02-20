<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBusca;
use App\Models\Cep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BuscaController extends Controller
{

    public function __construct(Cep $cep)
    {
        $this->middleware('auth', ['except' => [
            'login',
            'loginAction',
            'registerAction',
            'register'
        ]]);
        $this->repository = $cep;
    }

    public function busca()
    {

        return view('home.busca');
    }

    public function BuscaCepAction(StoreBusca $request)
    {

        $ceps = $request->input('cep');
        $url = Http::get('https://viacep.com.br/ws/' . $ceps . '/json/')->json();
        //validando se deu erro na consulta no viaCEP
        if (array_key_exists("erro", $url)) {
            return view('home.erro')->with('errors', 'Cep inválido!');
        } else {
            //não retornou erro então irá buscar o objeto no banco

            $ceps = Cep::where('cep', $url['cep'])->get();
            //transforma o objeto da consulta SQL em array
            $array = get_object_vars($ceps);
            if (empty($array)) {
                $resultado = $this->repository->create($url);
                $ceps = Cep::all();
                return view('home.resultado', [
                    'ceps' => $ceps
                ]);
            }
        }
    }

    public function resultado()
    {
        $ceps = Cep::all();
        return view('home.resultado', [
            'ceps' => $ceps
        ]);
    }
}
