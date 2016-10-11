<div id="mainimg"></div>
<div id="mainimg-nav">
	<ul>
		<li class="previmg">Previous Image</li>
		<li class="imgdot">20V image 1</li>
		<li class="imgdot">20V image 2</li>
		<li class="imgdot">20V image 3</li>
		<li class="nextimg">Next Image</li>
	</ul>
</div>
<h1 id="superHeader">Tig&eacute; 20V</h1>
<div id="leftBlock">
	<div id="boatblock">
		<div id="boatFeature">
			<hr class="topline">
			<div id="rolloverInstruct">Rollover for features</div>
			<img src="<?php echo URL::base(); ?>public/images/features/rz/engine.jpg" width="300" height="170" alt="">
			<h3>PCM Engines</h3>
			<p>In business for more than 30 years, PCM has established a long record of superior quality, innovation and outstanding customer satisfaction.</p>
			<a href="<?php echo URL::base(); ?>performance/engines">Learn more</a>
			<hr class="bottomline">
		</div>
	    <p>Sporty handling combines with an outstanding range of world&ndash;class wake characteristics to make the Tig&eacute; 20V a fun, top&ndash;performing multi&ndash;sport machine. Driving the 20V is like slipping behind the wheel of a high&ndash;performance sports car. Outstanding slalom wakes give way to impressive, contest&ndash;ready wakeboarding wakes thanks to the ConvexV hull and TAPS<sup>2</sup>. Further validating this impressive performance, the 20V was also chosen as the Official Towboat of the 2004 Tig&eacute; U.S. OPEN. The wide&ndash;open interior provides ample passenger room while the gull&ndash;wing rear storage lockers and easily accessible bow storage allow plenty of space for your gear. Now available in either Classic or Flex gel coat designs.</p>
		  <ul>
		    <?php foreach($specs as $spec): ?>
    		  <li><?php echo $spec; ?></li>
    		<?php endforeach; ?>
    	</ul>
	    <div id="overhead">
	    	<div id="dotPcm" class="featuredot"></div>
			<div id="dotStorage" class="featuredot"></div>
			<!--<div id="dotDash" class="featuredot"></div>-->
			<div id="dotFreeboard" class="featuredot"></div>
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
		<hr>
	</ul>
</div>
<div id="rightblock">
	<a href="<?php echo URL::base(); ?>public/downloads/spec20v.pdf" class="pdfDownload">Download Spec Sheet &rsaquo;</a>
	<a href="<?php  echo URL::base(); ?>public/swfs/build/buildmaster.swf?width=978&height=510&flashvars=&modelName=20V&modelView=<?php  echo URL::base(); ?>public/swfs/build/20v/&menuView=<?php  echo URL::base(); ?>public/swfs/build/menu.swf" id="buildLink" class="lightwindow" params="lightwindow_width=978,lightwindow_height=510,lightwindow_loading_animation=false" title="Build Your 20V">Build Your 20V</a>
	<div class="rightSectionBg">
		<ul class="videoGallery">
		  <li>
		    <a href="http://www.youtube.com/v/gYq3eKBZ_24" class="lightwindow" params="lightwindow_width=425,lightwindow_height=340,lightwindow_loading_animation=false" title="Tigé 20V/20i On The Water"><img src="<?php  echo URL::base(); ?>public/images/models/v20/videoGallery/thumbs/vi20-2009.jpg" width="110" height="63" alt="video" /></a>
		    <span>Tig&eacute; 20V/20i On The Water</span>
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