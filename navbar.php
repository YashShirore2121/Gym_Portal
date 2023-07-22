<?php
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: admin/login.php');
  }
?>

<nav class="navbar">
  <div class="container">

    <div class="navbar-header">
      <button class="navbar-toggler" data-toggle="open-navbar1">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a href="#">
        <h4>GYM</h4>
      </a>
    </div>

    <div class="navbar-menu" id="open-navbar1">
      <ul class="navbar-nav">
        <li class="active"><a href="dashbord.php">Home</a></li>
        <li class="navbar-dropdown">
          <a href="#" class="dropdown-toggler" data-dropdown="my-dropdown-id">
          Members <i class="fa fa-angle-down"></i>
          </a>
          <ul class="dropdown" id="my-dropdown-id">
            <li><a href="connection.php">view members</a></li>
          </ul>
        </li>
        <li class="navbar-dropdown">
          <a href="#" class="dropdown-toggler" data-dropdown="blog">
           overview <i class="fa fa-angle-down"></i>
          </a>
          <ul class="dropdown" id="blog">
            <li><a href="permonth.php">member per month</a></li>
            <li><a href="6month.php">member per 6month </a></li>
            <li><a href="1year.php">member per year</a></li>
            <li><a href="ends.php">Ending of subscription</a></li>
          </ul>
        </li>
        <li> <a href="admin/index.php?logout='1'">Logout</a></li>

      </ul>
    </div>
  </div>
</nav>