<?php

namespace App\Services;

use App\Http\Controllers\WasRun;

class WasRunService
{
    private $wasRun;

    public function __construct()
    {
        $this->wasRun = new WasRun();
    }

    public function test_wasRun()
    {
        $this->wasRun->testMethod();
    }

    public function getWasRunFlg(): bool
    {
        return $this->wasRun->getWasRunFlg();
    }

    public function getName(): string
    {
        return $this->wasRun->getName();
    }
}