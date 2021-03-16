<?php

  namespace App\Couriers;

  class ANC extends Courier
  {
    public function __construct() {
      $this->setTransportMethod("FTP");
    }
  }

?>