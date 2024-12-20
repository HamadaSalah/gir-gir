<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\WebsiteInfo;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        $website_info = WebsiteInfo::first();

        $global_categories = Category::take(5)->get();

        View::share('website_info', $website_info);
        View::share('global_categories', $global_categories);


        View::composer('*', function ($view) {
            $globalCssAndFonts = <<<HTML
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <link rel="stylesheet" href="{$this->assetPath('css/global.css')}">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
            HTML;
    
            $view->with('globalCssAndFonts', $globalCssAndFonts);
        });
        
    }
    private function assetPath($path)
    {
        return asset($path);
    }

}
