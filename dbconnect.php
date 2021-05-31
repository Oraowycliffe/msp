 
<?php
//connection variables

online db
$servername = "remotemysql.com";
$database = "9lrVvHDYR9";
$username = "9lrVvHDYR9";
$password = "L3tgLXbWgj";

//localhost test
// $servername = "localhost";
// $database = "msp_database";
// $username = "root";
// $password = "";

//declare the variables
$code=$_POST['code'];
$id_number =$_POST['id_number'];
$telephone=$_POST['telephone'];
$kin = $_POST['kin'];
$kin_telephone = $_POST['kin_telephone'];
//m/d Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "";
 
$sql = "INSERT INTO user_kin (code, id_number, telephone, kin, kin_telephone) VALUES ('$code', '$id_number','$telephone', '$kin','$kin_telephone')";

if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>