<div id="mainimg"></div>
<div id="mainimg-nav">
	<ul>
		<li class="previmg">Previous Image</li>
		<li class="imgdot">RZR image 1</li>
		<li class="imgdot">RZR image 2</li>
		<li class="imgdot">RZR image 3</li>
		<!--<li class="imgdot">RZR image 4</li>-->
		<li class="nextimg">Next Image</li>
	</ul>
</div>
<h1 id="superHeader">Tig&eacute; RZR</h1>
<div id="leftBlock">
	<div id="boatblock">
		<div id="boatFeature">
			<hr class="topline">
			<div id="rolloverInstruct">Rollover for features</div>
			<img src="<?php echo URL::base(); ?>public/images/features/rz/touch.jpg" width="300" height="170" alt="">
			<h3>Tig&eacute; Touch</h3>
			<p>Introducing Touch Control Technology to inboard boats with a 6.5" full&ndash;color, multimedia display. Tig&eacute;Touch seamlessly integrates the touch control the entire boat.</p>
			<a href="<?php echo URL::site('performance/touch'); ?>">Learn more</a>
			<hr class="bottomline">
		</div>
	    <p>The newest addition to our flagship line, the RZR is loaded with room and cutting&ndash;edge style, its all RZ with a little extra attitude. Convex V and TAPS<sup>2</sup>, can make a skiers wake virtually disappear, or combine it with the ballast setup to throw the best wakesurf wave of any 20&ndash;foot boat. With Tig&eacute; Touch, you&rsquo;re just one touch away from a wake aggressive enough to challenge any athlete.</p>
		  <ul>
  		  <?php foreach($specs as $spec): ?>
    		  <li><?php echo $spec; ?></li>
    		<?php endforeach; ?>
  		</ul>
	    <div id="overhead">
	      <div id="dotAlphaZ" class="featuredot"></div>
  	    <div id="dotTouch" class="featuredot"></div>
  			<div id="dotTAC" class="featuredot"></div>
  			<div id="dotStorage" class="featuredot"></div>
  			<div id="dotPcm" class="featuredot"></div>
  			<div id="dotAudio" class="featuredot"></div>
  			<div id="dotSidePockets" class="featuredot"></div>
  			<div id="dotBow" class="featuredot"></div>
  			<div id="dotIceChest" class="featuredot"></div>
  			<div id="dotCarpet" class="featuredot"></div>
  			<div id="dotDesign" class="featuredot"></div>
  			<div id="dotWalkOverTran" class="featuredot"></div>
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
	<!--<div class="galleryLtArrow" id="contentGalleryLt"></div>
	<div class="galleryRtArrow" id="contentGalleryRt"></div>
	<ul id="contentGalleryPaginator" class="paginationIndicator">
		<li id="contentGalleryPg1"></li>
		<li id="contentGalleryPg2"></li>
		<li id="contentGalleryPg3"></li>
		<li id="contentGalleryPg4"></li>
		<hr>
	</ul>-->
</div>
<div id="rightblock">
	<!--<a href="<?php //echo URL::base(); ?>public/downloads/specz1.pdf" class="pdfDownload">Download Spec Sheet &rsaquo;</a>-->
	<a href="<?php  echo URL::base(); ?>public/swfs/build/buildmaster.swf?width=978&height=510&flashvars=&modelName=RZR&modelView=<?php echo URL::base(); ?>public/swfs/build/rzr/&menuView=<?php echo URL::base(); ?>public/swfs/build/menu.swf" id="buildLink" class="lightwindow" params="lightwindow_width=978,lightwindow_height=510,lightwindow_loading_animation=false" title="Build Your RZR">Build Your RZR</a>
	<!--<div class="rightSectionBg">
		<ul class="videoGallery">
		  <li>
		    <a href="http://www.youtube.com/v/LDeWg4VzO5I" class="lightwindow" params="lightwindow_width=425,lightwindow_height=340,lightwindow_loading_animation=false" title="Tigé Z1 On The Water"><img src="<?php //echo URL::base(); ?>public/images/models/z1/videoGallery/thumbs/z1-2009.jpg" width="110" height="63" alt="video" /></a>
		    <span>Tig&eacute; Z1 On The Water</span>
		  </li>
		</ul>
	</div>-->
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