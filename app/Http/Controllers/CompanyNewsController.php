<?php

namespace App\Http\Controllers;

use App\Models\CompanyNews;
use App\Http\Requests\StoreCompanyNewsRequest;
use App\Http\Requests\UpdateCompanyNewsRequest;

class CompanyNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreCompanyNewsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyNewsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyNews  $companyNews
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyNews $companyNews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyNews  $companyNews
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyNews $companyNews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyNewsRequest  $request
     * @param  \App\Models\CompanyNews  $companyNews
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyNewsRequest $request, CompanyNews $companyNews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyNews  $companyNews
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyNews $companyNews)
    {
        //
    }
}
