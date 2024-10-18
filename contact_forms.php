<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Process the data (e.g., insert into database or send an email)
    echo "Appointment request received for: " . htmlspecialchars($name) . ", Email: " . htmlspecialchars($email);
} else {
    echo "No data received.";
}

//$con = mysqli_connect('localhost','database_user','database_password','database');

$con = mysqli_connect('localhost','root','','database');

//check connection
if(!$con){
    die("connection failed:" .mysqli_connect_error());
}

//get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$date = $_POST['date'];

//database insert SQL code
$sql = "INSERT INTO 'appointment'('name','email','number','date') VALUES ('$name','$email','$number','$date')";

//insert into database
$rs = mysqli_query($con, $sql);

if($rs)
{
    echo "contact record inserted";
}
else{
    echo "error:" .mysqli_error($con);
}

//close the database connection
mysqli_close($con);

?>