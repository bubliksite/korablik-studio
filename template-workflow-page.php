<?php 

/*
Template name: Как мы работаем
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

<?php $workflow = CFS()->get('workflow'); ?>
<?php $n = floor((count($workflow))/2); ?>
<?php $i = 1; ?>

<div class="container workflow">
  <div class="row">
    <div class="col-md-5">
      <dl class="row">

    <?php foreach ($workflow as $item) : ?>
      <?php if ($i < $n+1) : ?>

        <dt class="col-2"><h1><?php echo $i; ?></h1></dt>
        <dd class="col-10">
          <p><?php echo $item['workflow_item']; ?></p>
        </dd>

        <?php $i = $i + 1; ?>
      <?php endif ?>
    <?php endforeach ?>

      </dl>
    </div>

    <div class="col-md-2"></div>
    <?php $i = 1; ?>

    <div class="col-md-5">
      <dl class="row">
        

        <?php foreach ($workflow as $item) : ?>
          <?php if (($i > $n) and ($i <= $n*2))  : ?>

            <dt class="col-2"><h1><?php echo $i; ?></h1></dt>
            <dd class="col-10">
              <p><?php echo $item['workflow_item']; ?></p>
            </dd>

            <?php $i = $i + 1; ?>

          <?php else : ?>

            <?php $i = $i + 1; ?>

          <?php endif ?>
        <?php endforeach ?>

      </dl>
    </div>

  </div>
</div>

<?php get_footer(); ?>

