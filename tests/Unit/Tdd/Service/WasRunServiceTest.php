<?php

namespace Tests\Unit\Tdd\Service;

use App\Services\WasRunService;
//use Phactory\Sql\Phactory;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

class WasRunServiceTest extends TestCase
{
    private $WasRunService;
    /**
     * This method is called before each test.
     *
     * @codeCoverageIgnore
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->WasRunService = new WasRunService();
    }

    /**
     * @codeCoverageIgnore
     */
    protected function tearDown(): void
    {
    }

    //#[DataProvider('get_currency_unit_rate_conditions')]
    public function test_wasRun()
    {
        $wasRunFlg = $this->WasRunService->getWasRunFlg();
        $name = $this->WasRunService->getName();

        print $this->WasRunService->test_wasRun();
        $this->assertFalse($wasRunFlg === $this->WasRunService->getWasRunFlg());
        $this->assertFalse($name === $this->WasRunService->getName());
    }
}