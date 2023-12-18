<?php

namespace App\Http\Controllers;

use App\Models\ModelPessoa;
use Illuminate\Http\Request;
use App\Http\Requests\PessoaRequest as RequestsPessoaRequest;

class PessoaController extends Controller
{
    protected $objPessoa;

    public function __construct(ModelPessoa $objPessoa){
        $this->objPessoa = $objPessoa;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesquisa = request()->query('pesquisa');

        if($pesquisa){
            $pessoa = ModelPessoa::where('id', 'LIKE', "%{$pesquisa}%")->orWhere('nome', 'LIKE', "%{$pesquisa}%")->orWhere('data_nasc', 'LIKE', "%{$pesquisa}%")->orWhere('cpf', 'LIKE', "%{$pesquisa}%")->orWhere('sexo', 'LIKE', "%{$pesquisa}%")->paginate(5);
        } else {
            $pessoa = $this->objPessoa->paginate(10);
        }

        return view('pessoa', compact('pessoa', 'pesquisa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createpessoa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestsPessoaRequest $request)
    {
        $cad=$this->objPessoa->create([
            'nome'=>$request->nome,
            'data_nasc'=>$request->data_nasc,
            'cpf'=>$request->cpf,
            'sexo'=>$request->sexo,
            'cidade'=>$request->cidade,
            'bairro'=>$request->bairro,
            'rua'=>$request->rua,
            'complemento'=>$request->complemento
        ]);
        if($cad){
            return redirect('/pessoa');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pessoa=$this->objPessoa->find($id);
        return view('showpessoa', compact('pessoa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pessoa=$this->objPessoa->find($id);
        return view('createpessoa', compact('pessoa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RequestsPessoaRequest $request, string $id)
    {
        $this->objPessoa->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'data_nasc'=>$request->data_nasc,
            'cpf'=>$request->cpf,
            'sexo'=>$request->sexo,
            'cidade'=>$request->cidade,
            'bairro'=>$request->bairro,
            'rua'=>$request->rua,
            'complemento'=>$request->complemento
        ]);
        return redirect('pessoa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $del=$this->objPessoa->destroy($id);
        return($del)? "sim" : "não";
    }
}
