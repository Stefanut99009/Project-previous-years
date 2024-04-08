<?php



session_start();
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "login"; 


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}







if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $email = $_POST["usermail"];
    $password = $_POST["password"];
    $confirm_password = $_POST["cpassword"];

   
   if ($password != $confirm_password) {
        $error = "Error: Passwords do not match";
    } elseif (strlen($password) < 8) {
        $error = "Error: Password must be at least 8 characters long";
    } elseif (!preg_match("#[A-Z]+#", $password)) {
        $error = "Error: Password must contain at least one uppercase letter";
    } elseif (!preg_match("#[0-9]+#", $password)) {
        $error = "Error: Password must contain at least one number";
    } elseif (!preg_match("#\W+#", $password)) {
        $error = "Error: Password must contain at least one special character";
    } else {
      
        $password = hash('sha256', $password);
        $password = hash('sha256', $password);
        $password = hash('sha256', $password);
         $stmt = $conn->prepare("INSERT INTO login (email, password) VALUES (:email, :password)");
      
       $stmt->bindValue(':email', $email);
       $stmt->bindValue(':password', $password);

        
       if ($stmt->execute()) {
            header('location: login_form.php');
            exit();
        } else {
            echo "Error: " . $stmt->errorInfo()[2];
        }

        
        $stmt->close();
    }
}

unset($conn);
?>












?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" href="static/css/clouds.css">
</head>
<body>
    <div class="image-container">
   
<div class="form-container">

   <form action="" method="post">
      <h3 class="title">register now</h3>
       <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            }
         }
      ?>
      <input type="email" name="usermail" placeholder="enter your email" class="box" required>
      <input type="password" name="password" placeholder="enter your password" class="box" required>
      <input type="password" name="cpassword" placeholder="confirm your password" class="box" required>
      <input type="submit" value="register now" class="form-btn" name="submit">
      <p>already have an account? <a href="login_form.php">login now!</a></p>
   </form>

</div>

</body>
</html>