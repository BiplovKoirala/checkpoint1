<?php //include_once('adminheader.php'); ?>
<html>
	<head>
		<title>User Dashboard</title>
        <center><h1>User Management Section</h1></center>
    </head>
	
    <body>

<div class="container">
  <div class="row">
    <div class="col-md-6">

		<form action=" <?php echo site_url('User_management/insertdata'); ?>" method="post">
        	<center><table border="2">
       
      <tr>
       <td>First Name:</td>
       <td>
          <input type="text" name="fname" value="<?php echo  !($add) ? $r->fname : "";?>" required />
      </td>
  </tr>
  <tr>
    <td>Last Name:</td>
    <td>
        <input type="text" name="lname" value="<?php echo  !($add) ? $r->lname : "";?>" required />
    </td>
</tr>
<tr>
   <td>Email:</td>
   <td>
      <input type="email" name="email" value="<?php echo  !($add) ? $r->email : "";?>"  required />
  </td>
</tr>
<tr>
   <td>Username:</td>
   <td>
      <input type="text" name="username" value="<?php echo  !($add) ? $r->username : "";?>" required />
  </td>
</tr>
<tr>
   <td>Password:</td>
   <td>
      <input type="password" name="password" value="<?php echo  !($add) ? $r->password : "";?>" required />
  </td>
</tr>
                <tr>
                	<td colspan="2">
                    	<center><input type="submit" value="submit" name="submit" /></center>
                    </td>
                </tr>
            </table>
          </center>

</div>
</div>
</div>

            <center>
<h3> List of Users </h3>

          <table border="2">
            <thead>
            	<th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>ACTION</th>               
            </thead>
            <tbody>
					<?php 
						foreach($this->User_model->viewdata() as $row)
						{
							echo "<tr>
								<td> $row->id </td>
								<td> $row->fname </td>
                                <td> $row->lname </td>
								<td> $row->email </td>
								<td> $row->username </td>
                                <td><a href='".site_url('User_management/edit/'.$row->id)."'>Edit</a> | <a href='".site_url('User_management/delete/'.$row->id)."'>Delete</a></td>
								</tr>";
                    
						}
					
					?>
            </tbody>
            </table></center>
        </form>
    </body>
</html>

<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}