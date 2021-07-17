<?php

  date_default_timezone_set('Asia/Kolkata');
  $page = $_SERVER['PHP_SELF'];
  $sec = '1';

  header('Refresh: 1; url= /clock.php');
  echo date('h:i:s A')."<br>";
  echo date("l, F jS Y h:i:s A");

?>