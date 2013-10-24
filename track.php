<?php
  $feeling_description = filter_var($_POST['feeling_description'], FILTER_SANITIZE_STRING);
  $doing_before = filter_var($_POST['doing_before'], FILTER_SANITIZE_STRING);

  if (!($_POST && $doing_before && $feeling_description)){
    header('HTTP/1.0 403 Forbidden');
    die();
  }

  $log_string = date("Y-m-d H:i:s") . "\t" .
    $feeling_description . "\t" .
    $doing_before . "\n";


  file_put_contents('./dread.log', $log_string , FILE_APPEND);

 ?>