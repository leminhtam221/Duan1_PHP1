<?php
function connection(){
   $servername = "localhost";
   $username = "root";
   $dbname = "";
   $password = "";
   $charset = "utf8";

   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $conn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES utf8");
      return $conn;
   }catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
   }
}
// lấy nhiều record
function findMultiple($query){
   $conn = connection();
   $stmt = $conn->query($query);
   $result = $stmt->fetchALl(PDO::FETCH_ASSOC);
   return $result;
}
// lấy 1 record
function find($query){
   $conn = connection();
   $stmt = $conn->query($query);
   $result = $stmt->fetch(PDO::FETCH_ASSOC);
   return $result;
}
function insert($sql){
   $conn = connection();
   $conn->exec($stmt);
}




