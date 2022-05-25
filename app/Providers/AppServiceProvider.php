<?php

namespace App\Providers;

use App\Models\Library;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        if ( Schema::hasTable('libraries') ) {
            $data = Library::join('codex_authors', 'libraries.codex_authors', '=', 'codex_authors.id')
            ->join('codexes', 'codex_authors.codexes_id', '=', 'codexes.id')
            ->select('codexes.title')
            ->get();
    
            View::share('searchdata', $data);
        }
    }
}
