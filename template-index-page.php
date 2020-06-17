<?php 

/*
Template name: Главная страница
Template Post Type: page
Theme URI: http://korablik.studio
Description: Тема главной страницы
Author: Serge Solntsev
Author URI: http://tobeser.ga/
Version: 1.1
*/

 ?>

 <?php get_header(); ?>

<section class="preview p-view-main d-flex align-items-center">
  <img src="<?php echo get_template_directory_uri(); ?>/img/fon-1.png" alt="" title="" class="img-fon"/>
  <div class="container-preview">
    <h1><?php echo CFS()->get('title');?></h1>
    <p><?php echo CFS()->get('subtitle');?></p>
    <div class="row links">
    	<div class="col-6">
    		<a href="#price_design">Смотреть цены на</a><br>
    		<a href="#price_design">дизайн</a>
    	</div>
    	<div class="col-6">
    		<a href="#price_marketing">Смотреть цены на<br></a>
    		<a href="#price_marketing">маркетинг</a>
    	</div>
    </div>
  </div>
</section>
<section id="price_design" class="price">
  <img src="<?php echo get_template_directory_uri(); ?>/img/fon-1.png" alt="" title="" class="img-fon"/>
  <div class="container-price">
    <h3>Графический дизайн</h3>

    <!-- Контент для больших и средних экранов-->
    <div class="box-price-content d-none d-md-block">
		<div class="row">
			<div class="col-md-4 col-lg-3">
				<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

					<?php $d_services = CFS()->get('d_services'); ?>
					<?php $i = 1; ?>

					<?php foreach ($d_services as $service ) : ?>
						<?php if ($i == 1) : ?>
						
							<a class="nav-link active" id="v-pills-<?php echo $i ?>-tab" data-toggle="pill" href="#v-pills-<?php echo $i ?>" role="tab" aria-controls="v-pills-<?php echo $i ?>" aria-selected="true"><?php echo $service['d_s_name']; ?></a>

						<?php else: ?>

							<a class="nav-link" id="v-pills-<?php echo $i ?>-tab" data-toggle="pill" href="#v-pills-<?php echo $i ?>" role="tab" aria-controls="v-pills-<?php echo $i ?>" aria-selected="true"><?php echo $service['d_s_name']; ?></a>

						<?php endif; ?>
						<?php $i = $i + 1; ?>
					<?php endforeach ?>

				</div>
			</div>
			<div class="col-md-8 col-lg-9">
				<div class="tab-content" id="v-pills-tabContent">
					
					<?php $i = 1; ?>
					<?php foreach ($d_services as $service) : ?>
						<?php if ($i == 1) : ?>

						<div class="tab-pane fade show active" id="v-pills-<?php echo $i; ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $i; ?>-tab">
						
						<?php else: ?>

						<div class="tab-pane fade show" id="v-pills-<?php echo $i; ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $i; ?>-tab">

						<?php endif ?>

							<div class="box-packaging" id="box-packaging">
								<h5><?php echo $service['d_s_title']; ?></h5>
								<?php $versions = $service['d_s_vars']; ?>
								<?php foreach ($versions as $version) : ?>

									<div class="version">
										<h5><?php echo $version['d_s_var_title']; ?></h5>
										<div>
											<p><?php echo $version['d_s_var_description']; ?></p>
											<nav>
												<ul>
													<?php $costs = $version['d_s_var_timeprice']; ?>
													<?php foreach ($costs as $cost) : ?>
														<li><span><?php echo $cost['d_s_var_time']; ?></span> <?php echo $cost['d_s_var_price']; ?></li>
													<?php endforeach ?>
												</ul>
											</nav>
											<?php $links = $version['d_s_var_link']; ?>
											<?php foreach ($links as $link => $label) : ?>
												<?php if ($link == "portfolio") : ?>
													<a href="<?php echo $link . "?type=design" . "#v-pills-" . $i; ?>"><?php echo $label; ?></a>
												<?php else : ?>
													<a href="<?php echo $link; ?>"><?php echo $label; ?></a>
												<?php endif ?>
											<?php endforeach; ?>
										</div>
									</div>

								<?php endforeach ?>
							</div>
						</div>


					<?php $i = $i + 1; ?>
					<?php endforeach ?>

				</div>
			</div>
		</div>
    </div>
    <!--Конец контента для больших и средних экранов-->

    <!--Начало контента для мобильных экранов-->
	<div class="box-price-content d-sm-block d-xs-block d-md-none">
		<div class="accordion" id="accordion">

			<?php $i = 1; ?>
			<?php foreach ($d_services as $service) : ?>

			<div class="card">
  			  <div class="card-header" id="heading<?php echo $i; ?>">
  			    <h2 class="mb-0">
  			      <a class="" data-toggle="collapse" href="#collapse<?php echo $i; ?>" role="button" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>"><?php echo $service['d_s_name']; ?></a>
  			    </h2>
  			  </div>
  			  <div id="collapse<?php echo $i; ?>" class="collapse" aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordion">
  			    <div class="card-body">
        			<div class="box-packaging" id="box-packaging">
						<h5><?php echo $service['d_s_title']; ?></h5>

						<?php $versions = $service['d_s_vars']; ?>
						<?php foreach ($versions as $version) : ?>

						<div class="version">
							<h5><?php echo $version['d_s_var_title']; ?></h5>
							<div>
								<p><?php echo $version['d_s_var_description']; ?></p>
								<nav>
									<ul>
										<?php $costs = $version['d_s_var_timeprice']; ?>
										<?php foreach ($costs as $cost) : ?>
											<li><span><?php echo $cost['d_s_var_time']; ?></span> <?php echo $cost['d_s_var_price']; ?></li>
										<?php endforeach ?>
									</ul>
								</nav>
								<a href="portfolio?type=design#v-pills-<?php echo $i; ?>">Посмотреть примеры</a>
							</div>
						</div>

						<?php endforeach ?>

					</div>
			    </div>
			  </div>
			</div>

			<?php $i = $i+1; ?>
			<?php endforeach ?>

		</div>
	</div>
	<!--Конец контента для мобильных экранов-->
  </div>
