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
    <h2><?php echo @$_GET['deleted'] ; ?></h2>
    <h2><?php echo @$_GET['inserted'] ; ?></h2>
    </div>
    <h2><a href="insert_page.php">Insert page</a></h2>
    <h2><a href="admin_panel.php?view_page=view page">View page</a></h2>
    <h2><a href="insert_menu.php">Insert Menu</a></h2>
    <h2><a href="admin_panel.php?view_menu=view menu">View menu</a></h2>
<?php
    include("includes/db.php");
    if(isset($_GET['view_page'])){
        


?>
    <table id="adminPageTable"border="2">
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
            $p_desc = substr($row[2],0,200);

    

?>          
          <td><?php echo $p_id;  ?></td>
          <td><?php echo $p_title;  ?></td>
          <td><?php echo $p_desc;  ?></td>
          <td><a href ='delete_page.php?del_page=<?php echo $p_id ?>'>Delete</a></td>
         
      
          </tr>
<?php  } ?>
      
<?php  } ?>


      </table>

<?php  
    if(isset($_GET['view_menu'])){

    
?>     

     <table id="adminMenuTable"border="2">
        <tr bgcolor='yellow'>
        <td class="PageTitle" colspan="3"><h2>All Menu Here</h2></td>
        </tr>
        <tr>
          <th>Menu NO: </th>
          <th>Menu Title: </th>
          <th>Delete</th>
        </tr>
        <tr>
<?php
     $query="SELECT * FROM menus";
     $run = mysql_query($query);
     while ($row = mysql_fetch_array($run)) {
         $m_id = $row['m_id'];
         $m_title = $row['1'];
?>
          <td><?php  echo $m_id ; ?></td>
          <td><?php  echo $m_title ; ?></td>
          <td><a href='delete_menu.php?del_menu=<?php echo $m_id ; ?>'>Delete</a></td>
        </tr>          
<?php  } ?>
<?php  } ?>
     </table>

</body>
</html>