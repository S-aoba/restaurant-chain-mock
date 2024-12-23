<?php

namespace Helpers;

use Faker\Factory;
use Models\Restaurants\RestaurantChain;

class RandomGenerator {
  public static function restaurantChain(): RestaurantChain
  {
    $faker = Factory::create();

    return new RestaurantChain(
      $faker->company,                 // name
      $faker->numberBetween(1900, 2023), // foundingYear
      $faker->url,                     // website
      $faker->phoneNumber,             // phone
      $faker->word,                    // industry
      $faker->name,                    // ceo
      $faker->boolean,                 // isPubliclyTraded
      $faker->country,                 // country
      $faker->name,                    // founder
      $faker->numberBetween(10, 10000),// totalEmployees
      $faker->randomNumber(),          // chainId
      $faker->words(5),                // restaurantLocations
      $faker->word,                    // cuisineType
      $faker->numberBetween(1, 500),   // numberOfLocations
      $faker->boolean,                 // hasDriveThru
      $faker->numberBetween(1900, 2023), // yearFounded
      $faker->company,  
    );
  }

  public static function restaurantChains(int $min, int $max): array
  {
    $faker = Factory::create();
    $restaurantChains = [];
    $numberOfRestaurantChains = $faker->numberBetween($min, $max);

    for($i = 0; $i < $numberOfRestaurantChains; $i++) {
      $restaurantChains[] = self::restaurantChain();
    }

    return $restaurantChains;
  }
}