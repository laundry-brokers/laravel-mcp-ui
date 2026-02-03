<?php

namespace McpUi\Laravel\UI;

class UrlResource extends UIResource
{
    public function __construct(protected string $url)
    {
        
    }

    public static function make(string $url): static
    {
        return new static($url);
    }

    protected function generateUri(): string
    {
        return 'ui://' . config('app.name') . '/' . md5($this->url);
    }

    public function getContent(): string
    {
        return "<html><body><iframe src='{$this->url}' style='width:100%;height:{$this->height}px;border:none;'></iframe></body></html>";
    }

    public function toResourceContent(): array
    {
        return [
            'uri' => $this->getUri(),
            'name' => 'External UI',
            'mimeType' => 'text/html',
            'text' => $this->getContent(),
        ];
    }
}