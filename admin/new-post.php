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
  <title>New Post | Little Foot</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/admin.css">

</head>

<body>
  <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <div class="container">
    <?php include 'header.php'; ?>
    <main class="add-new-post">
      <h1>New Post</h1>
      <div class="form-cont">
        <form class="post-form" method="POST" action="../php/add-post.php">
          <label for="post-title">Post Title</label>
          <input type="text" name="post-title" class="post-title" placeholder="Post Title" required />
          <label for="post-desc">Post Description</label>
          <textarea rows="10" cols="50" name="post-desc" class="post-desc" placeholder="Post description..."
            required></textarea>
          <input type="submit" name="submit" value="Publish" class="btn-publish">
        </form>
      </div>
    </main>
  </div>


  <script src="" async defer></script>
</body>

</html>