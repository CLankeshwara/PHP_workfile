<?php
// Database connection and data transaction
$conn = new mysqli("localhost" , "root" , "" , "a1" );


// Connection checking
if($conn->connect_error){
    die("Failed to connect : ".$conn->connect_error);
}else{
    // Data searching query
    $stmt = $conn->prepare("SELECT * from a1 WHERE username = ?");

    // Username finding and validation
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    // password matching procces
    if($stmt_result->num_rows > 0){
        $data = $stmt_result->fetch_assoc();
        if($data['password']=== $password){
            echo "loogin success";
        }else{
            echo "no";
        }
}else{
    echo "invalid email";
}    
}


?>