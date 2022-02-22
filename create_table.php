<?php
$connection=new mysqli("localhost","root","","firefox2");
if ($connection->connect_error){
    die("failed to connect to the database".$connection->connect_error);
}
//Create a table
$tengenezatable="CREATE TABLE darasa(
    No INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Firstname VARCHAR(50) NOT NULL 
    Lastname VARCHAR(50) NOT NULL 
    Email VARCHAR(50),
    Reg-date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP 
)";
if ($connection->query($tengenezatable)===TRUE){
    echo "Successfully created table";
}else{
    echo "Failed to create table".$connection->error;
}
$connection->close();