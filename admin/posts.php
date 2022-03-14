<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>All Posts | Little Foot</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/admin.css">
    
  </head>
  <body>
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="container">
      <?php include 'header.php';?>
      <main class="posts">
        <div class="post-header">
          <h1>ALL POSTS</h1>
          <a class="new-post" href="./new-post.php"><i class="fas fa-pen"> Add New Post</i></a>
        </div>
        <table class="post-table">
          <thead>
            <tr>
              <td>Title</td>
              <td>Action</td>
            </tr>
          </thead>
          <tbody>
          <form class="posts" method="POST" action="../PHP/delete-post.php">
            <?php
              require_once('../PHP/database.php');
              $sql = "SELECT * FROM post WHERE post_deleted = 0";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($result)){
              echo "<tr><td>{$row['post_title']}</td>
              <td><button class='btn-del' name='delete-post' value={$row['id']}><i class='far fa-trash-alt'> Delete</i></button></td>
              </tr>\n";
            }
              mysqli_free_result($result);
            
            ?>
          </form>
          </tbody>
        </table>
      </main>
    </div>
    <script src="" async defer></script>
  </body>
</html>