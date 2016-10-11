<div id="mainimg">
	<p>Here&rsquo;s a fast, easy way to get all the latest info on Tig&eacute;, our exciting product line, TeamTig&eacute; athletes and Tig&eacute; events happening around the world. Just fill in the quick&ndash;form below and make the connection to the world&rsquo;s most extraordinary boat company. Connect now!</p>
</div>
<h3>Fill out and receive a free Tig&eacute; decal <?php echo HTML::image('public/images/connect/decal.gif', array('width' => '80', 'height' => '25', 'alt' => 'Tig&eacute; Decal', 'style' => "position: relative; top: 6px;")); ?></h3>
<div id="connectblock">
	<form method="post" name="formconnect" id="formconnect" action="<?php echo URL::site('contact/submit'); ?>">
    <table>
	    <tr>
        <td align="right"><label>First Name:</label></td>
        <td><input type="text" tabindex="1" name="fname"></td>
        <td align="right"><label>Address:</label></td>
        <td><input type="text" tabindex="5" name="address"></td>
      </tr>
      <tr>
        <td align="right"><label>Last Name:</label></td>
        <td><input type="text" tabindex="2" name="lname"></td>
        <td align="right"><label>City:</label></td>
        <td><input type="text" name="city" tabindex="6"></td>
      </tr>
      <tr>
        <td align="right"><label>Email Address:</label></td>
        <td><input type="text" name="email" tabindex="3"></td>
        <td align="right"><label>State:</label></td>
        <td><input type="text" name="state" tabindex="7"></td>
      </tr>
      <tr>
        <td align="right"><label>Phone:</label></td>
        <td><input type="text" tabindex="4" name="phone"></td>
      	<td align="right"><label>Zip/Postal Code:</label></td>
        <td><input type="text" name="zip" tabindex="8"></td>
      </tr>
    </table>
    <span class="instruct">All Fields Are Required</span>
    <input type="submit" tabindex="9" value="submit" id="connectsubmitbtn">
    <hr>
    <input type="hidden" name="WEB_FROM" value="CONNECT">	
  </form>
  <hr>
  <a href="<?php echo URL::site('contact/privacy'); ?>">your privacy rights ></a>
  <hr>
</div>