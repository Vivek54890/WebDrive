<?php
  session_start();
?>

<?php

    
    $servername = "localhost";  
    $username = "root";  
    $password = '';  
    $dbname = "test";  

    $conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error){
   die('Connection Failed : '.$conn->connect_error);
}
 else{
           
            $Uname = $_POST['Uname'];
            $pass = $_POST['pass'];

            $query = "SELECT * FROM webdrive WHERE Uname = '$Uname' && pass = '$pass'";
      

            $data = mysqli_query($conn, $query);

            $total = mysqli_num_rows($data);

            if ($total == 1) 
            {

                $_SESSION['user']=$Uname;
                $_SESSION['pass']=$pass;
                header("Location:http://localhost/project/profile/");
            }
            else{
                echo "Something is wrong or Not DATA founds...";
            }

    }

?>