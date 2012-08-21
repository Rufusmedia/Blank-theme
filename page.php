<?php get_header(); ?>
<div class="container main-content">
	<div class="eleven columns content-area">
	    <div class="padding">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="page" id="post-<?php the_ID(); ?>">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div><!-- end .page -->
			<?php endwhile; endif; ?>
			
		</div><!-- end .padding -->
	</div><!-- end .eleven.columns.content-area-->
    <?php get_sidebar(); ?>
</div><!-- end .container.main-content -->
<?php get_footer(); ?>