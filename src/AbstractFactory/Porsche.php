<?php

namespace AbstractFactory;

class Porsche implements CarInterface
{
    public function startEngine()
    {
        return 'mraaau';
    }

    public function stopEngine()
    {
        return 'thanks';
    }
}
