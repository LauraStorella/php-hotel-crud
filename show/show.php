<!-- <?php 
echo 'test show';
?> -->


<?php include __DIR__ . '/server.php';?>
<?php include __DIR__ . '/../partials/header.php';?>
<!-- <?php var_dump($room);?> -->


<!-- Template con singolo risultato (Dettaglio stanza) -->
<?php if ($room) { ?>
 <!-- php if (!empty($room)) { -->
  <main>
    <h2>Stanza numero: <?php echo $room['room_number']; ?></h2>

    <ul>
      <li>ID: <?php echo $room['id']; ?></li>
      <li>Numero stanza: <?php echo $room['room_number']; ?></li>
      <li>Piano: <?php echo $room['floor']; ?></li>
      <li>N° posti letto: <?php echo $room['beds']; ?></li>
      <li>Data creazione: <?php echo $room['created_at']; ?></li>
    </ul>
  </main>
<?php } else { ?>
    <p>La stanza non esiste</p>
<?php } ?>