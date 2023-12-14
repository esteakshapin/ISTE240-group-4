<?php
$page = "Lesson 2";
include("assets/inc/header.php");
?>
<div class="lessonplan">
  <h3>Filesystem and Navigation</h3>
  <div class="coverimage">
    <img class="lessonimg" src="assets/media/filesystem.png" alt="Image showing a file hierarchy">
  </div>
  <div class="lessontext">
    Windows, Mac, and Unix all fundamentally organize their files and folders in a hierarchical structure starting with
    the root (highest level, often composed of a whole drive or all of a partition) with subfolders and files underneath
    in a tree-like structure, hence the name “filetree”. On a Unix or Unix-based system, the root is denoted with a
    forward slash. Underneath the root, there are the boot, home, usr, and various other folders present, although this
    may vary from system to system. These folders all contain subfolders of their own. When operating a Unix system, a
    user will have a “working directory” which is the directory they're currently operating on. To edit a document in
    their documents folder, a user will have to either set their working directory using the cd command to the documents
    folder and edit that document with a relative file path such as “vim document.pdf” or specify an absolute file path
    that will work regardless of working directory such as “vim /home/user/Documents/document.pdf”. Note that with an
    absolute file path the subdirectories are listed in descending order with slashes starting with root and ending with
    the desired file. To learn the commands used to set, print, and list files in the working directory, click here
    (Link to filesystem navigation commands page) for a list of file system navigation commands.
  </div>
  <div class="commandtable">
    <table>
      <tr>
        <th>Command</th>
        <th>Description</th>
        <th>Example</th>
      </tr>
      <tr>
        <td>cd</td>
        <td>Allows users to change their working directory</td>
        <td>cd ~/Documents/<br>Changes user's working directory to their documents folder</td>
      </tr>
      <tr>
        <td>pwd</td>
        <td>Prints current working directory</td>
        <td>pwd</td>
      </tr>
      <tr>
        <td>ls</td>
        <td>Prints files and folders in current working directory</td>
        <td>ls -a<br>(a indicates that hidden files should be visible)</td>
      </tr>
    </table>
  </div>
</div>
<?php
include("assets/inc/footer.php");
?>