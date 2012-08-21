<?php get_header(); ?>
<div class="container main-content">
	<div class="eleven columns content-area">
	    <div class="padding">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="post clearfix" id="post-<?php the_ID(); ?>">
                <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                <div class="post-content-excerpt">
                <p class="post-meta">Posted on <?php the_time('F jS, Y'); ?> by <?php the_author(); ?> | <?php comments_number(); ?></p><!-- end .post-meta --> 
                <?php the_content('View Full Article...'); ?>
                </div><!-- end .post-content-excerpt -->
                <p><?php edit_post_link('Edit This Entry', '', ''); ?></p>
            </article><!-- end .post -->
            <?php endwhile; endif; ?>
            
		</div><!-- end .padding -->
	</div><!-- end .eleven.columns.content-area-->
    <?php get_sidebar(); ?>
</div><!-- end .container.main-content -->
<?php get_footer(); ?>