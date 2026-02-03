<?php

namespace McpUi\Laravel\MCP;

use McpUi\Laravel\UI\UIResource;

class McpUiPayload
{
    public static function make(string $text, UIResource $ui): array
    {
        return [
            'content' => [
                [
                    'type' => 'text', 
                    'text' => $text
                ],
                [
                    'type' => 'resource',
                    'resource' => [
                        'uri' => $ui->getUri(),
                        'mimeType' => 'text/html',
                        'text' => $ui->getContent(),
                    ]
                ],
            ],
        ];
    }

    public static function toolMeta(UIResource $ui): array
    {
        return [
            '_meta' => [
                'ui' => [
                    'resourceUri' => $ui->getUri(),
                ],
            ],
        ];
    }
}