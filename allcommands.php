<?php
$page = "All Commands";
include("assets/inc/header.php");
?>

<div class="content">
  <h1>All Commands</h1>

  <table>
    <tr>
      <th>Command</th>
      <th>Description</th>
      <th>Example</th>
    </tr>
    <tbody>
      <?php
    include './dbConn.php';
    // get all the comments in the database
    if ($conn) {
      // querying for all the comments in the database
      $res = $conn->query('SELECT `command`, `description`, `example` FROM `commandStorage`');

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

  

  <!-- <table>
    <tr>
      <th>Command</th>
      <th>Description</th>
      <th>Example</th>
    </tr>
    <tbody>
      
      <tr class="alternate-color-tr">
        <td>pwd</td>
        <td>Prints current working directory</td>
        <td>pwd</td>
      </tr>
      <tr>
        <td>ls</td>
        <td>Prints files and folders in current working directory</td>
        <td>ls -a<br>(a indicates tdat hidden files should be visible)</td>
      </tr>
      <tr>
        <td>mv</td>
        <td>Move or rename files. Botd initial file name and location and final file name and location must be
          specified, so having a different final file name but tde same location essentially renames tde file in place.
          Specifying a different final file location witd tde same name will move tde file while retaining its name.
        </td>
        <td>mv document.pdf ~/Documents/<br>(Moves document.pdf to tde user's documents folder. Does not change its
          name)<br>mv document.pdf resume.pdf<br>(Renames document.pdf to resume.pdf but does not move file)</td>
      </tr>
      <tr>
        <td>cp</td>
        <td>Copies a file</td>
        <td>cp document.pdf ~/Documents/documentcopy.pdf<br>(Copies document.pdf to tde user's documents folder under
          tde name “documentcopy.pdf”</td>
      </tr>
      <tr>
        <td>rm</td>
        <td>Deletes a file or folder. tde -r flag can be used to delete a folder and its contents. Careful, tdere's no
          recycling bin here by default so deletion is permanent! </td>
        <td>rm document.pdf'<br>(deletes document.pdf)<br>rm -r ~/Documents<br>(deletes tde documents folder and
          recursively deletes all files and subfolders inside. BE VERY CAREFUL.</td>
      </tr>
      <tr>
        <td>chmod</td>
        <td>Change access permissions on certain roles for a file or folder</td>
        <td>chmod u+x script.sh<br>(Allows users (u) to execute (e) script.sh)</td>
      </tr>
      <tr>
        <td>chown</td>
        <td>Change ownership permissions for a file or folder</td>
        <td>chown john document.pdf<br>(Gives user john ownership of document.pdf)</td>
      </tr>
    </tbody>
  </table> -->

  <!-- mobile version -->
  <div class="mobile-command-section">
    <?php
      // looping thru the table and displaying each entry in an <li>
    echo "inside mobile command - section";
      if ($res) {
        while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
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