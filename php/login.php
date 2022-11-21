<?php      
     
    $email = $_POST['email'];  
    $password = $_POST['password'];   

    $con = new mysqli('localhost','root','','details');
    if($con->connect_error) {
        die("Failed to connect:".$con->connect_error);
    }else{ 

        $sql = "SELECT * FROM users WHERE email='$email'";

        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $password) {
                echo "Logged in!";
                exit();
            }else{
                echo "Incorect User name or password";
                exit();
            }
        }else{
            echo "Invalid User";
            exit();

        }

    }
      
       
?>  