<?php
  $page = "Home";
  include("assets/inc/header.php");
?>
      <div class="hero"></div>

      <h3>Website Description</h3>
      <div class="webdescribe"></div>

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
                <h3><b><a href="/">Lesson 1</a></b></h3> 
                <span class="systems active">Systems</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
            </div>

            <div class="card">
                <div class="container">
                  <h3><b><a href="./project1/index.html">Lesson 2</a></b></h3> 
                  <span class="command-line active">Command Line</span>

                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
                </div>
            </div>

            <div class="card">
                <div class="container">
                  <h3><b><a href="/">Lesson 3</a></b></h3> 
                  <span class="file-systems active">File Systems</span>

                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
                </div>
            </div>
        </div>

      </div>
    </div>
    <!-- End of Container-->
  </body>
</html>