</section>

<div class="my-5">
	<p></p>
</div>
<section id="price_marketing" class="price">
  <img src="<?php echo get_template_directory_uri(); ?>/img/fon-1.png" alt="" title="" class="img-fon"/>
  <div class="container-price">
    <h3>Продвижение в&nbsp;интернете</h3>
    <p class="price-marketing mb-5 pb-5">
    	<?php echo CFS()->get('m_s_description'); ?>
	</p>

	<?php $m_cats = CFS()->get('m_cat'); ?>
	<?php $i = 1; ?>

	<!-- Контент для больших и средних экранов -->
    <div class="box-price-content d-none d-md-block">
		<div class="row">
			<div class="col-md-4 col-lg-3">
				<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

					<?php foreach ($m_cats as $cat) : ?>
					<?php if ($i == 1) : ?>

					<a class="nav-link active" id="v-pills-m-<?php echo $i; ?>-tab" data-toggle="pill" href="#v-pills-m-<?php echo $i; ?>" role="tab" aria-controls="v-pills-m-<?php echo $i; ?>" aria-selected="true"><?php echo $cat['m_cat_name']; ?></a>

					<?php else : ?>
					
					<a class="nav-link" id="v-pills-m-<?php echo $i; ?>-tab" data-toggle="pill" href="#v-pills-m-<?php echo $i; ?>" role="tab" aria-controls="v-pills-m-<?php echo $i; ?>" aria-selected="true"><?php echo $cat['m_cat_name']; ?></a>
					
					<?php endif ?>
					<?php $i = $i+1; ?>
					<?php endforeach ?>

				</div>
			</div>
			<div class="col-md-8 col-lg-9">
				<div class="tab-content" id="v-pills-tabContent">

					<?php $i = 1; ?>
					<?php foreach ($m_cats as $cat) : ?>

					<?php if ($i == 1) : ?>

					<div class="tab-pane fade show active" id="v-pills-m-<?php echo $i; ?>" role="tabpanel" aria-labelledby="v-pills-m-<?php echo $i; ?>-tab">

					<?php else: ?>

					<div class="tab-pane fade show" id="v-pills-m-<?php echo $i; ?>" role="tabpanel" aria-labelledby="v-pills-m-<?php echo $i; ?>-tab">

					<?php endif ?>

						<div class="box-<?php echo $i; ?> bullets" id="box-<?php echo $i; ?>">

							<?php $m_services = $cat['m_services']; ?>

							<?php foreach ($m_services as $m_service) : ?>

							<div class="version">
								<h5><?php echo $m_service['m_s_title']; ?></h5>
								<ul>
									<?php $m_s_lists = $m_service['m_s_list']; ?>
									<?php foreach ($m_s_lists as $m_s_list) : ?>

										<li><?php echo $m_s_list['m_s_list_item']; ?></li>

									<?php endforeach ?>
								</ul>
								<div class="row">
									<div class="col-lg-6">
										<h4><?php echo $m_service['m_s_cost']; ?></h4>
										<div class="text-muted"><?php echo $m_service['m_s_comment']; ?></div>
									</div>
									<div class="col-lg-6">
										<a style="text-transform: none;" href="portfolio?type=marketing#v-m-pills-<?php echo $i; ?>">ПОСМОТРЕТЬ ПРИМЕРЫ</a>
									</div>
								</div>
							</div>

							<?php endforeach ?>

						</div>
					</div>
					
					<?php $i = $i+1; ?>
					<?php endforeach ?>

				</div>
			</div>
		</div>
    </div>
    <!-- Конец контена для больших и средних экранов -->

    <!-- Контент для мобильных -->
	<div class="box-price-content d-sm-block d-xs-block d-md-none">
		<div class="accordion" id="accordion">

			<?php $i = 1; ?>
				<?php foreach ($m_cats as $cat) : ?>
				<div class="card">
	  			  <div class="card-header" id="heading-mm-<?php echo $i; ?>">
	  			    <h2 class="mb-0">
	  			      <a class="" data-toggle="collapse" href="#collapse-mm-<?php echo $i; ?>" role="button" aria-expanded="true" aria-controls="collapse-mm-<?php echo $i; ?>"><?php echo $cat['m_cat_name']; ?></a>
	  			    </h2>
	  			  </div>
	  			  <div id="collapse-mm-<?php echo $i; ?>" class="collapse" aria-labelledby="heading-mm-<?php echo $i; ?>" data-parent="#accordion">
	  			    <div class="card-body">
	        			<div class="box-packaging bullets" id="box-packaging">

						<?php $m_services = $cat['m_services']; ?>
						<?php foreach ($m_services as $m_service) : ?>

							<div class="version">
								<h5><?php echo $m_service['m_s_title']; ?></h5>
								<ul>
									<?php $m_s_lists = $m_service['m_s_list']; ?>
									<?php foreach ($m_s_lists as $m_s_list) : ?>

										<li><?php echo $m_s_list['m_s_list_item']; ?></li>

									<?php endforeach ?>
								</ul>
								<div class="row">
									<div class="col-lg-6">
										<h4><?php echo $m_service['m_s_cost']; ?></h4>
										<div class="text-muted"><?php echo $m_service['m_s_comment']; ?></div>
									</div>
									<div class="col-lg-6 mt-3">
										<a style="text-transform: none;" href="portfolio?type=marketing#v-m-pills-<?php echo $i; ?>">ПОСМОТРЕТЬ ПРИМЕРЫ</a>
									</div>
								</div>
							</div>

						<?php endforeach ?>

						</div>
				    </div>
				  </div>
				</div>

				<?php $i = $i+1; ?>
				<?php endforeach ?>

		</div>
	</div>
    <!-- Конец контента для мобильных -->
  </div>
</section>
<section class="advantage">
  <img src="<?php echo get_template_directory_uri(); ?>/img/fon-1.png" alt="" title="" class="img-fon"/>
  <div class="container-advantage">
    <h3>В&nbsp;чем плюсы?</h3>
    <nav>
      <ul>

      	<?php $pluses = CFS()->get('pluses'); ?>
      	<?php foreach ($pluses as $plus) : ?>

			<li>
          		<h6><?php echo $plus['p_title']; ?></h6>
          		<p><?php echo $plus['p_description']; ?></p>
        	</li>

      	<?php endforeach ?>

      </ul>
    </nav>
  </div>
</section>

<?php get_footer(); ?>