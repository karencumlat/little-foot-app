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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymZous">
  <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
  <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <?php

      require_once('database.php');

      $name = $_POST['name'];
      $card_num= $_POST['card'];
      $card = password_hash($card_num, PASSWORD_DEFAULT);
      $cvv = $_POST['cvv'];
      $date = $_POST['date'];
      $amount = $_POST['amount'];

      $insert = "INSERT INTO donation (name, card_number, cvv, expiry_date, donation_amount) VALUES
      ('$name','$card',$cvv,$date,$amount)";

      if(isset($_POST['submit'])){
          if($name==''||$card==''||$cvv==''||$date==''||$amount==''){
              echo "Please input values";
          }else if(mysqli_query($conn,$insert)){
            echo "<div class='alert-box'>";
            echo "<div class='alert alert-success' role='alert'>
              Thank you for your donation!</div>";
            echo "</div>";
            // echo "post-title: ".$postTitle ."<br><br>";
            // echo "post-desc: ".$postDesc ."<br><br>";
            header("Refresh:2; url=../index.php");
              }
          }
      ?>
  <script src="" async defer></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</html>