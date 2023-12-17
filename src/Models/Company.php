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
