<?php

namespace Goms\Settings;

use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/settings_fields.php' => config_path('settings.php'),
            __DIR__.'/controllers/SettingsController.php' => app_path('/Http/Controllers/SettingsController.php'),
            __DIR__.'/migrations/2018_06_24_113800_create_settings_table.php' => database_path('migrations/2018_06_24_113800_create_settings_table.php'),
            __DIR__.'/models/Setting.php' => app_path('Setting.php'),
            __DIR__.'/views/settings' => resource_path('views/settings')
        ], 'settings');
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
