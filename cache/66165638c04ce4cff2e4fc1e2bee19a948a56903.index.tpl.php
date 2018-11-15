<?php
/* Smarty version 3.1.33, created on 2018-11-15 15:43:17
  from 'C:\xampp\htdocs\smarty_php\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bed86054bdc65_89675884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82b94c43e4cb30e602258e2454ab2d1d54b64a42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_php\\templates\\index.tpl',
      1 => 1542211781,
      2 => 'file',
    ),
    'ea94e7e3bf79303e4152e6e4b3a297f02de77d87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_php\\templates\\header.tpl',
      1 => 1542210182,
      2 => 'file',
    ),
    'd18ecf3621ec14eb6bf6769cc9ddff65287f08a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_php\\templates\\footer.tpl',
      1 => 1542211828,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5bed86054bdc65_89675884 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			
<!-- SEARCH ENGINE -->
<meta name="description" content="ABOUT THE WEBSITE, SHORT INTRO">
<meta property="og:title" content="COMPLETE TITLE OF THE WEBSITE">
			
<!-- favicon -->
<link rel='shortcut icon' type='image/x-icon' href='./img/namefile.ico' />

<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- NAV BAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ANIMERU</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <nav class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cathegories
        </a>
		
        <nav class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Plushes</a>
          <a class="dropdown-item" href="#">Keychains</a>
        </nav>
		 </li>
		</ul>
     
     
    </ul>
<ul class="navbar-nav ml-auto"> <!-- TO SET SOME ITEMS on the right create a new ul class then put "ml-auto" -->
	<form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search..." aria-label="Search">
    </form>
	 <li class="nav-item">
        <a href="#"><img src="./templates/img/user_icon.png" class="img-fluid" alt="username"></img></a> Welcome, <a href="#">Sara</a>! <!-- THIS HAS TO DISPLAY: SIGN IN OR NAME OF THE USER-->
      </li>
	   <li class="nav-item">
        <a href="#"><img src="./templates/img/favourites_icon.png" class="img-fluid" alt="wishlist"></img> Wishlist</a>
      </li>
	   <li class="nav-item">
        <a href="#"><img src="./templates/img/cart_icon.png" class="img-fluid" alt="cart"></img> Cart</a>
      </li>
</ul>
  
  </nav>
</nav>
<!-- TITLE HAS TO BE SET UP IN EVERY PAGE --> 

</head>


<body>

<!-- SLIDESHARE--> 
<h1>
<figure id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <figure class="carousel-inner">
    <figure class="carousel-item active">
      <img class="d-block w-100" src="./templates/img/example.jpg" alt="First slide">
    </figure>
    <figure class="carousel-item">
      <img class="d-block w-100" src="./templates/img/example.jpg" alt="Second slide">
    </figure>
    <figure class="carousel-item">
      <img class="d-block w-100" src="./templates/img/example.jpg" alt="Third slide">
    </figure>
  </figure>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</figure></h1>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</body>

<!-- Footer -->
<footer class="page-footer font-small blue-grey lighten-5">

    <!-- Footer Elements -->
    <div class="container">

      <!-- Social buttons -->
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a class="btn-floating btn-fb mx-1">
            <i class="fa fa-facebook"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-tw mx-1">
            <i class="fa fa-twitter"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-gplus mx-1">
            <i class="fa fa-google-plus"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-li mx-1">
            <i class="fa fa-linkedin"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-dribbble mx-1">
            <i class="fa fa-dribbble"> </i>
          </a>
        </li>
      </ul>
      <!-- Social buttons -->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
  


</body>
</html>
<?php }
}
