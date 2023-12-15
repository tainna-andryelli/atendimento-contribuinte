<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelProtocolo;

class ProtocoloController extends Controller
{
    private $objProtocolo;

    public function __construct()
    {
        $this->objProtocolo = new ModelProtocolo();
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $protocolo = $this->objProtocolo->all();
        return view('protocolo', compact('protocolo'));
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
        $protocolo=$this->objProtocolo->where('numero', $id)->first();
        return view('showprotocolo', compact('protocolo'));
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
