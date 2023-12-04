<?php

$Uname = $_POST['Uname'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];


$conn = new mysqli('localhost', 'root', '', 'test');



if($conn->connect_error){
   die('Connection Failed : '.$conn->connect_error);
}



// else{
//     $stmt = $conn->prepare("insert into WebDrive(Uname, pass, pass2) values(?, ?, ?)");
//     $stmt->bind_param("sss",$Uname, $pass, $pass2);
     
  
//     if ($pass == $pass2 && $Uname != NULL && $pass != NULL && $pass2 != NULL) {
//       header("Location:http://localhost/project/joint/");
//         $stmt->execute();
//         $stmt->close();
//         $conn->close();
//      }
     
//      else if($pass != $pass2) {
//         echo "Wrong password...";
//         $stmt->close();
//         $conn->close();
//      }

//      else{
//          echo "Every fields are NULL..... ##@@  Please,,,,  Filll something.......";
//      }
// }
















///////////////////////////////////////////////////////////////////////////////













else{
    $stmt = $conn->prepare("insert into WebDrive(Uname, pass, pass2) values(?, ?, ?)");
    $stmt->bind_param("sss",$Uname, $pass, $pass2);
     
  
    if ($pass == $pass2 && $Uname != NULL && $pass != NULL && $pass2 != NULL)
     {

            $Uname = $_POST['Uname'];

            $query = "SELECT * FROM webdrive WHERE Uname = '$Uname'";
      

            $data = mysqli_query($conn, $query);

            $total = mysqli_num_rows($data);

            if ($total == true) 
            {

                echo "matching error...";
            }
            else{
                header("Location:http://localhost/project/joint/");
                $stmt->execute();
                $stmt->close();
                $conn->close();
            }
      
     }
     
     else if($pass != $pass2) {
        echo "Wrong password...";
        $stmt->close();
        $conn->close();
     }

     else{
         echo "Every fields are NULL..... ##@@  Please,,,,  Filll something.......";
     }
}





?>