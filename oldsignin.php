<?php

// 1. Defining only POST Request
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 2. Connecting DB
    $conn = mysqli_connect("localhost", "root", "", "ppt");

    // 3. Checking Connection
    if ($conn === false) {
    die(Error . mysqli_connect_error());
    }

    // 4. user inputs
    $email_id = $_POST['email_id'];
    $password = $_POST['password'];

    // 5. SQL data Fetching
    $sql = "Select * from usersdata where email_id='$email_id' AND password='$password'";

    $result = mysqli_query($conn, $sql);
    
    // 6. Verifying Data
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        
        // 7. Session Start
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email_id'] = $email_id;
        $_SESSION['full_name'] = $full_name;    
        
        // 8. Redirect
        header("location: welcome.php");

    } 
// 9. if Condition doesnot Satisfy    
else{
        echo "Invalid Credentials";
    }

}


?>