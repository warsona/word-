<?php
if(empty($_POST["name"])){
    die("name must be inputed");
}
if(strlen ($_POST["password"])<8){
die("password must be more or equal to 8");
}
if($_POST["password"]!==$_POST["password2"]){
die("password don't match");
}
$servername = "localhost";
$username = "root";
$password = "";
$db = "first_database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
print_r($_POST);
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
// $password2 = $_POST["password2"];




$sql = "INSERT INTO  user (name, email, password)
        VALUES ('$name','$email','$password')";
if (mysqli_query($conn, $sql)) {
  echo "New Record added successfully";
}
else {echo "Error: " . $sql . "<br>" . mysqli_error($conn);}

mysqli_close($conn);
        // $stmt = $mysqli->stmt init();

        // $stmt ->prepare($sql);
?>