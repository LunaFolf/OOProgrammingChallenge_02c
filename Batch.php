<?php
  namespace App;

  use App\Consignment;

  /**
   * Batch Class, for storing consignments.
   */
  class Batch
  {
    /** @var array|null $consignments contains an array of stored consignments. */
    private $consignments;

    /**
     * Initialises the empty array.
     * @return void
     */
    public function __construct() {
      $this->consignments = [];
    }

    /**
     * Store consignment in the array.
     * @param Consignment $consignment
     * @return void
     */
    public function addConsignment(Consignment $consignment) {
      array_push($this->consignments, $consignment);
    }

    /**
     * Get currently stored consignments
     * @return array
     */
    public function getConsignments() {
      return $this->consignments;
    }
  }
