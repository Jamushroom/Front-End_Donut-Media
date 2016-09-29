<!-- Header menu -->
<header data-minimized='false' >

  <div id='header-minimized' class='hidden' >
  
    <div id='header-minimized-button' >
    
      <span class='minimized-button-icon'>.</span >
      <span class='minimized-button-icon'>.</span >
      <span class='minimized-button-icon'>.</span >
      
    </div >
    
    <div id='header-minimized-links'> </div >
  
  </div >
  
  <div class="header-button" >
    <a id='header-index' href="<?=PATH?>index" > 
      <text >Home</text > 
    </a >
  </div >

  <div class="header-button" >
    <a id='header-questioncategories' href="<?=PATH?>questioncategories" > 
      <text >Questionlist</text >
    </a >
  </div >
  
  <div class="header-button" >
    <a id='header-info' href="<?=PATH?>info" >
      <text >Info</text>
    </a >
  </div >
  
  <?php

    /*if ($login) {

      try {
        
        # GET request in v5a
        $response = $fb->get('/me');
        $value = $response->getDecodedBody();

      } catch (Exception $e) {
        
        $login = false;
        
      }
      
    }*/
    
    if ($login) {
    
  ?>
  
      <!-- username -->
      <div id='user' class='header-button header-right' >
     
        <div id='user-name' >
          <?=$_SESSION['username']?>
        </div >
        
        <div id='user-info' >
          

            <a href='<?=PATH?>user' > 
              <text >Profile</text >
            </a > 
          

            <a id='user-logout'> 
              <text >Logout</text >
            </a >

        
        </div >
        
      </div >

  <?php 
  
    } else {

  ?>
      
      <!-- login button -->
      <div class='header-button header-right' >
        <a id='header-login' href='<?=PATH?>login' >
          <text >Login</text >
        </a >
      </div >
      
  <?php
  
    }

  ?>

</header>

<!-- underline active page button -->
<script type='text/javascript'> 

  <?php if (isset($page)) { ?>
  // highlight current page
  $('#header-<?=$page?>').css({'text-decoration':'underline'});
  <?php } ?>

</script>