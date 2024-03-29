 <?php
$active_page = basename($_SERVER['PHP_SELF'], ".php");
?>

 <nav class="navbar navbar-expand-lg navbar-light bg-white ftco_navbar single-nav" id="ftco-navbar">
     <div class="container">
         <a href="index.php" style="display: inline-block; border-radius: 50%;">
             <img src="images/yai-logo.jpg" alt="" style="max-height: 70px; max-width: 70px; border-radius: 50%;">
         </a>

         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
             aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="oi oi-menu"></span> Menu
         </button>

         <div class="collapse navbar-collapse" id="ftco-nav">
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item <?php if($active_page == 'home') echo 'active'; ?>"><a href="index.php"
                         class="nav-link">Home</a></li>
                 <li class="nav-item <?php if($active_page == 'about') echo 'active'; ?>"><a href="about.php"
                         class="nav-link">About</a></li>
                 <li class="nav-item <?php if($active_page == 'activity') echo 'active'; ?>"><a href="activity.php"
                         class="nav-link">Activity</a></li>
                 <li class="nav-item <?php if($active_page == 'volenteer') echo 'active'; ?>"><a href="volenteer.php"
                         class="nav-link">Volunteer</a></li>
                 <li class="nav-item <?php if($active_page == 'internship') echo 'active'; ?>"><a href="internship.php"
                         class="nav-link">Internship</a></li>
                 <li class="nav-item <?php if($active_page == 'donate') echo 'active'; ?>"><a href="donate.php"
                         class="nav-link">Donate</a></li>

                 <!-- Dropdown Menu Start -->
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         More
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="blog.php">Blog</a>
                         <a class="dropdown-item" href="gallery.php">Gallery</a>
                         <a class="dropdown-item" href="event.php">Events</a>
                         <a class="dropdown-item" href="location.php">Locations</a>
                         <a class="dropdown-item" href="testimonial.php">Testimonial</a>
                     </div>
                 </li>
                 <!-- Dropdown Menu End -->

                 <li class="nav-item <?php if($active_page == 'contact') echo 'active'; ?>"><a href="contact.php"
                         class="nav-link">Contact</a></li>
                 <li class="nav-item <?php if($active_page == 'login') echo 'active'; ?>"><a href="login.php"
                         class="nav-link">Login</a></li>
             </ul>
         </div>
     </div>
 </nav>