# Laravel MCP UI

SDK para integrar MCP Apps/UI en Laravel y FilamentPHP.

## Instalación
```bash
composer require laundry-brokers/laravel-mcp-ui
```

## Configuración

Publica el archivo de configuración:
```bash
php artisan vendor:publish --tag=mcp-ui-config
```

## Uso básico

### En un MCP Tool
```php
use McpUi\Laravel\UI\HtmlResource;
use McpUi\Laravel\MCP\McpUiPayload;

$ui = HtmlResource::make('<h1>Hello World</h1>')
    ->uri('ui://my-app/greeting')
    ->height(400);

return new Response(
    McpUiPayload::make('Greeting message', $ui)
);
```

### En Filament
```php
use McpUi\Laravel\Filament\Components\McpUiViewer;

McpUiViewer::make('ui_component')
    ->label('UI Preview');
```

## Licencia

MIT
```

### 4. **LICENSE** (MIT sugerida)
```
MIT License

Copyright (c) 2025 Laundry Brokers

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.