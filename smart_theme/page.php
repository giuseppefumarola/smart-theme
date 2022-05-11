<?php get_header(); ?>
 <div class="container">
<?php  if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<!-- Pagina -->
<article>
<h3><?php the_title(); ?></h3>
<?php if(has_post_thumbnail()) : ?>
  <div class="img-post"><?php the_post_thumbnail()?></div>
<?php endif; ?>
<p><?php the_content(); ?></p>
</article>
<?php  endwhile; ?>
<?php else : ?>
<?php echo wpautop('ops...non ho trovato articoli!'); ?>
<?php endif; ?>
 </div>

<?php get_footer(); ?>
</body>
</html>
