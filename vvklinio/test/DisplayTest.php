<?php

use App\Classes\Check;
use App\Classes\Display;
use App\Classes\Result;
use PHPUnit\Framework\TestCase;

class DisplayTest extends TestCase {

    private $_check;
    private $_result;
    private $_display;
    private $_divisor1 = 3;
    private $_divisor2 = 5;
    private $_divisor3 = 15;

    public function inputNumbers() {
        return [
            [2, '2'],
            [3, 'Linio'],
            [4, '4'],
            [5, 'IT'],
            [6, 'Linio'],
            [15, 'Linianos'],
            [45, 'Linianos'],
            [100, 'IT']
        ];
    }

    public function setUp(): void {
        $this->_check = new Check;
        $this->_result = new Result;
        $this->_display = new Display;
    }

    public function getResults($num) {
        $this->_result->number = $num;
        $this->_result->three_divisible = $this->_check->isDivisible($num, $this->_divisor1);
        $this->_result->five_divisible = $this->_check->isDivisible($num, $this->_divisor2);
        $this->_result->fifteen_divisible = $this->_check->isDivisible($num, $this->_divisor3);
    }

    /**
     * @dataProvider inputNumbers
     */
    public function testDisplayFifteenDivisible($num, $res) {
        $this->getResults($num);
        $this->expectOutputString($res . PHP_EOL);
        $this->_display->displayResult($this->_result);
    }

}
