<?php

namespace AbstractFactory;

class LamborghiniFactory implements CarFactoryInterface
{
    public function construct()
    {
        return new Lamborghini();
    }
}
