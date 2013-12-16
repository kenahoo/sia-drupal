<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!-- theme: siabp2.page -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>">
<head>
  <title><?php print strip_tags($head_title) ?></title>
  <meta http-equiv="content-language" content="<?php print $language->language ?>" />
  <!-- link href='http://fonts.googleapis.com/css?family=Ubuntu:300|Lora' rel='stylesheet' type='text/css' -->
  <?php print $meta; ?>
  <?php print $head; ?>
  <?php print $scripts ?>
  <?php print $styles; ?>
  <!--[if lte IE 7]>
    <link rel="stylesheet" href="<?php print $base_path . $bp_library_path; ?>blueprint/ie.css" type="text/css" media="screen, projection">
    <link href="<?php print $path_parent; ?>css/ie.css" rel="stylesheet"  type="text/css"  media="screen, projection" />
  <![endif]-->
  <!--[if lte IE 6]>
    <link href="<?php print $path_parent; ?>css/ie6.css" rel="stylesheet"  type="text/css"  media="screen, projection" />
  <![endif]-->
</head>

<body class="<?php print $body_classes; ?>">

<div class="container">
  <div id="header">
    <div id="logo" class="site_title">
      <?php print $logo_block; ?>
    </div>
      
    <?php if ($search_box): ?>
      <div id="search-box" class="span-8 last prepend-16">
        <?php print $search_box; ?>
      </div>
    <?php endif; ?>
    <!-- header --><?php print $header; ?><!-- /header -->
    <?php if (isset($primary_links)) : ?>
      <?php print theme('links', $primary_links, array('id' => 'nav', 'class' => 'links primary-links')) ?>
    <?php endif; ?>
    <?php if (isset($secondary_links)) : ?>
      <?php print theme('links', $secondary_links, array('id' => 'subnav', 'class' => 'links secondary-links')) ?>
    <?php endif; ?>
  </div>

  <?php if ($left): ?>
    <div class="<?php print $left_classes; ?>"><?php print $left; ?></div>
  <?php endif ?>

  <div class="<?php print $center_classes; ?>">
    <?php
      if ($breadcrumb != '') {
        print $breadcrumb;
      }

      if ($tabs != '') {
        print '<div class="tabs">'. $tabs .'</div>';
      }

      if ($messages != '') {
        print '<div id="messages">'. $messages .'</div>';
      }

      if ($image_title != '') {
        print '<h1>'. $image_title .'</h1>';
      }
      else if ($title != '') {
        print '<h1>'. $title .'</h1>';
      }

      print $help; // Drupal already wraps this one in a class

      print $content;
      print $feed_icons;
    ?>

    <?php if ($footer_message || $footer): ?>
      <div id="footer" class="clear">
        <?php if ($footer): ?>
          <?php print $footer; ?>
        <?php endif; ?>
        <?php if ($footer_message): ?>
          <div id="footer-message"><?php print $footer_message; ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>

  <?php if ($right): ?>
    <div class="<?php print $right_classes; ?>"><?php print $right; ?></div>
  <?php endif ?>

  <?php print $closure; ?>

</div>

</body>
</html>
