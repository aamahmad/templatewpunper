<div class="row">
	<div class="container">
	<div class="col-md-8">
		<div class="news-content">
			<h1 class="title"><a style="font-weight: 600;" href="<?php the_permalink(); ?>" title="Grup riset Intelligent System mengadakan Seminar Deep Learning"><?php the_title(); ?></a></h1>
			<span class="date"><?php the_date('j F Y', '', ''); ?> | oleh : <?php the_author(); ?></span>

			<div class="post"> 
			
			<?php if ( has_post_thumbnail() ) { ?>
				<img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" style="max-width: 100%;"> 	
			<?php } ?>
			<p><?php the_content(); ?></p>

			</div> 		

		</div>
    </div>
    <div class="col-md-4">
    	<?php get_sidebar();?>
    </div>
	</div>
</div>