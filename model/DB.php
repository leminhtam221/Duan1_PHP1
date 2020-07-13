<?php
function connection(){
   $servername = "localhost";
   $username = "root";
   $dbname = "courcity";
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
   $stmt = $conn->prepare($query);
   $stmt->execute();
   return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// lấy 1 record
function find($query){
   $conn = connection();
   $stmt = $conn->prepare($query);
   $stmt->execute();
   return $stmt->fetch(PDO::FETCH_ASSOC);
}

/* hàm exec 
* INSERT UPDATE $c = 0
* DELETE $c = 1
*/
function execSQL($sql,$c){
   $conn = connection();
   if($c===1){
      $stmt = $conn->prepare($sql);
      $stmt->execute();
   }else{
      $conn->exec($sql);
   }
}
