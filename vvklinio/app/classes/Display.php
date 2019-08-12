<?php

namespace App\Classes;

class Display {

    function displayResult($result) {
        switch ($result) {
            case ($result->fifteen_divisible):
                echo "Linianos".PHP_EOL;
                break;
            case ($result->five_divisible):
                echo "IT".PHP_EOL;
                break;
            case ($result->three_divisible):
                echo "Linio".PHP_EOL;
                break;
            default:
                echo $result->number . PHP_EOL;
        }
    }

}
