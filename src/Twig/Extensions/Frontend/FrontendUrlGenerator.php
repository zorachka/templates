<?php

declare(strict_types=1);

namespace Zorachka\Templates\Twig\Extensions\Frontend;

final class FrontendUrlGenerator
{
    private string $baseUrl;

    public function __construct(string $baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    public function generate(string $uri, array $params = []): string
    {
        return $this->baseUrl
            . ($uri ? '/' . $uri : '')
            . ($params ? '?' . \http_build_query($params) : '');
    }
}
