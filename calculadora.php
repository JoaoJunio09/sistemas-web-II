<?php

class Calculadora {
    private $n1;
    private $n2;

    public function __construct($n1, $n2) {
        $this->n1 = $n1;
        $this->n2 = $n2;
    }

    public function setN1($n1) {
        if ($n1) {
            $this->n1 = $n1;
        }
    }

    public function setN2($n2) {
        if ($n2 >= 0) {
            $this->n2 = $n2;
        }
    }

    public function somar() {
        return $this->n1 + $this->n2;
    }
}

$calc = new Calculadora(10, 10);
$calc->setN1(12);
$calc->setN2(10);

echo $calc->somar();