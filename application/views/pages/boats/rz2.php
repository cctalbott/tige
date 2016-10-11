<div id="mainimg"></div>
<div id="mainimg-nav">
	<ul>
		<li class="previmg">Previous Image</li>
		<li class="imgdot">RZ2 image 1</li>
		<li class="imgdot">RZ2 image 2</li>
		<!--<li class="imgdot">RZ2 image 3</li>-->
		<li class="nextimg">Next Image</li>
	</ul>
</div>
<h1 id="superHeader">Tig&eacute; RZ2</h1>
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
	    <p>The Tig&eacute; RZ2 is cutting edge style, backed up by incredible, versatile wakes and renowned Tig&eacute; handling. The razor-edge body styling blends seamlessly with the Alpha Z tower. Advanced Tig&eacute;Touch electronics are simple to use and dramatically enhance the entire boating experience. The wide&ndash;open RZ2 bow is extremely dry and the comfortable cockpit is expansive and user friendly. The fully functional transom activity center completes the balanced RZ2 floor plan. On the performance end, the RZ2 puts similar 22s to shame. Wakeboarding and surf wakes are outstanding, but not at the expense of handling and passenger comfort. Turning is tight, precise and as razor sharp as the RZ styling. Whether you&rsquo;re doing double&ndash;ups or cruising in the lake, passengers will relish the safety, dryness and total comfort of the RZ2 ride.</p>
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
		<li id="contentGalleryPg6"></li>
		<li id="contentGalleryPg7"></li>
		<hr>
	</ul>
</div>
<div id="rightblock">
	<a href="<?php echo URL::base(); ?>public/downloads/specrz2.pdf" class="pdfDownload">Download Spec Sheet &rsaquo;</a>
	<a href="<?php  echo URL::base(); ?>public/swfs/build/buildmaster.swf?width=978&height=510&flashvars=&modelName=RZ2&modelView=<?php  echo URL::base(); ?>public/swfs/build/rz2/&menuView=<?php  echo URL::base(); ?>public/swfs/build/menu.swf" id="buildLink" class="lightwindow" params="lightwindow_width=978,lightwindow_height=510,lightwindow_loading_animation=false" title="Build Your RZ2">Build Your RZ2</a>
	<div class="rightSectionBg">
		<ul class="videoGallery">
		  <li>
		    <a href="http://www.youtube.com/v/AWgB634o0CY" class="lightwindow" params="lightwindow_width=425,lightwindow_height=340,lightwindow_loading_animation=false" title="Tigé RZ Series On The Water"><img src="<?php  echo URL::base(); ?>public/images/models/rz2/videoGallery/thumbs/rz2-2010.jpg" width="110" height="63" alt="video" /></a>
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