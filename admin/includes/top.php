<?php
require('includes/config.php');
require('includes/function.php');
if (!isset($_SESSION['isUserLoggedIn'])) {
   header('Location:login.php');
}
$user = getUserInfo($conn, $_SESSION['email']);
?>
<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Dashboard Page</title>
   <!-- ---------------Favicon--------- -->
  <link rel="shortcut icon" type="image/jpg" href="../images/favicon.png" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- ...........Bootstrap.......... -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <!-- ...............Font Awesome...... -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
   <!-- -----------custome css----------- -->
   <link rel="stylesheet" href="assets/css/style.css">
   <!-- ----------------Fonts--------------- -->
   <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   <!-- ----------------Chosen CSS--------------- -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" />
   <!-- .----------------...DataTable --------->
   <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
   <!-- ----------------Tagsinput CSS-------------- -->
   <link rel="stylesheet" href="assets/css/tagsinput.css">
</head>