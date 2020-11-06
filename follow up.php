<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "competition";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM info ORDER BY mail ";
$res = mysqli_query($conn, $sql);
while($arr = mysqli_fetch_assoc($res)) {
//  echo "{$arr['mail']}";
echo "msg sent";




  //$email=$_POST['mail'];

// the message.... 3aizen n5liha mrbota bnzam kol user!!
$msg =  "Hello!\nHow are you doing in your plan? Hope all is going well :)\nTip of the day: Laughing is good for the heart and can increase blood flow by 20 percent. \nKeep following your plan and be healthy :D"
;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
$to="{$arr['mail']}";
$headers = "From: Nutritionguard@gmail.com";
mail($to,"Your progress!",$msg,$headers);
}
?>
