<?php

class database_credentials {
  
  private $host;
  private $uname;
  private $pass;
  private $db_name;
  
  function set_db_credentials($arg1, $arg2, $arg3, $arg4) {
    
    $this->host = $arg1;
    $this->uname = $arg2;
    $this->pass = $arg3;
    $this->db_name = $arg4;
    
  }
  
  function get_db_credentials() {
    
    $this->host;
    $this->uname;
    $this->pass;
    $this->db_name;
    
  }
  
}

?>
