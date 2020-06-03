<?php get_header(); ?>

<div class="container pt-5 pb-5">
	<h3 class="text-center text-white p-2 bg-dark"><?php the_title(); ?></h3>

	<?php if(have_posts()):while(have_posts()):the_post();?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>


	
</div>

<?php get_footer(); ?>