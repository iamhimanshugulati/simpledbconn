<?php

// 1. Defining only POST Request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 2. Connecting DB
    $conn = mysqli_connect("localhost", "root", "", "ppt");

    // 3. Checking Connection
    if ($conn === false) {
    die(Error . mysqli_connect_error());
    }

    // 4. POST user inputs
    $full_name = $_POST['full_name'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $email_id = $_POST['email_id'];
    // $exists==false;   && $exists==false)

    // 5. Confirming Password
    if ($password == $cpassword) {

    // 6. Attempt insert query in usersdata
    $sql = "INSERT INTO `usersdata` (`full_name`, `password`, `email_id`) VALUES ('$full_name', '$password', '$email_id')";

    // 7. Displaying Message
    $result = mysqli_query($conn, $sql);
    if($result){
        
    echo '<p>Your Account has been created, you can login by <a href="signin.html">Clicking here</a></p>';    
    
    }
    }
// 8. if Condition doesnot Satisfy 
else{
        echo 'Password not matched!!';
    }
}

?>