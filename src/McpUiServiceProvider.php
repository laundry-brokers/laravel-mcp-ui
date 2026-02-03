<?php

namespace McpUi\Laravel;

use Illuminate\Support\ServiceProvider;

class McpUiServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/mcp-ui.php', 'mcp-ui'
        );
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/Filament/Views', 'mcp-ui');

        $this->publishes([
            __DIR__.'/../config/mcp-ui.php' => config_path('mcp-ui.php'),
        ], 'mcp-ui-config');

        $this->publishes([
            __DIR__.'/Filament/Views' => resource_path('views/vendor/mcp-ui'),
        ], 'mcp-ui-views');
    }
}