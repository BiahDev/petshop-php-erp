<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcasController extends Controller
{

    public function index()
    {
        $data['marcas'] = Marca::All();
        return view('configProduto.configProduto')->with($data);
    }

    public function cadastrarMarca(Request $request)
    {
        Marca::create([
            'marca' => $request->marca,
        ]);
        return redirect('configproduto');
    }

    public function editarMarca(Request $request)
    {

        $marca = Marca::find($request->id);
        $novoNomeMarca = $request->marca;
        $marca->marca = $novoNomeMarca;
        $marca->save();

        return redirect('configproduto');
    }

    public function excluirMarca(Request $request){
        
        $marca = Marca::find($request->id);
        $marca->delete();
        return redirect('configproduto');
    }
}
