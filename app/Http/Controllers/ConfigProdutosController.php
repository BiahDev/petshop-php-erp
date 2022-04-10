<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Marca;
use App\Models\Categoria;
use App\Models\SubCategoria;

class ConfigProdutosController extends Controller
{

	public function index()
	{
		$data['marcas'] = Marca::All();
		$data['categorias'] = Categoria::All();
		$data['subcategorias'] = $this->fetchSubCategoria();

		return view('configProduto.configProduto')->with($data);
	}


	// * Categoria
	public function cadastrarCategoria(Request $request)
	{
		Categoria::create([
			'categoria' => $request->categoria
		]);
		return redirect('configproduto');
	}

	public function editarCategoria(Request $request)
	{


		Categoria::find($request->id)
			->update([
				'categoria' => $request->categoria
			]);


		return redirect('configproduto');
	}

	public function excluirCategoria(Request $request)
	{
		Categoria::find($request->id)
			->delete();
		return redirect('configproduto');
	}



	// * SubCategoria

	public function fetchSubCategoria()
	{

		$subCategoria =	SubCategoria::leftJoin(
			'categorias as c',
			'sub_categorias.id_categoria',
			'=',
			'c.id'
		)
			->select(
				'c.id as CID',
				'sub_categorias.id',
				'sub_categorias.id_categoria',
				'c.categoria',
				'sub_categorias.sub_categoria'
			)
			->get();
		return $subCategoria;
	}

	public function cadastrarSubCategoria(Request $request)
	{
		SubCategoria::create([
			'id_categoria' => $request->id_categoria,
			'sub_categoria' => $request->sub_categoria
		]);
		return redirect('configproduto');
	}

	public function editarSubCategoria(Request $request)
	{
		SubCategoria::find($request->id)
			->update([
				'sub_categoria' => $request->sub_categoria,
				'id_categoria' => $request->id_categoria
			]);

		return redirect('configproduto');
	}

	public function excluirSubCategoria(Request $request)
	{
		SubCategoria::find($request->id)
			->delete();
		return redirect('configproduto');
	}



	// * Marca
	public function cadastrarMarca(Request $request)
	{
		Marca::create([
			'marca' => $request->marca
		]);
		return redirect('configproduto');
	}

	public function editarMarca(Request $request)
	{

		Marca::find($request->id)
			->update([
				'marca' => $request->marca,
			]);

		return redirect('configproduto');
	}

	public function excluirMarca(Request $request)
	{

		Marca::find($request->id)
			->delete();
		return redirect('configproduto');
	}
}
