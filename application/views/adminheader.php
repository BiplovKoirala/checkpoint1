<div class="row">
	<div class="span12">
<h1 style="text-align:center">Welcome To User Dash Board -> Info Tech Group</h1>
	</div>
</div>



<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/bootstrap/css/bootstrap.css' ?>" />
  <script src="assets/js/1.11.3/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
<div class="col-nd-12">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">InfoTech <?php //echo $username; ?></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home">Dashboard</a></li>
			<li><a href="<?php echo site_url('User_management'); ?>">User Management</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo site_url('home/logout') ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  


</body>
</html>





