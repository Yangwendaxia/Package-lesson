<?php

namespace Yangwendaxia\Hasher;

use Illuminate\Support\ServiceProvider;

class MyMD5HasherServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('md5hash',function(){
            return new MyMD5Hasher();
        });
    }
}