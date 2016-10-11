<style type="text/css" media="screen">
  .events {
    width: 450px;
    font-size: 14px;
    line-height: 23px;
    color: #333;
  }
  .events h1 {
    font-size: 16px;
    font-weight: bold;
    margin: 0;
    line-height: 27px;
  }
  .events ul {
    margin: 0;
    padding: 0;
    list-style: none outside;
  }
  .events ul li {
    margin-bottom: 10px;
    padding: 10px;
    background-color: #eee;
    border: 1px solid #ccc;
  }
  .events ul li ul li {
    margin-bottom: 0;
    padding: 0;
    border: none;
  }
</style>
<div class="events">
  <ul>
    <?php foreach($days_events as $days_event): ?>
      <?php $start_at = $days_event->xpath("./start-at");
      $start_at = new DateTime($start_at[0]);
      $end_at = $days_event->xpath('./end-at');
      $end_at = new DateTime($end_at[0]); ?>
      <li>
        <ul>
          <li><h1><?php echo $days_event->name; ?></h1></li>
          <li>From: <?php echo $start_at->format("d M Y g:ia"); ?> to <?php echo $end_at->format("d M Y g:ia"); ?></li>
          <li><?php echo $days_event->notes; ?></li>
        </ul>
      </li>
    <?php endforeach; ?>
  </ul>
</div>