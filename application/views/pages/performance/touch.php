<div id="touchscreenMain">
	<div id="imgHeader">
		<p>Introducing the first on&ndash;board, interactive control experience.</p>
		<h1>Welcome To <em>Tig&eacute;Touch</em></h1>
	</div>
	
	<a href="http://touchscreen.tige.com/touchscreen/index.html?width=850&height=500" id="interactBtn" class="lightwindow" params="lightwindow_width=850,lightwindow_height=500,lightwindow_loading_animation=false" title="Click home icon located at top right to return to start screen.">Click to interact</a>
</div>
<div id="touchscreenInfo">
	<div id="touchscreenIcons">
		<ul>
			<li id="speedsetIcon"><a href="<?php echo URL::base(); ?>performance/touch/speedset#touchscreenInfo" title="">Speedset</a></li>
			<li id="audioIcon"><a href="<?php echo URL::base(); ?>performance/touch/audio#touchscreenInfo" title="">Audio</a></li>
			<li id="gaugesIcon"><a href="<?php echo URL::base(); ?>performance/touch/gauges#touchscreenInfo" title="">Gauges</a></li>
			<li id="depthIcon"><a href="<?php echo URL::base(); ?>performance/touch/depth#touchscreenInfo" title="">Depth</a></li>
			<li id="profilesIcon"><a href="<?php echo URL::base(); ?>performance/touch/profiles#touchscreenInfo" title="">Profiles</a></li>
			<li id="lightsIcon"><a href="<?php echo URL::base(); ?>performance/touch/lights#touchscreenInfo" title="">Lights</a></li>
			<li id="switchesIcon" class="last"><a href="<?php echo URL::base(); ?>performance/touch/switches#touchscreenInfo" title="">Switches</a></li>
		</ul>
		<hr>
		<div id="iconsBottomBorder"></div>
		<div id="iconsPointer"></div>
	</div>
	<div id="touchscreenInfoContent">
		<?php echo $touchscreenInfo; ?>
	</div>
</div>
<script type="text/javascript">
  /* <![CDATA[ */
  document.observe('dom:loaded', function() {
    <?php echo $icon_script; ?>
  });
  /* ]]> */
</script>
