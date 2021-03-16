<?php

class Consigment
{

  public $number;
  public $courier;

  public function __construct($courier)
  {
    $this->number = $courier->generateConsignmentNumber();
  }

}

?>