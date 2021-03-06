<?php
/**
 * @package one-edge
 */
?>

<article itemscope itemprop="blogPosts" itemtype="http://schema.org/BlogPosting" itemtype="http://schema.org/BlogPosting" <?php post_class('border-bottom-hover'); ?> title="<?php printf( esc_html__( 'Blog post: %s', 'one-edge' ), get_the_title() )?>">
	<header class="entry-header">

			<div class="post-img-wrap">
			 	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >

					<?php 
						if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					?>
						<?php 
							$image_id = get_post_thumbnail_id();
							$image_url_big = wp_get_attachment_image_src($image_id,'one-edge-post-thumbnail-big', true);
							$image_url_mobile = wp_get_attachment_image_src($image_id,'one-edge-post-thumbnail-mobile', true);
						?>
				 		<picture itemscope itemprop="image">
							<source media="(max-width: 600px)" srcset="<?php echo esc_url($image_url_mobile[0]); ?>">
							<img src="<?php echo esc_url($image_url_big[0]); ?>" alt="<?php the_title_attribute(); ?>">
						</picture>
					<?php
						} else {
					?>
				 		<picture itemscope itemprop="image">
							<source media="(max-width: 600px)" srcset="<?php echo llorix_one_lite_get_file('/images/no-thumbnail-mobile.jpg');?> ">
							<img src="<?php echo llorix_one_lite_get_file('/images/no-thumbnail.jpg'); ?>" alt="<?php the_title_attribute(); ?>">
						</picture>
					<?php } ?>

				</a>
				<div class="post-date entry-published updated">
					<span class="post-date-day"><?php the_time('d'); ?></span>
					<span class="post-date-month"><?php the_time('M'); ?></span>
				</div>
			</div>


	<div class="entry-header-inner-wrap">
		<div class="entry-header-inner">

			<?php the_title( sprintf( '<h1 class="entry-title" itemprop="headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
			
			<div class="entry-meta list-post-entry-meta">
				<span itemscope itemprop="author" itemtype="http://schema.org/Person" class="entry-author post-author">
					<span  itemprop="name" class="entry-author author vcard">
					<i class="icon-man-people-streamline-user"></i><a itemprop="url" class="url fn n" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>" rel="author"><?php the_author(); ?> </a>
					</span>
				</span>
				<span class="posted-in entry-terms-categories" itemprop="articleSection">
					<i class="icon-basic-elaboration-folder-check"></i>Posted in 
					<?php
						/* translators: used between list items, there is a space after the comma */
						$categories_list = get_the_category_list( esc_html__( ', ', 'one-edge' ) );
						$pos = strpos($categories_list, ',');
						if ( $pos ) {
							echo substr($categories_list, 0, $pos);
						} else {
							echo $categories_list;
						}
					?>
				</span>
				<a href="<?php comments_link(); ?>" class="post-comments">
					<i class="icon-comment-alt"></i><?php comments_number( esc_html__('No comments','one-edge'), esc_html__('One comment','one-edge'), esc_html__('% comments','one-edge') ); ?>
				</a>
			</div><!-- .entry-meta -->

			<div class="colored-line-left"></div>
			<div class="clearfix"></div>

		</div><!-- .entry-header-inner -->
	</div><!-- .entry-header-inner -->

	</header><!-- .entry-header -->
	<div itemprop="description" class="entry-content entry-summary">
		<?php
			$ismore = @strpos( $post->post_content, '<!--more-->');
			if($ismore) : the_content( sprintf( esc_html__('Read more %s ...','one-edge'), '<span class="screen-reader-text">'.esc_html__('about ', 'one-edge').get_the_title().'</span>' ) );
			else : the_excerpt();
			endif;
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'one-edge' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->