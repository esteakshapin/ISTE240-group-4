<?php
$page = "All Commands";
include("assets/inc/header.php");
?>

<div class="content">
  <h1>All Commands</h1>

  <table>
    <thead>
      <tr>
        <th>Command</th>
        <th>Description</th>
        <th>Example</th>
      </tr>
    </thead>
    <tbody>
    <?php
    include './dbConn.php';
    // get all the comments in the database
    if ($conn) {
      // querying for all the comments in the database
      $res = $conn->query('SELECT `command`, `description`, `example` FROM `commandStorage`');

      $res2 = $res;

      $counter = 0;

      // looping thru the table and displaying each entry in an <li>
      if ($res) {
        while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
            include './assets/inc/table-row.php';
            $counter+=1;
        }
      } else {
        echo "Error in query execution: " . mysqli_error($conn);
      }
    }

    ?>
    </tbody>
  
  </table>

  <!-- mobile version -->
  <div class="mobile-command-section">
    <?php
      // looping thru the table and displaying each entry in an <li>
    
      if ($res2) {
        echo "inside mobile command  res - section";
        while ($row = mysqli_fetch_array($res2, MYSQLI_ASSOC)) {
          echo "inside mobile command row - section";
          include "./assets/inc/mobile-commands.php";
        }
      } else {
        echo "Error in query execution: " . mysqli_error($conn);
      }
      ?>
  </div>

</div>

<?php
include("assets/inc/footer.php");
?>