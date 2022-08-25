<?php

namespace App\Http\Controllers;

use App\Models\produit;
use App\Http\Requests\StoreproduitRequest;
use App\Http\Requests\UpdateproduitRequest;
use App\Models\admin;
use App\Models\category;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = admin::all();
        $produits = produit::with('category')->get();
        $categories = category::all();
        return view('acceuil', compact('produits', 'categories', 'admins'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::all();
        return view('produit.create',  compact('categories') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreproduitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproduitRequest $request)
    {
        $produit = produit::create([
            'name'=> $request->name,
            'description'=>$request->description,
            'prix'=>$request->prix,
            'quantite'=>$request->quantite,
        ]);
        return redirect()->route('produit.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = produit::find($id);
        $categories = category::all();
        return view('produit.edit', compact('produit', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproduitRequest  $request
     * @param  \App\Models\produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProduitRequest $request, $id)
    {
        $produit= Produit::find($id);
        $arrayUpdate = [
            'name' => $request->name,
            'description' => $request->description,
            'prix' => $request->prix,
        ];
       
        $produit->update($arrayUpdate);

        return redirect()->route('register')->with('success', 'votre produit a ete modifiee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(produit $produit)
    {
        //
    }
}
