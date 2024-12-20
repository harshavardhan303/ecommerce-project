<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}

if(isset($_POST['update'])){

   $name = $_POST['name'];
   $name = htmlspecialchars($name);
   $old_pass = sha1($_POST['old_pass']);
   $old_pass = htmlspecialchars($old_pass);
   $new_pass = sha1($_POST['new_pass']);
   $new_pass = htmlspecialchars($new_pass);
   $confirm_pass = sha1($_POST['confirm_pass']);
   $confirm_pass = htmlspecialchars($confirm_pass);

   // Additional logic for updating the profile...

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update Profile</title>
   <link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>

<?php include '../components/admin_header.php'; ?>

<section class="update-profile">
   <h1 class="heading">Update Profile</h1>
   <form action="" method="post">
      <input type="text" name="name" required placeholder="Enter your name" value="<?= $name; ?>">
      <input type="password" name="old_pass" required placeholder="Enter old password">
      <input type="password" name="new_pass" required placeholder="Enter new password">
      <input type="password" name="confirm_pass" required placeholder="Confirm new password">
      <input type="submit" name="update" value="Update" class="btn">
   </form>
</section>

<script src="../js/admin_script.js"></script>
</body>
</html>
