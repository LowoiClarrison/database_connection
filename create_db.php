<?php
require 'db_connection.php';
//create databases
$tengenezadb = "CREATE DATABASE firefox2";
if ($connection->query($tengenezadb)===TRUE) {
    echo "Successfully created databases.";
} else {
    echo "Failed to create database";
}
$connection->close();