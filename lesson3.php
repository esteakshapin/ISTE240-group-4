<?php
$page = "Lesson 3";
include("assets/inc/header.php");
?>
<div class="lessonplan">
  <h3>File Manipulation</h3>
  <div class="coverimage">
    <img class="lessonimg" src="assets/media/filemanip.png" alt="Notepad showing Unix file manipulation commands">
  </div>
  <div class="lessontext">
    The act of creating, editing, deleting, copying, and moving files is a fundamental part of computing that is
    typically done through a GUI interface on most personal consumer systems. All of the same actions can be performed
    with Unix or Unix-based systems using a CLI interface. It's a very streamlined process but there are some
    peculiarities, such as how the mv (move) command is used to rename files. Gone are the days of having multiple file
    explorer or finder windows open to move files around, or wasting time clicking through subfolders when a simple mv
    command can perform the job just as well. Regardless, file manipulation with a CLI still has quite the learning
    curve since users have to forget old habits and learn new commands. To learn more about the commands used for file
    manipulation in Unix, click here (Link to filesystem navigation commands page) to learn the specific commands needed
    to perform the file operations you're used to.
  </div>
  <div class="commandtable">
    <table>
      <tr>
        <th>Command</th>
        <th>Description</th>
        <th>Example</th>
      </tr>
      <tr>
        <td>mv</td>
        <td>Move or rename files. Both initial file name and location and final file name and location must be
          specified, so having a different final file name but the same location essentially renames the file in place.
          Specifying a different final file location with the same name will move the file while retaining its name.
        </td>
        <td>mv document.pdf ~/Documents/<br>(Moves document.pdf to the user's documents folder. Does not change its
          name)<br>mv document.pdf resume.pdf<br>(Renames document.pdf to resume.pdf but does not move file)</td>
      </tr>
      <tr>
        <td>cp</td>
        <td>Copies a file</td>
        <td>cp document.pdf ~/Documents/documentcopy.pdf<br>(Copies document.pdf to the user's documents folder under
          the name “documentcopy.pdf”</td>
      </tr>
      <tr>
        <td>rm</td>
        <td>Deletes a file or folder. The -r flag can be used to delete a folder and its contents. Careful, there's no
          recycling bin here by default so deletion is permanent! </td>
        <td>rm document.pdf'<br>(deletes document.pdf)<br>rm -r ~/Documents<br>(deletes the documents folder and
          recursively deletes all files and subfolders inside. BE VERY CAREFUL.</td>
      </tr>
    </table>
  </div>
</div>

<?php
include("assets/inc/footer.php");
?>