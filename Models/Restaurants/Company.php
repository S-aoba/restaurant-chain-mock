<?php

namespace Models\Restaurants;

use Interfaces\FileConvertible;

class Company implements FileConvertible {
  public string $name;
  public int $foundingYear;
  public string $description;
  public string $website;
  public string $phone;
  public string $industry;
  public string $ceo;
  public bool $isPubliclyTraded;
  public string $country;
  public string $founder;
  public int $totalEmployees;

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
    int $totalEmployees
  )
  {
    $this->name = $name;
    $this->foundinfYear = $foundingYear;
    $this->website = $website;
    $this->phone = $phone;
    $this->industry = $industry;
    $this->ceo = $ceo;
    $this->isPubliclyTraded = $isPubliclyTraded;
    $this->country = $country;
    $this->founder = $founder;
    $this->totalEmployees = $totalEmployees;;
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