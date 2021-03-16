<?php

  namespace App\Couriers;

  class RoyalMail extends Courier
  {
    public function __construct() {
      $this->setCourierName("Royal Mail");
      $this->setTransportMethod("email");
    }

    /** Generate a Royal Mail consignment number
     */
    public function generateConsignmentNumber() {
      return ("RM" . rand([1, 1000]));
    }
  }

