<?php

namespace spec\AbstractFactory;

use PhpSpec\ObjectBehavior;

class PorscheFactorySpec extends ObjectBehavior
{
    function it_is_a_car_factory()
    {
        $this->shouldImplement('AbstractFactory\CarFactoryInterface');
    }

    function it_constructs_a_porsche()
    {
        $this->construct()->shouldReturnAnInstanceOf('AbstractFactory\Porsche');
    }
}
