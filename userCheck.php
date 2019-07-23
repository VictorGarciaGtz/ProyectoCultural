<?php
// Load the database configuration file
require_once 'connect.php';

// Get and decode the POST data
$userData = json_decode($_POST['userData']);

if(!empty($userData)){
    $email      = !empty($userData->email)?$userData->email:'';
    
    // Check whether the user data already exist in the database
    $query = "SELECT * FROM users WHERE email = '".$email."'";
    $result = @mysqli_query($db,$query);
    $result = @mysqli_num_rows($result);
    if($result > 0){ 
        echo 'exito';
    }else{
        echo 'error';
    }
}

?>