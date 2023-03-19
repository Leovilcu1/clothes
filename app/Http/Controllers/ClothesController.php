<?php

namespace App\Http\Controllers;

use App\Models\Adim\Cloth;
use Illuminate\Http\Request;

// MODEL
use \App\Models\Admin\Clothe;

class ClothesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $clothes = Clothe::all();

        return view("admin.clothes.index",compact("clothes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function create()
    {
        return view("admin.clothes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newClothe = new Clothe;
                $newClothe->marca = $data["marca"];
                $newClothe->img = $data["img"];
                $newClothe->prezzo = $data["prezzo"];
                $newClothe->genere = $data["genere"];
                $newClothe->descrizione = $data["descrizione"];
                $newClothe->consegna_rapida = $data["consegna_rapida"];
                $newClothe->colezzione_nuova = $data["colezzione_nuova"];
                $newClothe->tipo = $data["tipo"];
                $newClothe->taglia = $data["taglia"];
                $newClothe->save();
                return redirect()->route("clothe.show",$newClothe->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id 
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clothes= Clothe::findOrFail($id);

        return view("admin.clothes.show",compact("clothes"));

    }  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clothes= Clothe::findOrFail($id);
        return view("admin.clothes.edit",compact("clothes"));
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
        $data = $request->all();
        $clothes= Clothe::findOrFail($id);
        
                $clothes->marca = $data["marca"];
                $clothes->img = $data["img"];
                $clothes->prezzo = $data["prezzo"];
                $clothes->genere = $data["genere"];
                $clothes->descrizione = $data["descrizione"];
                $clothes->consegna_rapida = $data["consegna_rapida"];
                $clothes->colezzione_nuova = $data["colezzione_nuova"];
                $clothes->tipo = $data["tipo"];
                $clothes->taglia = $data["taglia"];
                $clothes->save();
                return redirect()->route("clothe.show",$clothes->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clothes= Clothe::findOrFail($id);
        $clothes->delete();
        return redirect()->route("clothe.index");

    }
}
