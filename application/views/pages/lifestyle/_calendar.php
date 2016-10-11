<?php defined('SYSPATH') OR die('No direct access allowed.');

/*
** Get the day names
*/
$days = Calendar::days(2);

/*
** Previous and next month timestamps
*/
$next = mktime(0, 0, 0, $month + 1, 1, $year);
$prev = mktime(0, 0, 0, $month - 1, 1, $year);

/*
** Import the GET query array locally and remove the day
*/
$qs = $_GET;
unset($qs['day']);

/* 
** Previous and next month query URIs
*/
$path_info = Arr::get($_SERVER, 'PATH_INFO');
$prev = $path_info.URL::query(array_merge($qs, array(
  'month' => date('n', $prev), 
  'year' => date('Y', $prev)
)));
$prev .= "#calendarblock";
$next = $path_info.URL::query(array_merge($qs, array(
  'month' => date('n', $next), 
  'year' => date('Y', $next)
)));
$next .= "#calendarblock"; ?>

<!-- month title and previous and next month links -->
<div class="title"><?php echo strftime('%B %Y', mktime(0, 0, 0, $month, 1, $year)); ?></div>
<div class="controls">
	<span class="prev"><?php echo html::anchor($prev, '&laquo;'); ?></span>
	<span class="next"><?php echo html::anchor($next, '&raquo;'); ?></span>
</div>

<!-- days output -->
<table class="calendar">
  <tr>
    <?php foreach ($days as $weekday_name): ?>
      <th><?php echo $weekday_name ?></th>
    <?php endforeach; ?>
  </tr>
  <?php foreach ($weeks as $week): ?>
    <tr>
      <?php foreach ($week as $day):
        list($number, $current, $data) = $day;

        if(is_array($data)):
        	$classes = $data['classes'];
        	$output = empty($data['output']) ? '' : '<ul class="output"><li>'.implode('</li><li>', $data['output']).'</li></ul>';
        else:
        	$classes = array();
        	$output = '';
        endif; ?>
        <td class="<?php echo implode(' ', $classes); ?>" align="center">
          <?php if(!$output): ?>
            <span class="day"><?php echo $day[0]; ?></span>
          <?php else: ?>
            <?php echo $output; ?>
          <?php endif; ?>
        </td>
      <?php endforeach; ?>
    </tr>
  <?php endforeach; ?>
</table>
<script type="text/javascript">
  /* <![CDATA[ */
  $$("[rel='day_popup']").each(function(element) {
    IframeWindowOutput(element, element.readAttribute("href"));
  });
  /* ]]> */
</script>