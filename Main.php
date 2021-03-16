<?php
  namespace App;

  use App\Batch;
  use App\Consignment;

class Main
  {
    protected Batch $consignmentBatch;

    public function addConsignment(Consignment $consignment) {
      $this->consignmentBatch->addConsignment($consignment);
    }
  }
