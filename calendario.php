<?php

class Calendario {
    private $data;

    public function setData() {
        $this->data = date('d/m/Y');
        return $this->data;
    }
}

$obj = new Calendario();
$obj->setData();
print_r($obj);