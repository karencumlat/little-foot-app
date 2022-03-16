<?php session_start(); ?>
<?php require_once('../php/database.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Little Foot - Dashboard</title>
  <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <div id="wrapper">
    <?php include("./common/sidebar.php")?>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <div class="container-fluid">
          <h1 class="h3 mt-4 mb-2 text-gray-800">Dashboard</h1>
          <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Donation (Current Month)
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                          $sql_sum = "SELECT * FROM donation WHERE MONTH(donation_date)=MONTH(now()) AND YEAR(donation_date)=YEAR(now())";
                          $sum = mysqli_query($conn, $sql_sum);
                          $total = 0;
                          while($row = mysqli_fetch_assoc($sum)){
                              $total += $row['donation_amount'];
                          }      
                          echo "$ $total";
                      ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Donation (Total)
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                          $sql_sum = "SELECT * FROM donation";
                          $sum = mysqli_query($conn, $sql_sum);
                          $total = 0;
                          while($row = mysqli_fetch_assoc($sum)){
                              $total += $row['donation_amount'];
                          }      
                          echo "$ $total";
                      ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Unread Messages
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                       $count_msg = "SELECT COUNT(msg) as count FROM contact WHERE mark_as_read = 0";
                       $unread = mysqli_query($conn, $count_msg);
                       $row = mysqli_fetch_assoc($unread);
                       echo $row['count'];
                         ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Recent Posts</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        $sql = "SELECT * FROM `post` WHERE post_deleted = 0 ORDER BY post_date DESC LIMIT 5";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                        echo "<tr><td>{$row['post_title']}</td>
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