<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "competition";

$mail=$_POST['email'];
$weight=$_POST['weight'];
$height=$_POST['height'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$objective=$_POST['objective'];
$Dailyy=$_POST['Dailyy'];

if ($gender=="male")
{
  $calories= 10*$weight+ 6.25*$height-5*$age+5;
}

if($gender=="female")
{
  $calories= 10*$weight+ 6.25*$height-5*$age-161;
}


if($objective=="loss weight")
{
      header('Location:  lossWeight.php');
}

if($objective=="increase muscles")
{
      header('Location:  IncMuscles.php'); /// hena page bassant
}

if($objective=="Balance(fixed weight)")
{
      header('Location:  food.php');
}

$sqlinsert="insert into info(mail,weight,height,age,gender,objective,dailyActivity,calories) values('$mail','$weight',
'$height','$age','$gender','$objective','$Dailyy','$calories')";




try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // use exec() because no results are returned
    $conn->exec($sqlinsert);
    exit();
    }
catch(PDOException $e)
    {
    echo $sqlinsert . "<br>" . $e->getMessage();
    }

$conn = null;
?>
