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
       <td id="content" colspan="7">
       <h2>welcome my website</h2>
       </td>
     </tr>

      <!-- footerof website -->
     <tr>
       <td id="footer" colspan="7">Created by: XeeshanAnsari</td>
     </tr>

      <!-- Title of website -->
     <tr>
       <td></td>
     </tr>
   
   </table>

    
</body>
</html>