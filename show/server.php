<?php
include __DIR__ . '/../database.php';


// Query DB 
$room_id = $_GET['id'];
$sql = "SELECT * FROM `stanze` WHERE `id` = $room_id";

$result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {

    // Ci sono i risultati
    //  ---> il risultato è 1 solo (NO while)
    $room = $result->fetch_assoc();
    // var_dump($room);
  } elseif ($result) {
      // La query funziona correttamente ma ci sono 0 risultati
      //  ---> faccio qualcosa: arr vuoto / arr false / die
      $room = false;
      // $room = [];
      // die('La stanza non esiste');
  } else {
      // La query dà errore
      // echo "query error";
      die("query error");
  }
  // Chiudo connessione
  $conn->close();

?>



