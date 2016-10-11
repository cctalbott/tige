<div id="mainimg"></div>
<div id="mainimg-nav">
	<ul>
		<li class="previmg">Previous Image</li>
		<li class="imgdot">24V&eacute; image 1</li>
		<li class="imgdot">24V&eacute; image 2</li>
		<!--<li class="imgdot">24V&eacute; image 3</li>-->
		<li class="nextimg">Next Image</li>
	</ul>
</div>
<h1 id="superHeader">Tig&eacute; 24V&eacute;</h1>
<div id="leftBlock">	
	<div id="boatblock">
		<div id="boatFeature">
			<hr class="topline">
			<div id="rolloverInstruct">Rollover for features</div>
			<img src="<?php echo URL::base(); ?>public/images/features/rz/touch.jpg" width="300" height="170" alt="">
			<h3>Tig&eacute; Touch</h3>
			<p>Introducing Touch Control Technology to inboard boats with a 6.5" full&ndash;color, multimedia display. Tig&eacute;Touch seamlessly integrates the touch control the entire boat.</p>
			<a href="<?php echo URL::base(); ?>performance/touch" title="">Learn more</a>
			<hr class="bottomline">
		</div>
	    <p>The essence of style and substance, the Tig&eacute; 24V&eacute; is one of the most popular Tig&eacute; models ever. Available in either Classic or Flex gel coat designs, its pioneering blend of flowing lines, superior multi&ndash;sport performance and functional layout makes the 24V&eacute; the perfect watersport platform for as many as 16 adults. Control is now easier than ever, with the on-board control of Tig&eacute;Touch electronics. The official towboat of the Tig&eacute; Pro&ndash;Am Wakeboarding Championships, the 24V&eacute; has become a &ldquo;must ride&rdquo; for serious riders and wakesurfers throughout the world. Push the TAPS<sup>2</sup> button and instantly dial in a small slalom wake for the skiers onboard. And for cruising, the ConvexV hull delivers a smooth, comfortable ride that is whisper&ndash;quiet and vibration&ndash;free, thanks to our advanced hydrodynamics, solid engineering and the elite PCM power train.</p>
		  <ul>
		    <?php foreach($specs as $spec): ?>
    		  <li><?php echo $spec; ?></li>
    		<?php endforeach; ?>
    	</ul>
	    <div id="overhead">
	    	<div id="dotAlphaZ" class="featuredot"></div>
			<div id="dotTouch" class="featuredot"></div>
			<div id="dotTAC" class="featuredot"></div>
			<div id="dotWalkOverTran" class="featuredot"></div>
			<div id="dotPcm" class="featuredot"></div>
			<div id="dotSidePockets" class="featuredot"></div>
			<div id="dotCarpet" class="featuredot"></div>
			<div id="dotAudio" class="featuredot"></div>
			<div id="dotDesign" class="featuredot"></div>
			<div id="dotSwimPlatform" class="featuredot"></div>
	    </div>
	</div>
	<div id="contentGallery">
		<div class="galleryWrapper">
			<ul>
		    <?php foreach($contentGallery as $img): ?>
			    <li><?php echo $img; ?></li>
			  <?php endforeach; ?>
		  </ul>
		</div>
	</div>
	<div class="galleryLtArrow" id="contentGalleryLt"></div>
	<div class="galleryRtArrow" id="contentGalleryRt"></div>
	<ul id="contentGalleryPaginator" class="paginationIndicator">
		<li id="contentGalleryPg1"></li>
		<li id="contentGalleryPg2"></li>
		<hr>
	</ul>
</div>
<div id="rightblock">
	<a href="<?php echo URL::base(); ?>public/downloads/spec24ve.pdf" class="pdfDownload">Download Spec Sheet &rsaquo;</a>
	<a href="<?php  echo URL::base(); ?>public/swfs/build/buildmaster.swf?width=978&height=510&flashvars=&modelName=24Vé&modelView=<?php  echo URL::base(); ?>public/swfs/build/24ve/&menuView=<?php  echo URL::base(); ?>public/swfs/build/menu.swf" id="buildLink" class="lightwindow" params="lightwindow_width=978,lightwindow_height=510,lightwindow_loading_animation=false" title="Build Your 24V&eacute;">Build Your 24V&eacute;</a>
	<div class="rightSectionBg">
		<ul class="videoGallery">
		  <li>
		    <a href="http://www.youtube.com/v/qtLVXv4bT9c" class="lightwindow" params="lightwindow_width=425,lightwindow_height=340,lightwindow_loading_animation=false" title="Tigé Vé Series On The Water"><img src="<?php  echo URL::base(); ?>public/images/models/ve24/videoGallery/thumbs/ve2422-2009.jpg" width="110" height="63" alt="video" /></a>
		    <span>Tig&eacute; V&eacute; Series On The Water</span>
		  </li>
		</ul>
	</div>
	<div class="rightSection">
		<h4>More Links</h4>
		<div class="rightSectionBg">
			<ul class="moreLinks">
				<li>
					<a href="<?php echo URL::site('demo'); ?>">
						<img src="<?php echo URL::base(); ?>public/images/models/demo_thumb.jpg" width="108" height="73" alt="Demo">
						<span>Setup Your Test Drive &rsaquo;</span>
					</a>
				</li>
				<li>
					<a href="<?php echo URL::site('reviews'); ?>">
						<img src="<?php echo URL::base(); ?>public/images/global/links/reviews.jpg" width="108" height="73" alt="reviews">
						<span>Expert Reviews &rsaquo;</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>