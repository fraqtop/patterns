<?php

namespace AbstractFactory;


class JeepBody implements IBody
{
    function crash()
    {
        echo "jeep body crashed", PHP_EOL;
    }
}