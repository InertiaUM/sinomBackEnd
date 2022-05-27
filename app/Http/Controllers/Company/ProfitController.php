<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\{Product, Profit};
use App\Http\Requests\{StoreProfitRequest, UpdateProfitRequest};
use Illuminate\Http\RedirectResponse;

class ProfitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        return view('profit.index', [
            'product' => $product->load('profits')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
        return view('profit.create', [
            'product' => $product
        ]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfitRequest $request, Product $product): RedirectResponse
    {
        $product->profits()->create($request->validated());

        return redirect()->route('product.profit.index', $product);
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
    public function edit(Product $product, Profit $profit)
    {
        return view('profit.edit', [
            'product' => $product,
            'profit' => $profit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfitRequest  $request
     * @param  \App\Models\Profit  $profit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfitRequest $request, Product $product, Profit $profit): RedirectResponse
    {
        $profit->update($request->validated());

        return redirect()->route('product.profit.index', $product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profit  $profit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, Profit $profit): RedirectResponse
    {
        $profit->delete();

        return redirect()->route('product.profit.index', $product);
    }
}
