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
          <img src="assets/media/learnixLogo.png" alt="Learnix Logo" class="logo">

          <div class="dropdown-menu">
            <div class="dropdown-item">
              <span class="circle"></span>
              <a href="index.php"<?php if($page == "Home"){ echo ' class="active"'; } ?>>Home</a>
            </div>
            <div class="dropdown-item">
              <span class="circle"></span>
              <a href="lesson1.php" <?php if($page == "Lesson 1"){ echo ' class="active"'; } ?>>Lesson 1</a>
            </div>
            <div class="dropdown-item">
              <span class="circle"></span>
              <a href="lesson2.php" <?php if($page == "Lesson 2"){ echo ' class="active"'; } ?>>Lesson 2</a>
            </div>
            <div class="dropdown-item">
              <span class="circle"></span>
              <a href="lesson3.php" <?php if($page == "Lesson 3"){ echo ' class="active"'; } ?>>Lesson 3</a>
            </div>
            <div class="dropdown-item">
              <span class="circle"></span>
              <a href="lesson4.php" <?php if($page == "Lesson 4"){ echo ' class="active"'; } ?>>Lesson 4</a>
            </div>
            <div class="dropdown-item">
              <span class="circle"></span>
              <a href="allcommands.php" <?php if($page == "All Commands"){ echo ' class="active"'; } ?>>Command Sheet</a>
            </div>
            <div class="dropdown-item">
              <span class="circle"></span>
              <a href="quiz.php" <?php if($page == "Quiz"){ echo ' class="active"'; } ?>>Quiz</a>
            </div>
          </div>
        </div>
        <!-- End of logo class -->

        <ul class="menu">
          <li>
            <a href="index.php"<?php if($page == "Home"){ echo 'class=" active"'; } ?>>Home</a>
          </li>
          <li>
            <a href="lesson1.php"<?php if($page == "Lesson 1"){ echo ' class="active"'; } ?>>Lesson 1</a>
          </li>
          <li>
            <a href="lesson2.php"<?php if($page == "Lesson 2"){ echo ' class="active"'; } ?>>Lesson 2</a>
          </li>
          <li>
            <a href="lesson3.php"<?php if($page == "Lesson 3"){ echo ' class="active"'; } ?>>Lesson 3</a>
          </li>
          <li>
            <a href="lesson4.php"<?php if($page == "Lesson 4"){ echo ' class="active"'; } ?>>Lesson 4</a>
          </li>
          <li>
            <a href="allcommands.php"<?php if($page == "All Commands"){ echo ' class="active"'; } ?>>Command Sheet</a>
          </li>
          <li>
            <a href="quiz.php"<?php if($page == "Quiz"){ echo ' class=" active"'; } ?>>Quiz</a>
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
