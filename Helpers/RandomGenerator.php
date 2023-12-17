<?php

namespace Helpers;

use Faker\Factory;
use Models\Employee;
use Models\RestaurantChain;
use Models\RestaurantLocation;

class RandomGenerator
{
    private static function Employee(): Employee
    {
        $faker = Factory::create();
        $randomStrings = [];
        for ($i = 0; $i < 10; $i++) {
            $randomStrings[] = $faker->word;
        }
        return new Employee(
            $faker->randomNumber(),
            $faker->firstName(),
            $faker->lastName(),
            $faker->email,
            $faker->password,
            $faker->phoneNumber,
            $faker->address,
            $faker->dateTimeThisCentury,
            $faker->dateTimeBetween('-10 years', '+20 years'),
            $faker->randomElement(['admin', 'user', 'editor']),
            $faker->jobTitle(),
            $faker->randomNumber(),
            $faker->dateTimeBetween('-20 years', '-0 years'),
            $randomStrings
        );
    }

    public static function RestaurantChain(): RestaurantChain
    {
        $faker = Factory::create();
        // $totalEmployees = rand(3, 10);
        // $numberOfLocations = rand(1, 3);
        $totalEmployees = 1;
        $numberOfLocations = 1;
        $companyName = $faker->company();
        $restaurantLocations = [];
        for ($i = 0; $i < $numberOfLocations; $i++) {
            $restaurantLocation = self::RestaurantLocation($companyName, $totalEmployees);
            array_push($restaurantLocations, $restaurantLocation);
        }
        $restaurantChain = new RestaurantChain(
            $companyName,
            rand(1950, 2023),
            "This is fake company!",
            $faker->url(),
            $faker->phoneNumber(),
            "Fake-Industory",
            $faker->name(),
            $faker->boolean(),
            $faker->country(),
            $faker->name(),
            $totalEmployees,
            $faker->randomNumber(),
            $restaurantLocations,
            "fake-cuisine-type",
            $numberOfLocations,
            $faker->company()
        );
        return $restaurantChain;
    }

    private static function RestaurantLocation(string $company, int $totalEmployees): RestaurantLocation
    {
        $faker = Factory::create();
        $employees = [];
        for ($i = 0; $i < $totalEmployees; $i++) {
            $employee = self::Employee();
            array_push($employees, $employee);
        }
        return new RestaurantLocation(
            $company,
            $faker->address(),
            $faker->city(),
            "sample-state",
            $faker->randomNumber(),
            $employees,
            $faker->boolean(),
            $faker->boolean(),
        );
    }
}
