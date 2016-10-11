<div id="mainimg"></div>
<ul id="performanceHighlight" class="highlight4">
	<li class="first">
	  <?php 
	  echo HTML::anchor('performance/touch', 
	    "<h3>Tig&eacute; Touch</h3>".
	    "<p>A remarkable breakthrough in boating technology</p>"
	  ); 
	  ?>
	</li>
	<li>
	  <?php
	  echo HTML::anchor('performance/functional-design', 
	    "<h3>Functional Design</h3>".
	    "<p>Boat design fit for a purpose</p>"
	  );
	  ?>
	</li>
	<li>
	  <?php
	  echo HTML::anchor('performance/alpha-z-tower', 
	    "<h3>Alpha Z Tower</h3>".
	    "<p>Integrated style with incredible strength</p>"
	  );
	  ?>
	</li>
	<li>
	  <?php
	  echo HTML::anchor('performance/pcm-engines', 
	    "<h3>PCM Engines</h3>".
	    "<p>The best is now even better</p>"
	  );
	  ?>
	</li>
</ul>
<hr />
<div class="sectionLeft">
	<div id="convex">
		<div id="convexContent">
			<h3>ConvexV/TAPS<sup>2</sup> Technology</h3>
			<p>Our patented ConvexV hull and TAPS<sup>2</sup> technology is the key to our superior performance, incomparable ride and outstanding versatility, clearly setting Tig&eacute; apart from all other inboards.</p>
			<?php echo HTML::anchor('performance/convex-v', "Learn More", array('title' => "Convex V/TAPS2")); ?>
		</div>
	</div>
<!--[if lte IE 7]>
<style type="text/css">
#cinema ul {margin-top: -4px;}
</style>
<![endif]-->
	<div id="cinema">
		<h3>Tig&eacute;Cinema</h3>
		<a href='http://tigecinema.com' title='TigéCinema' id='cinemaLink'>See Films</a>
		<hr />
		<ul>
			<li>
				<a href="http://www.youtube.com/v/XbDOGJr0AuI" class="lightwindow" params="lightwindow_width=640,lightwindow_height=385,lightwindow_loading_animation=false" rel="cinemaGallery1">
					<?php 
					echo HTML::image('public/images/demo/videoGallery/thumbs/performance.jpg', 
					  array(
					    'width' => '85', 
					    'height' => '49', 
					    'alt' => 'Nick Weinacker puts the Tig&eacute; 22V&eacute; to the test.'
					  )
					); 
					?>
					<div class="description">
					  <h3>Tig&eacute; Performance</h3>
						<p>Nick Weinacker puts the Tig&eacute; 22V&eacute; to the test.</p>
					</div>
				</a>
			</li>
			<li>
				<a href="http://www.youtube.com/v/fKjiD_tN77w" class="lightwindow" params="lightwindow_width=640,lightwindow_height=385,lightwindow_loading_animation=false" rel="cinemaGallery2">
				  <?php 
					echo HTML::image('public/images/demo/videoGallery/thumbs/driving.jpg', 
					  array(
					    'width' => '85', 
					    'height' => '49', 
					    'alt' => 'Tig&eacute; is put through several real world scenarios.'
					  )
					); 
					?>
					<div class="description">
						<h3>Driving The Difference</h3>
						<p>Tig&eacute; is put through several real world scenarios.</p>
					</div>
				</a>
			</li>
			<li>
				<a href="http://www.youtube.com/v/jJaywjvZdYI" class="lightwindow" params="lightwindow_width=640,lightwindow_height=385,lightwindow_loading_animation=false" rel="cinemaGallery3">
				  <?php 
					echo HTML::image('public/images/unique/alphaz/videoGallery/thumbs/folding.jpg', 
					  array(
					    'width' => '85', 
					    'height' => '49', 
					    'alt' => 'A demo of how easy the Alpha Z collapses below the windshield.'
					  )
					); 
					?>
					<div class="description">
						<h3>Alpha Z Collapse</h3>
						<p>A demo of how easy the Alpha Z collapses below the windshield.</p>
					</div>
				</a>
			</li>
			<li>
				<a href="http://www.youtube.com/v/cRBZYUjBQR4" class="lightwindow" params="lightwindow_width=640,lightwindow_height=385,lightwindow_loading_animation=false" rel="cinemaGallery4">
					<?php 
					echo HTML::image('public/images/home/videoGallery/thumbs/surfwake.jpg', 
					  array(
					    'width' => '85', 
					    'height' => '49', 
					    'alt' => 'An in&ndash;depth look at the details of the Tig&eacute; surf wake.'
					  )
					); 
					?>
					<div class="description">
						<h3>The Surf Wake</h3>
						<p>An in&ndash;depth look at the details of the Tig&eacute; surf wake.</p>
					</div>
				</a>
			</li>
		</ul>
	</div>
</div>
<ul id="performanceSidebar" class="sidebar4">
	<li>
	  <?php
	  echo HTML::anchor(
	    'performance/ballast',
	    "<h3>Ballast Options</h3>".
	    "<p>Three ballast options customized to your skill level.</p>"
	  );
	  ?>
	</li>
	<li class="second">
	  <?php
	  echo HTML::anchor(
	    'tour',
	    "<h3>Tour The Factory</h3>".
	    "<p>An in&ndash;depth video tour of Tigé headquarters</p>"
	  );
	  ?>
	</li>
	<li>
	  <?php
	  echo HTML::anchor(
	    'performance/wet-sounds-audio',
	    "<h3>Premium Audio</h3>".
	    "<p>WetSounds leads the way in our elite factory stereo system.</p>"
	  );
	  ?>
	</li>
	<li>
	  <?php
	  echo HTML::anchor(
	    'performance/lifetime-warranty',
	    "<h3>Lifetime Replacement Warranty</h3>".
	    "<p>We don&rsquo;t just fix it. We replace it.</p>"
	  );
	  ?>
	</li>
</ul>