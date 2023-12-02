<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            echo "Learnix - " . $page;
        ?>
    </title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/scripts/index.js"></script>
  </head>

  <body>

    <div class="navcontainer">
      <!-- Navigation start-->
      <div class="leftside">
        <div class="logo">
          <!-- Logo class to make the dropdown menu-->
          <img
            src="assets/media/learnix logo.png"
            alt="Learnix Logo"
            width="60px"
            heigh="auto"
         >

          <div class="dropdown-menu">
            <div class="dropdown-item">
              <span class="circle"></span> Option 1
            </div>
            <div class="dropdown-item">
              <span class="circle"></span> Option 2
            </div>
            <div class="dropdown-item">
              <span class="circle"></span> Option 3
            </div>
            <div class="dropdown-item">
              <span class="circle"></span> Option 4
            </div>
            <div class="dropdown-item">
              <span class="circle"></span> Option 5
            </div>
            <div class="dropdown-item">
              <span class="circle"></span> Option 6
            </div>
            <div class="dropdown-item">
              <span class="circle"></span> Option 7
            </div>
          </div>
        </div>
        <!-- End of logo class -->

        <ul class="menu">
          <li>
            <a href="index.php"<?php if($page == "Home"){ echo 'class="active"'; } ?>>Home</a>
          </li>
          <li>
            <a href="lesson1.php"<?php if($page == "Lesson 1"){ echo 'class="active"'; } ?>>Lesson 1</a>
          </li>
          <li>
            <a href="lesson2.php"<?php if($page == "Lesson 2"){ echo 'class="active"'; } ?>>Lesson 2</a>
          </li>
          <li>
            <a href="lesson3.php"<?php if($page == "Lesson 3"){ echo 'class="active"'; } ?>>Lesson 3</a>
          </li>
          <li>
            <a href="lesson4.php"<?php if($page == "Lesson 4"){ echo 'class="active"'; } ?>>Lesson 4</a>
          </li>
          <li>
            <a href="allcommands.php"<?php if($page == "All Commands"){ echo 'class="active"'; } ?>>Command Sheet</a>
          </li>
        </ul>
      </div>

      <div class="rightside">
        <div class="profilepic"></div>
        <div class="user-profile">
          <h6>Username</h6>
        </div>
      </div>
    </div>
    <!-- Navigation end-->
