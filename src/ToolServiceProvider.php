<?php

namespace Kristories\Novassport;

use Gate;
use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Kristories\Novassport\Models\OauthClient;
use Kristories\Novassport\Policies\MyAppsPolicy;
use Kristories\Novassport\Http\Middleware\Authorize;
use Kristories\Novassport\Observers\OauthClientObserver;

class ToolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'novassport');
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'novassport');

        $this->publishes([
            __DIR__ . '/../resources/lang' => resource_path('lang/vendor/novassport'),
        ], 'novassport');

        $this->app->booted(function () {
            $this->routes();

            Gate::policy(OauthClient::class, MyAppsPolicy::class);

            OauthClient::observe(OauthClientObserver::class);
        });

        Nova::serving(function (ServingNova $event) {
            //
        });
    }

    /**
     * Register the tool's routes.
     *
     * @return void
     */
    protected function routes()
    {
        if ($this->app->routesAreCached()) {
            return;
        }

        Route::middleware(['nova', Authorize::class])
            ->prefix('nova-vendor/novassport')
            ->group(__DIR__ . '/../routes/api.php');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
