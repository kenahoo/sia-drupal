<?php
<div class="clear-block comment<?php print($comment->new) ? ' comment-new' : ''; print(isset($comment->status) && $comment->status == COMMENT_NOT_PUBLISHED) ? ' comment-unpublished' : ''; if (isset($author_comment)) print ' author'; print ' '. $zebra; ?>">
  <?php print($comment->new) ? ' comment-new' : ''; print(isset($comment->status) && $comment->status == COMMENT_NOT_PUBLISHED) ? ' comment-unpublished' : ''; if (isset($author_comment)) print ' author'; print ' '. $zebra; ?>
  
  
  <div class="comment-content">
    <?php if ($picture): ?>
      <div class="picture span-3">
        <?php print $picture ?>
      </div>
    <?php endif; ?>
    <div class="meta">
      <div class="permalink clearfix">
        <?php if ($comment->new) : ?>
          <a id="new"></a>
          <span class="new"><?php print drupal_ucfirst($new) ?></span>
        <?php endif; ?>
        <?php print $comment_count_link ?>
      </div>
      <?php if ($submitted): ?>
        <span class="username"><?php print theme('username', $comment); ?></span> <span class="date"><?php print t('wrote !date ago', array( '!date' => format_interval(time() - $comment->timestamp))); ?></span>
      <?php endif; ?>
    </div>


  </div>
</div>


<div class="<?php print $classes; ?> clearfix <?php print($comment->new) ? ' comment-new' : ''; print(isset($comment->status) && $comment->status == COMMENT_NOT_PUBLISHED) ? ' comment-unpublished' : ''; if (isset($author_comment)) print ' author'; print ' '. $zebra; ?>"<?php print $attributes; ?>>
  <?php print $picture ?>

  <div class="permalink clearfix">
    <?php if ($new): ?>
      <span class="new"><?php print $new ?></span>
    <?php endif; ?>
    <?php print $comment_count_link ?>
  </div>
  <?php print render($title_prefix); ?>
  <h3<?php print $title_attributes; ?>><?php print $title ?></h3>
  <?php print render($title_suffix); ?>

  <div class="submitted">
    <?php print $permalink; ?>
    <?php
      print t('Submitted by !username on !datetime.',
        array('!username' => $author, '!datetime' => $created));
    ?>
  </div>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['links']);
      print render($content);
    ?>
    <?php if ($signature): ?>
    <div class="user-signature clearfix">
      <?php print $signature ?>
    </div>
    <?php endif; ?>
  </div>

  <?php print render($content['links']) ?>
</div>