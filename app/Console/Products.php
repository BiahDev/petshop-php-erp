<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

// Models
use App\Models\Product;
use App\Models\ProductBrand;
use App\Models\ProductCategory;
use App\Models\Colors;
use App\Models\Size;
use App\Models\ProductColors;
use App\Models\ProductSize;
use App\Models\ProductPricingPolicy;
use App\Models\ProductImages;
use Illuminate\Support\Facades\Session;

class Products extends BaseController {

  public function index() {
    $data['products'] = Product::leftJoin('product_brand as pb', 'products.brand', '=', 'pb.id')
    ->select('products.internal_reference', 'products.name', 'products.id' , 'pb.description as product_brand')
    ->get();

    return view('products/index')->with($data);
  }

  public function register() {
    $data['brand'] = ProductBrand::all();
    $data['category'] = ProductCategory::all();
    // $data['colors'] = Colors::all();
    // $data['size'] = Size::all();

    return view('products/register')->with($data);
  }

  /****************************************
  ********* Old way of image save *********
  *****************************************/
  protected function convertImg($path_new, $img)
  {
    $img->store($path_new, ['disk' => 'my_files']);

    $name = $img->hashName();

    return "{$path_new}/{$name}";
  }


  /*********************************
  ***** Convert Image to webp ******
  **********************************/
  // protected function convertImg($path_new, $img) {
    // Separa o nome do arquivo da sua extenção e transforma em um array
    // $file = explode('.', $img->getClientOriginalName());

    // Pega a extenção do arquivo e converte ela toda em minúsculas
    // $extension_image = strtolower($file[1]);

    // if ($extension_image == 'jpg' || $extension_image == 'jpeg') {
    //   $image =  imagecreatefromjpeg($img);
    // } else if($extension_image == 'png') {
    //   $image =  imagecreatefrompng($img);
    // }

    // imagepalettetotruecolor($image);
    // ob_start();
    // if ($extension_image == 'jpg' || $extension_image == 'jpeg') {
    //   imagejpeg($image, NULL, 9);
    // } else if($extension_image == 'png') {
    //   imagepng($image, NULL, 9);
    // }

    // $cont =  ob_get_contents();
    // ob_end_clean();
    // imagedestroy($image);
    // $content =  imagecreatefromstring($cont);
    // $new_filename = explode('.', $img->hashName());
    // imagewebp($content, "public/storage/{$path_new}/$new_filename[0].webp");
    // imagedestroy($content);

    // return "{$path_new}/{$new_filename[0]}.webp";
  // }

  /****************************************************
  ** Faz a validação de dados no cadastro de produto **
  ****************************************************/
  private function validateProductRegistration($request)
  {
    $validator = Validator::make($request->all(), [
      'product_name' => 'required|min:1',
      'start_quantity.*' => 'required|min:1',
      'end_quantity.*' => 'required|min:1',
      'price.*' => 'required',
    ],
    ['required' => 'O campo :attribute é obrigatório'],
    [
      'product_name' => 'Nome',
      'start_quantity.*' => 'Quantidade inicial',
      'end_quantity.*'  => 'Quantidade final',
      'price.*'  => 'Preço',
    ]);

    return $validator;
  }

  public function registerProduct(Request $request) {
    $startQuantityOne = $request->start_quantity[0];

    if ($startQuantityOne != 1) {
      Session::flash('errorType', 'alert-danger');
      return redirect()->back()->with('message', 'A quantidade inicial da primeira politica de preço não pode ser diferente de 1');
      exit;
    }

    foreach ($request->start_quantity as $key => $value) {
      if ($value > $request->end_quantity[$key]) {
        Session::flash('errorType', 'alert-danger');
        return redirect()->back()->with('message', 'A quantidade inicial deve ser maior do que a quantidade final');
        exit;
      }
    }

    if (!$request->hasFile('product_image_front_cover') || !$request->file('product_image_front_cover')->isValid()) {
      echo '<script>alert("É necessário adicionar a capa do produto!"); history.go(-1);</script>';
      exit;
    }

    $validator = $this->validateProductRegistration($request);
    if ($validator->fails()) {
      return redirect()->back()->withErrors($validator);
      exit;
    }

    $product = Product::create([
      'name' => $request->product_name,
      'code' => $request->product_code,
      'internal_reference' => $request->product_internal_reference,
      'category' => $request->product_internal_category,
      'brand' => $request->product_brand,
      'wholesale_price' => $request->product_minimum_price,
      'retail_price' => $request->product_sale_price,
      'description' => $request->product_description,
      // 'img' => 'products_images/'.$name,
    ]);

    // $name = 'products_images/noimage.jpeg';
    if ($request->hasFile('product_image_front_cover') && $request->file('product_image_front_cover')->isValid()) {
      $img = request()->file('product_image_front_cover');
      $imgPath = $this->convertImg('products_images', $img);
    }

    ProductImages::create([
      'id_product' => $product->id,
      'img' => $imgPath,
      'status' => '1'
    ]);

    if($request->hasFile('input_product_image')){
      $files = $request->file('input_product_image');
      foreach ($files as $file) {
        $imgPath = $this->convertImg('products_images', $file);

        ProductImages::create([
          'id_product' => $product->id,
          'img' => $imgPath,
          'status' => '0'
        ]);
      }
    }

    // foreach ($request->color as $row) {
    //   ProductColors::create([
    //     'id_product' => $product->id,
    //     'id_color' => $row,
    //   ]);
    // }
    //
    // foreach ($request->size as $row) {
    //   ProductSize::create([
    //     'id_product' => $product->id,
    //     'id_size' => $row,
    //   ]);
    // }

    foreach ($request->start_quantity as $key => $row) {
      ProductPricingPolicy::create([
        'id_product' => $product->id,
        'start_quantity' => $request->start_quantity[$key],
        'end_quantity' => $request->end_quantity[$key],
        'price' => str_replace(',', '.', $request->price[$key]),
      ]);
    }

    return redirect('produtos/detalhe/'.$product->id);
  }

