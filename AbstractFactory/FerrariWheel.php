<?php

namespace AbstractFactory;


class FerrariWheel implements IWheel
{
    function rotate()
    {
        echo "ferrari wheel rotates", PHP_EOL;
    }

}