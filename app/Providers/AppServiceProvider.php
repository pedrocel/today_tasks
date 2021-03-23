<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

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
//        if(env('APP_ENV') !== 'local')
//         {
//             URL::forceScheme('https');
//         }
        date_default_timezone_set('America/Sao_Paulo');
        setlocale(LC_TIME, 'pt_br.utf8');
        \Carbon\Carbon::setLocale('pt_br');
        DB::statement("SET lc_time_names = 'pt_br'");
    }
}
