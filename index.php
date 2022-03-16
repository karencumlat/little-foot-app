<?php session_start(); ?>

<?php include 'php/database.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Little Foot</title>
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
    type="text/css" />
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
    rel="stylesheet" type="text/css" />
  <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
  <?php include './common/nav.php';?>
  <header class="masthead" style="background-image: url('assets/img/home-bg.jpeg')">
    <div class="container position-relative px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
          <div class="site-heading">
            <h1>Little Foot</h1>
            <span class="subheading">The first step is hardest of all</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-7">
        <?php
          $sql = "SELECT * FROM post WHERE post_deleted = 0 ORDER BY post_date DESC";
          $return = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($return)) {
              $row_desc = substr($row['post_desc'],0,40);
              $get_date = date_create($row['post_date']);
              $row_date = date_format($get_date,"F d, Y");
              echo "
              <div class='post-preview'>
                <a href='./post.php?id={$row['id']}'>
                <h2 class='post-title'>{$row['post_title']}</h2>
                <h3 class='post-subtitle'>{$row_desc}...</h3>
                </a>
                <p class='post-meta'>{$row_date}</p>
              </div>
              <hr class='my-4' />
            ";
            }
        ?>
        <!-- <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div> -->
      </div>
    </div>
  </div>
  <?php include './common/footer.php';?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>