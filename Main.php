<?php
  namespace App;

  require_once("Consignment.php");
  require_once("Couriers/Courier.php");
  require_once("Couriers/ANC.php");
  require_once("Couriers/RoyalMail.php");
  require_once("Batch.php");

  use App\Batch;
  use App\Consignment;

class Main
  {
    public $consignmentBatch;

    public function __construct() {
      $this->resetBatch();
    }

    public function resetBatch() {
      $this->consignmentBatch = new Batch;
    }

    public function addConsignment(Consignment $consignment) {
      $this->consignmentBatch->addConsignment($consignment);
    }

    public function endBatch() {
      $consignments = $this->consignmentBatch->getConsignments();
      foreach ($consignments as $consignment) {
        // print("[" . $consignment->getNumber() . "] " . $consignment->getItemDescriptor() . " To be shipped via " . $consignment->getCourier() . "<br>");
        $consignment->sendConsignment();
      }
    }
  }
