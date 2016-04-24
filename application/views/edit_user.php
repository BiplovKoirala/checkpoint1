<html>
<head>
  <title>Insert</title>
  <center><h1>User Management Section</h1></center>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
  <form action=" <?php echo site_url('User_management/update'); ?>" method="post">
   <center><table border="2">
       <tr>
           <td>ID:</td>
           <td>
              <input type="text" name="id" value="<?php echo $r->id;?>" readonly/>
          </td>
      </tr>
      <tr>
       <td>First Name:</td>
       <td>
          <input type="text" name="fname" value="<?php echo $r->fname;?>" />
      </td>
  </tr>
  <tr>
    <td>Last Name:</td>
    <td>
        <input type="text" name="lname" value="<?php echo $r->lname;?>" />
    </td>
</tr>
<tr>
   <td>Email:</td>
   <td>
      <input type="text" name="email" value="<?php echo $r->email;?>" />
  </td>
</tr>
<tr>
   <td colspan="2">
       <center><input type="submit" value="submit" name="submit" /></center>
   </td>
</tr>
</table></center>

</form>
</body>
</html>
</div>
</div>
</div>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 10px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}