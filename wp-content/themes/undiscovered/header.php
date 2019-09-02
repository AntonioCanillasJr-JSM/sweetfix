<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
<script type="text/javascript">
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-19834599-109', 'auto');
  ga('send', 'pageview');
</script>
<?php endif; ?>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header " role="banner" style="background:#000">
		<div class="navcontainer animated fadeInUp">
				<div class="col-md-3 col-sm-12 col-xs-12" style="position:relative;">
				<h1 class="site-title hidden-xs hidden-sm">
					<?php if ( undiscovered_options( 'logotype' ) ) : ?>
						<a class="logotype-img" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img itemprop="image"  class="img-responsive" src="<?php echo undiscovered_options( 'logotype' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
					<?php else : ?>
						<a class="logotype-text" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					<?php endif; ?>
				</h1>
					<div style="position:absolute; top:20px; left:10px;" class=" hidden-lg hidden-md ">
					<span class="sm-icons"><?php social_icons_list(); ?></span></div>
					<div class="col-sm-4 col-xs-2 hidden-lg hidden-md ">
						<div class="row">
						<span class="sm-icons"></span>
						</div>
					</div>

					<div class="col-sm-4 col-xs-8  hidden-md hidden-lg">
						<h1 class="site-title">
							<?php if ( undiscovered_options( 'logotype' ) ) : ?>
								<a class="logotype-img" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img class="img-responsive" src="<?php echo undiscovered_options( 'logotype' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
							<?php else : ?>
								<a class="logotype-text" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
							<?php endif; ?>
						</h1>
					</div>

					<div class="col-sm-4 col-xs-2 hidden-lg hidden-md ">
						<div class="row">
							<span class="sm-search"><?php get_search_form(); ?></span>
						</div>
					</div>
					
				</div>

				<div class="col-md-9 col-sm-12 col-xs-12 padding-margin-0">
					<div class="icons-padding" class="top-social-icons">
						<span class="hidden-xs hidden-sm"><?php social_icons_list(); ?></span>
						
							<span class="hidden-sm hidden-xs"><?php get_search_form(); ?></span>
						
					</div>
					<nav class="navbar navbg">
					  <div class="container-fluid">
					  <div class="row">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					
					      <div  style="text-align:Center;" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					       MENU
					      </div>

					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding:0;">
							<?php wp_nav_menu( array(
								'container'      => 'ul',
								'container_id'   => '',
								'menu_class'     => ' nav ',
								'menu_id'        => '',
								'depth'          => '',
								'theme_location' => 'primary',
								));
							?>

					    </div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					  </div>
					</nav>
				</div>
		</div>


	</header>

	<div class="site-content ">
