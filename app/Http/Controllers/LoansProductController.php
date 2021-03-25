<?php

namespace App\Http\Controllers;

use App\Models\LoansProduct;
use Illuminate\Http\Request;

class LoansProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = LoansProduct::active()->get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Loans_product  $loans_product
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = LoansProduct::active()->where('slug', $slug)->first();

        return view('products.show', compact('product'));
        dd($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Loans_product  $loans_product
     * @return \Illuminate\Http\Response
     */
    public function edit(Loans_product $loans_product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Loans_product  $loans_product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loans_product $loans_product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Loans_product  $loans_product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loans_product $loans_product)
    {
        //
    }
}
