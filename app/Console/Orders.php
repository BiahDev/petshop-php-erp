<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Purchases;
use App\Models\PurchasesProducts;
use App\Models\Colors;
use App\Models\Size;

class Orders extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data['purchases'] = Purchases::all();

      return view('orders/index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders/register');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data['purchases'] = Purchases::find($id);
      $data['colors'] = Colors::all();
      $data['sizes'] = Size::all();
      $purchasesProducts = new PurchasesProducts;
      $data['purchasesProducts'] = $purchasesProducts->fetchPurchasesProducts($id);

      return view('orders/detail')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      foreach ($request->id_purchase_product as $key => $value) {
        $purchasesProducts = PurchasesProducts::find($value);
        $data = [
          'id_color' => $request->color[$key],
          'id_size' => $request->size[$key],
          'price' => $request->price[$key],
          'quantity' => $request->quantity[$key],
        ];
        $purchasesProducts->update($data);
      }
      return redirect('pedidos/detalhe/'.$request->id_purchase);
    }

    /**
     * Update status purchase product the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function removePurchaseProduct(Request $request)
    {
      $purchasesProducts = PurchasesProducts::find($request->id_purchase_product_delete);
      $data = [
        'status' => '0',
      ];
      $purchasesProducts->update($data);

      return redirect('pedidos/detalhe/'.$request->id_purchase);
    }

    /**
     * Update status purchase the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changePurchase(Request $request)
    {
      $purchases = Purchases::find($request->id_purchase);
      $data = [
        'status' => $request->status,
      ];
      $purchases->update($data);

      return redirect('pedidos/detalhe/'.$request->id_purchase);
    }



}
