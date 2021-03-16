<?php

  namespace App\Couriers;

  /**
   * RoyalMail Courier Class, extends base courier class.
   */
  class RoyalMail extends Courier
  {

    /**
     * Initialises the Courier
     * @return void
     */
    public function __construct() {
      $this->setCourierName("Royal Mail");
      $this->setTransportMethod("email");
    }

    /**
     * Return the "unique" Courier Class
     * @return string|int
     */
    public function generateConsignmentNumber() {
      return ("RM" . rand(0, 1000));
    }
  }

