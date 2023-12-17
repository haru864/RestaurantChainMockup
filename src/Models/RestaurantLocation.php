<?php

namespace Models;

use Interfaces\FileConvertible;

class RestaurantLocation implements FileConvertible
{
    public string $name;
    public string $address;
    public string $city;
    public string $state;
    public string $zipCode;
    public array $employees;
    public bool $isOpen;
    public bool $hasDriveThru;

    public function toString(): string
    {
        return sprintf(
            "Company Name: %s, Address: %s %s %s %s",
            $this->name,
            $this->address,
            $this->city,
            $this->state,
            $this->zipCode
        );
    }

    public function toHTML(): string
    {
        return sprintf(
            "
            <div class='restaurant-location-card'>
                <h2>Restaurant Name: %s</h2>
                <p>Restaurant Location: %s %s %s %s</p>
            </div>",
            $this->name,
            $this->address,
            $this->city,
            $this->state,
            $this->zipCode
        );
    }

    public function toMarkdown(): string
    {
        return "## Restaurant Name: {$this->name}
                 - Restaurant Location: {$this->address} {$this->city} {$this->state} {$this->zipCode}";
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'zipCode' => $this->zipCode,
            'employees' => $this->employees,
            'isOpen' => $this->isOpen,
            'hasDriveThru' => $this->hasDriveThru
        ];
    }
}
