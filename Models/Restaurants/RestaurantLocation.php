<?php

namespace Models\Restaurants;

use Interfaces\FileConvertible;

class RestaurantLocation implements FileConvertible {
  public string $name;
  public string $adress;
  public string $city;
  public string $state;
  public string $zipCode;
  /** @var Employee[] $employee */
  public array $employee;
  public bool $isOpen;

  public function __construct(
    string $name,
    string $adress,
    string $city,
    string $state,
    string $zipCode,
    array $employee,
    bool $isOpen
  )
  {
    $this->name = $name;
    $this->adress = $adress;
    $this->city = $city;
    $this->state = $state;
    $this->zipCode = $zipCode;
    $this->employee = $employee;
    $this->isOpen = $isOpen;
  }

  public function toString(): string{
    return "";
  }

  public function toHTML() : string {
    return "";
  }

  public function toMarkdown(): string{
    return "";
  }

  public function toArray(): array{
    return [];
  }

}