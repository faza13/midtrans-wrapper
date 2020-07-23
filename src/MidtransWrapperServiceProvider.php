<?php

namespace fazaa13\MidtransWrapper;


use Illuminate\Support\ServiceProvider;

class MidtransWrapperServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                $this->getConfigPath() => config_path('midtrans_wrapper.php')
            ]);
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(
            $this->getConfigPath(), 'midtrans_wrapper'
        );

        App::bind('midtrans.wrapper',function() {
            return new MidtransWrapper;
        });
    }

    public function getConfigPath()
    {
        return __DIR__ . '/../config/midtrans_wrapper.php';
    }
}