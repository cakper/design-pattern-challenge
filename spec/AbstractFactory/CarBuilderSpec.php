<?php

namespace spec\AbstractFactory;

use AbstractFactory\CarFactoryInterface;
use AbstractFactory\CarInterface;
use PhpSpec\ObjectBehavior;

class CarBuilderSpec extends ObjectBehavior
{
    function let(CarFactoryInterface $carFactory)
    {
        $this->beConstructedWith($carFactory);
    }

    function it_builds_a_car(CarFactoryInterface $carFactory, CarInterface $car)
    {
        $carFactory->construct()->willReturn($car);
        $this->buildACar()->shouldReturn($car);
    }
}
