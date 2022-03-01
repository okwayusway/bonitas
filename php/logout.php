<?php
   session_start();
   unset($_SESSION["userid"]);
   header('Refresh: 1; URL = ../login.php');
  
?>