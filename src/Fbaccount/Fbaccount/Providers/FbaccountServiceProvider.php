<?php

namespace Fbaccount\Fbaccount\Providers;

use Fbaccount\Fbaccount\Interfaces\FacebookAccountRepositoryInterface;
use Fbaccount\Fbaccount\Repositories\Eloquent\FacebookAccountRepository;
use Illuminate\Support\ServiceProvider;

class FbaccountServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Load view
        $this->loadViewsFrom(__DIR__.'/../../../../resources/views', 'fbaccount');

        // Load translation
        $this->loadTranslationsFrom(__DIR__.'/../../../../resources/lang', 'fbaccount');

        // Call pblish redources function
        $this->publishResources();

        include __DIR__.'/../Http/routes.php';
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Bind facade
        $this->app->bind('fbaccount', function ($app) {
            return $this->app->make('Fbaccount\Fbaccount\Fbaccount');
        });

        // Repository binds
                // Bind FacebookAccount to repository
        $this->app->bind(
            FacebookAccountRepositoryInterface::class,
            FacebookAccountRepository::class
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['fbaccount'];
    }

    /**
     * Publish resources.
     *
     * @return void
     */
    private function publishResources()
    {
        // Publish configuration file
        $this->publishes([__DIR__.'/../../../../config/config.php' => config_path('package/fbaccount.php')], 'config');

        // Publish public view
        $this->publishes([__DIR__.'/../../../../resources/views/public'  => base_path('resources/views/vendor/fbaccount/public')], 'view-public');

        // Publish admin view
        $this->publishes([__DIR__.'/../../../../resources/views/admin' => base_path('resources/views/vendor/fbaccount/admin')], 'view-admin');

        // Publish language files
        $this->publishes([__DIR__.'/../../../../resources/lang' => base_path('resources/lang/vendor/courier')], 'lang');

        // Publish migrations
        $this->publishes([__DIR__.'/../../../../database/migrations/' => base_path('database/migrations')], 'migrations');

        // Publish seeds
        $this->publishes([__DIR__.'/../../../../database/seeds/' => base_path('database/seeds')], 'seeds');
    }
}
