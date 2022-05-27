<?php

namespace App\Observers;

use App\Models\Profit;

class ProfitObserver
{
    /**
     * Handle the Profit "created" event.
     *
     * @param  \App\Models\Profit  $profit
     * @return void
     */
    public function creating(Profit $profit)
    {
        $profit->profit = $profit->qty * $profit->product->price;
    }

    /**
     * Handle the Profit "updated" event.
     *
     * @param  \App\Models\Profit  $profit
     * @return void
     */
    public function updating(Profit $profit)
    {
        $price = $profit->getOriginal('profit') / $profit->getOriginal('qty');

        $profit->profit = $profit->qty * $price;
    }

    /**
     * Handle the Profit "deleted" event.
     *
     * @param  \App\Models\Profit  $profit
     * @return void
     */
    public function deleted(Profit $profit)
    {
        //
    }

    /**
     * Handle the Profit "restored" event.
     *
     * @param  \App\Models\Profit  $profit
     * @return void
     */
    public function restored(Profit $profit)
    {
        //
    }

    /**
     * Handle the Profit "force deleted" event.
     *
     * @param  \App\Models\Profit  $profit
     * @return void
     */
    public function forceDeleted(Profit $profit)
    {
        //
    }
}
