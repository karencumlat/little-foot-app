<?php session_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Us | Little Foot</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/admin.css">
  </head>
  <body>
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="container" style="padding:0">
      <div class="home-header">
        
        <div>
          <img class='home-header-logo' src='./IMGS/LittleFootLogo.png' alt='logo' />
          <h3>Little Foot</h3></a>
        </div>
        <div>
            <?php
            if(!isset($_SESSION['user'])){
              echo "<a href='index.php'>Home</a>";
              echo "<a href='contact-us.php'>Contact Us</a>";
              echo "<a href='admin/login.php' class='admin-login'>Sign In</a>";
              echo "<span class='donate'><a href='donate.php'>DONATE</a></span>";
            }else{
                echo "<a href='admin/new-post.php'>Create New Post</a>";                        
                echo "<a href='PHP/logout.php'>Log Out</a>";
            }
            ?>
        </div>
      </div>
      <main class="add-donation">
        <h1>Contact Us</h1>
        <div class="form-cont">
          <form class="post-form" method="POST" action="PHP/send-msg.php">
            <label for="name">Name</label>
            <input type="text" name="name" class="name" placeholder="Name" required/>
            <label for="email">Email</label>
            <input type="email" name="email" class="email" placeholder="Email Address"/>
            <label for="msg">Message</label>
            <textarea rows="10" cols="50" name="msg" class="msg" placeholder="Post description..." required></textarea>

            <input type="submit" name="send-msg" value="Send" class="btn-publish">
          </form>
        </div>
      </main>
    </div>
    <script src="" async defer></script>
  </body>
</html>