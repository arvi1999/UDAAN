<?php
  session_start();
  session_destroy();
  header('location:http://localhost/udaan/udaan_index.php');
?>