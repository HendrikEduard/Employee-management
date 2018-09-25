<?php

class DB {
 
  private $dsn = "mysql:host=127.0.0.1;dbname=Ghp02FgpuqfbeO;charset=utf8mb4";
  private $user = "root";
  private $pass = "password";
  private $options  = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, 
                        PDO::ATTR_EMULATE_PREPARES => false
  ];

  protected $db;

  public function connect() {
    $this->db = new PDO($this->dsn, $this->user,$this->pass,$this->options);
    return $this->db;
  }
}
