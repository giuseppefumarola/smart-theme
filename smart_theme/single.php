<?php get_header(); ?>
 <div class="container">
<?php  if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<!-- Articoli -->
<article>
<h3><?php the_title(); ?></h3>
<p><i>Articolo creato da <?php the_author(); ?> | <?php the_time('d F Y'); ?></i> </p>

<?php if(has_post_thumbnail()) : ?>
  <div class="img-post"><?php the_post_thumbnail()?></div>
<?php endif; ?>
<p><?php the_content(); ?></p>
</article>
<?php  endwhile; ?>
<?php else : ?>
<?php echo wpautop('ops...non ho trovato articoli!'); ?>
<?php endif; ?>

<?php  comments_template(); ?>
 </div>

<?php get_footer(); ?>
</body>
</html>
