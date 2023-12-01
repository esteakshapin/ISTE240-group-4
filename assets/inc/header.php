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
    <script src="asset/scripts/index.js"></script>
  </head>

  <body>

    <div class="navcontainer">
      <!-- Navigation start-->
      <div class="leftside">
        <div class="logo">
          <!-- Logo class to make the dropdown menu-->
          <img
            src="media\learnix logo.png"
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
          <li>Item 1</li>
          <li>Item 2</li>
          <li>Item 3</li>
          <li>Item 4</li>
          <li>Item 5</li>
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
