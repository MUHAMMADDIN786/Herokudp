<?php 
  class Database {
    // DB Params
    private $host = 'ec2-52-201-124-168.compute-1.amazonaws.com';
    private $db_name = 'd55ma82evf7dd2';
    private $username = 'brjzxreswjhwwf';
    private $password = '2d8fe1726648d450dc5d0cb9123fe16bb96750ce342030f3ab3cc9485c60430e';
    private $conn;

    // DB Connect
    public function connect() {
      $this->conn = null;

      try { 
        $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo 'Connection Error: ' . $e->getMessage();
      }

      return $this->conn;
    }
  }