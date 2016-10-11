<!-- Billboard Image -->
<div id="mainimg"></div>

<!-- Content -->
<div id="sectionLeft">
  
  <!-- Tigé facebook -->
  <div id="fanBox">
    <iframe scrolling="no" frameborder="0" src="http://www.facebook.com/connect/connect.php?id=37790532516&connections=0&stream=1" 
		  allowtransparency="true" style="border: none; width: 535px; height: 400px;"></iframe>
    <div style="font-size:8px; padding-left:10px; position: relative; top: -30px;"><a href="http://www.facebook.com/pages/Tige-Boats/37790532516">Tig&eacute; Boats</a> on Facebook</div>
  </div>
  
  <!-- featured content -->
  <div id="featured" class="boxShadow">
    <h3>Feet On Fire</h3>
		<div class="line"></div>
		<hr>
		<?php 
		echo HTML::image('public/images/lifestyle/feetonfire.jpg', array(
			'width' => '296',
			'height' => '169',
			'alt' => 'Feet On Fire',
			'style' => 'float: left; margin: 0 10px 5px 0;'
		)); 
		?>
		<p>Clear Lake, FL &mdash; The secret location and date was set, the excitement built for over 3 weeks, and the Tig&eacute; was gassed up and ready for footin.&#x27; Then, the much anticipated 2009 Feet on Fire went off with a bang!</p>
		<p>May 26th, in the secret location of Clear Lake, Florida, the annual Feet on Fire event brought in its 5th year of fierce competition. The organizers, Daniel Watkins and  Danno the Mano say &ldquo;This is, without a doubt, the event of the year&rdquo;.</p>
		<p>The &ldquo;Who&rsquo;s Who&rdquo; of wakebaording gathered at 10 a.m. to draw names and determine the head to head shoot outs that would soon take place. All gathered with the a goal of putting their best toe forward and taking the coveted Feet on Fire crown for 2009.</p>
		<p>The finals brought some heat from the past, showing a 2005 finals repeat of none other than Parks Bonifay and Shawn Watson. With legs like jello and feet on fire, it was Monster Athlete Shawn Watson who stole the show behind the Tig&eacute; RZ2. Taking with him the hand crafted trophy and the pride to be crowned the first 2 time Feet on Fire Champion.</p>
		<p>The day was capped off by crowd&ndash;pleaser Crazy Kelman Ritchie, as he set fire to the waters of Clear Lake and barefooted through the flames.</p>
		<p>Special Thanks to Tig&eacute; Boats, Monster Energy, Chipotle, Kyle for the ever so famous leader board, and thanks to the fans who have made the event what it is today.</p>
		<p>Check out alliancewake.com and Fuel TV for footage and action of Tig&eacute; Boats and the 2009 Feet on Fire.</p>
  </div>
  
</div>

<!-- Right sidebar -->
<div id="sectionRight">
  
  <!-- Events Calendar -->
  <div id="calendarblock">
		<h3>Event Calendar</h3>
		<?php echo $calendar; ?>
		<?php //echo $uri; ?>
	</div>
	
	<!-- lifestyle sidebar links -->
	<ul id="lifestyleSidebar" class="boxShadow">
		<li>
			<a href="<?php echo URL::base(TRUE, TRUE); ?>tour" title="">
				<h3>Tour The Factory Tour</h3>
				<p>An in&ndash;depth video tour of Tig&eacute; headquarters</p>
			</a>
		</li>
		<li>
			<a href="http://store.tige.com" title="">
				<h3>Tig&eacute; Gear</h3>
				<p>Gear up with Tig&eacute; merchandise</p>
			</a>
		</li>
		<li class="last">
			<a href="<?php echo URL::base(TRUE, TRUE); ?>demo" title="">
				<h3>The Ride of Your Life</h3>
				<p>Setup your test drive and get in a Tig&eacute; today</p>
			</a>
		</li>
	</ul>
	<a href="http://facebook.com/pages/Tige-Boats/37790532516" id="facebookLink" title="">Facebook</a>
	
</div>

<!-- TeamTigé content area -->
<h3 id="teamtigeHeader">TeamTig&eacute; Pro Athletes</h3>
<div id="theImgSection">
	<div id="riderimg"></div>
    <div id="imgthumbsHolder">
        <ul id="imgthumbs">
            <li id="thumb1"></li>
            <li id="thumb2"></li>
            <li id="thumb3"></li>
            <li id="thumb4"></li>
            <li id="thumb5" class="lastlink"></li>
        </ul>
    </div>
    <hr>
</div>

<!-- TeamTigé Menu -->
<ul id="ridersMenu">
	<li id="beauchesneBtn" class="activelink"><p>Beauchesne</p></li>
    <li id="rossiBtn"><p>Rossi</p></li>
    <li id="erringtonBtn"><p>Errington</p></li>
    <li id="watkinsBtn"><p>Watkins</p></li>
    <li id="ruckBtn"><p>Ruck</p></li>
    <li id="santoriBtn"><p>Santori</p></li>
    <li id="nicBtn"><p>N.I.C.</p></li>
    <li id="broomeBtn"><p>Broome</p></li>
    <li id="williamsBtn" class="lastlink"><p>Williams</p></li>
</ul>

<br />
<hr />