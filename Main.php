<?php
  namespace App;

  require_once("Consignment.php");
  require_once("Couriers/Courier.php");
  require_once("Couriers/ANC.php");
  require_once("Couriers/RoyalMail.php");
  require_once("Batch.php");

  use App\Batch;
  use App\Consignment;

  /**
   * Main Class, Handles batch control.
   */
  class Main
  {
    /** @var Batch $consignmentBatch contains an array of stored consignments. */
    public $consignmentBatch;

    /**
     * Initialises the empty Batch array, by calling the resetBatch function.
     * @return void
     */
    public function __construct() {
      $this->resetBatch();
    }

    /**
     * Initialises the empty Batch array.
     * @return void
     */
    public function resetBatch() {
      $this->consignmentBatch = new Batch;
    }

    /**
     * Add consignment to the current batch.
     * @param Consignment $consignment
     * @return void
     */
    public function addConsignment(Consignment $consignment) {
      $this->consignmentBatch->addConsignment($consignment);
    }

    /**
     * End current batch and begin shipping/sending the consignments.
     * @return void
     */
    public function endBatch() {
      $consignments = $this->consignmentBatch->getConsignments();
      foreach ($consignments as $consignment) {
        $consignment->sendConsignment();
      }
    }
  }
