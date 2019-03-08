<div class="sidebar">
	<section class="widget_recent_entries widgets">
		<h3 class="widget_title">Berita Terkini</h3>
		<nav>
			<ul>
				<?php
				$args = array( 'numberposts' => '10');
				$recent_posts = wp_get_recent_posts( $args );
				foreach( $recent_posts as $recent ){ ?>

					<li class="normal">
						<a style="font-weight: 600;" href="<?php echo get_permalink($recent["ID"]); ?>"><?php echo $recent["post_title"];?></a>
						<span class="date"><?php echo date('j F Y', strtotime($recent['post_date'])); ?> | oleh : <?php the_author(); ?></span>
					</li>

				<?php }
				wp_reset_query();
				?>			
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