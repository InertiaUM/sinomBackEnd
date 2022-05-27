<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\CompanyNews;
use App\Http\Requests\{StoreCompanyNewsRequest, UpdateCompanyNewsRequest};
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CompanyNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        return view('companyNews.index', [
            'company' => Auth::user()->company->load('news')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('companyNews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompanyNewsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyNewsRequest $request): RedirectResponse
    {
        Auth::user()->company
        ->news()
        ->create($request->validated());

        return redirect()->route('new.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyNews  $news
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyNews $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyNews  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyNews $news)
    {
        return view('companyNews.edit', [
            'companyNews' => $news
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyNewsRequest  $request
     * @param  \App\Models\CompanyNews  $news
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyNewsRequest $request, CompanyNews $news): RedirectResponse
    {
        $news->update($request->validated());

        return redirect()->route('new.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyNews  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyNews $news): RedirectResponse
    {
        $news->delete();
        return redirect()->route('new.index');
    }
}
