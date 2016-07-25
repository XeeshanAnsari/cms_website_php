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
  <form action="insert_page.php" method="post">
     <table id="insertTable" border="3">
       <tr>
         <td colspan="3" bgcolor="gray"><h2>Insert New Page Here</h2></td>        
       </tr>
       <tr>
          <th>Page Title</th>
          <td> <input type="text" name='page_title' >  </td>
       </tr>          
       <tr>
          <th>Page Content</th>
          <td> <textarea name="page_content"  cols="20" rows="10"></textarea></td>
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
          $p_title = $_POST['page_title'];
          $p_content = $_POST['page_content'];


          $query="insert into pages (p_title,p_desc) value('$p_title','$p_content') ";
          if(mysql_query($query)){
               echo "<script> window.open('admin_panel.php?inserted=page has been inserted!','_self')</script>";

   
          }
    }
    
 
?>
