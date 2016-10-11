<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  <head>
    <?php echo $meta; ?>

    <!-- title -->
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="public/favicon.ico" type="image/ico" />
    <base id="htmldom" href="<?php echo URL::base(); ?>" />

    <!-- unique styles -->
    <?php echo $unique_styles; ?>
    
    <!--[if lt IE 8]>
      <?php //echo HTML::script('public/javascripts/IE8.js'); ?>
    <![endif]-->
    
    <!-- unique scripts -->
    <?php echo $unique_scripts; ?>
  </head>
  <body id="<?php echo $page_id; ?>">
    <?php if(isset($confirmation)) echo $confirmation; ?>
    <?php echo $content; ?>	
  </body>
</html>