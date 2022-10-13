<?php
// Database location and database id declaration
$server = "localhost";
$username = "root";
$password = "";
$dbname = "a1";

// Connection
$conn = mysqli_connect($server , $username , $password , $dbname );
// Button action
if(isset($_POST['submit'])){
    // Validate the field NULL or NOT and initialize variable value
    if( !empty($_POST['name'])&& !empty($_POST['telephone'])&& !empty($_POST['address'])&& !empty($_POST['age'])){
        $name = $_POST['name'];
        $telephone = $_POST['telephone'];
        $address = $_POST['address'];
        $age = $_POST['age'];

        // Insert query and initial that variables
        $query = "insert into login(name,telephone,address,age) values ('$name' , '$telephone' , '$address' , '$age')";

        $run = mysqli_query($conn,$query);

        if($run){
            echo '<script>alert("Form Submitted Successfull")</script>';
            
        }else{
            echo "form not submitted";
        }
    }
    else{
        echo "all fields required";
    }

}

?>