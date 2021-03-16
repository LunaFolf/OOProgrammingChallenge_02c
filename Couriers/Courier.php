<?php

  namespace App\Couriers;
  use App\Consignment;

  /**
   * Class for defining a base Courier, should be extended by actual couriers.
   */
  class Courier
  {
    /** @var string|null $courierName contains a user-friendly representation of the Courier's name. */
    protected $courierName = null;
    /** @var string|null $transportMethod contains an identifier for the method the consignment's data will be transported. */
    protected $transportMethod = null;


    /**
     * Get user-friendly Courier name.
     * @return string|null
     */
    public function getCourierName() {
      return $this->courierName;
    }

    /**
     * Get transport method identifier.
     * @return string|null
     */
    public function getTransportMethod() {
      return $this->transportMethod;
    }

    /**
     * Set user-friendly Courier name.
     * @param string|null $courierName
     * @return void
     */
    public function setCourierName($courierName) {
      $this->courierName = $courierName;
    }

    /**
     * Set transport method identifier.
     * @param string|null $transportMethod
     * @return void
     */
    public function setTransportMethod($transportMethod) {
      $this->transportMethod = $transportMethod;
    }

    /**
     * A unique algorithm for generating courier consignment numbers.
     * This should be overidden in extending clases.
     * @return string|int|null
     */
    public function generateConsignmentNumber() {
      return "TBC";
    }

    /**
     * Send the consignment via the saved $this->transportMethod
     * @param Consignment $consignment
     * @return void
     */
    public function sendConsignment(Consignment $consignment) {
      if (!$this->transportMethod) {
        throw new \Exception("No Data Transport Method has been set for $this->courierName.");
      }

      print("Queueing Job to send <b>[" . $consignment->getNumber() . "] " . $consignment->getItemDescriptor() . "</b> via <b>" . $this->transportMethod . "</b><br>");
    }
  }

