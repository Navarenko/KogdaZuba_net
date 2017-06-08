<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package protopress
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" type="image/png" href="https://kogdazuba.net/favicon.ico" />
<!--<script src="https://kogdazuba.net/js/modernizr.custom.js"></script>-->
<link href='https://fonts.googleapis.com/css?family=PT+Serif&subset=cyrillic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,100&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="../../../css/HoverEffectIdeas/set2.css" />
	<link rel="stylesheet" type="text/css" href="../../../css/HoverEffectIdeas/demo.css" /> 
<?php if (is_page(31)) { ?>
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/card.css" />
	<link rel="stylesheet" type="text/css" href="css/pattern.css" />
<?php } ?>

	<?php /* if (is_page(38)) { ?>
		<link rel="stylesheet" type="text/css" href="../../../css/HoverEffectIdeas/demo.css" />
		<link rel="stylesheet" type="text/css" href="../../../css/HoverEffectIdeas/set2.css" />
	<?php } */?>

<?php if (is_page(12)) { ?>
	<link rel="stylesheet" type="text/css" href="css/ac-container.css" />
<?php } ?>

<?php if (is_page(166)) { ?>
	<link rel="stylesheet" type="text/css" href="css/animate.css" />
<?php } ?>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
	<!-- раскрывающаяся кнопка поиска в шапке -->
	<!--<link rel="stylesheet" type="text/css" href="wp-content/themes/protopress/css/component.css" />-->
	<!--<script src="wp-content/themes/protopress/js/modernizr.custom.js"></script>-->
	<!-- end раскрывающаяся кнопка поиска в шапке -->

	<!-- Определение типа устройства 
	<script src="wp-content/themes/protopress/js/device.min.js"></script>-->
</head>

<body <?php if (!is_page(166)) body_class(); ?>>
<?php if (is_page(166)) {
		echo '
		<!-- <div class="bg"></div> -->
		<!--<div class="homepage-hero-module bg">
			<div class="video-container">
				<div class="filter"></div>
				<video autoplay loop class="fillWidth">
					<source src="https://kogdazuba.net/wp-content/uploads/2016/06/Wave-Sitting.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
					<source src="https://kogdazuba.net/wp-content/uploads/2016/06/Wave-Sitting.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
				</video>
				<div class="poster hidden">
					<img src="https://kogdazuba.net/wp-content/uploads/2016/06/Wave-Sitting.jpg" alt="">
				</div>
			</div>
		</div>-->
		
		
		<div class="homepage-hero-module bg">
			<div class="video-container hidden-xs hidden-sm">
				<video autoplay loop class="fillWidth">
					<source src="//kogdazuba.net/wp-content/uploads/2017/01/Beachfront-B-roll-Dewdrops-Royalty-Free-Footage.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
					<source src="//kogdazuba.net/wp-content/uploads/2017/01/Beachfront-B-roll-Dewdrops-Royalty-Free-Footage.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
				</video>
				<div class="poster hidden">
					<img src="//kogdazuba.net/wp-content/uploads/2017/01/Snowball.jpg" alt="">
				</div>
			</div>
			
		</div>
		
		
		<!--<div class="homepage-hero-module bg-red">
			<div class="video-container">
				<div class="filter"></div>
				<video autoplay loop class="fillWidth">
					<source src="https://kogdazuba.net/wp-content/uploads/2016/06/Man-and-Sea.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
					<source src="https://kogdazuba.net/wp-content/uploads/2016/06/Man-and-Sea.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
				</video>
				<div class="poster hidden">
					<img src="https://kogdazuba.net/wp-content/uploads/2016/06/Man-and-Sea.jpg" alt="">
				</div>
			</div>
		</div>-->
		<div class="bg-blue"></div>
		<div class="bg-red"></div>
		<div id="page" class="hfeed site big_background">';
	} else echo '<div id="page" class="hfeed site">';
	?>

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'protopress' ); ?></a>
	<div id="jumbosearch">
		<span class="fa fa-remove closeicon"></span>
		<div class="form">
			<?php get_search_form(); ?>
		</div>
	</div>	
	
	<nav class="navbar navbar-fixed" role="navigation">
	  <div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#general-menu">
			<span class="sr-only"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a id="logo" href="/"><img src="https://kogdazuba.net/wp-content/uploads/2016/06/LOGO.png"></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="general-menu">
		  <ul class="nav navbar-nav">
		  	<li><a href="/implants_encyclopedia">Энциклопедия</a></li>
			<li><a href="/questions">Частые вопросы</a></li>
		 	<li><a href="/dictionary">Словарь</a></li>
			<li><a href="/articles">Статьи</a></li>
			<li><a href="/about-implants">Об имплантах</a></li>
			<li><a href=<?php echo get_href_current_city(); ?>>Клиники</a></li>
			<!-- <li><a href="/video">Видео</a></li>
			<li><a href="/about-implants">Об имплантах</a></li> -->
