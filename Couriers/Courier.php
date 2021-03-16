<?php

  namespace App\Couriers;
  use Consigment;

class Courier
  {
    protected $dataTransportMethod = null;

    public function getTransportMethod() {
      return $this->dataTransportMethod;
    }

    public function setTransportMethod($transportMethod) {
      $this->dataTransportMethod = $transportMethod;
    }

    /**
     * This function should be overriden by extending classes
     */
    public function generateConsignmentNumber() {

    }

    private function sendConsignment(Consigment $consignment) {
      switch ($this->dataTransportMethod) {
        default:
          throw new \Exception("No Data Transport Method has been set for this Courier.");
      }
    }
  }

?>