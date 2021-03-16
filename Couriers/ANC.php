<?php

  namespace App\Couriers;

  /**
   * ANC Courier Class, extends base courier class.
   */
  class ANC extends Courier
  {

    /**
     * Initialises the Courier
     * @return void
     */
    public function __construct() {
      $this->setCourierName("ANC");
      $this->setTransportMethod("FTP");
    }

    /**
     * Return the "unique" Courier Class
     * @return string|int
     */
    public function generateConsignmentNumber() {
      return ("ANC" . rand(0, 1000));
    }
  }

