<?php
  namespace App;

  use App\Couriers\RoyalMail;
  use App\Couriers\ANC;

  class Consignment
  {

    protected $itemDescriptor;
    protected $number;
    protected $courier;

    public function __construct($itemDescriptor, $courierTag)
    {
      $this->itemDescriptor = $itemDescriptor;
      $this->courier = $courierTag;
    }

    public function getItemDescriptor() {
      return $this->itemDescriptor;
    }

    public function getNumber() {
      return $this->number;
    }

    public function getCourier() {
      return $this->courier;
    }

    public function setItemDescriptor($itemDescriptor) {
      $this->itemDescriptor = $itemDescriptor;
    }

    public function setNumber($number) {
      $this->number = $number;
    }

    public function setCourier($courier) {
      $this->courier = $courier;
    }

    private function getCourierClass() {
      switch ($this->courier) {
        case 'ANC':
          $courier = new ANC;
          break;
        case 'RM':
          $courier = new RoyalMail;
          break;
      }

      if (!$courier) {
        throw new \Exception("A Courier could not be found in order to generate the unique consignment number!");
      }

      return $courier;
    }

    public function generateNumberFromCourier() {
      $this->number = $this->getCourierClass()->generateConsignmentNumber();
    }

    public function sendConsignment() {
      $this->getCourierClass()->sendConsignment($this);
    }

  }

