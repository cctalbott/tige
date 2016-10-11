<div id="mainimg">
	<a href="http://mywake.tige.com" title="MyWake Global Wakesurf Challenge" id="mainImgBtn">Enter the Challenge</a>
</div>
<div id="homeTopSection" class="boxShadow">
  <ul class="leftHorizontal">
    <li>
      <?php 
      echo HTML::anchor('lifestyle', "<h3>Lifestyle</h3>".
				"<p>".HTML::entities("It’s all about living the experience")."</p>"
			); 
			?>
    </li>
    <li>
      <div id="build">
        <h3>Build Your Tig&eacute;</h3>
        <ul>
          <li>
            <?php echo HTML::anchor('boats/rz4', 'RZ4'); ?>
          </li>
          <li>
            <?php echo HTML::anchor('boats/rz2', 'RZ2'); ?>
          </li>
          <li>
            <?php echo HTML::anchor('boats/z1', 'Z1'); ?>
          </li>
          <li>
            <?php echo HTML::anchor('boats/24ve', HTML::entities("24Vé")); ?>
          </li>
          <li>
            <?php echo HTML::anchor('boats/22ve', HTML::entities("22Vé")); ?>
          </li>
          <li>
            <?php echo HTML::anchor('boats/22i', '22i'); ?>
          </li>
          <li>
            <?php echo HTML::anchor('boats/20v', '20V'); ?>
          </li>
          <li>
            <?php echo HTML::anchor('boats/20i', '20i'); ?>
          </li>
        </ul>
      </div>
    </li>
    <li>
      <?php 
      echo HTML::anchor('performance', "<h3>Performance</h3><p>".
        HTML::entities("Key features that make Tigé superior")."</p>"
			); 
			?>
    </li>
  </ul>
  <ul class="rightVertical">
    <li>
      <?php 
      echo HTML::anchor('demo', 
				"<h3>The Ride of Your Life</h3><p>".
				HTML::entities("Setup your Tigé test drive")."</p>"
			); 
			?>
    </li>
    <li>
      <?php
      echo HTML::anchor(
				'reviews', 
				"<h3>What The Experts Say</h3><p>Boat test and reviews from industry professionals</p>"
			);
      ?>
    </li>
    <li>
      <?php
      echo HTML::anchor(
				'tour', 
				"<h3>Tour The Factory</h3><p>".
				HTML::entities("An in–depth video tour of Tigé headquarters")."</p>"
			);
      ?>
    </li>
  </ul>
</div>
<div id="leftblock">
	<script type="text/javascript">
	  /* <![CDATA[ */
  	var flashvars = {
  		cinemaVideo: "../../video/loop09mute.flv"
  	};
  	var params = {};
  	params.bgcolor = "000000";
  	params.allowscriptaccess = "always";
  	var attributes = {};
  	swfobject.embedSWF(""+ $('htmldom').readAttribute('href') +"public/swfs/home/homevideo.swf", "modelvideo", "217", "122", "9.0.0", ""+ $('htmldom').readAttribute('href') +"public/swfs/expressInstall.swf", flashvars, params, attributes);
  	/* ]]> */
	</script>
  <!--[if lte IE 7]>
  <style type="text/css">
    /*#cinemaGallery {
    	position: relative;
    	top: -20px;}*/
      #cinemaGallery li {
      	position: relative;
      	top: -18px;}
      #cinemaGallery li.last {
      	top: -34px;}
  </style>
  <![endif]-->
  <div id="cinema" class="boxShadow">
		<div class="header">
			<p>An interactive Tig&eacute; Video Library featuring product, athletes, and more info.</p>
			<?php 
			echo HTML::anchor('http://tigecinema.com', 
				HTML::entities("Tigé Cinema"), array('id' => 'cinemaLink')
			); 
			?>
		</div>
		<div id="modelvideo">
		  <p>The model footage here requires flashplayer 9 or greater and javascript to function properly.</p>
		</div>
		<ul id="cinemaGallery">
		  <li>
		    <a href="http://www.youtube.com/v/QyQdad6oxUk" class="lightwindow" params="lightwindow_width=425,lightwindow_height=340,lightwindow_loading_animation=false" title="Tig&eacute; Ballast">
		      <img src="<?php URL::base(); ?>public/images/ballast/videogallery/thumbs/ballast.jpg" width="85" height="53" alt="Ballast Video: http://www.youtube.com/v/QyQdad6oxUk" />
		      <div class='description'>
		        <h3>Ballast Options</h3>
		        <p>See the Tig&eacute; ballast options.</p>
		      </div>
		    </a>
		  </li>
		  <li>
		    <a href="http://www.youtube.com/v/Oqb2Mn1X240" class="lightwindow" params="lightwindow_width=425,lightwindow_height=340,lightwindow_loading_animation=false" title="Tig&eacute; Surf">
		      <img src="<?php URL::base(); ?>public/images/ballast/videogallery/thumbs/surfbehind.jpg" width="85" height="53" alt="Surf Video: http://www.youtube.com/v/Oqb2Mn1X240" />
		      <div class='description'>
		        <h3>Surf Behind A Tig&eacute;</h3>
		        <p>Go surfing behind a Tig&eacute;</p>
		      </div>
		    </a>
		  </li>
		</ul>
	</div>
	<div id="storeLinks">
	  <a href="http://store.tige.com" id="storeLink">Tig&eacute; Store</a>
	  <a href="http://store.tige.com/collections/red-cross-disaster-relief-fund" id="redCrossLink">Red Cross Disaster Relief Fund</a>
	</div>
	<div class="news">
		<h3>Tig&eacute; News</h3>
		<div class="line"></div>
		<div class="twitterIcon"></div>
		<a href='http://twitter.com/tigeboats' class='twitterLink'>follow Tig&eacute;</a>
		<hr>
		<?php echo $twitter; ?>
	</div>
</div>
<?php 
echo HTML::anchor('contact/connect', 'Free Tig&eacute; Decal', array(
  'id' => 'tigedecal'
)); 
?>
<div id="pollblock" class="boxShadow">
  <h3>Give Us Your Answer</h3>
	<div>
	  <?php echo Form::open('poll/vote', array('name' => 'poll')); ?>
	    <input type='hidden' name='insert' value='poll' />
	    <?php echo $poll; ?>
	    <input type="submit" name="pollsubmit" value="SUBMIT" id="pollsubmit" />
	  <?php echo Form::close(); ?>
  </div>
</div>
<ul id="communitySidebar" class="sidebar3">
  <li>
    <a href="http://tigeowners.com">
      <h3>tigeowners.com</h3>
      <p>The official Tig&eacute; Boat Owners community</p>
    </a>
  </li>
  <li>
    <a href="http://wakegraphics.com/Tige/">
      <h3>Wake Graphics</h3>
      <p>Wake Graphics Tig&eacute; wrap program</p>
    </a>
  </li>
  <li>
    <?php 
    echo HTML::anchor('contact/connect', 
      "<h3>Stay Connected</h3>".
      "<p>Tap into Tig&eacute; for quick info, updates and much more</p>"
    ); 
    ?>
  </li>
</ul>