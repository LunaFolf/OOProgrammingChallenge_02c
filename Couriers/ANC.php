<?php

  namespace App\Couriers;

  class ANC extends Courier
  {
    public function __construct() {
      $this->setCourierName("ANC");
      $this->setTransportMethod("FTP");
    }

    /** Generate a ANC consignment number
     */
    public function generateConsignmentNumber() {
      return ("ANC" . rand([1, 1000]));
    }
  }

