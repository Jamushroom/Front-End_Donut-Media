<?php
  
  //
  // Html head section
  // Set meta values and include common scripts
  //
  
  $path = dirname(__FILE__);
  include_once($path . '/status.php');
  
  // Debug, show errors
  error_reporting( E_ALL );
  ini_set( "display_errors", 1 );
  
?>

<head>
  
  <title>
  
    <?php if (isset($title)) {
      echo($title); 
    } else { ?>
      missing title
    <?php } ?>
    
  </title>

  <meta charset="utf8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?=PATH?>css/smartcityservice.css">
  <script src="<?=PATH?>js/jquery-2.2.0.min.js"></script>
  <script src="<?=PATH?>js/header.js"></script>
  
</head>