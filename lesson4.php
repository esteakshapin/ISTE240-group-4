<?php
$page = "Lesson 4";
include("assets/inc/header.php");
?>
<div class="lessonplan">
  <h3>User Management and Permissions</h3>
  <div class="coverimage">
    <img class="lessonimg" src="assets/media/permissions.png">
  </div>
  <div class="lessontext">
    Unix, like most other operating systems, has the ability to create users with various roles as a means of controlling who accesses what content on the same computer. These roles and users can then be given or disallowed access to certain files. Each file has an owner and group associated with it. There are three entities that have permissions on a file: the owner, the user group associated with the file, and everyone else. These three groups can then be allowed or prohibited from reading, writing, or executing these files. An example permission set for a file is shown below. In this example, the owner is allowed to read and write the file, while anyone else including those in the file’s owning group can only read it.
  </div>
  <div class="commandtable">
    <table>
        <tr>
          <th>Command</th>
          <th>Description</th>
          <th>Example</th>
        </tr>
      <tbody>
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
    </table>
  </div>
</div>
<?php
include("assets/inc/footer.php");
?>