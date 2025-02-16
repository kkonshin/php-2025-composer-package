<?php

declare(strict_types=1);

class Api
{
    public function json(): array
    {
        $json = file_get_contents('https://laravel-news.com/feed/json');

        return json_decode($json, true);
    }
}