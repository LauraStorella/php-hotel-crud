<?php

include __DIR__ . '/database.php';

//  DB Query : index.php
$sql = "SELECT * FROM `stanze`";
$result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
      $rooms = [];

      // Ci sono i risultati
      //  ---> faccio qualcosa: output data di each row
      while($row = $result->fetch_assoc()) {
        $rooms[] = $row;
        // var_dump($row);     
    }
    // var_dump($rooms);
    // die();
  } elseif ($result) {
      // La query funziona correttamente ma ci sono 0 risultati
      //  ---> faccio qualcosa: arr vuoto
      // echo "0 results";
      $rooms = [];
  } else {
      // La query dà errore
      // echo "query error";
      die("query error");
  }
  // Chiudo connessione
  $conn->close();
?>