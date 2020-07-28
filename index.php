<!-- Test -->
<!-- <?php 
echo 'test';
?> -->




<?php include __DIR__ . '/server.php';?>
<?php include __DIR__ . '/partials/header.php';?>




    <main>
      <!-- Lista stanze - Inizio -->
      <table class="rooms-list">
        <thead>
          <tr>
            <th>ID</th>
            <th>Numero stanza</th>
            <th>Piano</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($rooms as $room) { ?>
            <!-- Singola stanza -->
            <tr>
              <td><?php echo $room['id']?>; </td>
              <td><?php echo $room['room_number']?>;</td>
              <td><?php echo $room['floor']?>;</td>
              <td><a href="<?php echo $base_path . '/show/show.php?id=' . $room['id']; ?>">View</a></td>
            </tr>
            <!-- Singola stanza -->
          <?php } ?>
        </tbody>
      </table>
      <!-- Lista stanze - Fine -->
    </main>
  </body>
</html>