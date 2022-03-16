<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Little Foot - Contact</title>
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
  <header class="masthead" style="background-image: url('assets/img/contact-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
          <div class="page-heading">
            <h1>Contact Us</h1>
            <span class="subheading">Have questions? We have answers.</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <main class="mb-4">
    <div class="container px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
          <p>Want to get in touch? Fill out the form below to send a message and we will get back to you as soon as
            possible!</p>
          <div class="my-5">
            <form class="post-form" method="POST" action="./php/send-msg.php">
              <div class="form-floating">
                <input class="form-control" id='name' type="text" name="name" placeholder="Name" required />
                <label for="name">Name</label>
              </div>
              <div class="form-floating">
                <input class="form-control" type="email" name="email" class="email" placeholder="Email Address" />
                <label for="email">Email</label>
              </div>
              <div class="form-floating">
                <textarea class="form-control" style="height: 12rem" name="msg" class="msg"
                  placeholder="Post description..." required></textarea>
                <label for="msg">Message</label>
              </div>

              <br />
              <input class="btn btn-success text-uppercase " type="submit" name="send-msg" value="Send">
            </form>

          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include './common/footer.php';?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>