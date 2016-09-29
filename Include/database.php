<?php

  //
  // Database access
  //

  include_once ('config.php');

  class database {
    
    private $db;

    function __construct($username = USERNAME, $password = PASSWORD) {

      // Init connection
      $this->db = new mysqli(ini_get(HOST), $username, $password)
      or die('Could not connect: ' . mysql_error());
      
      // Set default database
      $this->db->select_db(DATABASE);

    }
    
    // Change database
    function select_db($database) {
      
      $this->db->select_db($database);
      
    }
    
    // Execute new query
    function query($query) {

      return $this->db->query($query);
      
    }
    
    function prepare($query) {
      
      // prepare new query
      return $this->db->prepare($query);
      
    }
    
    // Execute new query and return the result as array
    function query_array($query) {

      // Execute query
      $result = $this->db->query($query);
      
      // Validate returned data
      if (!$result) {
        
        echo('Invalid query, or no data returned.');
        exit;
        
      }

      // Convert returned data
      $array = array();
      while($row = $result->fetch_array()) {
      
        $array[] = $row;
        
      }
      
      // Free data
      $result->free();
      
      return $array;
      
    }
    
    // Execute query and print result (debug purpose)
    function query_print($query) {

      // Execute query
      $array = $this->query_array($query);
    
      // Print result
      print_r($array);

    }
    
    function error() {
      
      return $this->db->error;
      
    }
    
    // close database
    function close() {
      
      $this->db->close();
      
    }
    
  }
  
  global $database;
  $database = new database();
  
?>