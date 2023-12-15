<?php

namespace App\Http\Controllers;

use App\Models\ModelPessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    private $objPessoa;

    public function __construct(){
        $this->objPessoa = new ModelPessoa();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pessoa = $this->objPessoa->paginate(10);
        return view('pessoa', compact('pessoa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
