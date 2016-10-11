<div id="mainimg"></div>
<div id="mainimg-nav">
	<ul>
		<li class="previmg">Previous Image</li>
		<li class="imgdot">22i image 1</li>
		<li class="imgdot">22i image 2</li>
		<li class="imgdot">22i image 3</li>
		<li class="imgdot">22i image 4</li>
		<li class="nextimg">Next Image</li>
	</ul>
</div>
<h1 id="superHeader">Tig&eacute; 22i</h1>
<div id="leftBlock">
	<div id="boatblock">
		<div id="boatFeature">
			<hr class="topline">
			<div id="rolloverInstruct">Rollover for features</div>
			<img src="<?php echo URL::base(); ?>public/images/features/22i/revseat.jpg" width="300" height="170" alt="">
			<h3>Reverse Seat</h3>
			<p>An influence in modern towboat seating, the reverse observer seat of the 22i is perfect for watching a session or finishing off the rear seating area.</p>
			<a href="<?php echo URL::base(); ?>performance/functional-design">Visit the Functional Design page.</a>
			<hr class="bottomline">
		</div>
	    <p>The Tig&eacute; 22i combines precise, direct&ndash;drive handling with outstanding multi&ndash;sport versatility, including  wakeboarding performance far superior to any mid&ndash;engine inboard available today. Now available in either Classic or Flex gel coat designs, the unique seating configuration and wide&ndash;body roominess is ideal for big groups of family or friends, maximizing passenger comfort and weight distribution for the ultimate wake setup. The fiberglass step&ndash;through transom gives riders and skiers easy access to and from the water. The spacious bow area provides plenty of legroom, along with the extensive storage space throughout. The two rear storage compartments feature gull&ndash;wing hatches for convenient storage of all your watersports gear.</p>
		  <ul>
		    <?php foreach($specs as $spec): ?>
    		  <li><?php echo $spec; ?></li>
    		<?php endforeach; ?>
    	</ul>
	    <div id="overhead">
	    	<div id="dotPcm" class="featuredot"></div>
			<div id="dotAlphaZ" class="featuredot"></div>
			<div id="dotRevSeat" class="featuredot"></div>
			<div id="dotSwimPlatform" class="featuredot"></div>
			<div id="dotStorage" class="featuredot"></div>
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
	<a href="<?php echo URL::base(); ?>public/downloads/spec22i.pdf" class="pdfDownload">Download Spec Sheet &rsaquo;</a>
	<a href="<?php  echo URL::base(); ?>public/swfs/build/buildmaster.swf?width=978&height=510&flashvars=&modelName=22i&modelView=<?php  echo URL::base(); ?>public/swfs/build/22i/&menuView=<?php  echo URL::base(); ?>public/swfs/build/menu.swf" id="buildLink" class="lightwindow" params="lightwindow_width=978,lightwindow_height=510,lightwindow_loading_animation=false" title="Build Your 22i">Build Your 22i</a>
	<div class="rightSectionBg">
		<ul class="videoGallery">
		  <li>
		    <a href="http://www.youtube.com/v/RBJk8tVDqY4" class="lightwindow" params="lightwindow_width=425,lightwindow_height=340,lightwindow_loading_animation=false" title="Tigé 22i On The Water"><img src="<?php  echo URL::base(); ?>public/images/models/22i/videoGallery/thumbs/i22-2009.jpg" width="110" height="63" alt="video" /></a>
		    <span>Tig&eacute; 22i On The Water</span>
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