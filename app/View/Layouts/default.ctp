


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <?php echo $html->charset(); ?>
  <title>
  <?php __('My-CakePHP Tutorials'); ?>
  <?php echo $title_for_layout; ?>
  </title>
  <?php
  echo $html->meta('icon');


echo $html->css('cake.generic');


echo $scripts_for_layout;
  ?>
  </head>
  <body>
  <div id="container">
  <div id="header">
  Header Elements Will Go Here
  </div>
  <div id="content">


<?php $session->flash(); ?>


<?php echo $content_for_layout; ?>


</div>
  <div id="footer">
  Footer Text Goes Here!
  </div>
  </div>
  <?php echo $cakeDebug; ?>
  </body>
  </html>