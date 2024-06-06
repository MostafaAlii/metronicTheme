<?php
namespace Database\Factories;
use Illuminate\Support\Str;
use App\Enums\AdminStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory {
    public function definition() {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            //'password' => bcrypt('123123'), // password
            'remember_token' => Str::random(10),
            'status' => fake()->randomElement([AdminStatus::ACTIVE, AdminStatus::IN_ACTIVE, AdminStatus::BLOCKED])
            
        ];
    }

    public function unverified() {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}