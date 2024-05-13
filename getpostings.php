<?php

$severname="localhost";
$uname="root";
$pass="";
$database="cems";

$con=new mysqli($severname,$uname,$pass,$database);
if($con->connect_error){
    die("Failed".$con->connect_error);
}

$year=$_POST['n_year'];
error_log($year);
$q="select postname from postings where qualify_year='$year'";

$res=mysqli_query($con,$q);

$data[]=array();

while($row=$res->fetch_assoc()){
    $data[]=$row['postname'];
}

echo json_encode($data);



?>