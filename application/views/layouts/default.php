<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  <head>
    <?php echo $meta; ?>

    <!-- title -->
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="<?php echo URL::base(); ?>public/favicon.ico" type="image/ico" />
    <base id="htmldom" href="<?php echo URL::base(); ?>" />

    <!-- global styles -->
    <?php echo HTML::global_styles_helper(); ?>

    <!-- unique styles -->
    <?php echo $unique_styles; ?>

    <!-- global scripts -->
    <?php if(isset($global_scripts)) { ?>
      <?php echo $global_scripts; ?>
    <?php } ?>
    <!--[if lt IE 8]>
      <?php //echo HTML::script('public/javascripts/IE8.js'); ?>
    <![endif]-->
    
    <!-- unique scripts -->
    <?php echo $unique_scripts; ?>
  </head>
  <body id="<?php echo $page_id; ?>">
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'AccountHERE']);
      _gaq.push(['_trackPageview']);
    </script>
    <?php if(isset($confirmation)) echo $confirmation; ?>
    <?php echo $globalheader; ?>
    <?php echo $globalnav; ?>
    <div id="contentWrapper">
    	<?php echo $modelnav; ?>
    	<div id="content">
    		<?php echo $content; ?>
    		<hr />
    	</div>
    	<?php echo $globalfooter; ?>
    </div>
    <script type="text/javascript">
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
      })();
    </script>	
  </body>
</html>