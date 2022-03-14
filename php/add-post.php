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
    <?php

      require_once('database.php');

      $postTitle = $_POST['post-title'];
      $postDesc = $_POST['post-desc'];

      $sql = mysqli_query($conn, "SELECT postTitle FROM users WHERE postTitle = '$postTitle' ");

      $insert = "INSERT INTO post (post_title, post_desc, post_deleted) VALUES
      ('$postTitle', '$postDesc', 0)";

      if(isset($_POST['submit'])){
          if($postTitle==''||$postDesc==''){
              echo "Please input values";
          }else if(mysqli_query($conn,$insert)){
            echo "<div class='alert-box'>";
            echo "<span class='alert insert'>Post published.</span>";
            echo "</div>";
            // echo "post-title: ".$postTitle ."<br><br>";
            // echo "post-desc: ".$postDesc ."<br><br>";
            header("Refresh:1; url=../admin/posts.php");
              }
          }
      ?>
    <script src="" async defer></script>
  </body>
</html>