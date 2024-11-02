<?php

namespace App\Observers;

use App\Models\Provider;

class ProviderObserver
{
    /**
     * Handle the Provider "created" event.
     */
    public function created(Provider $provider): void
    {
        if($provider->type == 'company') {
            // $provider->unique_code = $this->generateUniqueCode();
        }
    }

    /**
     * Handle the Provider "updated" event.
     */
    public function updated(Provider $provider): void
    {
        //
    }

    /**
     * Handle the Provider "deleted" event.
     */
    public function deleted(Provider $provider): void
    {
        //
    }

    /**
     * Handle the Provider "restored" event.
     */
    public function restored(Provider $provider): void
    {
        //
    }

    /**
     * Handle the Provider "force deleted" event.
     */
    public function forceDeleted(Provider $provider): void
    {
        //
    }

    private function generateUniqueCode()
    {
        do {
            $code = strtoupper(str_random(2)) . str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
        } while (Provider::where('unique_code', $code)->exists());

        return $code;
    }

}
