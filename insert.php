<?php
$username = $_POST['username'];
$password = $_POST['password'];

if(!empty($username) || !empty($password)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "hostel";

    //create Connection
    $conn = new mysqli($host, $dbUsername , $dbPassword , $dbname);

    if(mysqli_connect_error()){
        die('Connect Error ('.mysqli_connection_errno().')'.mysqli_connect_error());
    }else{
        $INSERT = "INSERT Into login (username, password) values( ?, ?)";
        
        $stmt -> exceute();
        $stmt -> store_result();
        $rnum = $stmt->num_rows;

        if(rnum==0){
            $stmt->close();

            $stmt = $conn -> prepare ($INSERT);
            $stmt -> bind_param("si", $username,$password);
            $stmt->exceute();
            echo "User is successfully Loged In";
        }else{
            echo "Invalid choice!!";
        }
        $stmt->close();
        $conn->close();
    }
}else{
    echo "All fields are required"
}
