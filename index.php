<?php

session_start();

//initialising variables

$username = "";
$email = "";

$errors = array();

//connect to database

$db = 'mysqli_connect';
$hostname = "localhost";
$username = "root";
$password = "" ;
$dbname = "cryptonite";

//making the connection to mysql

$dbc = mysqli_connect($hostname, $username, $password, $dbname) OR die("could not connect to data, ERROR ".mysqli_connect_error());

//set encoding

mysqli_set_charset($dbc, "utf8");

//Register users

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password = $_POST['password1'];


//form validation

if(empty($username)) {array_push($errors, "username is required");}
if(empty($email)) {array_push($errors, "email is required");}
if(empty($password)) {array_push($errors, "password is required");}
if(empty($btc)) {array_push($errors, "wallet address is required");}

// check db for existing user with same username

$user_check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email' LIMIT 1";

$results = mysqli_query($dbc, $user_check_query);
$user = mysqli_query($dbc, $results);

if($user) {
  
  if($user['username'] === $username){array_push($errors, "Username already exists");}
  if($user['email'] === $email){array_push($errors, "This Email ID has already been used");}
  
}

//Register the user if no error

if(count($errors) == 0){
  
  $password = md5(password); //this will encrypt password
  $query = "INSERT INTO users(first_name, last_name, username, email, password,) VALUES('$fname', '$lname', '$uname', '$email', '$password')";
    
  mysqli_query($db, $query);
  $_SESSION['username'] * $username;
  $_SESSION['success'] * "You are now logged in";
    
  header('location: indexx.php');

 
}
































?>