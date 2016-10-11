<style type="text/css">
<!--
table {
  width: 100%;
  border: 1px solid #000;
}
th, td {
  border: 1px solid #000;
  text-align: left;
  padding: 2px 5px;
}
-->
</style>
<!--<pre>
  <?php //print_r($contacts); ?>
</pre>-->
<h1>Customer Service</h1>
<table>
  <tr>
    <th>fname</th>
    <th>lname</th>
    <th>email</th>
    <th>&nbsp;</th>
  </tr>
  <?php foreach($customerservices as $customerservice): ?>
    <tr>
      <td><?php echo $customerservice->contact_contacts->fname; ?></td>
      <td><?php echo $customerservice->contact_contacts->lname; ?></td>
      <td><?php echo $customerservice->contact_contacts->email; ?></td>
      <td><a href="<?php echo URL::base(); ?>admin/contact/show/<?php echo $customerservice->contact_contacts->id; ?>">show</a></td>
    </tr>
  <?php endforeach; ?>
</table>
<h1>Demo Requests</h1>
<table>
  <tr>
    <th>fname</th>
    <th>lname</th>
    <th>email</th>
    <th>&nbsp;</th>
  </tr>
  <?php foreach($demos as $demo): ?>
    <tr>
      <td><?php echo $demo->contact_contacts->fname; ?></td>
      <td><?php echo $demo->contact_contacts->lname; ?></td>
      <td><?php echo $demo->contact_contacts->email; ?></td>
      <td><a href="<?php echo URL::base(); ?>admin/contact/show/<?php echo $demo->contact_contacts->id; ?>">show</a></td>
    </tr>
  <?php endforeach; ?>
</table>
<h1>Brochure Requests</h1>
<table>
  <tr>
    <th>fname</th>
    <th>lname</th>
    <th>email</th>
    <th>&nbsp;</th>
  </tr>
  <?php foreach($brochures as $brochure): ?>
    <tr>
      <td><?php echo $brochure->contact_contacts->fname; ?></td>
      <td><?php echo $brochure->contact_contacts->lname; ?></td>
      <td><?php echo $brochure->contact_contacts->email; ?></td>
      <td><a href="<?php echo URL::base(); ?>admin/contact/show/<?php echo $brochure->contact_contacts->id; ?>">show</a></td>
    </tr>
  <?php endforeach; ?>
</table>
<h1>Feedback</h1>
<table>
  <tr>
    <th>fname</th>
    <th>lname</th>
    <th>email</th>
    <th>&nbsp;</th>
  </tr>
  <?php foreach($feedbacks as $feedback): ?>
    <tr>
      <td><?php echo $feedback->contact_contacts->fname; ?></td>
      <td><?php echo $feedback->contact_contacts->lname; ?></td>
      <td><?php echo $feedback->contact_contacts->email; ?></td>
      <td><a href="<?php echo URL::base(); ?>admin/contact/show/<?php echo $feedback->contact_contacts->id; ?>">show</a></td>
    </tr>
  <?php endforeach; ?>
</table>
<h1>Tour Requests</h1>
<table>
  <tr>
    <th>fname</th>
    <th>lname</th>
    <th>email</th>
    <th>&nbsp;</th>
  </tr>
  <?php foreach($tours as $tour): ?>
    <tr>
      <td><?php echo $tour->contact_contacts->fname; ?></td>
      <td><?php echo $tour->contact_contacts->lname; ?></td>
      <td><?php echo $tour->contact_contacts->email; ?></td>
      <td><a href="<?php echo URL::base(); ?>admin/contact/show/<?php echo $tour->contact_contacts->id; ?>">show</a></td>
    </tr>
  <?php endforeach; ?>
</table>
<h1>Connects</h1>
<table>
  <tr>
    <th>fname</th>
    <th>lname</th>
    <th>email</th>
    <th>&nbsp;</th>
  </tr>
  <?php foreach($connects as $connect): ?>
    <tr>
      <td><?php echo $connect->contact_contacts->fname; ?></td>
      <td><?php echo $connect->contact_contacts->lname; ?></td>
      <td><?php echo $connect->contact_contacts->email; ?></td>
      <td><a href="<?php echo URL::base(); ?>admin/contact/show/<?php echo $connect->contact_contacts->id; ?>">show</a></td>
    </tr>
  <?php endforeach; ?>
</table>