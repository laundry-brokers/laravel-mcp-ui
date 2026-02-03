<?php

return [
    // Prefijo para URIs de recursos UI
    'uri_prefix' => env('MCP_UI_URI_PREFIX', 'ui://' . env('APP_NAME', 'laravel-app')),

    // Altura por defecto de los componentes UI (en pixels)
    'default_height' => env('MCP_UI_DEFAULT_HEIGHT', 400),

    // Sandbox attributes para iframes
    'sandbox_attributes' => [
        'allow-scripts',
        'allow-forms',
        'allow-same-origin', // Cuidado con esto, evalúa según seguridad
    ],

    // Cache de recursos UI
    'cache' => [
        'enabled' => env('MCP_UI_CACHE_ENABLED', true),
        'ttl' => env('MCP_UI_CACHE_TTL', 3600), // 1 hora
    ],
];