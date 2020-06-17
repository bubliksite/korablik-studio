<?php 

/*
Template name: Акция
Template Post Type: actions
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
<section class="actions container">
	<p><?php echo CFS()->get( 'action_subtitle' ); ?></p>
	<a href="#feedback">Заказать</a>
	<div class="row">
		<div class="col-lg-6 col-md-12">

			<?php $actions_list_include = CFS()->get( '_actions_list_include' ); ?>
			<?php if( ! empty($actions_list_include) ): ?>

			<h5 class="what-block mt-5">Что входит в&nbsp;пакет</h5>
			<ul class="list">
				<?php foreach ($actions_list_include as $item_include) :?>
				<li class="row">

					<?php if ( ! empty($item_include['actions_list_include_description']) ) : ?>
						<div class="col-10 px-0">
							<h4><?php echo $item_include['actions_list_include_item']; ?></h4>
						</div>
						<div class="col-1 px-0 text-right">
							<i class="fas fa-check"></i>
						</div>
							<p class="text-muted"><?php echo $item_include['actions_list_include_description']; ?></p>

					<?php else : ?>

						<div class="col-10 px-0">
							<?php echo $item_include['actions_list_include_item']; ?>
						</div>
						<div class="col-1 px-0 text-right">
							<i class="fas fa-check"></i>
						</div>
							<p class="text-muted"><?php echo $item_include['actions_list_include_description']; ?></p>
					<?php endif ?>
				</li>
				<?php endforeach ?>
			</ul>

			<?php endif ?>

		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-12">


			<?php $actions_list_exclude = CFS()->get( '_actions_list_exclude' ); ?>
			<?php if( ! empty($actions_list_exclude) ): ?>

			<h5 class="what-block mt-5">Что может еще&nbsp;потребоваться</h5>
			<ul class="list">
				<?php foreach ($actions_list_exclude as $item_exclude) :?>
				<li class="row">
					<div class="col-8 px-0">
						<?php echo $item_exclude['actions_list_exclude_item']; ?>
					</div>
					<div class="col-4 px-0 text-right">
						<h5><?php echo $item_exclude['actions_list_exclude_prise']; ?></h5>
					</div>
				</li>
				<?php endforeach ?>
			</ul>

			<?php endif ?>

		</div>
	</div>
	<br>
	<a class="pt-2" href="//korablik.studio/portfolio">Другие услуги дизайна</a><br>
	<br>
	<a class="pt-2" href="//korablik.studio/portfolio">Другие услуги рекламы</a>
	
</section>

<?php get_footer(); ?>

