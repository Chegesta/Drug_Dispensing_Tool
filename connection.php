<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "drugDispenserDB";

$conn = new mysqli($servername,$username,$password,$dbname);
/*if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}echo "Connected successfully <br>";*/


//uncomment to create database
/*$sql = "CREATE DATABASE drugDispenserDB";
if($conn->query($sql) === TRUE){
    echo "Database created successfully <br>";
} else {
    echo "Error creating database: ".$conn->error;
}*/

// uncomment to create table
/*$sql = "CREATE TABLE Patients (
    SSN INT(9) UNSIGNED PRIMARY KEY,
    Names VARCHAR(50) NOT NULL,
    Gender VARCHAR(15) NOT NULL,
    Allergies VARCHAR(100),
    HeightinCm INT(3),
    WeightinKg INT(3),
    PatientAddress VARCHAR(50),
    DateOfBirth DATE NOT NULL,
    UserPassword VARCHAR(30) NOT NULL
)";

if($conn->query($sql) === TRUE){
    echo "Table created successfully";
}else {
    echo "Error creating table: " .$conn->error;
}*/



?>