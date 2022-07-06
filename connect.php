<?php
    $Firstname = $_POST['fname'];
    $Lastname = $_POST['lname'];
    $Email = $_POST['email'];
    $Number = $_POST['number'];
    $Name = $_POST['name'];
    $Password = $_POST['password'];
    date_default_timezone_get('Asia/Dhaka');
    $currentTime=date('Y-m-d H:i:s');
    $val = 1;    
    $conn = new mysqli('localhost','root','','pcgarage');
    if($conn->connect_error){
        die('Connection Failed :'.conn->connect_error);
    }else{
        $stmt = $conn->prepare("INSERT INTO pcgarage (user_fname,user_lname,user_email,user_phone,user_name,user_password,status,created_date) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->bindParam("sssissis",$Firstname,$Lastname,$Email,$Number,$Name,$Password,$val,$currentTime)
        $stmt->execute();
        echo "Success";
        $stmt->close();
        $conn->close();
        
            
    }    
    
>
