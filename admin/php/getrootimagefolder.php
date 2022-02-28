<?php
  $rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
  $output_dir = "$rootDir/bonitas/Images/";
  echo json_encode($output_dir); 
?>