<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>

  <div class="container">

  <!-- Site header -->

   <header class="site-header" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/icehockey.jpeg')">
     <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
     <h5><?php bloginfo('description')?></h5>
</header>
