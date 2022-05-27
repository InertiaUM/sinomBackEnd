<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Superadmin\VerifyCompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VerifyCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        return view('verification.index', [
            'companies' => Company::query()->unverified()->get()
        ]);
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
     * @param  \App\Models\Company  $verification
     * @return \Illuminate\Http\Response
     */
    public function show(Company $verification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $verification
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $verification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $verification
     * @return \Illuminate\Http\Response
     */
    public function update(VerifyCompanyRequest $request, Company $verification)
    {
        $request->validated();

        $verification->setCompanyAsVerified();

        return redirect()->route('verification.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $verification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $verification)
    {
        //
    }

    /**
     * Open the file for verification
     *
     * @param Company $verification
     * @return void
     */
    public function file(Company $verification)
    {
        return $verification->openFile;
    }
}
