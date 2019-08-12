<?php

namespace App\Classes;

class Main {

    public function execute() {
        for ($i = 1; $i <= 100; $i++) {
            $result = new Result;
            $display = new Display;
            $num_check = new Check;
            
            $result->number = $i;
            $result->three_divisible = $num_check->isDivisible($result->number, 3);
            $result->five_divisible = $num_check->isDivisible($result->number, 5);
            $result->fifteen_divisible = $num_check->isDivisible($result->number, 15);
            $display->displayResult($result);
        }
    }

}
