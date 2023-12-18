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

    public function __construct(string $name, int $foundingYear, string $description, string $website, string $phone, string $industory, string $ceo, bool $isPubliclyTraded, string $country, string $founder, int $totalEmployees, $chainId, $restaurantLocations, $cuisineType, $numberOfLocations, $parentCompany)
    {
        // echo "RestaurantChain constructer start" . PHP_EOL;
        parent::__construct(
            $name,
            $foundingYear,
            $description,
            $website,
            $phone,
            $industory,
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
        $this->parentCompany = $parentCompany;
        // echo $this->name . PHP_EOL;
        // echo "RestaurantChain constructer end" . PHP_EOL;
    }

    public function toString(): string
    {
        return sprintf(
            "Restaurant Chain %s",
            $this->name
        );
    }

    public function toHTML(): string
    {
        // return sprintf(
        //     "
        //     <div class='restaurant-chain-card'>
        //         <h2>Restaurant Chain: %s</h2>
        //         <p>Cuisine Type: %s</p>
        //     </div>",
        //     $this->name,
        //     $this->cuisineType
        // );
        $html = sprintf(
            "
            <div class='restaurant-chain-card'>
                <h2>Restaurant Chain: %s</h2>
                ",
            $this->name
        );
        foreach ($this->restaurantLocations as $restaurantLocation) {
            $html .= $restaurantLocation->toHTML();
        }
        $html .= "</div>";
        return $html;
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
