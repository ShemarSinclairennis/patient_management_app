<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'service' => $this->faker->randomElement(['X-Ray','US','CT','PET','MRI']),
            'ticket_number' => $this->faker->numerify('####'),
            'status' =>  $this->faker->randomElement(['In Progress','Completed','Waiting']),     
           
        ];
    }
}
