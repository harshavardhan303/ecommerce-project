<?php

include '../components/connect.php';

session_start();

if(isset($_POST['login'])){

   $name = $_POST['name'];
   $name = htmlspecialchars($name);
   $pass = sha1($_POST['pass']);
   $pass = htmlspecialchars($pass);

   $select_admin = $conn->prepare("SELECT * FROM `admins` WHERE name = ? AND password = ?");
   $select_admin->execute([$name, $pass]);
   if($select_admin->rowCount() > 0){
      $admin_id = $select_admin->fetch(PDO::FETCH_ASSOC)['id'];
      $_SESSION['admin_id'] = $admin_id;
header('location:dashboard.php'); // Redirect to admin dashboard
      exit;
   }else{
      $message[] = 'Incorrect username or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Login</title>
   <link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>

<section class="form-container">
   <form action="" method="post">
      <h1>Admin Login</h1>
      <input type="text" name="name" required placeholder="Enter your name">
      <input type="password" name="pass" required placeholder="Enter your password">
      <input type="submit" name="login" value="Login" class="btn">
   </form>
</section>

<script src="../js/admin_script.js"></script>
</body>
</html>
