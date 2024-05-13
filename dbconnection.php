<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$severname="localhost";
$uname="root";
$pass="";
$database="cems";



$con=new mysqli($severname,$uname,$pass,$database);
if($con->connect_error){
    die("Failed".$con->connect_error);
}

}
?>