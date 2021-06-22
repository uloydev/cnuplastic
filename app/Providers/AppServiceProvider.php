<?php

namespace App\Providers;

use App\Models\Faq;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Promote;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        try {
            View::share('notification', Promote::with('user')->latest());
            View::share('pinnedFaq', Faq::where('is_pinned', true)->get());

            $contacts = [
                (object) [
                    'username' => '@jempol.upnvj',
                    'icon' => "bxl-instagram.svg"
                ],
                (object) [
                    'username' => '085817922089',
                    'icon' => "bxl-whatsapp.svg"
                ],
                (object) [
                    'username' => 'jempolupnvj@gmail.com',
                    'icon' => "bx-mail-send.svg"
                ],
            ];
            View::share('contacts', $contacts);

            $olshops = ['shopee', 'bukalapak', 'lazada', 'instagram'];
            View::share('olshops', $olshops);

        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
