<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "competition";

session_start();
$mail=$_POST['mail'];
$psw=$_POST['psw'];

if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['mail'] ) && isset( $_POST['psw'] ) ) {
        // Getting submitted user data from database

        try {

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $stmt = $conn->prepare("SELECT * FROM signup WHERE mail=? AND password=?");
        $stmt->bindParam(1, $mail, PDO::PARAM_STR);
        $stmt->bindParam(2, $psw, PDO::PARAM_STR);

        $stmt->execute();
        // set the resulting array to associative
     $stmt->setFetchMode(PDO::FETCH_ASSOC);

     $allRows = $stmt->fetchAll();
     foreach($allRows as $row) {
       print_r( array_values( $row ));
       echo "<br>";
             foreach($row as $x => $x_value) {
               
               header('Location:  food.php');
               exit();
      }
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
echo "Please make sure that you made a registration before.";
echo "<br>";
echo "If you aleardy made a registration then make sure that first name & password are correct.";
}
}
?>
