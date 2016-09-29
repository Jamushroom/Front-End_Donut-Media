<?php
  
  //
  // Status file
  // Check if user is logged in and set variables accordingly
  //
  
  $path = dirname(__FILE__);

  include_once($path . '/functions.php');
  include_once($path . '/database.php');

  // Request secure session data
  sec_session_start();

  // Include the required dependencies.
  require_once($path . '/vendor/autoload.php');

  $login = false;
  $admin = false;

  // check if logged in
  if(using_facebook()) {

    $login = login_check_facebook();

  } else {

    $login = login_check($database);

  }
  
  // set rank
  if (isset($_SESSION['user_rank'])) {
    
    if ($_SESSION['user_rank'] = 'admin') {
      
      $admin = true;
      
    }
    
  }

?>