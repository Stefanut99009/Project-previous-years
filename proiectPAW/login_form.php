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

if (isset($_POST['submit'])) {
    $email = $_POST['usermail'];
    $password = $_POST['password'];
    $password = hash('sha256', $password);
    $password = hash('sha256', $password);
    $password = hash('sha256', $password);

   
    $stmt = $conn->prepare("SELECT * FROM login WHERE email = :email AND password = :password");

    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', $password);

    
    $stmt->execute();

    $rowCount = $stmt->rowCount();

    if ($rowCount > 0) {
        $_SESSION['usermail'] = $email;
        header('location: index.php');
    } else {
        $error[] = 'Incorrect email or password.';
    }

    $stmt->closeCursor();

}
unset($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/style.css">
     
      
</head>
<body>
<div class="image-container">
    
<div class="form-container">
   
    <form action="" method="post">
        <h3 class="title">login now</h3>
        <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            }
         }
      ?>
        <input type="email" name="usermail" placeholder="enter your email" class="box" required>
        <input type="password" name="password" placeholder="enter your password" class="box" required>
        <input type="submit" value="login now" class="form-btn" name="submit">
        <p>don't have an account? <a href="register_form.php">register now!</a></p>
    </form>

</div>

</body>
</html>