<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

    <?php if(!is_front_page()):?>
       </div>
	<?php endif;?>
    </div>  
	<div class="body_inner">
		<div class="body_inner1">
		<?php if ( ! is_404() )
					get_sidebar( 'footer' ); ?>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(6) ) : ?>
        <?php endif; ?>
		<div class="footer">
            <?php
				$post_id = '192';
				$queried_post = get_post(icl_object_id($post_id));
				$title = $queried_post->post_title;
				 echo  $queried_post->post_content;
			?>
            <?php wp_reset_query(); ?>
		</div>	
	</div>
  </div>
</div><!-- wrapper -->

<?php wp_footer(); ?>

</body>
</html>