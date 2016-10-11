<div id="mainimg"></div>
<div id="leftblock">
	<div id="requestblock" class="section top">
		<ul>
			<li class="first">
				<a href="<?php echo URL::site(); ?>contact" id="quote" title="Request a Quote">Request a Quote</a>
			</li>
			<li>
				<a href="<?php echo URL::site(); ?>contact" id="demo" title="Request a Demo">Request a Demo</a>
			</li>
		</ul>
	</div>
	<div id="buildblock" class="section top">
		<ul id="buildmenu">
			<li class="first firstrow">
				<a href="<?php echo URL::base(); ?>public/swfs/build/buildmaster.swf?width=978&height=510&flashvars=modelName=RZ4&modelView=<?php echo URL::base(); ?>public/swfs/build/rz4/&menuView=<?php echo URL::base(); ?>public/swfs/build/menu.swf" id="rz4" rel="prettyPhoto[build]">Build Your RZ4</a>
			</li>
			<li class="firstrow">
				<a href="<?php echo URL::base(); ?>public/swfs/build/buildmaster.swf?width=978&height=510&flashvars=modelName=RZ2&modelView=<?php echo URL::base(); ?>public/swfs/build/rz2/&menuView=<?php echo URL::base(); ?>public/swfs/build/menu.swf" id="rz2" rel="prettyPhoto[build]">Build Your RZ2</a>
			</li >
			<li class="firstrow">
				<a href="<?php echo URL::base(); ?>public/swfs/build/buildmaster.swf?width=978&height=510&flashvars=modelName=Z1&modelView=<?php echo URL::base(); ?>public/swfs/build/z1/&menuView=<?php echo URL::base(); ?>public/swfs/build/menu.swf" id="z1" rel="prettyPhoto[build]">Build Your Z1</a>
			</li>
			<li class="first">
				<a href="<?php echo URL::base(); ?>public/swfs/build/buildmaster.swf?width=978&height=510&flashvars=modelName=24Vé&modelView=<?php echo URL::base(); ?>public/swfs/build/24ve/&menuView=<?php echo URL::base(); ?>public/swfs/build/menu.swf" id="ve24" rel="prettyPhoto[build]">Build Your 24Vé</a>
			</li>
			<li>
				<a href="<?php echo URL::base(); ?>public/swfs/build/buildmaster.swf?width=978&height=510&flashvars=modelName=22Vé&modelView=<?php echo URL::base(); ?>public/swfs/build/22ve/&menuView=<?php echo URL::base(); ?>public/swfs/build/menu.swf" id="ve22" rel="prettyPhoto[build]">Build Your 22Vé</a>
			</li>
			<li>
				<a href="<?php echo URL::base(); ?>public/swfs/build/buildmaster.swf?width=978&height=510&flashvars=modelName=22i&modelView=<?php echo URL::base(); ?>public/swfs/build/22i/&menuView=<?php echo URL::base(); ?>public/swfs/build/menu.swf" id="i22" rel="prettyPhoto[build]">Build Your 22i</a>
			</li>
			<li class="first">
				<a href="<?php echo URL::base(); ?>public/swfs/build/buildmaster.swf?width=978&height=510&flashvars=modelName=20V&modelView=<?php echo URL::base(); ?>public/swfs/build/20v/&menuView=<?php echo URL::base(); ?>public/swfs/build/menu.swf" id="v20" rel="prettyPhoto[build]">Build Your 20V</a>
			</li>
			<li>
				<a href="<?php echo URL::base(); ?>public/swfs/build/buildmaster.swf?width=978&height=510&flashvars=modelName=20i&modelView=<?php echo URL::base(); ?>public/swfs/build/20i/&menuView=<?php echo URL::base(); ?>public/swfs/build/menu.swf" id="i20" rel="prettyPhoto[build]">Build Your 20i</a>
			</li>
		</ul>
	</div>
</div>
<!--[if lte IE 6]>
<style type="text/css">
#rightblock {margin-right: 0;}
</style>
<![endif]-->
<div id="rightblock">
<!--[if lte IE 7]>
<style type="text/css">
.addressContact h3 {margin-top: -2px;}
.addressContact li.physical {margin-top: -10px;}
.addressContact li.electronic {margin-top: -1px;}
#mapIt {margin-top: 16px;}
</style>
<![endif]-->
	<?php echo $sidebar; ?>
</div>
<script type="text/javascript">
jQuery.noConflict();

jQuery(document).ready(function() {
	jQuery("a[rel^='prettyPhoto']").prettyPhoto();
});
</script>