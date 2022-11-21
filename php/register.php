<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$con = new mysqli('localhost','root','','details');
if($con->connect_error) {
die("Failed to connect:".$con->connect_error);
}else{
    
    $query = mysqli_query($con, "SELECT * FROM users WHERE email='{$email}'");
    if (mysqli_num_rows($query) == 0){
        $stmt=$con->prepare("insert into users(name,email,password)
         values(?,?,?)");
        $stmt->bind_param("sss",$name,$email,$password);
        $stmt->execute();
       // $data = $stmt_result->fetch_assoc();
      //  if($data['email']===$email){
      //      echo"already exist";  
            
       // }else{
            echo"Registration Successful";
  //  }
        } else {
        echo"already exist";
    }
    $stmt->close();
    $con->close();
}


?>