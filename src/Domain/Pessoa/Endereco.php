<?php

namespace Alura\Calisthenics\Domain\Pessoa;

class Endereco
{
    public string $street;
    public string $number;
    public string $province;
    public string $city;
    public string $state;
    public string $country;

    /**
     * Endereco constructor.
     * @param string $street
     * @param string $number
     * @param string $province
     * @param string $city
     * @param string $state
     * @param string $country
     */
    public function __construct(string $street, string $number, string $province, string $city, string $state, string $country)
    {
        $this->street = $street;
        $this->number = $number;
        $this->province = $province;
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
    }

    public function __toString()
    {
        return "{$this->street}, {$this->number}, {$this->province} - {$this->city} - {$this->state} - {$this->country}";
    }
}