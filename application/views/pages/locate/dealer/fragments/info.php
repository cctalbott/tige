<ul>
  <li><h4><?php echo HTML::entities($info['Name']); ?></h4></li>
  <li>
    <ul class='theaddress'>
      <li><?php echo $info['Address']; ?></li>
    </ul>
  </li>
  <li>p. <?php echo $info['Phone'];?></li>
  <li><?php echo $info['Country']; ?></li>
  <li><?php echo sprintf("%.1f", $info['Distance']); ?> miles</li>
  <li><a href="mailto:<?php echo HTML::email($info['email']); ?>"><?php echo HTML::email($info['email']); ?></a></li>
  <li><a href="<?php echo $info['Url']; ?>" title="<?php echo HTML::entities($info['Name'])?>"><?php echo $info['Url']; ?></a></li>
</ul>
<h3>Map</h3>
<div id="themap<?php echo $info['_id']; ?>" class="googleMap"></div>
<script type='text/javascript'>
  /* <![CDATA[ */
  var geocoder;
  var map;
  
  document.observe("dom:loaded", function() 
  { 
    var latlng = new google.maps.LatLng(0, 0);
    var myOptions = {
      zoom: 13,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById(<?php echo "'themap".$info['_id']."'"; ?>), myOptions); 
    var address = <?php echo "'".str_replace("<br>", ", ", $info["Address"])."'"; ?>;
    
    geocoder = new google.maps.Geocoder();
    
    geocoder.geocode({'address': address}, function(results, status) {
      if(status == google.maps.GeocoderStatus.OK)
      {
        map.setCenter(results[0].geometry.location);
        
        var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location
        });
      }
      else
      {
        alert("Geocode was not successful for the following reason: " + status);
      }
    });
  });
  /* ]]> */
</script>