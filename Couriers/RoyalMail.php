<?php

  namespace App\Couriers;

  class RoyalMail extends Courier
  {
    public function __construct() {
      $this->setTransportMethod("email");
    }

    /**
     * Overwriting the generateConsignmentNumber code for specific RoyalMail Generation.
     */
    public function generateConsignmentNumber() {
      
    }
  }

?>