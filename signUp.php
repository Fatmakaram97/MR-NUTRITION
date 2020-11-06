<?php

$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "competition";

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['mail'];
$psw=$_POST['password'];

$sqlinsert="insert into signup(fname,lname,mail,password) values('$fname',
'$lname','$email','$psw')";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // use exec() because no results are returned
    $conn->exec($sqlinsert);
    header('Location:  infoform.html');
    exit();
    }
catch(PDOException $e)
    {
    echo $sqlinsert . "<br>" . $e->getMessage();
    }

$conn = null;
?>
