<?php

namespace App\Http\Controllers;

use App\Http\Requests\produtRequest;
use App\Models\produt;
use Illuminate\Http\Request;

class ProdutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produt = produt::paginate(4);
        return view('produt.index', compact('produt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(produtRequest $request)
    {

        $formfield = $request->validated();

        if ($request->hasFile('image')) {
            $formfield['image'] = $request->file('image')->store('products', 'public');
        } else {
            $formfield['image'] = 'products/product.png';
        }

        $produt = produt::create($formfield);

        return redirect()->route('index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produt  $produt
     * @return \Illuminate\Http\Response
     */
    public function show(produt $produt) {
        return view('procut.show',compact('produt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produt  $produt
     * @return \Illuminate\Http\Response
     */
    public function edit(produt $produt)
    {
        return view('produt.edit', compact('produt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produt  $produt
     * @return \Illuminate\Http\Response
     */
    public function update(produtRequest $request, produt $produt)
    {
        $formfield = $request->validated();
        if ($request->hasFile('image')) {
            
            if ($produt->image && $produt->image !== 'products/product.png') {
                $oldImagePath = public_path('storage/' . $produt->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); 
                }
            }

           
            $formfield['image'] = $request->file('image')->store('products', 'public');
        } else {
         
            unset($formfield['image']);
        }

        $produt->fill($formfield)->save();
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produt  $produt
     * @return \Illuminate\Http\Response
     */
    public function destroy(produt $produt)
    {

        $produt->delete();
        return redirect()->route('index');
    }
}
