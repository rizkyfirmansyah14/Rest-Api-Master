<?php 
Class dbObj {
    var $servername ="localhost";
    var $username ="root";
    var $password ="";
    var $dbname ="db_test";
    var $conn;
 function getConnstring(){
     $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname) or
     die("Connection Failed : " . mysqli_connect_error());

     if (mysqli_connect_errno()) {
         printf("Connect Failed: %s\n", mysqli_connect_error());
         exit();
     } else {
         $this->conn = $conn;
     }
     return $this->conn;
 }
}
?>