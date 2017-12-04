<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFormRequest;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;

    public function __construct(Product $product) {
        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->product->all();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFormRequest $request)
    {
        $data = $request->all();
        $data['preco_sugerido'] = str_replace("%", "", $data['preco_sugerido']);
        $data['preco_sugerido'] = str_replace(",", ".", $data['preco_sugerido']);
        $data['custo'] = str_replace(",", ".", $data['custo']);
        $this->product->create($data);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->product->find($id);
        $product['custo'] = str_replace(".", ",", $product['custo']);
        $product['preco_sugerido'] = str_replace(".", ",", $product['preco_sugerido']);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = $this->product->find($id);

        return view('products.create', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductFormRequest $request, $id)
    {
        $product = $this->product->find($id);
        $data = $request->all();
        $data['preco_sugerido'] = str_replace("%", "", $data['preco_sugerido']);
        $data['preco_sugerido'] = str_replace(",", ".", $data['preco_sugerido']);
        $data['custo'] = str_replace(",", ".", $data['custo']);

        $product->update($data);

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
