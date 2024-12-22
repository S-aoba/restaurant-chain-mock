<?php

namespace Models\Restaurants;

use Models\Restaurants\Company;
use Interfaces\FileConvertible;

class RestaurantChain extends Company implements FileConvertible {
  public int $chainId;
  /** @var RestarurantLocation[] $restaurantLocations */
  public array $restaurantLocations; 
  public string $cuisineType;
  public int $numberOfLocations;
  public bool $hasDriveThru;
  public int $yearFounded;
  public string $parentCompany;

  public function __construct(
    string $name,
    int $foundingYear,
    string $website,
    string $phone,
    string $industry,
    string $ceo,
    bool $isPubliclyTraded,
    string $country,
    string $founder,
    int $totalEmployees,
    int $chainId,
    array $restaurantLocations, 
    string $cuisineType, 
    int  $numberOfLocations, 
    bool $hasDriveThru, 
    int $yearFounded, 
    string $parentCompany
  )
  {
    parent::__construct(
      $name,
      $foundingYear,
      $website,
      $phone,
      $industry,
      $ceo,
      $isPubliclyTraded,
      $country,
      $founder,
      $totalEmployees
    );
    $this->chainId = $chainId;
    $this->restaurantLocations = $restaurantLocations;
    $this->cuisineType = $cuisineType;
    $this->numberOfLocations = $numberOfLocations;
    $this->hasDriveThru = $hasDriveThru;
    $this->yearFounded = $yearFounded;
    $this->parentCompany = $parentCompany;
  }


}