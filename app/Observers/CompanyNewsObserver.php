<?php

namespace App\Observers;

use App\Models\CompanyNews;
use Illuminate\Support\Str;

class CompanyNewsObserver
{
    /**
     * Handle the CompanyNews "created" event.
     *
     * @param  \App\Models\CompanyNews  $companyNews
     * @return void
     */
    public function creating(CompanyNews $companyNews)
    {
        $companyNews->slug = Str::slug($companyNews->title);
    }

    /**
     * Handle the CompanyNews "updated" event.
     *
     * @param  \App\Models\CompanyNews  $companyNews
     * @return void
     */
    public function updated(CompanyNews $companyNews)
    {
        $companyNews->slug = Str::slug($companyNews->title);
    }

    /**
     * Handle the CompanyNews "deleted" event.
     *
     * @param  \App\Models\CompanyNews  $companyNews
     * @return void
     */
    public function deleted(CompanyNews $companyNews)
    {
        //
    }

    /**
     * Handle the CompanyNews "restored" event.
     *
     * @param  \App\Models\CompanyNews  $companyNews
     * @return void
     */
    public function restored(CompanyNews $companyNews)
    {
        //
    }

    /**
     * Handle the CompanyNews "force deleted" event.
     *
     * @param  \App\Models\CompanyNews  $companyNews
     * @return void
     */
    public function forceDeleted(CompanyNews $companyNews)
    {
        //
    }
}
