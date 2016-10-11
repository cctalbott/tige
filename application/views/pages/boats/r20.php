<div id="mainimg"></div>
<div id="mainimg-nav">
	<ul>
		<li class="previmg">Previous Image</li>
		<li class="imgdot">R20 image 1</li>
		<li class="imgdot">R20 image 2</li>
		<!--<li class="imgdot">R20 image 3</li>-->
		<li class="nextimg">Next Image</li>
	</ul>
</div>
<h1 id="superHeader">Tig&eacute; R20</h1>
<div id="leftBlock">
	<div id="boatblock">
		<div id="boatFeature">
			<hr class="topline">
			<div id="rolloverInstruct">Rollover for features</div>
			<img src="<?php echo URL::base(); ?>public/images/features/rz/bow.jpg" width="300" height="170" alt="">
			<h3>Oversized Bow</h3>
      <p>The RZ Series has the wide&ndash;open bow design that allows for lots of leg room and additional space for more passengers. Let&rsquo;s not forget the razor edge style of the RZ line.</p>
      <p><a href="<?php echo URL::base(); ?>performance/functional-design" title="Functional Design">Learn more</a></p>
			<hr class="bottomline">
		</div>
	    <p>The R20, with its legendary Tig&eacute; craftsmanship and remarkable performance offers you everything Tig&eacute; is known for, priced for everyone to achieve the ownership dream. From your first time up on a wakeboard, to boosting huge airs on your surf board, you&rsquo;ll have the outstanding inboard performance you need to support your ever&ndash;growing skill level.</p>
		  <ul>
  		  <?php foreach($specs as $spec): ?>
    		  <li><?php echo $spec; ?></li>
    		<?php endforeach; ?>
  		</ul>
	    <div id="overhead">
  			<div id="dotDash" class="featuredot"></div>
  			<div id="dotTAC" class="featuredot"></div>
  			<div id="dotStorage" class="featuredot"></div>
  			<div id="dotPcm" class="featuredot"></div>
  			<div id="dotBow" class="featuredot"></div>
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
	<a href="<?php echo URL::base(); ?>public/swfs/build/buildmaster.swf?width=978&height=510&flashvars=&modelName=R20&modelView=<?php echo URL::base(); ?>public/swfs/build/r20/&menuView=<?php echo URL::base(); ?>public/swfs/build/menu.swf" id="buildLink" class="lightwindow" params="lightwindow_width=978,lightwindow_height=510,lightwindow_loading_animation=false" title="Build Your R20">Build Your R20</a>
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