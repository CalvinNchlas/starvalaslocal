<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->generateCompanyName();
        $email = $this->generateCompanyEmail($name);
        $website = $this->generateCompanyWebsite($name);

        return [
            'name' => $name,
            'email' => $email,
            'phone' => $this->faker->numerify('08##########'),
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'zip' => $this->faker->postcode,
            'country' => 'Indonesia',
            'website' => $website,
            'vat_number' => $this->faker->regexify('ID[0-9]{13}'),
            'tax_number' => $this->faker->numerify('##.###.###.#-###.###'),
            'registration_number' => $this->faker->numerify('REG-########'),
        ];
    }

    /**
     * Generate a company name.
     *
     * @return string
     */
    private function generateCompanyName(): string
    {
        return implode(' ', array_slice(explode(' ', $this->faker->company), 0, 3));
    }

    /**
     * Generate a company email based on the name.
     *
     * @param string $name
     * @return string
     */
    private function generateCompanyEmail(string $name): string
    {
        $sanitizedName = strtolower(preg_replace('/[^a-zA-Z0-9]/', '.', implode(' ', array_slice(explode(' ', $name), 0, 2))));
        return $sanitizedName . '@yopmail.com';
    }

    /**
     * Generate a company website based on the name.
     *
     * @param string $name
     * @return string
     */
    private function generateCompanyWebsite(string $name): string
    {
        $sanitizedName = strtolower(preg_replace('/[^a-zA-Z0-9]/', '-', implode('-', array_slice(explode(' ', $name), 0, 2))));
        return $sanitizedName . '.com';
    }
}
