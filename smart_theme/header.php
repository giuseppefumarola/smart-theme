<!DOCTYPE html>
<html>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>

</head>
<body>
<header>
<div class='container'><h2><?php bloginfo('name'); ?></h2>
<span><h4><?php bloginfo('description'); ?></h4></span>
</div>
</header>

<nav class="menu">
  <div class="container">

<?php
$args = array(
'theme_location'  => 'primary'
);
?>
<?php wp_nav_menu($args); ?>

  </div>
</nav>
