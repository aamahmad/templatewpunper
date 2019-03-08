<?php get_header(); ?>

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<?php the_breadcrumb(); ?>
		</div>
	</div>
</div>
<?php 
if ( have_posts() ) : while ( have_posts() ) : the_post();            
	get_template_part( 'content-single', get_post_format() );
endwhile; endif; 
?>


<?php get_footer(); ?>