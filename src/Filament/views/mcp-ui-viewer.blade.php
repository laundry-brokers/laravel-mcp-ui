@php
    $resource = $getState()['resource'] ?? null;
    $sandboxAttrs = implode(' ', config('mcp-ui.sandbox_attributes', ['allow-scripts', 'allow-forms']));
@endphp

@if($resource)
    <div class="rounded-xl overflow-hidden border border-gray-200 dark:border-gray-700">
        @if($resource['kind'] === 'html')
            <iframe
                srcdoc="{{ $resource['html'] }}"
                sandbox="{{ $sandboxAttrs }}"
                class="w-full"
                style="height: {{ $resource['height'] ?? config('mcp-ui.default_height') }}px"
            ></iframe>
        @endif

        @if($resource['kind'] === 'url')
            <iframe
                src="{{ $resource['url'] }}"
                sandbox="{{ $sandboxAttrs }}"
                class="w-full"
                style="height: {{ $resource['height'] ?? config('mcp-ui.default_height') }}px"
            ></iframe>
        @endif

        @if(!in_array($resource['kind'], ['html', 'url']))
            <div class="p-4 text-sm text-gray-500">
                Tipo de recurso no soportado: {{ $resource['kind'] }}
            </div>
        @endif
    </div>
@else
    <div class="rounded-xl overflow-hidden border border-gray-200 dark:border-gray-700 p-4">
        <p class="text-sm text-gray-500">No hay contenido UI para mostrar</p>
    </div>
@endif