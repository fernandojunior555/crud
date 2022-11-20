<?php 
    $path = '../conf/conf.inc.php';
    if (file_exists($path))
      include_once($path);
    else{
      $path = '../../conf/conf.inc.php';
      if (file_exists($path))
        include_once($path); 
     }
?>

