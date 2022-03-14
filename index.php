<?php session_start(); ?>

<?php
include './PHP/database.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Little Foot</title>
        <meta charset="utf-8" />
        <link href='./CSS/style.css' rel='stylesheet'/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    </head>
    <body>
        <div class="home-container">
            <div class="home-header">
                <div>
                    <img class='home-header-logo' src='./IMGS/LittleFootLogo.png' alt='logo' />
                    <h3>Little Foot</h3>
                </div>
                <div>
                    <?php
                    if(!isset($_SESSION['user'])){
                      echo "<a href='index.php'>Home</a>";
                      echo "<a href='contact-us.php'>Contact Us</a>";

                      echo "<a href='admin/login.php' class='admin-login'>Sign In</a>";
                      // echo "<a href='admin/login.php' class='admin-login'><button class='home-header-btn'>Sign In</button></a>";
                      echo "<span class='donate'><a href='donate.php'>DONATE</a></span>";
                    }else{
                        echo "<a href='admin/posts.php'>All Posts</a>";                        
                        echo "<a href='admin/new-post.php'>Create New Post</a>";                        
                        echo "<a href='PHP/logout.php'>Log Out</a>";
                    }
                    ?>
                </div>
            </div>
            <div class="home-hero">
                <h2 class="home-hero-title">Little Foot</h2>
                <h4 class="home-hero-subTitle">The first step is hardest of all..</h4>
                <img class='home-hero-img' src='./IMGS/hero.jpeg' alt='hero image'/>
                <div class="home-hero-shade"></div>
            </div>
            <div class="home-about">
                <h2>About Little Foot</h2>
                <p>Little Foot is a non-profit startup organization founded by Kaan Darcey, Karen Cumlat, and Luca Mattia. We had a vision of a clean and sustainable earth, and we have decided to make that vision beocme a reality. Little Foot is an organiation that helps individuals find techniques and tips to reduce their carbon footprints. One individual may not change the world by themselves but every step goes a long way. We believe that Little Foot is one small step in the right direction to save our planet. Please enjoy our articles on environmental sustainability.</p>
            </div>
            <div class='home-icons'>
                <h2>The Three R's</h2>
                <div class="home-icons-columns">
                    <div class='icon-column'>
                        <img src='./IMGS/reduseIcon.png' alt='icon'/>
                        <h4>Reduce</h4>
                        <p>Reduce waste to help keep our oceans, skies, and land clean</p>
                    </div>
                    <div class='icon-column'>
                            <img src='./IMGS/reuseIcon.png' alt='icon'/>
                            <h4>Reuse</h4>
                            <p>Reuse waste to help keep our oceans, skies, and land clean</p>
                    </div>
                    <div class='icon-column'>
                            <img src='./IMGS/recycleIcon.png' alt='icon'/>
                            <h4>Recycle</h4>
                            <p>Recycle waste to help keep our oceans, skies, and land clean</p>
                    </div>
                </div>
            </div>
            <div class="home-articles">
                <h3>Articles</h3>
                <?php

                $sql = "SELECT * FROM post WHERE post_deleted = 0";
                $return = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($return)) {
                    echo "<div class='home-post'><h4>{$row['post_title']}</h4><div class='post-descr'><p>{$row['post_desc']}</p></div></div>";
                }
                ?> 
            </div>
            <div class="stat-container">
              <div class="stat">
                <i class="fas fa-hands-helping"></i>
                <h1>108</h1>
                <span>Volunteers</span>
              </div>
              <div class="stat">
              <?php
                require_once('./PHP/database.php');
                $sql_sum = "SELECT * FROM donation";
                $sum = mysqli_query($conn, $sql_sum);
                $total = 0;
                while($row = mysqli_fetch_assoc($sum)){
                    $total += $row['donation_amount'];
                }
                echo "<i class='fas fa-hand-holding-usd usd'></i>";
                echo "<h1>$ $total</h1>";
                echo "<span>Donations</span>";
                mysqli_close($conn);
            ?>
              </div>
              <div class="stat">  
                <i class="fas fa-clock"></i>
                <h1>3000</h1>
                <span>Hours of Help</span>
              </div>

            </div>

            <div class="footer">
                <p> &copy; Copyright Little Foot</p>
            </div>
        </div>
        <script src='./JS/app.js'></script>
    </body>
</html>