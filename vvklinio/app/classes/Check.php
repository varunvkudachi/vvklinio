<?php

namespace App\Classes;

class Check {

    function isDivisible($number, $divisor) {
        return !($number % $divisor);
    }

}
