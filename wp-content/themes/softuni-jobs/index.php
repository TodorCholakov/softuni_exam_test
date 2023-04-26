<?php get_header(); ?>
<?php if (have_posts()):?>
	<ul class="jobs-listing">
	<?php while(have_posts()): the_post(); ?>
	
		<?php get_template_part('template-parts/jobitem'); ?>

	<?php endwhile; ?>
<?php endif; ?>
</ul>
<?php get_footer(); ?>