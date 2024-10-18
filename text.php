<?php

$con = mysqli_connect("localhost", "root", "", "hospital_db");
session_start();


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

//get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$date = $_POST['date'];

//database insert SQL code
$sql = "INSERT INTO 'contact_form'('id','name','email','number','date') VALUES ('0','$name','$email','$number','$date')";

//insert into database
$rs = mysqli_query($con, $sql);

if($rs)
{
    echo "contact record inserted";
}
//database coonection code
//$con = mysqli_connect('localhost','database_user','database_password','database');

$con = mysqli_connect('localhost','root','','hospital_db');

//get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$date = $_POST['date'];

//database insert SQL code
$sql = "INSERT INTO 'contact_form'('id','name','email','number','date') VALUES ('0','$name','$email','$number','$date')";

//insert into database
$rs = mysqli_query($con, $sql);

if($rs)
{
    echo "contact record inserted";
}

$con = mysqli_connect('localhost','root','','hospital_db');

//get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$date = $_POST['date'];

//database insert SQL code
$sql = "INSERT INTO 'contact_form'('id','name','email','number','date') VALUES ('0','$name','$email','$number','$date')";

//insert into database
$rs = mysqli_query($con, $sql);

if($rs)
{
    echo "contact record inserted";
}
?>