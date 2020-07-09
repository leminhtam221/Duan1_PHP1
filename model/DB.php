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
function findMultiple($sql){
   $conn = connection();
   $stmt = $conn->query($sql);
   $result = $stmt->fetchALl(PDO::FETCH_ASSOC);
   return $result;
}
// lấy 1 record
function find($sql){
   $conn = connection();
   $stmt = $conn->query($sql);
   $result = $stmt->fetch(PDO::FETCH_ASSOC);
   return $result;
}
function insert($sql){
   $conn = connection();
   $conn->exec($stmt);
}

function delete($sql){
   $conn = connection();
   $conn->exec($sql);
}

function update($sql){
   $conn = connection();
   $stmt = $conn->prepare($sql);
   $stmt->execute();
}