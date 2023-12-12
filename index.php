<?php
$page = "Home";
include("assets/inc/header.php");
?>
<div class="hero">

</div>

<h3>Website Description</h3>
<div class="webdescribe">
  <!--<img src="assets/media/kernel_chart.jpg">-->
  <p>
    Unix is an operating system, originally created around the 1960s. Many modern operating systems such as Linux,
    MacOS, IOS, ChromeOS, Android, and even embedded operating systems for IOT devices are based wholly or in part on
    Unix. It pioneered many computing philosophies such as multi-user computing which originally allowed multiple people
    to access a mainframe at the same time. In the modern day, knowledge of the Unix operating system is important
    because it allows a user to more effectively interact with systems based on it, especially Linux which are very
    common in servers. Additionally, an understanding of Unix will force the user to better understand several high
    level concepts such as the hierarchical file system and how to manipulate it, user permissions, and CLI interfaces.
    With how many operating systems are based on it today, learning Unix and its commands will provide an excellent
    “bang for your buck” in knowledge learned in various systems.
  </p>
</div>

<div class="assignmentsContianer">
  <h2>Lessons</h2>

  <!-- This container is a flex div that hold all the filter options. It is justified at the end -->
  <div class="filterOptionsContainer">
    <h4>Filter</h4>
    <span class="filterOptions systems" onclick="toggle(this)">Systems</span>
    <span class="filterOptions command-line" onclick="toggle(this)">Command Line</span>
    <span class="filterOptions file-systems" onclick="toggle(this)">File Systems</span>
  </div>

  <div class="assignmentCardContainer">
    <div class="card">
      <h3><b><a href="lesson1.php">Lesson 1</a></b></h3>
      <span class="systems active">The CLI and Linux Basics</span>
      <p>HAHAHHA this is a test, hi this is joe</p>
    </div>

    <div class="card">
      <div class="container">
        <h3><b><a href="lesson2.php">Lesson 2</a></b></h3>
        <span class="command-line active">Filesystem and Navigation</span>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
          est laborum.</p>
      </div>
    </div>
    <div class="card">
      <div class="container">
        <h3><b><a href="lesson3.php">Lesson 3</a></b></h3>
        <span class="file-systems active">File Manipulation</span>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
          est laborum.</p>
      </div>
    </div>
    <div class="card">
      <div class="container">
        <h3><b><a href="lesson4.php">Lesson 4</a></b></h3>
        <span class="file-systems active">User Management and Permissions</span>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
          est laborum.</p>
      </div>
    </div>
  </div>

</div>
</div>
<!-- End of Container-->
<?php
include("assets/inc/footer.php");
?>