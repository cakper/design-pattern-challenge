<?php

namespace AbstractFactory;

class PorscheFactory implements CarFactoryInterface
{
    public function construct()
    {
        return new Porsche();
    }
}
