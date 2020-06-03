<?php get_header(); ?>

<div class="container pt-5 pb-5">
	<h3 class="text-center text-white p-2 bg-dark"><?php single_cat_title(); ?></h3>
	<?php if(have_posts()):while(have_posts()):the_post();?>
<div class="card">
	<div class="card-body">
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink();?>" class="btn btn-info">Read More</a>
		</div>
		</div>
	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>