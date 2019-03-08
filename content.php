<div class="col-md-4">
<ul class="media-list">
	<li class="media">
		<div class="media-left">
			<a href="<?php the_permalink();?>">
				<?php if ( has_post_thumbnail() ) { ?>
					<img width="300" height="200" src="<?php echo the_post_thumbnail_url(); ?>" class="attachment-small size-small wp-post-image" alt="<?php the_title(); ?>">
				<?php } else { ?>
					<img width="300" height="200" src="http://appunper.xyz/wp-content/uploads/2018/09/unper_back.jpg" class="attachment-small size-small wp-post-image" alt="<?php the_title(); ?>">
				<?php } ?>
			</a>
			</div>
			<div class="media-body">
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<span class="date"><?php echo get_the_date('j F Y', '', ''); ?> | oleh : <?php the_author(); ?></span>

		</div>
	</li>
</ul>
</div>