<?php get_header(); ?>
<div class="white_content">
	
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
		
		if(!$image) $image = get_stylesheet_directory_uri()."/img/blogsample.png";
		 ?>
		 
	
	
	
	<div class="c_post">
		<div class="row">
			<div class="col-12 col-sm-3">
				
				<a href="<?php the_permalink(); ?>"><img style="border-radius: 5px; margin-bottom: 1.5rem;" src="<?php echo $image; ?>" class="img-fluid"></a>
				
			</div>
			<div class="col-12 col-sm-9">
				<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
				<p><?php the_excerpt(); ?></p>
				<div class="row align-items-center">
    				<div class="col-12 col-lg-6">
                        <a class="c_readmore" href="<?php the_permalink(); ?>">Read More &nbsp; <i class="fas fa-arrow-right"></i></a>
    				</div>
    				<div class="col-12 col-lg-6 text-right">
        				<div class="row align-items-center">
            				<div class="col text-left text-lg-right">
                				 <div class="cdate"><?php the_date('M j'); ?></div>
            				</div>
            				<div class="col">
                        <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>
            				</div>
        				</div>
    				</div>
    				
				</div>
			</div>
		</div>
	</div><!-- end c_post -->
	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
	
	
<div class="c_paginator">	
<?php echo paginate_links(array(
    'prev_text'          => __('<i class="fas fa-arrow-left"></i>'),
	'next_text'          => __('<i class="fas fa-arrow-right"></i>'),
	
    )); ?>
</div><!-- end c_paginator -->

	
	
</div>
<?php get_footer(); ?>

