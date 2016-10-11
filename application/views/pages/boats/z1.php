<div id="mainimg"></div>
<div id="mainimg-nav">
	<ul>
		<li class="previmg">Previous Image</li>
		<li class="imgdot">Z1 image 1</li>
		<li class="imgdot">Z1 image 2</li>
		<!--<li class="imgdot">Z1 image 3</li>
		<li class="imgdot">Z1 image 4</li>
		<li class="imgdot">Z1 image 5</li>-->
		<li class="nextimg">Next Image</li>
	</ul>
</div>
<h1 id="superHeader">Tig&eacute; Z1</h1>
<div id="leftBlock">
	<div id="boatblock">
		<div id="boatFeature">
			<hr class="topline">
			<div id="rolloverInstruct">Rollover for features</div>
			<img src="<?php echo URL::base(); ?>public/images/features/z1/dash.jpg" width="300" height="170" alt="">
			<h3>Low Profile, Max Visibility Dash</h3>
			<p>The Z1 dash features a clean, simplified layout and ultra&ndash;low profile to maximize forward visibility. It also has a custom vinyl color option and stainless accents and switching.</p>
			<a href="<?php echo URL::site('performance/functional-desgin'); ?>">Learn more</a>
			<hr class="bottomline">
		</div>
	    <p>Razor&ndash;edge styling. Outstanding multi&ndash;sport performance. Precise handling. People&ndash;friendly functionality. Outstanding value. The Tig&eacute; Z1 is the total package. This 21&ndash;foot beauty will definitely turn heads on the water and off. And that strong first impression is backed by incredible overall versatility. Riders, skiers and surfers of all levels will be equally impressed by the Z1&rsquo;s outstanding variable wake characteristics. The Z1 surf wake is superior to any other inboard with a perfect sweet spot and enough juice for everyone to shred all day. Passengers will find the balanced, well&ndash;executed Z1 floor plan, 100&rdquo; beam, deep seating, optional color LCD display, and transom activity center add up to 21&ndash;foot V&ndash;drive that far exceeds any other.</p>
		  <ul>
  		  <?php foreach($specs as $spec): ?>
    		  <li><?php echo $spec; ?></li>
    		<?php endforeach; ?>
  		</ul>
	    <div id="overhead">
	    	<!--<div id="dotAlphaZ" class="featuredot"></div>-->
			<div id="dotLCD" class="featuredot"></div>
			<div id="dotDash" class="featuredot"></div>
			<div id="dotTAC" class="featuredot"></div>
			<div id="dotStorage" class="featuredot"></div>
			<div id="dotPcm" class="featuredot"></div>
			<div id="dotCarpet" class="featuredot"></div>
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
		<hr>
	</ul>
</div>
<div id="rightblock">
	<a href="<?php echo URL::base(); ?>public/downloads/specz1.pdf" class="pdfDownload">Download Spec Sheet &rsaquo;</a>
	<a href="<?php  echo URL::base(); ?>public/swfs/build/buildmaster.swf?width=978&height=510&flashvars=&modelName=Z1&modelView=<?php  echo URL::base(); ?>public/swfs/build/z1/&menuView=<?php  echo URL::base(); ?>public/swfs/build/menu.swf" id="buildLink" class="lightwindow" params="lightwindow_width=978,lightwindow_height=510,lightwindow_loading_animation=false" title="Build Your Z1">Build Your Z1</a>
	<div class="rightSectionBg">
		<ul class="videoGallery">
		  <li>
		    <a href="http://www.youtube.com/v/LDeWg4VzO5I" class="lightwindow" params="lightwindow_width=425,lightwindow_height=340,lightwindow_loading_animation=false" title="Tigé Z1 On The Water"><img src="<?php  echo URL::base(); ?>public/images/models/z1/videoGallery/thumbs/z1-2009.jpg" width="110" height="63" alt="video" /></a>
		    <span>Tig&eacute; Z1 On The Water</span>
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