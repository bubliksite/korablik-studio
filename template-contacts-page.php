<?php 

/*
Template name: Контакты
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
<section class="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <dl class="row">
        	<dt class="col-md-4">E-mail</dt>
        	<dd class="col-md-8"><a style="text-transform: uppercase;" href="mailto: <?php echo CFS()->get('c_email'); ?>"><?php echo CFS()->get('c_email'); ?></a></dd>

        	<dt class="col-md-4">Телефон</dt>
        	<dd class="col-md-8"><?php echo CFS()->get('c_phone'); ?></dd>

        	<dt class="col-md-4">Мессенджер</dt>
        	<dd class="col-md-8">
				<div class="box-contacts">
                  <p><?php echo CFS()->get('c_messenger'); ?> </p>
                  <a href="https://wa.me/79112309669" class="icon-whatsapp">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon/icon-whatsapp.png" alt="" title=""/>
                  </a>
                  <a href="https://t.me/likeitshouldbe" class="icon-telegramm">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon/icon-telegramm.png" alt="" title=""/>
                  </a>
                </div>
        	</dd>

        	<dt class="col-md-4">Адрес</dt>
        	<dd class="col-md-8"><?php echo CFS()->get('c_address'); ?></dd>
        </dl>
      </div>
      <div class="col-lg-7">
        <?php echo CFS()->get('c_map'); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>