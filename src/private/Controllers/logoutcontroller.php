<?php
session_start();
include  "../config/config.php";

// destroying session of particular user 
if(isset($_POST["logout"]))
{
  session_unset();
  session_destroy();
  echo "<script>window.location.href='../Views/userloginform.php'</script>";
}
?>