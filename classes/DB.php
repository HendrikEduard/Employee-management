<?php

class DB {
 
  private  $server = "mysql:host=127.0.0.1;dbname=Ghp02FgpuqfbeO;charset=utf8mb4";
  private  $user = "never_use_root";
  private  $pass = "never_use_password";

  private $options  = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_EMULATE_PREPARES => false];

  protected $db;

  public function connect() {
    $this->db = new PDO($this->server, $this->user,$this->pass,$this->options);
    return $this->db;
  }
}
