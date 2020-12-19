<?php

namespace Alura\Calisthenics\Domain\Pessoa;

class NomeCompleto
{
    private string $firstName;
    private string $lastName;

    /**
     * NomeCompleto constructor.
     * @param string $fName
     * @param string $lName
     */
    public function __construct(string $fName, string $lName)
    {
        $this->firstName = $fName;
        $this->lastName = $lName;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return "{$this->firstName} {$this->lastName}";
    }

}