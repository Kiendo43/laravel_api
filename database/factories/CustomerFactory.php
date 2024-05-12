<?php

// namespace Database\Factories;

// use Illuminate\Database\Eloquent\Factories\Factory;
// use App\Models\Customer;
// use Faker\Generator as Faker;

// /**
//  * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Customer>
//  */
// class CustomerFactory extends Factory
// {
//     /**
//      * Define the model's default state.
//      *
//      * @return array<string, mixed>
//      */
//     public function definition(): array
//     {
//         $factory->define(Customer::class, function (Faker $faker) {

//             return [
//                 'name_customer' => $faker->firstname,
//                 'phone_customer' => $faker->phoneNumber,
//                 'adress_customer' => $faker->adress,
//                 'email_customer' => $faker->unique()->safeEmail,
//                 'city_customer' => $faker->city,


//             ];

//         });
//     }
// }


// namespace Database\Factories;

// use Illuminate\Database\Eloquent\Factories\Factory;
// use App\Models\Customer;
// use Faker\Generator as Faker;

// class CustomerFactory extends Factory
// {
//     protected $model = Customer::class;

//     public function definition()
//     {
//         return [
//             'name_customer' => $this->faker->firstName,
//             'phone_customer' => $this->faker->phoneNumber,
//             'address_customer' => $this->faker->address,
//             'email_customer' => $this->faker->unique()->safeEmail,
//             'city_customer' => $this->faker->city,
//         ];
//     }

//     public function configure()
//     {
//         return $this->afterCreating(function (Customer $customer) {
//             // Thêm các xử lý sau khi tạo Customer
//         });
//     }
// }
