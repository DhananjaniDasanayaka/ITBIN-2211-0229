<?php
$con=mysqli_connect("localhost","root","","db_connection");
//check connection
if(mysqli_connect_errno())
{
    echo "failed to connection to MySQL:".mysqli_connect_error();
}

//create table
$sql="CREATE TABLE appointment(name CAHR(20),email CHAR(20),number INT(10),date(DATE)";

//ececute query
if(mysqli_query($con,$sql))
{
    echo "appointment successfully";
}
else
{
    echo "failed appointment" .mysqli_error($con);
}
?>