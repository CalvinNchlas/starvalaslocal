<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class CurrencyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $currencies = [
            ['currency' => 'USD', 'name' => 'UNITED STATES DOLLAR', 'flag' => 'US'],
            ['currency' => 'EUR', 'name' => 'EURO', 'flag' => 'EU'],
            ['currency' => 'SGD', 'name' => 'SINGAPORE DOLLAR', 'flag' => 'SG'],
            ['currency' => 'JPY', 'name' => 'JAPANESE YEN', 'flag' => 'JP'],
            ['currency' => 'KRW', 'name' => 'KOREAN WON', 'flag' => 'KR'],
            ['currency' => 'MYR', 'name' => 'MALAYSIAN RINGGIT', 'flag' => 'MY'],
            ['currency' => 'CNY', 'name' => 'CHINA YUAN', 'flag' => 'CN'],
            ['currency' => 'AUD', 'name' => 'AUSTRALIAN DOLLAR', 'flag' => 'AU'],
            ['currency' => 'NZD', 'name' => 'NEW ZEALAND DOLLAR', 'flag' => 'NZ'],
            ['currency' => 'GBP', 'name' => 'POUND STERLING', 'flag' => 'GB'],
            ['currency' => 'CHF', 'name' => 'SWISS FRANC', 'flag' => 'FR'],
        ];

        $selected = $this->faker->randomElement($currencies);

        $buyRate = $this->faker->randomFloat(2, 10000, 50000);
        $sellRate = $buyRate + $this->faker->randomFloat(2, 50, 500);
        $midRate = round(($buyRate + $sellRate) / 2, 2);

        return [
            'flag' => 'https://flagcdn.com/h120/' . strtolower($selected['flag']) . '.png',
            'currency' => $selected['currency'],
            'name' => $selected['name'],
            'denomination' => $this->faker->randomElement([
                '1000', '500 - 100', '100 - 50', '50 - 20 - 10 - 5', '1 - 1/2 - 1/4'
            ]),
            'buy_rate' => $buyRate,
            'sell_rate' => $sellRate,
            'mid_rate' => $midRate,
            'max_addition' => $this->faker->randomElement([0, 10, 20, 50, 100]),
            'max_reduction' => $this->faker->randomElement([0, 10, 20, 50, 100]),
        ];
    }
}
