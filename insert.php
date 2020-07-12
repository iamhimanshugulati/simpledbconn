<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // 1. Connecting DB
    $conn = mysqli_connect("localhost", "root", "", "ppt");
     
    // 2. Checking Connection
    if($conn === false){
        die("Error:" . mysqli_connect_error());
    }
     
    // 3. POST user inputs
    $full_name = $_POST['full_name'];
    $area_of_interest = $_POST['area_of_interest'];
    $Email_id = $_POST['Email_id'];
    $contact_no = $_POST['contact_no'];

    // 4. Attempt insert query in blogdb
    $sql = "INSERT INTO blogdb (full_name, area_of_interest, Email_id, contact_no) VALUES ('$full_name', '$area_of_interest', '$Email_id' , '$contact_no')";
    
    // 5. Displaying Message
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Records added successfully, We will get in touch with you ASAP";
    } else{
        echo "ERROR: Could not able to Submit $sql. " . mysqli_error($conn);
    }
     
    // 6. Close connection
    mysqli_close($conn);
}
?>