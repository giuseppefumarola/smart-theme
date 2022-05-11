<?php get_header(); ?>
 <div class="container">
   <div class="content">
<?php  if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<!-- Articoli -->
<article>
  <a href="<?php the_permalink();  ?>">
<h3><?php the_title(); ?></h3></a>
<p><i>Articolo creato da <?php the_author(); ?> | <?php the_time('d F Y'); ?></i> </p>
<p><?php  the_tags(); ?></p>
<?php if(has_post_thumbnail()) : ?>
  <div><?php the_post_thumbnail('thumbnail'); ?></div>
<?php endif; ?>
<p><?php the_excerpt(); ?></p>
<a class="btn" href="<?php the_permalink(); ?>">Leggi tutto...</a>
</article>
<?php  endwhile; ?>
<?php else : ?>
<?php echo wpautop('ops...non ho trovato articoli!'); ?>
<?php endif; ?>
</div>
<?php  get_sidebar(); ?>
</div>
<?php get_footer(); ?>
</body>
</html>
