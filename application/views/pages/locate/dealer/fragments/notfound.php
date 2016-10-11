<div id="leftblock">
	<div id="errorblock" class="section top">
		<h3>Dealer Locator</h3>
		<div class="sectionContent">
	    <p>If you&rsquo;re looking for a dealer outside the US, Canada, or Australia choose your country from the select field.</p>
	    <?php echo Form::open('locate/dealer', array('style' => 'margin-left: 36px;')); ?>
	    <?php echo Form::input('sid', 'IDHere', array('type' => 'hidden')); ?>
	    <?php echo Form::select('country', $country_options); ?>
	    <?php echo Form::submit('', 'select country'); ?>
	    <?php echo Form::close(); ?>
	    <p>Currently there is no Tig&eacute; dealer assigned to this zip code area. Please <?php echo HTML::anchor('contact/index', "contact Tig&eacute; Boats"); ?> for further assistance. Thanks for your interest in Tig&eacute;!</p>
	    <ul id='contact_list'>
	      <li><h4>Tig&eacute; Boats, Inc.</h4></li>
	      <li>Mailing Address
	        <ul>
	          <li>1801 Highway 36</li>
	          <li>Abilene, TX 79602</li>
	        </ul>
	      </li>
	      <li>phone: 325.676.7777</li>
	      <li>e&ndash;mail: <a href='mailto:<?php echo HTML::email('info@tige.com'); ?>'><?php echo HTML::email('info@tige.com'); ?></a></li>
	    </ul>
			<p>Our website is available in Ukrainian for those in the Ukraine or Russia at <a href="http://tige.com.ua">http://tige.com.ua</a>.</p>
		</div>
	</div>
</div>