  public function detail($id) {
    $data['product'] = Product::find($id);
    $data['brand'] = ProductBrand::all();
    $data['category'] = ProductCategory::all();
    $data['colors'] = Colors::all();
    $data['size'] = Size::all();

    $data['subproducts'] = ProductColors::join('colors as c', 'subproducts.id_color', '=', 'c.id')
    ->select('c.description', 'subproducts.id')
    ->where('subproducts.id_product',$id)
    ->get();
    // dd($data['subproducts']);
    $product_size = [];
    foreach ($data['subproducts'] as $value) {
      $sizes = ProductSize::join('size as s', 'product_size.id_size', '=', 's.id')
      ->select('s.description', 'product_size.id', 'product_size.id_size', 'product_size.quantity', 'product_size.subproduct')
      ->where('product_size.subproduct', $value->id)
      ->get();
      // dd($sizes);

      foreach ($sizes as $value) {
        $product_size[] =  [
          'id' => $value->id,
          'id_size' => $value->id_size,
          'description' => $value->description,
          'quantity' => $value->quantity,
          'subproduct' => $value->subproduct,
        ];
      }
    }

    // dd($product_size);

    $data['product_size'] = $product_size;
    $data['product_pricing_policy'] = ProductPricingPolicy::where('id_product', $id)->where('deleted_at', null)->get();
    $data['product_images'] = ProductImages::where('id_product', $id)->orderBy('status', 'ASC')->get();

    return view('products/detail')->with($data);
  }

  public function updateProduct(Request $request){
    $startQuantityOne = $request->start_quantity[0];

    if ($startQuantityOne != 1) {
      Session::flash('errorType', 'alert-danger');
      return redirect()->back()->with('message', 'A quantidade inicial da primeira politica de preço não pode ser diferente de 1');
      exit;
    }

    foreach ($request->start_quantity as $key => $value) {
      if ($value > $request->end_quantity[$key]) {
        Session::flash('errorType', 'alert-danger');
        return redirect()->back()->with('message', 'A quantidade inicial deve ser maior do que a quantidade final');
        exit;
      }
    }

    // dd($request);
    $validator = $this->validateProductRegistration($request);
    if ($validator->fails()) {
      return redirect()->back()->withErrors($validator);
      exit;
    }

    $data = [
      'name' => $request->product_name,
      'code' => $request->product_code,
      'internal_reference' => $request->product_internal_reference,
      'category' => $request->product_internal_category,
      'brand' => $request->product_brand,
      'wholesale_price' => $request->product_minimum_price,
      'retail_price' => $request->product_sale_price,
      'description' => $request->product_description,
    ];

    $product = Product::find($request->id);
    $product->update($data);

    if (isset($request->id_product_color)) {
      foreach ($request->id_product_color as $key => $row) {
        $color = ProductColors::find($row);
        $data = [
          'id_color' => $request->color[$key],
        ];
        $color->update($data);
      }
    }

    if (isset($request->id_product_size)) {
      foreach ($request->id_product_size as $key => $row) {
        $size = ProductSize::find($row);
        $data = [
          'id_size' => $request->size[$key],
        ];
        $size->update($data);
      }
    }

    if (isset($request->id_pricing_policy)) {
      foreach ($request->id_pricing_policy as $key => $row) {
        $policy = ProductPricingPolicy::find($row);
        $data = [
          'start_quantity' => $request->start_quantity[$key],
          'end_quantity' => $request->end_quantity[$key],
          'price' => $request->price[$key],
        ];
        $policy->update($data);
      }
    }

    return redirect('produtos/detalhe/'.$request->id);
  }



  public function updateImageProduct(Request $request)
  {
    if ($request->hasFile('input_product_image') && $request->file('input_product_image')->isValid()) {
      $img = request()->file('input_product_image');
      $imgPath = $this->convertImg('products_images', $img);

      ProductImages::find($request->id_image)->update([
        'img' => $imgPath,
      ]);
      $request->session()->flash("message", "Imagem Atualizada com sucesso");
    } else {
      $request->session()->flash("message", "Erro ao atualizar imagem!");
    }

    return redirect('produtos/detalhe/'.$request->id_product);
  }

