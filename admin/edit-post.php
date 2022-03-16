<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Little Foot - Edit Post</title>
  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script src="https://cdn.tiny.cloud/1/e9idwk6k5lpbdp5nt40u870mlm6tyopckiejwm7z0et8fvfc/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>

  <script>
  tinymce.init({
    selector: '#post-desc'
  });
  </script>
</head>

<body>
  <div id="wrapper">
    <?php include("./common/sidebar.php")?>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <div class="container-fluid">
          <h1 class="h3 mt-4 mb-2 text-gray-800">Admin</h1>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Post</h6>
            </div>
            <div class="card-body">
              <?php
            require_once('../php/database.php');
            if(isset($_GET['id'])){
              $id= $_GET['id'];
              $sql = "SELECT * FROM post WHERE id=$id";

              $return = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($return)) {
                  $get_date = date_create($row['post_date']);
                  $row_date = date_format($get_date,"F d, Y");
                  echo "

              <form class='user' method='POST' action='../php/edit-post.php'>
                <div class='form-group'>
                  <textarea name='post-title' id='post-title' class='form-control form-text'required rows='1'>{$row['post_title']}</textarea>
                </div>
                <div class='form-group'>
                  <textarea id='post-desc' name='post-desc' class='form-control form-text' rows='10' 
                    required>{$row['post_desc']}</textarea>
                </div>
                <button class='btn btn-primary btn-user btn-block' name='post-id' value={$row['id']}>Update</button>
                <hr />
              </form>
              ";
              } }?>
            </div>
          </div>
        </div>
      </div>

      <?php include('./common/footer.php')?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</body>

</html>