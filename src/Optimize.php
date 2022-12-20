<?php

namespace Laravel\Optimize;

use Illuminate\Support\Facades\Artisan;

class Optimize
{
    public function optimize()
    {
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('optimize');
        return "Cache is cleared";
    }
}