<!DOCTYPE html>
<html lang="en"><head>    
<meta charset="utf-8">    
<title>
	<?php wp_title('|',1,'right'); ?> 
	<?php bloginfo('name'); ?>
</title>  
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
 	<?php wp_head(); ?>
</head>
<body> 

 <nav class="navbar" role="navigation">
 
  <!-- Collect the nav links for toggling -->
  <?php // Loading WordPress Custom Menu
     wp_nav_menu( array(
        'container_class' => 'navbar-collapse navbar-ex1-collapse',
        'menu_class'      => 'navbar-nav menu-font',
        'menu_id'         => 'main-menu',
        'theme_location'  => 'main-menu'
    ) );
  ?>
</nav>
 <div class="container"> 
 <div id="content">