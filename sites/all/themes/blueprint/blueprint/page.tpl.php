<?php

<div class="container">
  <div id="header">
      <h1 id="logo">
        <?php print $logo_block; ?>
      </h1>
    <?php print render($page['header']); ?>
    
    <?php if (isset($main_menu)) : ?>
      <?php print theme('links', $main_menu, array('id' => 'nav', 'class' => 'links primary-menu')) ?>
    <?php endif; ?>
    <?php if (isset($secondary_menu)) : ?>
      <?php print theme('links', $secondary_menu, array('id' => 'subnav', 'class' => 'links secondary-menu')) ?>
    <?php endif; ?>
  </div>

  <?php if ($page['sidebar_first']): ?>
    <div class="<?php print $first_classes; ?>"><?php print render($page['sidebar_first']); ?></div>
  <?php endif ?>

  <div class="<?php print $center_classes; ?>" id="main-content">

    <?php if ($breadcrumb): ?>
      <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>

    <div id="messages">
      <?php  print $messages; ?>
    </div>

    <?php print render($title_prefix); ?>
    <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php print render($page['content']); ?>
    
    <?php print $feed_icons; ?>

    <?php if ($page['footer']): ?>
      <div id="footer" class="clear">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>
  </div>

  <?php if ($page['sidebar_second']): ?>
    <div class="<?php print $second_classes; ?>"><?php print render($page['sidebar_second']); ?></div>
  <?php endif ?>


</div>
