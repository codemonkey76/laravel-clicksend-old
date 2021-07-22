<?php

namespace Codemonkey76\ClickSend;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class ClickSendServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([__DIR__ . '/../config/config.php' => config_path('clicksend.php'),], 'clicksend');
        $this->app->make(Router::class)->aliasMiddleware('clicksend', ClickSendRequestValidator::class);
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'clicksend');

        $this->app->bind(ClickSend::class, ClickSend::class);
    }
}
