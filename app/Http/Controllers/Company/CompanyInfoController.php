<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\CompanyInfo;
use App\Http\Requests\{
    StoreCompanyInfoRequest,
    UpdateCompanyInfoRequest
};

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
     * @param  \App\Models\CompanyInfo  $info
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyInfo $info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyInfo  $info
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyInfo $info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyInfoRequest  $request
     * @param  \App\Models\CompanyInfo  $info
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyInfoRequest $request, CompanyInfo $info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyInfo  $info
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyInfo $info)
    {
        //
    }
}
