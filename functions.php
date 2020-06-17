<?php 

/** Перечень стилей и скриптов **/
function load_style_script () {
	wp_enqueue_style('bootstrap.min', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	wp_enqueue_style('all', '//use.fontawesome.com/releases/v5.8.1/css/all.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style('fonts', get_template_directory_uri() . '/css/fonts.css');

	wp_enqueue_script('jquery-3.3.1.slim.min', '//code.jquery.com/jquery-3.3.1.slim.min.js');
	wp_enqueue_script('popper.min', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
	wp_enqueue_script('bootstrap.min', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
}

/** Загрузка стилей и скриптов **/
add_action('wp_enqueue_scripts', 'load_style_script');

/** Отключаем визуальный редактор **/
function remove_editor() {
  remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'remove_editor');

/** Включаем меню **/
register_nav_menu('menu', 'Главное меню');

/**Создаем новый тип записей - Лендинги**/
add_action('init', 'actions');
function actions() {
	register_post_type('actions', array(
			'public' => true,
			'supports' => array ('title'),
			'labels' => array (
				'name' => 'Акции',
				'add_new' => 'Добавить акцию',
				'all_items' => 'Все акции',
				'add_new_item' => 'Добавить акцию'
			),
			'menu_position' => 4,
			'menu_icon' => 'dashicons-tickets-alt'
		));
}

/**Создаем новый тип записей - Кейсы Маркетинг**/
add_action('init', 'case_marketing');
function case_marketing() {
	register_post_type('case_marketing', array(
			'public' => true,
			'supports' => array ('title'),
			'labels' => array (
				'name' => 'Кейсы маркетинг',
				'add_new' => 'Добавить кейс',
				'all_items' => 'Все кейсы',
				'add_new_item' => 'Добавить кейс'
			),
			'menu_position' => 4,
			'menu_icon' => 'dashicons-hammer'
		));
}

/**Создаем новый тип записей - Кейсы Дизайн**/
add_action('init', 'case_design');
function case_design() {
	register_post_type('case_design', array(
			'public' => true,
			'supports' => array ('title'),
			'labels' => array (
				'name' => 'Кейсы дизайн',
				'add_new' => 'Добавить кейс',
				'all_items' => 'Все кейсы',
				'add_new_item' => 'Добавить кейс'
			),
			'menu_position' => 4,
			'menu_icon' => 'dashicons-art'
		));
}

 ?>