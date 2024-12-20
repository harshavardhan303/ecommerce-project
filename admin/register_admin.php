<?php

include '../components/connect.php';

session_start();

if(isset($_POST['register'])){

   $name = $_POST['name'];
   $name = htmlspecialchars($name);
   $pass = sha1($_POST['pass']);
   $pass = htmlspecialchars($pass);
   $cpass = sha1($_POST['cpass']);
   $cpass = htmlspecialchars($cpass);

   // Additional logic for registering the admin...

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register Admin</title>
   <link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>

<?php include '../components/admin_header.php'; ?>

<section class="register-admin">
   <h1 class="heading">Register Admin</h1>
   <form action="" method="post">
      <input type="text" name="name" required placeholder="Enter your name" value="<?= $name; ?>">
      <input type="password" name="pass" required placeholder="Enter password">
      <input type="password" name="cpass" required placeholder="Confirm password">
      <input type="submit" name="register" value="Register" class="btn">
   </form>
</section>

<script src="../js/admin_script.js"></script>
</body>
</html>
