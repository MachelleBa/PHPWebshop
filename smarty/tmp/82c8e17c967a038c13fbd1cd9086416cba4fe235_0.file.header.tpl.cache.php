<?php
/* Smarty version 3.1.33, created on 2018-11-23 15:52:28
  from 'C:\xampp\htdocs\animeru\view\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf8142c82fc13_78166475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82c8e17c967a038c13fbd1cd9086416cba4fe235' => 
    array (
      0 => 'C:\\xampp\\htdocs\\animeru\\view\\header.tpl',
      1 => 1542982446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf8142c82fc13_78166475 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3650711615bf8142c817ae6_50434515';
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
		 <!-- THIS HAS TO DISPLAY: SIGN IN OR NAME OF THE USER // Welcome, <a href="#"><?php echo $_smarty_tpl->tpl_vars['Username']->value;?>
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
<?php }
}
