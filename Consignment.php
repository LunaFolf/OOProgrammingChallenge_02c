<?php
  namespace App;

  use App\Couriers\RoyalMail;
  use App\Couriers\ANC;

  /**
   * Class for defining the details of a consignment, key data is the courier and number but to make the example
   * look nice I added in a 'itemDescriptor'.
   */
  class Consignment
  {

    /** @var string|null $itemDescriptor contains A user-friendly name/description for the consignment */
    protected $itemDescriptor;
  
    /** @var string|int|null $number contains A unqiue, courier generated, consignment number */
    protected $number;

    /**
     * @var string|null $courier contains A courierTag used to identify different couriers and use the
     * correct class when generating numbers or shipping.
     */
    protected $courier;



    /**
     * Initialises the Consignment with a descriptor and courierTag
     * @param string $itemDescriptor A user-friendly name/description
     * @param string $courierTag A courier identifier
     * @return void
     */
    public function __construct($itemDescriptor, $courierTag)
    {
      $this->itemDescriptor = $itemDescriptor;
      $this->courier = $courierTag;
    }


    /**
     * Get user-friendly item descriptor.
     * @return string|null
     */
    public function getItemDescriptor() {
      return $this->itemDescriptor;
    }

    /**
     * Get unqiue courier consignment number.
     * @return string|int|null
     */
    public function getNumber() {
      return $this->number;
    }

    /**
     * Get courier identifier Tag.
     * @return string|null
     */
    public function getCourier() {
      return $this->courier;
    }

    /**
     * Set user-friendly item descriptor.
     * @param string $itemDescriptor A user-friendly item description.
     * @return void
     */
    public function setItemDescriptor($itemDescriptor) {
      $this->itemDescriptor = $itemDescriptor;
    }

    /**
     * Set unqiue courier consignment number.
     * @param string $number A unique courier consignment number.
     * @return void
     */
    protected function setNumber($number) {
      $this->number = $number;
    }

    /**
     * Set courier identifier tag.
     * @param string $courier A identifier tag for a courier.
     * @return void
     */
    public function setCourier($courier) {
      $this->courier = $courier;
    }

    /**
     * Get courier class based on set $this->courier.
     * @return Courier
     */
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

    /**
     * Generate the unqiue courier consignment number and assign it to the consignment
     * @return void
     */
    public function generateNumberFromCourier() {
      $this->setNumber($this->getCourierClass()->generateConsignmentNumber());
    }

    /**
     * Send the consignment
     * @return void
     */
    public function sendConsignment() {
      $this->getCourierClass()->sendConsignment($this);
    }

  }

