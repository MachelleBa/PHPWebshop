<?php
/* Smarty version 3.1.33, created on 2018-11-23 15:52:28
  from 'C:\xampp\htdocs\animeru\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf8142c8bc1c5_95340592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8acb052f6842bb86009deb6ff99a13f90df1da7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\animeru\\view\\login.tpl',
      1 => 1542984063,
      2 => 'file',
    ),
    '82c8e17c967a038c13fbd1cd9086416cba4fe235' => 
    array (
      0 => 'C:\\xampp\\htdocs\\animeru\\view\\header.tpl',
      1 => 1542982446,
      2 => 'file',
    ),
    '9eee38f2286657df8304a3c34b11025714e2ce5b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\animeru\\view\\footer.tpl',
      1 => 1542211828,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5bf8142c8bc1c5_95340592 (Smarty_Internal_Template $_smarty_tpl) {
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
        <a href="#"><img src="../view/img/user_icon.png" class="img-fluid" alt="username"></img></a> 
		<a href="#">Sign in</a>
		 <!-- THIS HAS TO DISPLAY: SIGN IN OR NAME OF THE USER // Welcome, <a href="#"><br />
<b>Notice</b>:  Undefined index: Username in <b>C:\xampp\htdocs\animeru\smarty\tmp\82c8e17c967a038c13fbd1cd9086416cba4fe235_0.file.header.tpl.cache.php</b> on line <b>74</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\animeru\smarty\tmp\82c8e17c967a038c13fbd1cd9086416cba4fe235_0.file.header.tpl.cache.php</b> on line <b>74</b><br />
</a>! -->
      </li>
	 
	   <li class="nav-item">
        <a href="#"><img src="../view/img/cart_icon.png" class="img-fluid" alt="cart"></img> Cart</a>
      </li>
</ul>
  
  </nav>
</nav>
<!-- TITLE HAS TO BE SET UP IN EVERY PAGE --> 

</head>

<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
<div class="login-form">
    <form action="../controller/login.php" method="POST">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="E-mail address" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center"><a href="#">Create an Account</a></p>
</div>
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
