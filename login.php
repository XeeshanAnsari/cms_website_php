<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<body>

  <form action="" method="post">
     <table id="LoginTable" border="3">
       <tr>
         <td colspan="3" bgcolor="gray"><h2>Admin Login</h2></td>        
       </tr>
       <tr>
          <th>Name</th>
          <td> <input type="text" name='admin_name' >  </td>
       </tr>          
       <tr>
          <th>Password</th>
          <td><input type="password" name='admin_pass' >  </td>
       </tr>
       <tr>
          <td colspan="3"> <input type="submit" name="submit" value="Login" >  </td>
       </tr>
     
     </table>
  
  </form>
    <h2><?php  echo @$_GET['logout'] ; ?></h2>
</body>
</html>


<?php
     include("includes/db.php");
     if(isset($_POST['submit'])){

         $admin_name = $_POST['admin_name'];
         $admin_pass = $_POST['admin_pass'];
         $query = "SELECT * FROM admin_login where user_name='$admin_name' and user_pass='$admin_pass' ";
         $run =mysql_query($query);
         if(mysql_num_rows($run) ){
             echo"<script>window.open('admin_panel.php?logged=You Are Logged In Successfully','_self')</script>";
                           
         }else{
             echo "User And Pasword are not correct";
         }
           
     }
?>