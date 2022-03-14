<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/admin.css">
  </head>
  <body>
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?php session_start();
  if (isset($_SESSION['user'])){
    header("Location: ../index.php");
  }

      require_once('database.php');

      $username = $_POST['username'];
      $pass = $_POST['password'];

      $sql = "SELECT id FROM admin WHERE username = '$username' AND password = '$pass' ";

      if(isset($_POST['submit'])){
          if($username==''||$pass==''){
              echo "Please input values";
          }else if($result = mysqli_query($conn,$sql)){
              $row = mysqli_num_rows($result);

              if($row == 1){
                echo "Login successful";
                $_SESSION['user'] = $username;
                header("Refresh:.5; url=../index.php");
              }else{
                echo "<div class='alert-box'>";
                echo "<span class='alert delete'>User not found. Please try again.</span>";
                echo "</div>";
                header("Refresh:1; url=../admin/login.php");
              }
              }
          }
      ?>
    <script src="" async defer></script>
  </body>
</html>