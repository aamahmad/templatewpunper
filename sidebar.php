<div class="sidebar">

	<section class="widget_recent_entries widgets">
		<h3 class="widget_title">Related
			<?php
				$categories = get_the_category();
				if ( ! empty( $categories ) ) {
					echo '' . esc_html( $categories[0]->name ) . '';
				}
			?>
		</h3>

		<nav>
			<ul>

				<?php
				// Default arguments
				$args = array(
					'posts_per_page' => 15, // How many items to display
					'post__not_in'   => array( get_the_ID() ), // Exclude current post
					'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
					'orderby' => 'DESC',
				);

				// Check for current post category and add tax_query to the query arguments
				$cats = wp_get_post_terms( get_the_ID(), 'category' );
				$cats_ids = array();
				foreach( $cats as $wpex_related_cat ) {
					$cats_ids[] = $wpex_related_cat->term_id;
				}
				if ( ! empty( $cats_ids ) ) {
					$args['category__in'] = $cats_ids;
				}

				// Query posts
				$wpex_query = new wp_query( $args );


				// Loop through posts
				foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>

				<li class="normal">
					<a style="font-weight: 600;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          <span class="date"><?php echo get_the_date('j F Y', '', ''); ?> | oleh : <?php the_author(); ?></span>
				</li>

				<?php
				// End loop
				endforeach;

				// Reset post data
				wp_reset_postdata(); ?>

			</ul>
		</nav>
	</section>

	<section class="widget_categories widgets">
		<h3 class="widget_title">Kategori</h3>
		<nav>
			<ul>
				<?php
                $sub_categorys = get_categories( array(
                	'hide_empty' 		=> false,
                    'orderby'            => 'id',
                    'show_count'         => __( 'No categories' ),
                    'use_desc_for_title' => false,
                    'title_li'           => false,
                    'show_option_none'   => false,
                    'child_of'           => $id_term
                ));

                foreach ( $sub_categorys as $subcategory ) { ?>
                    <li class="cat-item">
                        <a class="listkategori<?php if ($thisCat->term_id == $subcategory->term_id) { ?> aktif<?php } ?>" href="<?php echo esc_url( get_category_link( $subcategory->term_id ) );?>" >
                            <?php echo esc_html( $subcategory->name );?><span class="badge pull-right">
                            <?php echo $subcategory->category_count; ?></span>
                        </a>
                    </li>
                <?php }
            ?>

			</ul>
		</nav>
	</section>


</div>
