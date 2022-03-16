<?php
  if(!isset($_SESSION['user'])){
    header ('Location: login.php');
  }
?>
<?php
    echo "
      <ul class='navbar-nav bg-gradient-success sidebar sidebar-dark accordion' id='accordionSidebar'>
        <a class='sidebar-brand d-flex align-items-center justify-content-center' href='../index.php'>
          <div class='sidebar-brand-icon rotate-n-15'>
            <i class='fas fa-seedling'></i>
          </div>
          <div class='sidebar-brand-text mx-3'>Admin</div>
        </a>
        <hr class='sidebar-divider my-0'>
        <li class='nav-item'>
        <a class='nav-link' href='./dashboard.php'>
          <i class='fas fa-fw fa-tachometer-alt'></i>
          <span>Dashboard</span></a>
      </li>
        <li class='nav-item'>
          <a class='nav-link' href='./posts.php'>
            <i class='fas fa-folder'></i>
            <span>Posts</span></a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='./messages.php'>
          <i class='fa fa-solid fa-envelope'></i>
            <span>Messages</span></a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='./donations.php'>
          <i class='fa fa-solid fa-money-bill'></i>
            <span>Donations</span></a>
        </li>
        <hr class='sidebar-divider d-none d-md-block'>
        <li class='nav-item'>
          <a class='nav-link' href='../index.php'>
          <i class='fa fa-solid fa-angle-left'></i>
            <span>Back to Homepage</span></a>
        </li>
        <hr class='sidebar-divider d-none d-md-block'>

        <li class='nav-item'>
          <a class='nav-link' href='../php/logout.php'>
          <i class='fa fa-solid fa-power-off'></i>
            <span>Logout</span></a>
        </li>
    </ul> "?>