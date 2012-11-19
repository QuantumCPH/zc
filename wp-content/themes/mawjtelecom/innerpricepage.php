<?php
/**
 * Template Name: Inner Page Price Template
 * Description: A Page Template that shows content on home page
 *
 * @package WordPress
 * @subpackage Mawj Telecom
 * @since SMF 1.0
 */

get_header(); ?>

<div class="mainbg_Inner">
  <div class="inner_pg">
    <!--Left-->
    <div class="inner_pg_left">
      <?php while ( have_posts() ) : the_post(); ?>
      <div class="inner_pg_left_text">
        <h1>
          <?php the_title(); ?>
        </h1>
      </div>
      <br clear="all" />
      <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
    <div class="inner_pg_right_outer">
      <div class="inner_pg_right">
       <?php
		$post_id = '304';
		$queried_post = get_post(icl_object_id($post_id));
		$title = $queried_post->post_title;
	   ?>
       <h1><?php echo $title = $queried_post->post_title;   ?></h1>
	   <?php	
		echo  $queried_post->post_content;
		?>
       </div>
       <div class="inner_pg_right">
            <?php include 'price-calculator.php';?>
       </div>
    </div>
    <!-- right outer -->
  </div>
  <!-- inner_bg -->
</div>
<!-- mainbg_Inner -->
<?php get_footer(); ?>
