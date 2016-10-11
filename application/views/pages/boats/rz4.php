<div id="mainimg"></div>
<div id="mainimg-nav">
	<ul>
		<li class="previmg">Previous Image</li>
		<li class="imgdot">RZ4 image 1</li>
		<li class="imgdot">RZ4 image 2</li>
		<!--<li class="imgdot">RZ4 image 3</li>
		<li class="imgdot">RZ4 image 4</li>-->
		<li class="nextimg">Next Image</li>
	</ul>
</div>
<h1 id="superHeader">Tig&eacute; RZ4</h1>
<div id="leftBlock">
	<div id="boatblock">
	  <div id="boatFeature">
			<hr class="topline">
			<div id="rolloverInstruct">Rollover for features</div>
			<img src="<?php echo URL::base(); ?>public/images/features/rz/touch.jpg" width="300" height="170" alt="Tig&eacute;Touch">
			<h3>Tig&eacute; Touch</h3>
			<p>Introducing Touch Control Technology to inboard boats with a 6.5" full&ndash;color, multimedia display. Tig&eacute;Touch seamlessly integrates the touch control the entire boat.</p>
			<a href="<?php echo URL::site('performance/touch'); ?>">Learn more</a>
			<hr class="bottomline">
		</div>
		<p>The flagship of the RZ Series, the Tig&eacute; RZ4 merges sleek, razor&ndash;edge styling, extraordinary watersports performance. Tig&eacute;Touch electronics features complete boat control through a simple touch screen interface, making your boating experience easier than ever before. Deep seating in the massive cockpit and open bow area provide dry comfort and safety for up to 17 adults. The main cockpit features plush, pleated wraparound seating with an additional observer seat and storage area located behind the driver. The driver&ndash;side walkthrough connects the transom activity center to the cockpit and also doubles as an oversized step for easy dockside entry. Performance is huge, as well. Riders and surfers of all levels will be impressed by the size and shape of the RZ4 wake. The PCM engine combined with the fully trimmable ConvexV hull delivers outstanding speed, quick acceleration and exceptional fuel efficiency.</p>
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
			<div id="dotBow" class="featuredot"></div>
			<div id="dotObservSeat" class="featuredot"></div>
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
		<li id="contentGalleryPg3"></li>
		<li id="contentGalleryPg4"></li>
		<li id="contentGalleryPg5"></li>
		<hr>
	</ul>
</div>
<div id="rightblock">
	<a href="<?php echo URL::base(); ?>public/downloads/specrz4.pdf" class="pdfDownload">Download Spec Sheet &rsaquo;</a>
	<?php //echo $buildLink; ?>
	<a href="<?php  echo URL::base(); ?>public/swfs/build/buildmaster.swf?width=978&height=510&flashvars=&modelName=RZ4&modelView=<?php  echo URL::base(); ?>public/swfs/build/rz4/&menuView=<?php  echo URL::base(); ?>public/swfs/build/menu.swf" id="buildLink" class="lightwindow" params="lightwindow_width=978,lightwindow_height=510,lightwindow_loading_animation=false" title="Build Your RZ4">Build Your RZ4</a>
	<div class="rightSectionBg">
		<?php //echo $videoGallery; ?>
		<ul class="videoGallery">
		  <li>
		    <a href="http://www.youtube.com/v/RsFV0sXWQlE" class="lightwindow" params="lightwindow_width=425,lightwindow_height=340,lightwindow_loading_animation=false" title="Tigé RZ Series On The Water"><img src="<?php  echo URL::base(); ?>public/images/models/rz4/videoGallery/thumbs/rz42.jpg" width="110" height="63" alt="video" /></a>
		    <span>Tig&eacute; RZ Series On The Water</span>
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
						<img src="<?php echo URL::base(); ?>public/images/global/links/reviews.jpg" width="108" height="73" alt="">
						<span>Expert Reviews &rsaquo;</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>