<?php

namespace App\Providers;

use App\Models\Faq;
use App\Models\ProductRating;
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

        $olshops = ['shopee', 'bukalapak', 'lazada', 'instagram'];
        $contacts = [
            (object) [
                'username' => '@cnu.plastic',
                'icon' => "bxl-instagram.svg"
            ],
            (object) [
                'username' => '6285608489389',
                'icon' => "bxl-whatsapp.svg"
            ],
            (object) [
                'username' => 'cvcaturnagautama@gmail.com',
                'icon' => "bx-mail-send.svg"
            ],
        ];

        View::share('contacts', $contacts);
        View::share('olshops', $olshops);

        try {
            View::share('pinnedFaq', Faq::where('is_pinned', true)->get());
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
