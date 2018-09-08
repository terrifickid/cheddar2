<?php get_header(); ?>



<div class="white_content">
    
    
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 text-center">
                <h3 style="color: #999999; margin: 0; text-transform: uppercase; font-size: 1rem; letter-spacing: 3px"><?php the_date('F j'); ?></h3>
                <h1 style="font-size: 2rem; margin: 2rem 0; text-align: center;"><?php the_title(); ?></h1>
                
                <div style="border-top: 2px solid silver; margin: 3rem 0 0rem 0"><!-- Go to www.addthis.com/dashboard to customize your tools --> <div style="position: relative; top: -32px; padding: 1rem; background: white; display: inline-block;" class="addthis_inline_share_toolbox"></div></div>
                
                <h5 style="margin: 0 0 4rem 0; line-height: 2rem;"><?php the_excerpt(); ?></h5>
            </div>
             <div class="col-2"></div>
        </div>
        <?php $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); 
		if($image) echo '<div class="col-sm-5 float-right"><img style="margin-bottom: 2rem; width: 100%;"  src="'.$image.'"><p>'.the_post_thumbnail_caption().'</p></div>';
            ?>
	
	<div style="color: #5a5a5a;"><?php the_content(); ?></div>
	
	<?php 
		$previous = get_previous_post(); 
		$next = get_next_post(); 
	?>
	
	
	    <div class="row">
    	    <div class="col-12 text-center">
    	    <a href="https://www.getcheddar.com/signup"><button style="cursor: pointer;" class="sign-me-up">Sign up for a <b>free developer account</b> with Cheddar.</button></a>
    	    </div>
	    </div>
	    
		<div id="c_backtoblog" class="text-center"><a href="<?php echo get_home_url(); ?>" class="back-to-blog">Back to Blog</a></div>
		<div class="footer_content">
		<div class="row align-items-center">
		
		 <?php if($previous): ?>
		<div class="col-6 c_link" onclick="window.location='<?php echo get_permalink($previous->ID); ?>';">
			 
					 <div class="row align-items-center">
						  
						 <div class="col-12">
			 <span class="g-link"><i style="color: #6ca530;" class="fas fa-long-arrow-alt-left"></i> &nbsp; Previous Post</span> 
			<h4 style="margin: 0.5rem; font-size: 1.25rem;"><?php echo $previous->post_title; ?></h4>
						 </div>
						 
					 </div>
			</div>
			 <?php endif; ?>
			 
			 <?php if($next): ?>
			<div class="col-6 c_link" onclick="window.location='<?php echo get_permalink($next->ID); ?>';">
					 <div class="row text-right align-items-center">
						 <div class="col-sm-12">
			 <span class="g-link">Next Post &nbsp; <i style="color: #6ca530;" class="fas fa-long-arrow-alt-right"></i></span>
			<h4 style="margin: 0.5rem; font-size: 1.25rem;"><?php echo $next->post_title; ?></h4>
						 </div>
						  
					 </div>
			</div><!-- en col -->
			<?php endif; ?>
			
		</div><!-- end row -->
	</div><!-- end footer_content -->
	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
	
</div><!-- end white_content -->
<?php get_footer(); ?>