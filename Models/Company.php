<?php

namespace Models;

use Interfaces\FileConvertible;

class Company implements FileConvertible
{
    public string $name;
    public int $foundingYear;
    public string $description;
    public string $website;
    public string $phone;
    public string $industory;
    public string $ceo;
    public bool $isPubliclyTraded;
    public string $country;
    public string $founder;
    public int $totalEmployees;

    public function __construct(string $name, int $foundingYear, string $description, string $website, string $phone, string $industory, string $ceo, bool $isPubliclyTraded, string $country, string $founder, int $totalEmployees)
    {
        // echo "Company constructer start" . PHP_EOL;
        $this->name = $name;
        $this->foundingYear = $foundingYear;
        $this->description = $description;
        $this->website = $website;
        $this->phone = $phone;
        $this->industory = $industory;
        $this->ceo = $ceo;
        $this->isPubliclyTraded = $isPubliclyTraded;
        $this->country = $country;
        $this->founder = $founder;
        $this->totalEmployees = $totalEmployees;
        // echo $this->name . PHP_EOL;
        // echo "Company constructer end" . PHP_EOL;
    }

    public function toString(): string
    {
        return sprintf(
            "Company Name: %s",
            $this->name
        );
    }

    public function toHTML(): string
    {
        return sprintf(
            "
            <div class='company-card'>
                <h2>Company: %s</h2>
            </div>",
            $this->name
        );
    }

    public function toMarkdown(): string
    {
        return "## Company: {$this->name}";
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
            'totalEmployees' => $this->totalEmployees
        ];
    }
}
