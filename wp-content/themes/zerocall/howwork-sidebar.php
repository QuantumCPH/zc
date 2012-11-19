<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
		<!--<div id="secondary" class="widget-area" role="complementary">-->
        <div class="inner_pg_right_outer">
			<?php if ( ! dynamic_sidebar( 'sidebar-8' ) ) : ?>
                <div class="inner_pg_right">
                    <aside id="archives" class="widget">
                        <h3 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>
                        <ul>
                            <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                        </ul>
                    </aside>
                </div>
                <div class="inner_pg_right">
				<aside id="meta" class="widget">
					<h3 class="widget-title"><?php _e( 'Meta', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>
                </div>
			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>