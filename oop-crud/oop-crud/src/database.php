<?php

  class Database
  {

    // Property
    public  $hostname = 'mysql_database',
            $username = 'root',
            $password = 'root', 
            $database = 'docker_php',
            $connect;


    // Method Construct
    public function __construct()
    {
      $this->connect = mysqli_connect($this->hostname, $this->username, $this->password);

      mysqli_select_db($this->connect, $this->database);
    }


    // Method Wajib
    public function tampilData()
    {
      $data = mysqli_query($this->connect, 'SELECT * FROM user');

      $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);

      return $rows;
    }

    public function tambahData(string $nama, string $alamat, string $no_hp)
    {
      mysqli_query($this->connect, "INSERT INTO user VALUES (NULL, '$nama', '$alamat', '$no_hp')");
    }
    
  }