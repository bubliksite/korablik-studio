<?php 

/*
Template name: Портфолио
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

<?php $type = htmlspecialchars($_GET["type"]); ?>

<div class="container text-center portfolio-pills">
	<ul class="row nav nav-tabs" id="portfolioTab" role="tablist">
	  <li class="col-1"></li>

	  <?php if ($type == "design") : ?>

	  <li class="nav-item col-5">
	    <a class="nav-link active" id="design-tab" data-toggle="tab" href="#design" role="tab" aria-controls="design" aria-selected="true">Графический дизайн<span class="triangle"></span></a>
	  </li>
	  <li class="nav-item col-5">
	    <a class="nav-link" id="marketing-tab" data-toggle="tab" href="#marketing" role="tab" aria-controls="marketing" aria-selected="false">Интернет-маркетинг<span class="triangle"></span></a>
	  </li>

	  <?php elseif ($type == "marketing") : ?>

	  <li class="nav-item col-5">
	    <a class="nav-link" id="design-tab" data-toggle="tab" href="#design" role="tab" aria-controls="design" aria-selected="true">Графический дизайн<span class="triangle"></span></a>
	  </li>
	  <li class="nav-item col-5">
	    <a class="nav-link active" id="marketing-tab" data-toggle="tab" href="#marketing" role="tab" aria-controls="marketing" aria-selected="false">Интернет-маркетинг<span class="triangle"></span></a>
	  </li>

	  <?php else: ?>

	  <li class="nav-item col-5">
	    <a class="nav-link active" id="design-tab" data-toggle="tab" href="#design" role="tab" aria-controls="design" aria-selected="true">Графический дизайн<span class="triangle"></span></a>
	  </li>
	  <li class="nav-item col-5">
	    <a class="nav-link" id="marketing-tab" data-toggle="tab" href="#marketing" role="tab" aria-controls="marketing" aria-selected="false">Интернет-маркетинг<span class="triangle"></span></a>
	  </li>

	  <?php endif ?>

	  


	  <li class="col-1"></li>
	</ul>

	<div class="tab-content" id="myTabContent">

		<?php if ($type != "marketing") : ?>
	  <div class="tab-pane fade show active" id="design" role="tabpanel" aria-labelledby="design-tab">
	  	<?php else: ?>
	  <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="design-tab">
	  	<?php endif ?>
		<section class="portfolio">
			<div class="container-portfolio">

			<?php $i = 0; ?>
			<?php $k = 1; ?>
			<?php $case_design = new WP_Query(array('post_type'=>'case_design')); ?>
			<?php if ( $case_design->have_posts() ) :  while ( $case_design->have_posts() ) : $case_design->the_post(); ?>
				
				<div id="v-pills-<?php echo $k; ?>">
					<h5><?php the_title(); ?></h5>
					<nav class="box-portfolio">
						<ul>
						<?php $cds = CFS()->get('cd'); ?>
						<?php foreach ($cds as $cd): ?>
							<li class="item-card">
								<a href="#" data-toggle="modal" data-target="#modal-window<?php echo $i; ?>">
									<img src="<?php echo $cd['cd_main_image']; ?>" alt="">
									<?php $cd_vars = $cd['cd_var']; ?>
									<?php foreach ($cd_vars as $cd_var): ?>
									<?php if ($cd_var == 'Базовый') : ?>
										<div class="box-base">Базовый</div>
									<?php elseif ($cd_var == 'Креативный') : ?>
										<div class="box-creative">Креативный</div>
									<?php endif ?>
								<?php endforeach ?>
								</a>
							</li>
							<?php $i = $i + 1; ?>
						<?php endforeach ?>
						</ul>
					</nav>
				</div>
				<?php $k = $k + 1; ?>

			<?php endwhile ?>
			<?php endif ?>
			<?php wp_reset_query(); ?>

  			</div>
		</section>
	  </div>


	<?php if ($type == "marketing"): ?>
	  <div class="tab-pane fade show active" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
	<?php else: ?>
	  <div class="tab-pane fade show" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
	  <?php endif ?>
		<section class="portfolio portfolio-marketing">
			<div class="container-portfolio">

				<div id="v-m-pills-1">
				  <h5>Пакеты услуг</h5>
				  <nav class="box-portfolio">
				  	<ul>
					<?php $case_marketing = new WP_Query(array('post_type'=>'case_marketing')); ?>

					<?php if ( $case_marketing->have_posts() ) :  while ( $case_marketing->have_posts() ) : $case_marketing->the_post(); ?>
						<?php $types = CFS()->get('_cm_type'); ?>
						<?php $categoryes = CFS()->get('_cm_category'); ?>
						<?php foreach ($types as $type) : ?>
							<?php if ($type == 'Пакеты услуг') : ?>

								<li class="item-card p-4 m-2">
				       				<a href="<?php the_permalink(); ?>">
				        				<h5 class="russo text-left"><?php the_title(); ?></h5>
				        				<?php foreach ($categoryes as $category) : ?>
				        				<p class="mt-3 text-left text-muted text-uppercase"><?php echo $category; ?></p>
				        				<?php endforeach ?>
				          				<div class="box-blue"><?php echo CFS()->get('_cm_product'); ?></div>
				        			</a>
				      			</li>
								<?php endif ?>
						<?php endforeach; ?>

					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>

				    </ul>
				  </nav>
				</div>

				<div id="v-m-pills-2">
				  <h5>Контекстная реклама</h5>
				  <nav class="box-portfolio">
				    <ul>
					<?php $case_marketing = new WP_Query(array('post_type'=>'case_marketing')); ?>

					<?php if ( $case_marketing->have_posts() ) :  while ( $case_marketing->have_posts() ) : $case_marketing->the_post(); ?>
						<?php $types = CFS()->get('_cm_type'); ?>
						<?php $categoryes = CFS()->get('_cm_category'); ?>
						<?php foreach ($types as $type) : ?>
							<?php if ($type == 'Контекстная реклама') : ?>

								<li class="item-card p-4 m-2">
				       				<a href="<?php the_permalink(); ?>">
				        				<h5 class="russo text-left"><?php the_title(); ?></h5>
				        				<?php foreach ($categoryes as $category) : ?>
				        				<p class="mt-3 text-left text-muted text-uppercase"><?php echo $category; ?></p>
				        				<?php endforeach ?>
				          				<div class="box-blue"><?php echo CFS()->get('_cm_product'); ?></div>
				        			</a>
				      			</li>
								<?php endif ?>
						<?php endforeach; ?>

					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>

				    </ul>
				  </nav>
				</div>

				<div id="v-m-pills-3">
				  <h5>Реклама в соцсетях</h5>
				  <nav class="box-portfolio">
				    <ul>
					<?php $case_marketing = new WP_Query(array('post_type'=>'case_marketing')); ?>

					<?php if ( $case_marketing->have_posts() ) :  while ( $case_marketing->have_posts() ) : $case_marketing->the_post(); ?>
						<?php $types = CFS()->get('_cm_type'); ?>
						<?php $categoryes = CFS()->get('_cm_category'); ?>
						<?php foreach ($types as $type) : ?>
							<?php if ($type == 'Реклама в соцсетях') : ?>

								<li class="item-card p-4 m-2">
				       				<a href="<?php the_permalink(); ?>">
				        				<h5 class="russo text-left"><?php the_title(); ?></h5>
				        				<?php foreach ($categoryes as $category) : ?>
				        				<p class="mt-3 text-left text-muted text-uppercase"><?php echo $category; ?></p>
				        				<?php endforeach ?>
				          				<div class="box-blue"><?php echo CFS()->get('_cm_product'); ?></div>
				        			</a>
				      			</li>
								<?php endif ?>
						<?php endforeach; ?>

					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>

				    </ul>
				  </nav>
				</div>
				
			</div>
		</section>
	  </div>
	</div>
</div>

<?php $i = 0; ?>
<?php $case_design = new WP_Query(array('post_type'=>'case_design')); ?>
<?php if ( $case_design->have_posts() ) :  while ( $case_design->have_posts() ) : $case_design->the_post(); ?>

<?php $cds = CFS()->get('cd'); ?>
<?php foreach ($cds as $cd): ?>
	<?php $cd_images = $cd['cd_images']; ?>
	<?php $c = count($cd_images); ?>
	<?php $f = 1; ?>

<div class="modal fade" id="modal-window<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-window1Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/close.png" class="close-modal" data-dismiss="modal" alt="" title="">
        <div class="row">
        	<div class="col-1">
        		<?php if ($c > 1): ?>
        		<a class="carousel-control-prev" href="#modalwindowcarousel<?php echo $i; ?>" role="button" data-slide="prev">
		    		<img src="<?php echo get_template_directory_uri(); ?>/img/icon/left.png" class="controls">
		    		<span class="sr-only">Previous</span>
		  		</a>
		  	<?php endif ?>
        	</div>
        	<div class="col-10">
        		<div id="modalwindowcarousel<?php echo $i; ?>" class="carousel slide" data-ride="carousel">
		  			<div class="carousel-inner">
					
					<?php foreach ($cd_images as $image) : ?>
					<?php if ($f == 1) : ?>
		  			  	<div class="carousel-item active">
					<?php else : ?>
						<div class="carousel-item">
					<?php endif ?>
		  			    	<img src="<?php echo $image['cd_image']; ?>" alt="" title=""/>
		  			  	</div>
		  			<?php $f = $f + 1; ?>
					<?php endforeach ?>
		  			</div>
        		</div>
        	</div>
        	<div class="col-1">
        		<?php if ($c > 1): ?>
        		<a class="carousel-control-next" href="#modalwindowcarousel<?php echo $i; ?>" role="button" data-slide="next">
		    		<img src="<?php echo get_template_directory_uri(); ?>/img/icon/right.png" class="controls" id="next">
		    		<span class="sr-only">Next</span>
		  		</a>
		  		<?php endif ?>
        	</div>
        </div>
		
		  
		  





      </div>
    </div>
  </div>
</div>


<?php $i = $i + 1; ?>
<?php endforeach ?>

<?php endwhile ?>
<?php endif ?>




<?php get_footer(); ?>