<!--			<li class="search_punkt">-->
<!--				<div class="column">-->
<!--					<div id="sb-search" class="sb-search">-->
<!--						<form>-->
<!--							<input class="sb-search-input" placeholder="Поиск" type="text" value="" name="s" id="search">-->
<!--							<input class="sb-search-submit" type="submit" value="">-->
<!--							<span class="sb-icon-search"><i class="fa fa-search" aria-hidden="true"></i></span>-->
<!--						</form>-->
<!--					</div>-->
<!--				</div>-->
<!--			</li>-->
		  </ul>
			<div class="your_location">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <!-- Button trigger modal -->
                <a data-toggle="modal" data-target=".bs-example-modal-sm">
                    <?php echo your_current_city(); ?>
                </a>

                <!-- Modal -->
                <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Выберите ближайший к Вам город</h4>
                            </div>
                            <div class="modal-body">
                                <a href="?wt_region_by_default=Владивосток">Владивосток</a><br>
                                <a href="?wt_region_by_default=Краснодар">Краснодар</a><br>
                                <a href="?wt_region_by_default=Москва">Москва</a><br>
                                <a href="?wt_region_by_default=Омск">Омск</a><br>
                                <a href="?wt_region_by_default=Саратов">Саратов</a><br>
                                <a href="?wt_region_by_default=Ставрополь">Ставрополь</a><br>
                                <a href="?wt_region_by_default=Сыктывкар">Сыктывкар</a><br>
                                <a href="?wt_region_by_default=Россия">Другое</a><br>
                                <a href="?wt_geo_clean=1">Отменить выбор</a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                            </div>
                        </div>
                    </div>
                </div>

			</div>
			<div class="hidden-sm hidden-md hidden-lg link_feedback">
				<form id="search_form">
					<input type="text" name="s" class="input">
					<button type="reset" class="search_form"></button>
				</form>
			</div>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container -->
		<div class="horisontal_divider_line"></div>
	</nav>

	<div class="second_top_menu">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-6 col-xs-12 current_date">
					<?php 
	echo getWeekName() . ', <b>' . date('j ') . getMonthName()[1] . '</b>';

	function getWeekName() {
		$weekAr = array(
		1 => 'Понедельник',
		2 => 'Вторник',
		3 => 'Среда',
		4 => 'Четверг',
		5 => 'Пятница',
		6 => 'Суббота',
		0 => 'Воскресенье'
	  );
	  return $weekAr[(int)date('N')];
	}


	// Название месяца по метке UNIX
	function getMonthName($unixTimeStamp = false) {
	  
	  // Если не задано время в UNIX, то используем текущий
	  if (!$unixTimeStamp) {
		$mN = date('m');
	  
	  
	  // Если задано определяем месяц времени
	  } else {
		$mN = date('m', (int)$unixTimeStamp);
	  }
	  
	  
	  $monthAr = array(
		1 => array('Январь', 'Января'),
		2 => array('Февраль', 'Февраля'),
		3 => array('Март', 'Марта'),
		4 => array('Апрель', 'Апреля'),
		5 => array('Май', 'Мая'),
		6 => array('Июнь', 'Июня'),
		7 => array('Июль', 'Июля'),
		8 => array('Август', 'Августа'),
		9 => array('Сентябрь', 'Сентября'),
		10=> array('Октябрь', 'Октября'),
		11=> array('Ноябрь', 'Ноября'),
		12=> array('Декабрь', 'Декабря')
	  );
	  
	  return $monthAr[(int)$mN];
	}
	 ?>
				</div>
				<div class="col-md-4 col-sm-2 hidden-xs"></div>
				<div class="col-md-3 col-sm-4 hidden-xs link_feedback">
					<form id="search_form">
						<input type="text" name="s" class="input">
						<button type="reset" class="search_form"></button>
					</form>
				</div>
			</div>
		</div>
	</div>

	
