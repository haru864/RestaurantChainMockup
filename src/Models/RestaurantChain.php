<?php

namespace Models;

use Interfaces\FileConvertible;

class RestaurantChain extends Company implements FileConvertible
{
    public int $chainId;
    public array $restaurantLocations;
    public string $cuisineType;
    public int $numberOfLocations;
    public string $parentCompany;

    public function toString(): string
    {
        return sprintf(
            "Restaurant Chain %s",
            $this->name
        );
    }

    public function toHTML(): string
    {
        return sprintf(
            "
            <div class='restaurant-chain-card'>
                <h2>Restaurant Chain: %s</h2>
                <p>Cuisine Type: %s</p>
            </div>",
            $this->name,
            $this->cuisineType
        );
    }

    public function toMarkdown(): string
    {
        return "## Restaurant Chain: {$this->name}";
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'foundingYear' => $this->foundingYear,
            'description' => $this->description,
            'website' => $this->website,
            'phone' => $this->phone,
            'industory' => $this->industory,
            'ceo' => $this->ceo,
            'isPubliclyTraded' => $this->isPubliclyTraded,
            'country' => $this->country,
            'founder' => $this->founder,
            'totalEmployees' => $this->totalEmployees,
            'chainId' => $this->chainId,
            'restaurantLocations' => $this->restaurantLocations,
            'cuisineType' => $this->cuisineType,
            'numberOfLocations' => $this->numberOfLocations,
            'parentCompany' => $this->parentCompany
        ];
    }
}
