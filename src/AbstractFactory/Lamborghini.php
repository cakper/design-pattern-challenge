<?php

namespace AbstractFactory;

class Lamborghini implements CarInterface
{
    public function startEngine()
    {
        return 'wruuum';
    }

    public function stopEngine()
    {
        return 'thank you sir';
    }
}
