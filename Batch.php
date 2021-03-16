<?php
  namespace App;

  use App\Consignment;

class Batch
  {
    private $consignments;

    public function __construct() {
      $this->consignments = [];
    }

    public function addConsignment(Consignment $consignment) {
      array_push($this->consignments, $consignment);
    }

    public function getConsignments() {
      return $this->consignments;
    }
  }
