<?php

namespace Models;

use Interfaces\FileConvertible;

class Employee extends User implements FileConvertible
{
    public string $occupation;
    public float $salary;
    public \DateTime $startDate;
    public array $award;

    public function __construct(
        int $id,
        string $firstName,
        string $lastName,
        string $email,
        string $password,
        string $phoneNumber,
        string $address,
        \DateTime $birthDate,
        \DateTime $membershipExpirationDate,
        string $role,
        string $occupation,
        float $salary,
        \DateTime $startDate,
        array $award
    ) {
        // echo "Employee constructer start" . PHP_EOL;
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
        $this->occupation = $occupation;
        $this->salary = $salary;
        $this->startDate = $startDate;
        $this->award = $award;
        // echo "Employee constructer end" . PHP_EOL;
    }

    public function toString(): string
    {
        return sprintf(
            "ID: %s, Name: %s %s, Occupation: %s, StartDate: %s" . PHP_EOL,
            $this->id,
            $this->firstName,
            $this->lastName,
            $this->occupation,
            $this->startDate
        );
    }

    public function toHTML(): string
    {
        return sprintf(
            "
            <div class='user-card'>
                <div class='avatar'>SAMPLE</div>
                <h2>%s %s</h2>
                <p>Occupation: %s</p>
                <p>StartDate: %s</p>
            </div>",
            $this->firstName,
            $this->lastName,
            $this->occupation,
            $this->startDate,
        );
    }

    public function toMarkdown(): string
    {
        return "## User: {$this->firstName} {$this->lastName}
                 - Email: {$this->email}
                 - Phone Number: {$this->phoneNumber}
                 - Address: {$this->address}
                 - Birth Date: {$this->birthDate}
                 - Role: {$this->role}
                 - Occupation: {$this->occupation}
                 - Salary: {$this->salary}";
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'phoneNumber' => $this->phoneNumber,
            'address' => $this->address,
            'birthDate' => $this->birthDate,
            'role' => $this->role,
            'occupation' => $this->occupation,
            'salary' => $this->salary,
            'startDate' => $this->startDate,
            'award' => $this->award
        ];
    }
}
