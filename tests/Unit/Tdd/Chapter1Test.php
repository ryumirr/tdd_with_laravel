<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Chapter1Test extends TestCase
{
    const DEFAULT_DOLLAR = 5;
    const USD_EXCHANGE_RATE = [
        'chf' => 1.5
    ];

    #[DataProvider('get_currency_unit_rate_conditions')]
    public function test_환율변환후금액(string $name, string $comparisonCurrency, float $exchangeRate = 0)
    {
        $exchange_rate = self::get_currency_unit_rate_conditions();
        var_dump($name, $comparisonCurrency);
        var_dump($exchangeRate);
       // var_dump(self::USD_EXCHANGE_RATE);
        //$this->assertTrue();
       // self::DEFAULT_DOLLAR * $exchange_rate[$name]
        //exit;
        //string $name, int $exchange_rate
     //   $dollar = config('currency_unit.usa');
       // self::DEFAULT_DOLLAR * $exchange_rate;
    }

    /**
     * All exchange rate :x
     *
     * @return array<string,array<string,float>
     */
    private static function get_all_exchange_rate()
    {
        return [
            // all currencies except USD
            'chf' => [
            ],
        ];
    }

    public static function get_currency_unit_rate_conditions()
    {
       // $allRate = self::get_all_exchange_rate();

        // todo: 나중에 yield로 바꿀 것.
        // todo:  
        return [
            'DOLLAR가 기준일 때' => [
                'usd', 'chf', self::USD_EXCHANGE_RATE['chf']
            ],
            // 'CHF일 때' => [
            //     'chf',
            // ],
        ];
    }

    // public function test_異なる通話単位とたす場合(string $currency_unit_name): void
    // {
    //     $usa = config('currency_unit.usa');
    //     $swiss = config('currency_unit.swiss');
    // }
    /**
     * A basic test example.
     */
    // public function test_that_true_is_true(): void
    // {
    //     $this->assertTrue(true);
    // }
}