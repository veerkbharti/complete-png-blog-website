<?php
require('includes/config.php');
if (isset($_SESSION['isUserLoggedIn']) && $_SESSION['isUserLoggedIn']) {
   header('Location:index.php');
}
if (isset($_POST['login'])) {
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = mysqli_real_escape_string($conn, $_POST['password']);

   $query = "SELECT * FROM users WHERE email='$email' AND binary password='$password'";
   $runQuery = mysqli_query($conn, $query);
   if (mysqli_num_rows($runQuery)) {
      $_SESSION['isUserLoggedIn'] = true;
      $_SESSION['email'] = $email;
      header('Location:index.php');
   } else {
      echo "<script>alert('Incorrect email or password !');</script>";
   }
}
?>
<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Login Page</title>
   <!-- ---------------Favicon--------- -->
   <link rel="shortcut icon" type="image/jpg" href="../images/favicon.png" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="assets/css/normalize.css">
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <!-- ...............Font Awesome...... -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
   <link rel="stylesheet" href="assets/css/style.css">
   <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   <style>
      .sufee-login{
         height: 100vh;
      }
   </style> {

}
</head>

<body class="bg-dark">
   <div class="sufee-login d-flex align-content-center flex-wrap">
      <div class="container">
         <div class="login-content">
            <div class="login-form">
               <form method="POST">
                  <div class="form-group">
                     <label>Email address</label>
                     <input type="email" name="email" class="form-control" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" name="password" class="form-control" placeholder="Password" required>
                  </div>
                  <button type="submit" name="login" class="btn btn-success btn-flat m-b-30 m-t-30">Login</button>
               </form>
            </div>
         </div>
      </div>
   </div>
   <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
   <script src="assets/js/popper.min.js" type="text/javascript"></script>
   <script src="assets/js/plugins.js" type="text/javascript"></script>
   <script src="assets/js/main.js" type="text/javascript"></script>
</body>

</html>