<?php

namespace spec\AbstractFactory;

use PhpSpec\ObjectBehavior;

class PorscheSpec extends ObjectBehavior
{
    function it_is_a_car()
    {
        $this->shouldImplement('AbstractFactory\CarInterface');
    }

    function it_starts_engine()
    {
        $this->startEngine()->shouldReturn('mraaau');
    }

    function it_stop_engine()
    {
        $this->stopEngine()->shouldReturn('thanks');
    }
}
