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
</head>

<body>
  <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <?php
      require_once('database.php');

      if(isset($_POST['post-id'])){
          $id = $_POST['post-id'];
          $title = $_POST['post-title'];
          $desc = $_POST['post-desc'];
          $sql = "UPDATE post SET post_title = '$title', post_desc='$desc' WHERE id = $id"; 
          if(mysqli_query($conn,$sql)){
            echo "<div class='alert-box'>";
            echo "<div class='alert alert-success' role='alert'>Post updated</div>";
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