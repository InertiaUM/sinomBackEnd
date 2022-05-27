<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\CompanyInfo;
use App\Http\Requests\{StoreProfitRequest, UpdateProfitRequest};
use Illuminate\Http\RedirectResponse;

class CompanyInfoController extends Controller
{
    public function index(CompanyInfo $companyInfo)
    {
        return view('companyInfo.index', [
            'companyInfo' => $companyInfo
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CompanyInfo $companyInfo)
    {
        return view('companyInfo.create', [
            'companyInfo' => $companyInfo
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfitRequest $request, CompanyInfo $companyInfo): RedirectResponse
    {
        $companyInfo->company_infos()->create($request->validated());

        return redirect()->route('companyInfo.index', $companyInfo);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profit  $profit
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyInfo $companyInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profit  $profit
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyInfo $companyInfo)
    {
        return view('companyInfo.edit', [
            'companyInfo' => $companyInfo
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfitRequest  $request
     * @param  \App\Models\Profit  $profit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfitRequest $request, CompanyInfo $companyInfo): RedirectResponse
    {
        $companyInfo->update($request->validated());

        return redirect()->route('companyInfo.index', $companyInfo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profit  $profit
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyInfo $companyInfo): RedirectResponse
    {
        $companyInfo->delete();

        return redirect()->route('companyInfo.index', $companyInfo);
    }
}
