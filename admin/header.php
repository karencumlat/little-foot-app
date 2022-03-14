<?php session_start(); ?>

<?php
  if(!isset($_SESSION['user'])){
    header ("Location: login.php");
  }
?>

<?php
echo '<header>
<div>
  <a class="" href="../index.php"><i class="fas fa-home"> LITTLE FOOT</i></a>
</div>
<div>
  <ul class="admin-menu" id="admin-menu">
    <li><a class="admin-menu-item" href="./posts.php"><i class="fas fa-thumbtack"> All Posts</i></a></li>
    <li><a class="admin-menu-item" href="./new-post.php"><i class="fas fa-pen"> New Post</i></a></li>
    <li><a class="admin-menu-item" href="../PHP/logout.php"><i class="fas fa-sign-out-alt"> Log Out</i></a></li>
  </ul>
</div>
</header>';
?>

<!-- <li><a class="admin-menu-item" href="./donate.php"><i class="fas fa-hand-holding-usd"> Donate</i></a></li> -->