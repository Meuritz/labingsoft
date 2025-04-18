<?php

declare(strict_types=1);

namespace App\DTO;
use Symfony\Component\Validator\Constraints as Assert;

class LocationDTO
{
#[Assert\NotNull()]
public ?string $name = null;

#[Assert\NotNull()]
#[Assert\Length(min: 2, max: 2)]
public ?string $country = null;

#[Assert\GreaterThanOrEqual(-90)]
#[Assert\LessThanOrEqual(90)]
public ?string $latitude = null;

#[Assert\GreaterThanOrEqual(-180)]
#[Assert\LessThanOrEqual(180)]
public ?string $longitude = null;

}