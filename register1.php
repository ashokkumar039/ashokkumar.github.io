
<?php
session_start();

//connect to database
$db = mysqli_connect("localhost", "root", "", "ashokkumar");
if ($db->connect_error)
 {
die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['register_btn'])) {
  
  $username = mysqli_real_escape_string($db,$_POST['username']);
  $email = mysqli_real_escape_string($db,$_POST['email']);
  $password = mysqli_real_escape_string($db,$_POST['password']);
  $password2 = mysqli_real_escape_string($db,$_POST['repassword']);

  if ($password == $password2){
    
    $sql ="INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
    mysqli_query($db,$sql); 
    $_SESSION['message'] = "you are now logged in";
    $_SESSION['username'] = $username;
    echo 'you are logged in'; //redirect to home page
  }else{
    $_SESSION['message'] = "The two passwords do not match";
  }
}


?>
