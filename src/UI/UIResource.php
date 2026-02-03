<?php
    
namespace McpUi\Laravel\UI;

abstract class UIResource
{
    protected int $height = 400;
    protected string $uri = null;
    protected string $econding = 'text';

    abstract public function toResourceContent(): array;
    abstract protected function generateUri(): string;
    abstract public function getContent(): string;

    public function height(int $px): static
    {
        $this->height = $px;

        return $this;
    }

    public function uri(string $uri): static
    {
        $this->uri = $uri;

        return $this;
    }

    public function getUri(): string
    {
        return $this->uri ?? $this->generateUri();
    }

    public function toResourceReference(): array
    {
        return [
            'type' => 'resource',
            'resource' => [
                'uri' => $this->getUri(),
                'mimeType' => 'text/html',
                'text' => $this->getContent(),
            ],
        ];
    }
}
