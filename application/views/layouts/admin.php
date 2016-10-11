<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  <head>
    <?php echo $meta; ?>

    <!-- title -->
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="<?php echo URL::base(); ?>public/favicon.ico" type="image/ico" />
    <base id="htmldom" href="<?php echo URL::base(); ?>" />

    <!-- global styles -->
    <?php //echo HTML::global_styles_helper(); ?>

    <!-- unique styles -->
    <?php echo $unique_styles; ?>

    <!-- global scripts -->
    <?php if(isset($global_scripts)): ?>
      <?php echo $global_scripts; ?>
    <?php endif; ?>
    
    <!-- unique scripts -->
    <?php echo $unique_scripts; ?>
  </head>
  <body id="<?php echo $page_id; ?>">
    <?php if(isset($confirmation)) echo $confirmation; ?>
    <div id="contentWrapper">
    	<div id="content">
    		<?php echo $content; ?>
    	</div>
    </div>	
  </body>
</html>