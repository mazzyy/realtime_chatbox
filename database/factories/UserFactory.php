<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\messages;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;
    protected $messagemodel = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'avatar' => 'https://via.placeholder.com/150',
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
    // public function messages(){

    //     do {
    //                 $from = rand(1, 30);
    //                 $to = rand(1, 30);
    //                 $is_read = rand(0, 1);
    //             } while ($from === $to);
            
    //             return [
    //                 'from' => $from,
    //                 'to' => $to,
    //                 'message' => $faker->sentence,
    //                 'is_read' => $is_read
    //             ];
    // }
    
    


}
// $factory->define(message::class, function (Faker $faker) {
//     
// });
