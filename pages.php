<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="./css/style.css" type="text/css">
</head>
<body>

   <table class="mainTable" border="2" >
    <!-- Title of website -->
     <tr >
       <td colspan="7"><?php include("includes/header.php"); ?></td>
     </tr>
     
      <!-- navigation bar  start -->
       
          <tr >
        
<?php
  include("includes/db.php");
  $query= "SELECT * FROM menus";
  $run = mysql_query($query);
  while($row = mysql_fetch_array($run)){
    $m_title = $row[1];
    echo "<td id='menus' width='100'><a href='pages.php?page=$m_title'>$m_title</a></td>";

  }

?>    
          </tr>
       
      <!-- content of website -->
     <tr>
       
<?php
    $page =$_GET['page'];
    $query = "SELECT * FROM pages where p_title='$page'";
    $run = mysql_query($query);
    while($row = mysql_fetch_array($run)){
        echo "<td colspan='7' class='bloggerContect'>" . "<h2>" . $row['p_title'] . "</h2>" . $row['p_desc'] . "</td>";

    }

?>       
      
     </tr>

      <!-- footerof website -->
     <tr>
       <td id="footer" colspan="7">Created by: XeeshanAnsari</td>
     </tr>

      
   
   </table>

    
</body>
</html>