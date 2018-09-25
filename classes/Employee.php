<?php

class Employee extends DB {

  public function get_all() {
    $sql = "SELECT * FROM employee";
    $result = $this->connect()->query($sql);
    if($result->rowCount() > 0) {
      while ($row = $result->fetch()) {
        $data[] = $row;
      }
      return $data;
    }  
  }

  public function get_by_id($id) {
    $sql = "SELECT * FROM employees WHERE id=?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
    $result = $stmt->fetch();
    return $result;
  }
  
  public function insert($fields) {
    $columns = implode(', ', array_keys($fields));
    $pholders = implode(", :", array_keys($fields));
    $sql = " INSERT INTO employees ($columns) VALUES(:".$pholders.")";
    $stmt = $this->connect()->prepare($sql);
    foreach($fields as $key => $value) {
      $stmt->bindValue(':'.$key,$value);
    }
    if($stmtExec = $stmt->execute()) {
      redirect_to('index');
    }
  }

  public function save($fields,$id) {
    $st = '';
    $count = 1;
    $total = count($fields);
    foreach($fields as $key => $value) {
      if($count === $total) {
        $set = "$key = :".$key;
        $st = $st.$set;
      } else {
        $set = "$key = :".$key.", ";
        $st = $st.$set;
        $count++;
      }
    }
    $sql = '';
    $sql .= "UPDATE employees SET ".$st;
    $sql .= " WHERE id = ".$id;
    $stmt = $this->connect()->prepare($sql);
    foreach($fields as $key => $value) {
      $stmt->bindValue(':'.$key, $value);
    }
    if($stmtExec = $stmt->execute()) {
      redirect_to('index');
    }
  }

  public function delete($id) {
    $sql = "UPDATE employees SET is_deleted=? WHERE id=?";
    $stmt = $this->connect()->prepare($sql);
    if($stmtExec = $stmt->execute([1, $id])) {
      redirect_to('index');
    }
  }
}
