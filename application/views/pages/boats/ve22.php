<div id="mainimg"></div>
<div id="mainimg-nav">
	<ul>
		<li class="previmg">Previous Image</li>
		<li class="imgdot">22V&eacute; image 1</li>
		<li class="imgdot">22V&eacute; image 2</li>
		<!--<li class="imgdot">22V&eacute; image 3</li>-->
		<li class="nextimg">Next Image</li>
	</ul>
</div>
<h1 id="superHeader">Tig&eacute; 22V&eacute;</h1>
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
	    <p>Breakthrough V&eacute; styling and functionality make the 22V&eacute; an instant leader in the 22&ndash;foot segment and Tig&eacute;Touch heads the controls of this incredible wake machine. The touch control technology makes your V&eacute; experience easier than ever before. Like its big V&eacute; sister, the 22V&eacute; loaded with room due to the expanded cockpit and open bow area. Convenient storage is located throughout the boat. The transom activity center includes a cooler and two compartments for easy access to drinks, gloves, soap and any other small items. On the performance end, expert riders are clearly blown away by the V&eacute; wake. Watersport versatility is also unmatched. In 4.7 seconds, world&ndash;class wakeboarding becomes exceptionally smooth slalom skiing with just the push of a button. Now available in either Classic or Flex gel coat designs.</p>
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
	<a href="<?php echo URL::base(); ?>public/downloads/spec22ve.pdf" class="pdfDownload">Download Spec Sheet &rsaquo;</a>
	<a href="<?php  echo URL::base(); ?>public/swfs/build/buildmaster.swf?width=978&height=510&flashvars=&modelName=22Vé&modelView=<?php  echo URL::base(); ?>public/swfs/build/22ve/&menuView=<?php  echo URL::base(); ?>public/swfs/build/menu.swf" id="buildLink" class="lightwindow" params="lightwindow_width=978,lightwindow_height=510,lightwindow_loading_animation=false" title="Build Your 22V&eacute;">Build Your 22V&eacute;</a>
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