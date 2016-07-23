<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="./css/style.css" type="text/css">
</head>
</head>
<body>
    <div class="adminTitle">
    Welcome to Admin
    </div>
    <h2><a href="admin_panel.php?view_page=view page">View page</a></h2>
    <h2><a href="admin_panel.php?view_menu=view menu">View menu</a></h2>
<?php
    include("includes/db.php");
    if(isset($_GET['view_page'])){
        


?>
    <table id="adminTable"border="2">
          <tr bgcolor="yellow">
          <td class="PageTitle" colspan="4"><h2>All pages Here</h2></td>
          </tr>

          <tr>
          <th>Page no:</th>
          <th>Page title:</th>
          <th>page content:</th>
          <th>Delete</th>
          </tr>
          
          <tr>
<?php
    $query = "SELECT * FROM pages";
    $run =mysql_query($query);
    while($row = mysql_fetch_array($run)){
            $p_id = $row['p_id'];
            $p_title = $row[1];
            $p_desc = $row[2];

    

?>          
          <td><?php echo $p_id;  ?></td>
          <td><?php echo $p_title;  ?></td>
          <td><?php echo $p_desc;  ?></td>
          <td>Delete</td>
         
      
          </tr>
<?php  } ?>
        
        </table>
      
<?php } ?>

</body>
</html>