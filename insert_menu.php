<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Page</title>
</head>
<body>
<?php
    include("includes/db.php");
    include("admin_panel.php");

?>
  <form action="insert_menu.php" method="post">
     <table id="insertTable" border="3">
       <tr>
         <td colspan="3" bgcolor="gray"><h2>Insert New Menu Here</h2></td>        
       </tr>
       <tr>
          <th> Menu Name</th>
          <td> <input type="text" name='menu' >  </td>
       </tr>          
       <tr>
          <td colspan="3"> <input type="submit" name="submit" value="submit" >  </td>
       </tr>
     
     </table>
  
  </form>
    
</body>
</html>



<?php

    if(isset($_POST['submit'])){
          $menu = $_POST['menu'];

          $query="insert into menus (m_title) value('$menu') ";
          if(mysql_query($query)){
               echo "<script> window.open('admin_panel.php?inserted=menu has been inserted!','_self')</script>";

   
          }
    }
    
 
?>