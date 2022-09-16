<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
   <link rel="stylesheet" href="css/responsive.css" />
   <title>Navbar</title>
 </head>
 <body>
<nav>
  <ul class="menu">
    <li class="logo"><a href="#">Creative Mind Agency</a></li>
    <li class="item"><a href="#">Home</a></li>
    <li class="item"><a href="#">About</a></li>
    <li class="item has-submenu">
      <a tabindex="0">Services</a>
      <ul class="submenu">
        <li class="subitem"><a href="#">Design</a></li>
        <li class="subitem"><a href="#">Development</a></li>
        <li class="subitem"><a href="#">SEO</a></li>
        <li class="subitem"><a href="#">Copywriting</a></li>
      </ul>
    </li>
    <li class="item has-submenu">
      <a tabindex="0">Plans</a>
      <ul class="submenu">
        <li class="subitem"><a href="#">Freelancer</a></li>
        <li class="subitem"><a href="#">Startup</a></li>
        <li class="subitem"><a href="#">Enterprise</a></li>
      </ul>
    </li>
    <li class="item"><a href="#">Blog</a></li>
    <li class="item"><a href="#">Contact</a>
    </li>
    <li class="item button"><a href="#">Log In</a></li>
    <li class="item button secondary"><a href="#">Sign Up</a></li>
    <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
  </ul>
</nav>

<script src="js/navbar.js"></script>
 </body>
</html>