<?php
session_start();
 ?>
<!DOCTYPE html>
<html>

<head>
  <title> mini project</title>
  <link rel="stylesheet" href="html/css/indexcss.css">
  <link rel="stylesheet" href="html/css/header.css">
</head>

<body>
    <header>
      <ul>
        <li class="active-header"><a href="index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Help</a></li>
        <?php
        if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
            echo "<li><a href=\"html/php/signout.php\">Sign out ", $_SESSION['username'], "</a></li>";
        } else {
            echo "<li><a href=\"html/signin.html\">Sign In</a></li>";
            echo "<li><a href=\"html/signup.html\">Create an Account</a></li>";
        }
        ?>
      </ul>
    </header>

    <div class="category1">
      <ul>
        <li><a href="#">Science</a></li>
        <li><a href="#">Health</a></li>
        <li><a href="#">Games</a></li>
        <li><a href="#">Fashion</a></li>
        <li><a href="#">Politics</a></li>
        <li><a href="#">Photography</a></li>
        <li><a href="#">Management</a></li>
        <li><a href="#">Music</a></li>
        <li><a href="#">Entertainment</a></li>
        <li><a href="#">Medical</a></li>
        <li><a href="#">Career</a></li>
        <li><a href="#">General Knowledge</a></li>
        <li><a href="#">Machinery</a></li>
      </ul>
    </div>

    <div class="title">
      <h1>ANTWOORD</h1><br />
      <p>There is no secrets to success, it is the result of preparation, hardwork <br /> and learning from failure. <br />Creativity is a type of learning process where the teacher and <br /> pupil are located in the same individual.<p>
    </div>

    <div class="searchbox">
      <i class="fa fa-search" aria-hidden="true"></i>
      <input type="text" name="" placeholder="Search anything...">
    </div>

</body>
</html>
