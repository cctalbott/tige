<div class="pollblock">
	<h3><?php echo $poll_question; ?></h3>
	<ul>
		<?php foreach($poll_answers as $poll_answer) { ?>
		  <li>
  			<ul>
  				<li><?php echo HTML::entities($poll_answer->answer); ?></li>
  				<li class="percentbar" style="width: <?php echo floor($poll_answer->votes/$total_votes * 100); ?>%;"></li>
  				<li class="percentage"><?php echo floor($poll_answer->votes/$total_votes * 100); ?>%</li>
  			</ul>
  		</li>
		<?php } ?>
		<li><?php echo $total_votes; ?> votes have been cast</li>
	</ul>
</div>