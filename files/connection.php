<?php

// this is connention with database

$host        = "localhost";
$usernme     ="root";
$password    = "";
$d_basename  = "users";

$conn = mysqli_connect($host,$usernme,$password,$d_basename);

try{
if(!$conn){
  throw new Exception("ther is error");
}
else{
    echo "the connection is Done......";
}

}catch(Exception $e){
    echo " error  => " . $e -> getMessage();

}