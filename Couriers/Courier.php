<?php

  namespace App\Couriers;
  use App\Consignment;

class Courier
  {
    protected $courierName = null;
    protected $transportMethod = null;

    public function getCourierName() {
      return $this->courierName;
    }

    public function setCourierName($courierName) {
      $this->courierName = $courierName;
    }

    public function getTransportMethod() {
      return $this->transportMethod;
    }

    public function setTransportMethod($transportMethod) {
      $this->transportMethod = $transportMethod;
    }

    /**
     * This function should be overriden by extending classes
     */
    public function generateConsignmentNumber() {
      return "TBC";
    }

    public function sendConsignment(Consignment $consignment) {
      if (!$this->transportMethod) {
        throw new \Exception("No Data Transport Method has been set for $this->courierName.");
      }

      print("Queueing Job to send <b>[" . $consignment->getNumber() . "] " . $consignment->getItemDescriptor() . "</b> via <b>" . $this->transportMethod . "</b><br>");
    }
  }

