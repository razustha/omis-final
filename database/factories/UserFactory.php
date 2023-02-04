<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'User_type' => $arr[array_rand($arr,1),
            'User_type' => 'SUPER ADMIN',
            // 'first_name' => $this->faker->name(),
            'name' => 'Super Admin',
            // 'last_name' => $this->faker->name(),
            'mobile' => $this->faker->numerify('##########'),
            // 'email' => $this->faker->unique()->safeEmail(),
            'email' => 'superadmin@bibhutisolutions.com',
            'email_verified_at' => now(),
            'password' => '$2a$10$3jGELLamaNW96G4lDdOOhupYOhT9l6eFsfTayUdWydqkc6Jyht4Bu', // password
            'remember_token' => Str::random(10),
            'created_by' => 1,
            'updated_by' => 1,
        ];

        
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
