<?php
   include("includes/db.php");
   $delete_menu = $_GET['del_menu'];
   $query = "DELETE FROM menus WHERE m_id='$delete_menu'"; 

   if(mysql_query($query)){
       echo "<script> window.open('admin_panel.php?deleted=A menu Has Been Deleted!','_self')</script>";

   }

?>