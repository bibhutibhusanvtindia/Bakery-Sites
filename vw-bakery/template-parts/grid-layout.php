<?php
/**
 * The template part for displaying grid post
 *
 * @package VW Bakery
 * @subpackage vw-bakery
 * @since VW Bakery 1.0
 */
?>
<?php 
  $vw_bakery_archive_year  = get_the_time('Y'); 
  $vw_bakery_archive_month = get_the_time('m'); 
  $vw_bakery_archive_day   = get_the_time('d'); 
?>
<div class="col-lg-4 col-md-6">
	<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
	    <div class="grid-post-main-box wow zoomInDown delay-1000" data-wow-duration="2s">
	      	<div class="box-image">
	          	<?php 
		            if(has_post_thumbnail() && get_theme_mod( 'vw_bakery_grid_image_hide_show',true) == 1) { 
		              the_post_thumbnail(); 
		            }
	          	?>
	        </div>
	        <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2> 
	        <?php if( get_theme_mod( 'vw_bakery_grid_postdate',true) == 1 || get_theme_mod( 'vw_bakery_grid_author',true) == 1 || get_theme_mod( 'vw_bakery_grid_comments',true) == 1) { ?>
	            <div class="post-info">
	                <?php if(get_theme_mod('vw_bakery_grid_postdate',true)==1){ ?>
	                   <i class="<?php echo esc_attr(get_theme_mod('vw_bakery_grid_postdate_icon','fas fa-calendar-alt')); ?>"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $vw_bakery_archive_year, $vw_bakery_archive_month, $vw_bakery_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><span><?php echo esc_html(get_theme_mod('vw_bakery_grid_post_meta_field_separator', '|'));?></span> 
	                <?php } ?>

	                <?php if(get_theme_mod('vw_bakery_grid_author',true)==1){ ?>
	                   <i class="<?php echo esc_attr(get_theme_mod('vw_bakery_grid_author_icon','fas fa-user')); ?>"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><span><?php echo esc_html(get_theme_mod('vw_bakery_grid_post_meta_field_separator', '|'));?></span> 
	                <?php } ?>

	                <?php if(get_theme_mod('vw_bakery_grid_comments',true)==1){ ?>
	                   <i class="<?php echo esc_attr(get_theme_mod('vw_bakery_grid_comments_icon','fa fa-comments')); ?>" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment', 'vw-bakery'), __('0 Comments', 'vw-bakery'), __('% Comments', 'vw-bakery') ); ?> </span>
	                <?php } ?>
	                <?php vw_bakery_edit_link(); ?>
	            </div>
	        <?php } ?>     
	        <div class="new-text">
	          	 <div class="entry-content">
	          	 	<p>
	          	 		<?php $vw_bakery_theme_lay = get_theme_mod( 'vw_bakery_grid_excerpt_settings','Excerpt');
	                  if($vw_bakery_theme_lay == 'Content'){ ?>
	                    <?php the_content(); ?>
	                  <?php }
	                  if($vw_bakery_theme_lay == 'Excerpt'){ ?>
	                    <?php if(get_the_excerpt()) { ?>
			          				<?php $vw_bakery_excerpt = get_the_excerpt(); echo esc_html( vw_bakery_string_limit_words( $vw_bakery_excerpt, esc_attr(get_theme_mod('vw_bakery_related_posts_excerpt_number','30')))); ?> <?php echo esc_html( get_theme_mod('vw_bakery_grid_excerpt_suffix','') ); ?>
			          			<?php }?>
              		<?php }?> 	
			        </p>
	          	 </div>
	        </div>
	        <?php if( get_theme_mod('vw_bakery_grid_button_text','Read More') != ''){ ?>
	        	<a class="content-bttn" href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small"><?php echo esc_html(get_theme_mod('vw_bakery_grid_button_text',__('Read More','vw-bakery')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_bakery_grid_button_text',__('Read More','vw-bakery')));?></span></a>
	        <?php } ?>
	    </div>
	    <div class="clearfix"></div>
  	</article>
</div>