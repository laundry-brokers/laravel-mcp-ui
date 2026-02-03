<?php 

namespace McpUi\Laravel\UI;

class HtmlResource extends UIResource
{
    public function __construct(protected string $html)
    {
        
    }

    public static function make(string $html): static
    {
        return new static($html);
    }

    public function generateUri(): string
    {
        return 'ui://' . config('app.name') . '/' . md5($this->html);
    }

    public function getContent(): string
    {
        return $this->html;
    }

    public function toResourceContent(): array
    {
        return [
            'uri' => $this->getUri(),
            'name' => 'UI Component',
            'mimeType' => 'text/html',
            'text' => $this->html,
        ];
    }
}