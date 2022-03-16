<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Little Foot - All Posts</title>
  <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>
  <div id="wrapper">
    <?php include("./common/sidebar.php")?>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <div class="container-fluid">
          <h1 class="h3 mt-4 mb-2 text-gray-800">Posts</h1>
          <div class="card shadow mb-4">
            <div class='card-header text-right'>
              <a class='nav-link' href='./new-post.php'>
                <button class='btn btn-success btn-sm'>Create New Post</button>
              </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th class="text-center">Title</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th class="text-center">Title</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                        require_once('../php/database.php');
                        $sql = "SELECT * FROM post WHERE post_deleted = 0";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                        echo "<tr ><td>{$row['post_title']}</td>
                        <td class='text-center'>
                          <div class='btn-group btn-group-sm' role='group' arial-label='Action buttons'>
                            <a href='./edit-post.php?id={$row["id"]}'>
                              <button class='btn btn-secondary btn-sm'>Edit</button>
                            </a>
                            <form class='posts' method='POST' action='../php/delete-post.php'>
                              <button class='btn btn-danger btn-sm' name='delete-post' value={$row['id']}>Delete</button>
                            </form>
                          </div>
                        </td>
                        </tr>";
                      }
                        mysqli_free_result($result);
                      ?>
                  </tbody>
                </table>
              </div>
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