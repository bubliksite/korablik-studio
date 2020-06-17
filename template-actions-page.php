<?php 

/*
Template name: Акции
Template Post Type: page
Theme URI: http://korablik.studio
Description: Тема главной страницы
Author: Serge Solntsev
Author URI: http://tobeser.ga/
Version: 1.1
*/

 ?>

 <?php get_header(); ?>

<section class="preview">
  <img src="<?php echo get_template_directory_uri(); ?>/img/fon-1.png" alt="" title="" class="img-fon"/>
  <div class="container-preview">
    <h1><?php the_title(); ?></h1>
  </div>
</section>

<section class="actions">

	<?php $actions = new WP_Query(array('post_type'=>'actions')); ?>
	<?php if ( $actions->have_posts() ) :  while ( $actions->have_posts() ) : $actions->the_post(); ?>
		<div class="container my-5">
			<h3><?php the_title(); ?></h3>
			<p><?php echo CFS()->get( 'action_subtitle' ); ?></p>
			<a href="<?php the_permalink(); ?>"><?php echo CFS()->get( 'action_link' ); ?></a>
		</div>	
	<?php endwhile; ?>
	<?php endif; ?>
	<?php wp_reset_query(); ?>


</section>

<?php get_footer(); ?>

