<?php
  namespace App;

  class Consignment
  {

    public $number;
    public $courier;

    public function __construct($courier)
    {
      $this->number = $courier->generateConsignmentNumber();
    }

  }

