<?php

use App\Classes\Check;
use PHPUnit\Framework\TestCase;

class CheckTest extends TestCase {

    private $_chk;

    public function inputNumbers() {
        return [
            [10, 3, false],
            [11, 3, false],
            [12, 3, true],
            [13, 3, false],
            [14, 3, false],
            [15, 3, true],
            [10, 5, true],
            [11, 5, false],
            [12, 5, false],
            [13, 5, false],
            [14, 5, false],
            [15, 5, true],
            [10, 15, false],
            [11, 15, false],
            [12, 15, false],
            [13, 15, false],
            [14, 15, false],
            [15, 15, true]
        ];
    }

    public function setUp(): void {
        $this->_chk = new Check;
    }

    /**
     * @dataProvider inputNumbers
     */
    public function testIsDivisible($n, $d, $res) {
        $this->assertEquals($res, $this->_chk->isDivisible($n, $d));
    }

}
