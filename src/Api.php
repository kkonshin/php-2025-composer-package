<?php

declare(strict_types=1);

namespace Kkonshin\Php2025ComposerPackage;

class Api
{
    public function json(): array
    {
        $context = stream_context_create(
            array(
                "http" => array(
                    "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
                )
            )
        );

        $json = file_get_contents('https://laravel-news.com/feed/json', false, $context);

        return json_decode($json, true);
    }
}