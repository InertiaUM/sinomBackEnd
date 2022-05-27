<?php

namespace App\Http\Controllers;

use App\Models\CompanyInfo;
use App\Http\Requests\StoreCompanyInfoRequest;
use App\Http\Requests\UpdateCompanyInfoRequest;

class CompanyInfoController extends Controller
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
     * @param  \App\Http\Requests\StoreCompanyInfoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyInfoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyInfo  $companyInfo
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyInfo $companyInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyInfo  $companyInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyInfo $companyInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyInfoRequest  $request
     * @param  \App\Models\CompanyInfo  $companyInfo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyInfoRequest $request, CompanyInfo $companyInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyInfo  $companyInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyInfo $companyInfo)
    {
        //
    }
}
