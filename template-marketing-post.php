<?php 

/*
Template name: Кейс маркетинга
Template Post Type: case_marketing
Theme URI: http://korablik.studio
Description: Тема главной страницы
Author: Serge Solntsev
Author URI: http://tobeser.ga/
Version: 1.1
*/

 ?>

 <?php get_header(); ?>

<section class="preview content-marketing">
  <img src="<?php echo get_template_directory_uri(); ?>/img/fon-1.png" alt="" title="" class="img-fon"/>
  <div class="container-preview">
    <h1 class="headline"><?php the_title(); ?></h1>
  </div>
  <div class="container subtitles">
    <div class="row mb-5 pb-5">
      <div class="col-6">

        <?php $categoryes = CFS()->get( '_cm_category' ); ?>
        <?php foreach ($categoryes as $category) : ?>
        <h3 class="text-uppercase big-black"><?php echo $category; ?></h3>
        <?php endforeach ?>

        <?php $types = CFS()->get( '_cm_type' ); ?>
        <?php foreach ($types as $type) : ?>
        <h3 class="text-uppercase big-blue"><?php echo $type; ?></h3>
         <?php endforeach ?>

      </div>
      <div class="col-6 text-right">
        <a class="big-link" href="//korablik.studio/portfolio">
          Назад к портфолио<br>
          продвижения
        </a>
      </div>
    </div>
    <p>
      <?php echo CFS()->get('_cm_situation'); ?>
    </p>
    <h3 class="mb-1">Что делали:</h3>
    <p>
      <?php echo CFS()->get('_cm_what_todo'); ?>
    </p>
    <h3 class="mb-3">Площадки:</h3>
    <div class="row places">

      <?php $places = CFS()->get( '_cm_places' ); ?>
      <?php foreach ($places as $place => $label) : ?>
    	<div class="col-md-3 col-xs-6">
    		<img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $place; ?>" alt="">
    	</div>
      <?php endforeach; ?>

    </div>
    <h3 class="mb-3">Задачи:</h3>
    <ul class="blue-disk">

      <?php $tasks = CFS()->get( '_cm_tasks' ); ?>
      <?php foreach ($tasks as $task) : ?>
    	<li><?php echo $task['cm_task']; ?></li>
      <?php endforeach; ?>

    </ul>
    <h3 class="mb-3 pt-5 mt-5">Что получили:</h3>
    <ul>
      
      <?php $results = CFS()->get( '_cm_results' ); ?>
      <?php foreach ($results as $result) : ?>
      <li><?php echo $result['cm_result']; ?></li>
      <?php endforeach; ?>

    </ul>
  </div>
  
</section>

<?php get_footer(); ?>

