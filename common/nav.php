  <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
      <a class="navbar-brand" href="index.php">Little Foot</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto py-4 py-lg-0">
          <?php
        if(!isset($_SESSION['user'])){
          echo"<li class='nav-item'><a class='nav-link px-lg-3 py-3 py-lg-4' href='index.php'>Home</a></li>";
          echo"<li class='nav-item'><a class='nav-link px-lg-3 py-3 py-lg-4' href='about.php'>About</a></li>";
          echo"<li class='nav-item'><a class='nav-link px-lg-3 py-3 py-lg-4' href='contact.php'>Contact</a></li>";
          echo"<li class='nav-item'><a class='nav-link px-lg-3 py-3 py-lg-4' href='donate.php'>Donate</a></li>";
          echo"<li class='nav-item'><a class='nav-link px-lg-3 py-3 py-lg-4' href='admin/login.php'>Admin</a></li>";
        }else{
          echo"<li class='nav-item'><a class='nav-link px-lg-3 py-3 py-lg-4' href='admin/dashboard.php'>Dashboard</a></li>";
          echo"<li class='nav-item'><a class='nav-link px-lg-3 py-3 py-lg-4' href='admin/posts.php'>All Posts</a></li>";
          echo"<li class='nav-item'><a class='nav-link px-lg-3 py-3 py-lg-4' href='admin/new-post.php'>Create Post</a></li>";
          echo"<li class='nav-item'><a class='nav-link px-lg-3 py-3 py-lg-4' href='php/logout.php'>Logout</a></li>";
        }
          ?>
        </ul>
      </div>
    </div>
  </nav>