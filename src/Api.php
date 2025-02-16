<?php

declare(strict_types=1);

namespace Kkonshin\Php2025ComposerPackage;

class Api
{
    public function json(): array
    {
        $json = file_get_contents('https://pokeapi.co/api/v2/pokemon/ditto');

        return json_decode($json, true);
    }
}