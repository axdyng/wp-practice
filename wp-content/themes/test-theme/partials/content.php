<!-- This is the standard format of posts -->
<h3><?php the_title(); ?></h3>
<small>Posted on:
  <?php the_time('F j, Y'); ?>, at
  <?php the_time('g:i A') ?>, in
  <?php the_category(); ?>
</small>

<p><?php the_content(); ?></p>

<hr>
