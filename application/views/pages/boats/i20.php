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
<h1 id="superHeader">Tig&eacute; 20i</h1>
<div id="leftBlock">
	<div id="boatblock">
		<div id="boatFeature">
			<hr class="topline">
			<div id="rolloverInstruct">Rollover for features</div>
			<img src="<?php echo URL::base(); ?>public/images/features/rz/engine.jpg" width="300" height="170" alt="Engine">
			<h3>PCM Engines</h3>
			<p>In business for more than 30 years, PCM has established a long record of superior quality, innovation and outstanding customer satisfaction.</p>
			<a href="<?php echo URL::base(); ?>performance/engines">Learn more</a>
			<hr class="bottomline">
		</div>
	    <p>Serious skiers have heaped praise on this innovative 20 for its incredibly faint, clean wakes and creature comforts not usually found in a serious slalom boat. Now the all&ndash;new Tig&eacute; 20i delivers even more with a Tig&eacute;&ndash;plush interior, redesigned dash and striking gel coat scheme. No wonder it continues to be the boat of choice for TeamTig&eacute; pro skiers Jamie Beauchesne and Chris Rossi. But a quick adjustment of TAPS<sup>2</sup> and riders in the boat will be grabbing their boards for the impressive ConvexV wake. Those still in the boat will be comfortable and dry with plush seating and the deepest freeboard of any 20&ndash;foot direct&ndash;drive.</p>
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
		<hr>
	</ul>
</div>
<div id="rightblock">
	<a href="<?php echo URL::base(); ?>public/downloads/spec20i.pdf" class="pdfDownload">Download Spec Sheet &rsaquo;</a>
	<a href="<?php  echo URL::base(); ?>public/swfs/build/buildmaster.swf?width=978&height=510&flashvars=&modelName=20i&modelView=<?php  echo URL::base(); ?>public/swfs/build/20i/&menuView=<?php  echo URL::base(); ?>public/swfs/build/menu.swf" id="buildLink" class="lightwindow" params="lightwindow_width=978,lightwindow_height=510,lightwindow_loading_animation=false" title="Build Your 20i">Build Your 20i</a>
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