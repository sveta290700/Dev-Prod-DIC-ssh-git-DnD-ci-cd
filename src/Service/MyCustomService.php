<?php

namespace App\Service;

class MyCustomService
{
    private string $appEnv;

    public function __construct(string $appEnv)
    {
        $this->appEnv = $appEnv;
    }

    public function env(): string
    {
        return $this->appEnv;
    }
}