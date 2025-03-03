<?php

namespace Swarde\BladeContext;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BladeDirectiveServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::directive('controller', function ($controller) {
            return "<?php /* Controller: {$controller} */ ?>";
        });
    }

    public function register()
    {
        //
    }
}
