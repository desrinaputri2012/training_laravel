<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_depan' => $this->faker->sentence(),
            'nama_belakang' => $this->faker->sentence(),
            'no_hp' => $this->faker->sentence(),
            'no_tlp_rumah' => $this->faker->sentence(),
            'email' => $this->faker->sentence(),   
            'description' => $this->faker->paragraph(),
        ];
    }

}