  public function deleteImageProduct(Request $request)
  {
    ProductImages::find($request->id_image)->delete();

    return;
  }

  public function addImageProduct(Request $request)
  {
    if ($request->hasFile('product_image') && $request->file('product_image')->isValid()) {
      $productImages = ProductImages::where('id_product', $request->id_product)
      ->where('status', '1')
      ->first();
      $status = (empty($productImages)) ? '1' : '0';

      $img = request()->file('product_image');
      // $img->store('products_images', ['disk' => 'my_files']);
      $imgPath = $this->convertImg('products_images', $img);

      ProductImages::create([
        'id_product' => $request->id_product,
        'img' => $imgPath,
        'status' => $status,
      ]);
      $request->session()->flash("message", "Imagem cadastrada com sucesso");
    } else {
      $request->session()->flash("message", "Erro ao cadastrar imagem!");
    }
    return redirect('produtos/detalhe/'.$request->id_product);
  }

  public function addPricingPolicy(Request $request){
    ProductPricingPolicy::create([
      'id_product' => $request->id_product,
      'start_quantity' => $request->start_quantity,
      'end_quantity' => $request->end_quantity,
      'price' => $request->price
    ]);

    return redirect('produtos/detalhe/'.$request->id_product);
  }

  public function addProductColor(Request $request){
    ProductColors::create([
      'id_product' => $request->id_product,
      'id_color' => $request->color,
    ]);

    return redirect('produtos/detalhe/'.$request->id_product);
  }

  public function addProductSize(Request $request){
    ProductSize::create([
      'id_product' => $request->id_product,
      'id_size' => $request->size,
    ]);

    return redirect('produtos/detalhe/'.$request->id_product);
  }

  public function addSizeVariation(Request $request){
    $exists_size = ProductSize::where('id_size', $request->size)
                  ->where('subproduct', $request->subProduct)
                  ->first();
    if (empty($exists_size)) {
      ProductSize::create([
        'subproduct' => $request->subProduct,
        'id_size' => $request->size,
        'quantity' => $request->quantity
      ]);
    } else {
      $exists_size->update([
        'quantity' => ($exists_size->quantity + $request->quantity)
      ]);
    }

    return redirect('produtos/detalhe/'.$request->id_product);
  }

  public function updateSizeVariation(Request $request){
    $exists_size = ProductSize::where('id', $request->idVariation)->first();
    $exists_size->update([
      'id_size' => $request->size,
      'quantity' => $request->quantity,
    ]);

    return redirect('produtos/detalhe/'.$request->id_product);
  }

  public function addSubProduct(Request $request){
    if (!empty($request->new_color)) {
      $findColor = Colors::where('description', $request->new_color)->first();
      if (!empty($findColor)) {
        $id_color = $findColor->id;
      } else {
        if (!empty($request->new_color)) {
          $new_color = Colors::create([
            'description' => $request->new_color,
          ]);
          $id_color = $new_color->id;
        }
      }
    } else {
      $id_color = $request->color;
    }

    // if (!empty($findColor)) {
    //   return redirect()->back()->with("message", "Subproduto já existe!!")->with("errorType", "danger");
    //   exit;
    // }



    $imgPath = '';
    if ($request->hasFile('product_image') && $request->file('product_image')->isValid()) {
      $img = request()->file('product_image');
      $imgPath = $this->convertImg('products_images', $img);
    }

    $subProduct = ProductColors::create([
      'id_product' => $request->id_product,
      'id_color' => $id_color,
      'image' => $imgPath,
    ]);

    $size = $request->size;
    $quantity = $request->quantity;
    foreach ($size as $key => $value) {
      ProductSize::create([
        'subproduct' => $subProduct->id,
        'id_size' => $value,
        'quantity' => $quantity[$key],
      ]);
    }

    return redirect('produtos/detalhe/'.$request->id_product);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \Illuminate\Http\Request
   * @return \Illuminate\Http\Response $request
   *
 */
  public function removeProduct(Request $request)
  {
    Product::where('id', $request['id_product'])->delete();
    $request->session()->flash("message", "Removido com sucesso");
    return redirect('produtos/');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \Illuminate\Http\Request
   * @return \Illuminate\Http\Response $request
   *
 */
  public function removeSubProduct(Request $request)
  {
    ProductColors::where('id', $request['id_subproduct'])->delete();
    $request->session()->flash("message", "Removido com sucesso");
    return redirect('produtos/detalhe/'.$request->id_product);
  }

  /**
   * Remove the price of a product.
   *
   * @param  \Illuminate\Http\Request
   * @return \Illuminate\Http\Response $request
   *
 */
  public function removePolicy(Request $request)
  {
    ProductPricingPolicy::find($request->idPolicy)->delete();

    return request()->json("message", "Removido com sucesso");
  }

  public function fetchColors(){
    $return = Colors::all();

    echo json_encode($return);
  }

  public function fetchSize(){
    $return = Size::all();

    echo json_encode($return);
  }

}
