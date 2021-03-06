<?php
/**
 * Flexible Posts Widget: KENIT widget template
 */

if ( !defined('ABSPATH') )
	die('-1');

echo $before_widget;?>
<?php if ( !empty($title) )
	echo $before_title . $title . $after_title;

if( $flexible_posts->have_posts() ):
?>
<div id="list-phim">
<div class="viewport">
<ul class="overview">
	<?php while( $flexible_posts->have_posts() ) : $flexible_posts->the_post();?>
		<li class="item-phim">
		<span class="chat-luong"><?php the_field('chat_luong');?></span>
		<span class="nam"><?php the_field('nam_san_xuat');?></span>
			<a class="post-img" href="<?php echo the_permalink(); ?>">
				<div class="screen">
            		<div class="frame">
					<?php the_post_thumbnail(array(500,377));?>
					</div>
				</div>
			</a>
			<div class="post-title" rel="bookmark">
                <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
				<p><?php the_field('ten_tieng_anh');?></p>
            </div>
            <div class="rating"><img src="<?php echo get_template_directory_uri(); ?>/images/stars.png"></div>
            
		</li>
	<?php endwhile; ?>
</ul>
</div>
<?php else: ?>
		<p><?php _e( 'No post found', 'flexible-posts-widget' ); ?></p>
<?php	
endif;?>
</div>
<?php echo $after_widget;
