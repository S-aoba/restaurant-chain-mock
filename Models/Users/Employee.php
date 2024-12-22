<?php

namespace Models\Users;

use Interfaces\FileConvertible;
use Models\Users\User;

class Employee extends User implements FileConvertible {
  public string $jobTitle;
  public float $salary;
  public string $startDate;
  /** @var string[] $awards */
  public array $awards;

  public function __construct(
    int $id,
    string $firstName, 
    string $lastName, 
    string $email,
    string $password, 
    string $phoneNumber, 
    string $address,
    DateTime $birthDate, 
    DateTime $membershipExpirationDate, 
    string $role,
    string $jobTitle,
    float $salary,
    string $startDate,
    array $awards
  )
  {
    parent::__construct(
      $id,
      $firstName,
      $lastName,
      $email,
      $password,
      $phoneNumber,
      $address,
      $birthDate,
      $membershipExpirationDate,
      $role
    );
    $this->jobTitle = $jobTitle;
    $this->salary = $salary;
    $this->startDate = $startDate;
    $this->awards = $awards;
  }

}