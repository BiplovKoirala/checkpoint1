<?php //include_once('header.php'); ?>
<?php //include_once('navbar.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>Login</title>
</head>
<body>

   <h2 style="color:red;"><?php echo validation_errors(); ?></h2>
  <?php echo form_open('Check'); ?>

  <div class="container">
    <div class="row">
     <div class="col-xs-8 col-md-4">
      <form class="form-signin mg-btm">
        <h3 class="heading-desc"> Login</h3>
          <div class="main">  
            <label>Username</label>    
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username" autofocus>
            </div>
            <label>Password</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" id="password" name="password" class="form-control" placeholder="Password">
            </div><br/>
            <label>Forgot Password?? Contact Admin</label>
            <div class="row">
              <div class="col-xs-6 col-md-6">         
              </div>
              <div class="col-xs-6 col-md-6 pull-right">
                <button type="submit" value="Login" class="btn btn-large btn-success pull-right">Login</button>
              </div>
            </div>
          </div>
          <span class="clearfix"></span>  
          <div class="login-footer">
            <div class="row">
              <div class="col-xs-6 col-md-6">
                <div class="left-section">
                  <a href="<?php echo site_url('Users/register') ?>">Create an account</a>
                </div>
              </div>
              <div class="col-xs-6 col-md-6 pull-right">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
<?php //include_once('footer.php'); ?>