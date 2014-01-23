<?php

namespace AbstractFactory;

class CarBuilder
{
    private $factory;

    public function __construct(CarFactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function buildACar()
    {
        return $this->factory->construct();
    }
}
