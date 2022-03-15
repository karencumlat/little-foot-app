<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Little Foot - Post</title>
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
    type="text/css" />
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
    rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
  <?php include('./common/nav.php');?>
  <!-- Page Header-->
  <header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
          <?php
            require_once('./php/database.php');

            if(isset($_GET['id'])){
              $id= $_GET['id'];
              $sql = "SELECT * FROM post WHERE id=$id";

              $return = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($return)) {
                  $get_date = date_create($row['post_date']);
                  $row_date = date_format($get_date,"F d, Y");
                  echo "
            <div class='post-heading'>
                <h1>{$row['post_title']}</h1>
                
                <span class='meta'>
                {$row_date}
                </span>
            </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class='mb-4'>
            <div class='container px-4 px-lg-5'>
                <div class='row gx-4 gx-lg-5 justify-content-center'>
                    <div class='col-md-10 col-lg-8 col-xl-7'>
                        <p>{$row['post_desc']}</p>
                    </div>
                </div>
            </div>
            ";}                
          }
       ?>
          </article>
          <?php include('./common/footer.php')?>
          <!-- Bootstrap core JS-->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
          <!-- Core theme JS-->
          <script src="js/scripts.js"></script>
</body>

</html>