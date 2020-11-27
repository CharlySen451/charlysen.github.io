<?php


//processing form


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  
  
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password1 = $_POST['password1'];
  $btc = $_POST['btc'];
  
  

  
      if(!empty($fname) && !empty($lname) && !empty($uname) && !empty($email)&& !empty($password) && !empty($btc)){
        
          include('connection.php'); 
        
          mysqli_query($dbc, "INSERT INTO users(first_name, last_name, username, email, password,  btc) VALUES('$fname', '$lname', '$uname', '$email', '$password', '$password1', '$btc')");
        
          $registered = mysqli_affected_rows($dbc);
        
          echo $registered." row is affected, everything worked fine!";
        
        
      }else{
        
          echo "<p style='color:red'>ERROR: Please complete all fields!</p>";
      }
  
        }else{
  
          echo "<h2>Please Complete The Form!<?h2>";
  
}



?>