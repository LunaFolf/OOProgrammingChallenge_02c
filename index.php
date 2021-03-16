<?php
  namespace App;
  require_once('Main.php');

  $main = new Main();

  $consignmentsArray = [
    [ "Keyboard", "RM" ],
    [ "Mouse", "RM" ],
    [ "Microphone", "ANC" ],
    [ "Monitor", "ANC" ],
    [ "Phone", "RM" ]
  ];

  foreach ($consignmentsArray as $consignment) {
    $consignment = new Consignment($consignment[0], $consignment[1]);
    $consignment->generateNumberFromCourier();
    
    $main->addConsignment($consignment);
    print("Added [" . $consignment->getNumber() . "] to the Batch.<br>");
  }

  print("<hr>");

  $main->endBatch();
?>