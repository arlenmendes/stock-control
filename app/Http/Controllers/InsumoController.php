<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsumoFormRequest;
use App\Insumo;
use Illuminate\Http\Request;

class InsumoController extends Controller
{

    private $insumo;

    public function __construct(Insumo $insumo) {
        $this->insumo = $insumo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insumos = $this->insumo->all();

        return view('insumos.index', compact('insumos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('insumos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(InsumoFormRequest $request)
    {
        $data = $request->all();
        $data['preco'] = str_replace(",", ".", $data['preco']);
        $this->insumo->create($data);

        return redirect()->route('insumo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $insumo = $this->insumo->find($id);

        return view('insumos.show', compact('insumo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $insumo = $this->insumo->find($id);

        return view('insumos.create', compact('insumo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InsumoFormRequest $request, $id)
    {
        $insumo = $this->insumo->find($id);

        $data = $request->all();
        $data['preco'] = str_replace(",", ".", $data['preco']);

        $insumo->update($data);

        return redirect()->route('insumo.index');
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

    /**
     * @return Insumo
     */
    public function getInsumo(): Insumo
    {
        return $this->insumo;
    }
}
