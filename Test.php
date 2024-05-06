<?php

class Test{

    public $val;

    function __construct(int $theVal) {

        $this->val = $theVal;
        $this->setVal($theVal);

        echo '['.$this->val.']<br>';
        echo '['.$this->getVal().']<br>';
    }

    public function setVal(int $val) {

        $this->val = $val * 2;
    }

    public function getVal() {

        return $this->val;
    }
}


class Oya{

    function test() {

        $this->privateTest();
    }

    private function privateTest() {

        $myTest = new Test(100);
    }
}

$myOya = new Oya();
$myOya->test();

?>