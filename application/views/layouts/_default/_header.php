<div id="header">
	<div id="homelogo">
  	<?php echo HTML::anchor('welcome', 'Home', array('title' => 'tigé')); ?>
  </div>
  <div id="locator">
	  <?php echo Form::open('locate/dealer'); ?>
	  <?php echo Form::input('sid', 'IDHere', array('type' => 'hidden')); ?>
	  <?php echo Form::label('locatezip', 'Find A Dealer: '); ?>
	  <?php echo Form::input('zip', '', array('id' => 'locatezip')); ?>
	  <?php echo Form::submit('', 'Go', array('id' => 'locatesubmit')); ?>
	  <?php echo Form::close(); ?>
	  <p><?php echo HTML::anchor('locate/dealer', 'Outside North America? Click Here', array('title' => 'International Dealers')); ?></p>
  </div>
</div>
<script type="text/javascript">
  /* <![CDATA[ */
  document.observe("dom:loaded", function() {
    $("locatezip").setValue("Zip Code");
  });
  /* ]]> */
</script>