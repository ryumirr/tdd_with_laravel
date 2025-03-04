<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Facades\WasRunService;

class WasRun extends Controller
{
    private $wasRunFlg;
    private $name;

    function __construct()
    {
        $this->wasRunFlg = false;
        $this->name = 'construct name';
    }

    public function testMethod(): void
    {
        $this->wasRunFlg = true;
        $this->name = 'soyeon';
    }

    public function run(): void
    {
        WasRunService::test_wasRun();
    }

    public function getWasRunFlg(): bool
    {
        return $this->wasRunFlg;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
