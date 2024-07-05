<?php
include 'dataBase.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $username = $conn->real_escape_string($_POST['username']);
   $password = $conn->real_escape_string($_POST['password']);

   $sql = "SELECT password FROM users WHERE username = '$username'";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if(password_verify($password, $row['password'])){
        echo "Login successful!";
    } else {
        echo "Invalid password!";
    }
   } else {
    echo "No user found with that  username!";
   }

   $conn->close();
}
?>