<?php

namespace App\Http\Controllers;

use App\Http\Requests\VendaFormRequest;
use App\Product;
use App\VendaItem;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use App\Venda as VendaModel;
use Illuminate\Support\Facades\DB;

class VendaController extends Controller
{

    private $vendaModel;

    public function __construct(VendaModel $vendaModel) {
        $this->vendaModel = $vendaModel;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendas = $this->vendaModel->all();


        foreach ($vendas as $venda) {
//            $venda->data_entrega = date('d/m/Y', strtotime($venda->data_entrega));
//            $venda->created_at = date('d/m/Y', $venda->created_at);
///
            $venda->data_venda = date('d/m/Y', strtotime($venda->created_at));
        }

        return view('vendas.index', compact('vendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = ['Ponta Entrega', 'Por Demanda'];
        $dataAtual = date('d/m/Y');

        return view('vendas.create', compact('status', 'dataAtual'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     */
    public function store(VendaFormRequest $request)
    {
        $data = $request->all();

        $data['preco_total'] = 0;

        $venda = $this->vendaModel->create($data);

        return redirect()->route('selecao-item', $venda->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $venda = $this->vendaModel->find($id);
//        $venda->data_entrega = date('d/m/Y', strtotime($venda->data_entrega));
        $venda->data_venda = date('d/m/Y', strtotime($venda->created_at));

        return view('vendas.show', compact('venda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function selecaoItem($vendaId) {

        $produtos = Product::all();

        $venda = $this->vendaModel->find($vendaId);

        return view('vendas.selecao-item', compact( 'produtos', 'venda'));
    }

    public function selecionarItem($itemId, $vendaId) {

        $produto = Product::find($itemId);

        return view('vendas.selecionar-item', compact('produto', 'vendaId'));
    }

    public function gravarItem(Request $request) {
        $item = $request->all();

        $vendaItem = new VendaItem($item);

        $vendaItem->save();
//        echo "<pre>";
//        print_r($vendaItem);
//        exit();
//        VendaItem::create($item);

        return redirect()->route('selecao-item', $vendaItem->venda_id);
    }

    public function destruirItem($itemId, $vendaId) {



        VendaItem::destroy($itemId);

        return redirect()->route('selecao-item', $vendaId);
    }

    public function finalizar($vendaId) {
        $venda = $this->vendaModel->find($vendaId);

        foreach ($venda->getItens as $item) {
            $venda->preco_total += $item->preco * $item->quantidade;
        }

        $venda->update;

        return redirect()->route('vendas.show', $venda->id);
    }
}
