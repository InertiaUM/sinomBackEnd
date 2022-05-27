<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\{Product, Profit};
use App\Http\Requests\{StoreProfitRequest, UpdateProfitRequest};

class ProfitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfitRequest $request, Product $product)
    {
        // $product->create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profit  $profit
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, Profit $profit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profit  $profit
     * @return \Illuminate\Http\Response
     */
    public function edit(Profit $profit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfitRequest  $request
     * @param  \App\Models\Profit  $profit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfitRequest $request, Product $product, Profit $profit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profit  $profit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, Profit $profit)
    {
        //
    }
}
