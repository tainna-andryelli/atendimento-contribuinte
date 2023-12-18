<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProtocoloRequest;
use App\Models\ModelPessoa;
use App\Models\ModelProtocolo;

class ProtocoloController extends Controller
{
    protected $objProtocolo;
    protected $objPessoa;

    public function __construct(ModelPessoa $objPessoa)
    {
        $this->objProtocolo = new ModelProtocolo();
        $this->objPessoa = $objPessoa;
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesquisa = request()->query('pesquisa');
        
        $protocolo = ModelProtocolo::with('relPessoa');

        if($pesquisa){
            $protocolo->where('numero', 'LIKE', "%{$pesquisa}%")->orWhere('data', 'LIKE', "%{$pesquisa}%")->orWhereHas('relPessoa', function ($query) use ($pesquisa){
                $query->where('nome', 'LIKE', "%{$pesquisa}%");
            });
        }

        $protocolo = $protocolo->paginate(5);
        return view('protocolo', compact('protocolo', 'pesquisa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pessoas=$this->objPessoa->all();
        return view('createprotocolo', compact('pessoas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProtocoloRequest $request)
    {
        $cad=$this->objProtocolo->create([
            'descricao'=>$request->descricao,
            'data'=>$request->data,
            'prazo'=>$request->prazo,
            'contribuinte'=>$request->contribuinte
        ]);
        if($cad){
            return redirect('/protocolo');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $protocolo=$this->objProtocolo->where('numero', $id)->first();
        return view('showprotocolo', compact('protocolo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $protocolo=$this->objProtocolo->where('numero', $id)->first();
        $pessoas=$this->objPessoa->all();
        return view('createprotocolo', compact('protocolo', 'pessoas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProtocoloRequest $request, string $id)
    {
        $this->objProtocolo->where(['numero'=>$id])->update([
            'descricao'=>$request->descricao,
            'data'=>$request->data,
            'prazo'=>$request->prazo,
            'contribuinte'=>$request->contribuinte
        ]);
        return redirect('protocolo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $numero)
    {
        $del = $this->objProtocolo->where('numero', $numero)->delete();
        return ($del) ? "sim" : "não";
    }
}