<?php if (is_page(166)) { ?>
	<div id="first_block_with_right_links" class="container ">
		<div class="block_with_right_links row">
			<div id="ex1" class="col-md-8">
				<div class="entry-header adnimated_post">
					<span class="entry-title">Имплантация</span><br><span class="thin_entry-title">это просто!</span>
				</div><!-- .entry-header -->
				<div class="entry_text col-md-8 adnimated_post">
					<b>Что такое импланты зубов?</b><br>
					<span>Имплант это искусственный корень зуба. Он состоит из двух частей: корневой части, которая находится в кости и <dfn data-info="Прикрепляемая к имплантату часть конструкции, служит опорой для будущей коронки или протеза.">абатмента</dfn>, верхней части импланта, которая является опорой для <dfn data-info="Часть зуба, выступающая над десной.">коронки</dfn>.</span>
				</div>
			</div>
			<div id="ex2" class="right_links_in_block col-md-4">
				<div class="right_link_in_block adnimated_post">
					<a href="https://kogdazuba.net/implants_encyclopedia"><img src="https://kogdazuba.net/wp-content/uploads/2016/06/book.png">
						<div>Энциклопедия<br>имплантации</div>
					</a>
				</div>
				<div class="right_link_in_block center_right_link_in_block adnimated_post">
					<a href="https://kogdazuba.net/questions"><img src="https://kogdazuba.net/wp-content/uploads/2016/06/questions.png">
						<div>Вопрос?<br>Ответ!</div>
					</a>
				</div>
				<div class="right_link_in_block adnimated_post">
					<a href=""><img src="https://kogdazuba.net/wp-content/uploads/2016/06/expert.png">
						<div>Мнение<br>экспертов</div>
					</a>
				</div>
				<div class="right_link_in_block adnimated_post">
					<a href=<?php echo get_href_current_city(); ?>><img src="https://kogdazuba.net/wp-content/uploads/2016/06/icon04.png">
						<div>Карта<br>клиник</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="site-branding">
				<?php if ( get_theme_mod('protopress_logo') != "" ) : ?>
				<div id="site-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_theme_mod('protopress_logo'); ?>"></a>
				</div>
				<?php endif; ?>
				<div id="text-title-desc">
				<h1 class="site-title title-font"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div>
			</div>	
		</div>	
		
		<div id="slickmenu"></div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="container">
				<?php
					// Get the Appropriate Walker First.
					 if (has_nav_menu(  'primary' ) && !get_theme_mod('protopress_disable_nav_desc') ) :
							$walker = new Protopress_Menu_With_Description;
						else : 
							$walker = new Protopress_Menu_With_Icon;
					  endif;
					  //Display the Menu.							
					  wp_nav_menu( array( 'theme_location' => 'primary', 'walker' => $walker ) ); ?>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
<?php } else if(is_single()) { 

	$thumb_id = get_post_thumbnail_id();
	$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
	echo '<div style="background-image: url('.$thumb_url[0].');">';?>
		
	</div>
 <?php } ?>

	
	<div <?php if (is_front_page()) echo 'id="ex3"'; ?> class="mega-container container <?php if(is_front_page()) {echo 'general_home_textblock';} ?>">
	
		<?php get_template_part('slider', 'nivo' ); ?>
		
		<?php get_template_part('featured', 'content2'); ?>
		<?php get_template_part('featured', 'content1'); ?>
	
		<div id="content" class="site-content">