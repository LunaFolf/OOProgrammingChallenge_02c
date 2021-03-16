<?php
  // This is my index file for testing functionality, so apologies for jank/dirty code.

  namespace App;
  require_once('Main.php');

  // Create the Main Class
  $main = new Main();

  // Initialise the array for test values.
  $consignmentsArray = [
    [ "Keyboard", "RM" ],
    [ "Mouse", "RM" ],
    [ "Microphone", "ANC" ],
    [ "Monitor", "ANC" ],
    [ "Phone", "RM" ]
  ];

  /**
   * for each test value in the array,
   * Create a new Consignment class,
   * generate a unqiue courier consignment number,
   * and add the consignment to the current batch. 
   */
  foreach ($consignmentsArray as $consignment) {
    $consignment = new Consignment($consignment[0], $consignment[1]);
    $consignment->generateNumberFromCourier();
    
    $main->addConsignment($consignment);
    print("Added [" . $consignment->getNumber() . "] to the Batch.<br>");
  }

  print("<hr>");

  // End the current batch, expected output is a list of the jobs that will be queued for shipping/sending.
  $main->endBatch();
?>