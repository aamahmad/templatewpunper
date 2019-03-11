<div class="spost clearfix">
	<div class="entry-image">
		<a href="<?php the_permalink();?>">
			<?php if ( has_post_thumbnail() ) { ?>
				<img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" sizes="(max-width: 602px) 100vw, 602px">
			<?php } else { ?>
				<img src="" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" sizes="(max-width: 602px) 100vw, 602px">
			<?php } ?>
		</a>
	</div>
	<div class="entry-c">
		<h5 class="nobottommargin"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
		<span class="small"><?php echo get_the_date('j F Y', '', ''); ?></span>
	</div>
	
</div>
