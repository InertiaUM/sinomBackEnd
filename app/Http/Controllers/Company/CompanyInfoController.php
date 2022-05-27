<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\CompanyInfo;
use App\Http\Requests\{StoreCompanyInfoRequest, UpdateCompanyInfoRequest};
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CompanyInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        return view('companyInfo.index', [
            'company' => Auth::user()->company->load('infos')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('companyInfo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompanyInfoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyInfoRequest $request): RedirectResponse
    {
        Auth::user()->company
        ->infos()
        ->create($request->validated());

        return redirect()->route('info.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyInfo  $info
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyInfo $companyInfo)
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
        return view('companyInfo.edit', [
            'companyInfo' => $info
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyInfoRequest  $request
     * @param  \App\Models\CompanyInfo  $info
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyInfoRequest $request, CompanyInfo $info): RedirectResponse
    {
        $info->update($request->validated());

        return redirect()->route('info.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyInfo  $info
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyInfo $info): RedirectResponse
    {
        $info->delete();

        return redirect()->route('info.index');
    }
}
