<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Carbon::setLocale('fr');
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();

        // Ajouter la fonction de surlignage
        if (!function_exists('highlightSearchTerm')) {
            function highlightSearchTerm($text, $search)
            {
                if ($search) {
                    return preg_replace('/(' . preg_quote($search, '/') . ')/i', '<mark>$1</mark>', $text);
                }
                return $text;
            }
        }
    }
}
