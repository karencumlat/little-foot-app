<?php
  if(!isset($_SESSION['user'])){
    header ('Location: login.php');
  }
?>

<?php
echo "
    <ul class='navbar-nav bg-gradient-success sidebar sidebar-dark accordion' id='accordionSidebar'>

      <!-- Sidebar - Brand -->
      <a class='sidebar-brand d-flex align-items-center justify-content-center' href='../index.php'>
        <div class='sidebar-brand-icon rotate-n-15'>
          <i class='fas fa-laugh-wink'></i>
        </div>
        <div class='sidebar-brand-text mx-3'>Admin</div>
      </a>

      <!-- Divider -->
      <hr class='sidebar-divider my-0'>

      <li class='nav-item'>
      <a class='nav-link' href='./dashboard.php'>
        <i class='fas fa-fw fa-chart-area'></i>
        <span>Dashboard</span></a>
    </li>
      <li class='nav-item'>
        <a class='nav-link' href='./posts.php'>
          <i class='fas fa-fw fa-chart-area'></i>
          <span>All Posts</span></a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='./new-post.php'>
          <i class='fas fa-fw fa-chart-area'></i>
          <span>Create New Post</span></a>
      </li>
      <hr class='sidebar-divider d-none d-md-block'>
      <li class='nav-item'>
        <a class='nav-link' href='../index.php'>
          <i class='fas fa-fw fa-table'></i>
          <span>Back to Homepage</span></a>
      </li>
      <hr class='sidebar-divider d-none d-md-block'>

      <li class='nav-item'>
        <a class='nav-link' href='../php/logout.php'>
          <i class='fas fa-fw fa-table'></i>
          <span>Logout</span></a>
      </li>


    </ul>
" ?>