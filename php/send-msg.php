<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/admin.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" </head>

<body>
  <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <?php

      require_once('database.php');

      $name = $_POST['name'];
      $email = $_POST['email'];
      $msg = $_POST['msg'];

      $insert = "INSERT INTO contact (name, email, msg) VALUES
      ('$name', '$email', '$msg')";

      if(isset($_POST['send-msg'])){
          if($name==''||$email=='' || $msg==''){
              echo "Please input values";
          }else if(mysqli_query($conn,$insert)){
            echo "<div class='alert-box'>";
            echo "<div class='alert alert-success' role='alert'>
            Thanks for contacting us. We will get in touch with you shortly.</div>";
            echo "</div>";
            // echo "post-title: ".$postTitle ."<br><br>";
            // echo "post-desc: ".$postDesc ."<br><br>";
            header("Refresh:2; url=../index.php");
              }
          }
      ?>
  <script src="" async defer></script>
</body>

</html>