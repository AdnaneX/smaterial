<?php
$amp = ( !empty( $_GET['amp'] ) && $_GET['amp'] == 'true' ? true : false);
// Set to true this way no unnecessary code is loaded while testing
define( 'TEST', false );
$file = str_replace( '.php', '', $_SERVER['PHP_SELF'] );

$colors = array('smaterial' => array(
	'color' => '#00BCD4',
	'highlight' => '#00B8D4'
),
				'style' => array(
					'color' => '#00897B',
					'highlight' => '#00BFA5'
				),
				'layout' => array(
					'color' => '#AD1457',
					'highlight' => '#C51162'
				),
				'components' => array(
					'color' => '#3949AB',
					'highlight' => '#304FFE'
				),
				'patterns' => array(
					'color' => '#FB8C00',
					'highlight' => '#FF6D00'
				),
				'resources' => array(
					'color' => '#039BE5',
					'highlight' => '#0091EA'
				)
);

$currentTime = date('H:i');
$sunset =  date_sunset(time(), SUNFUNCS_RET_STRING, 52.7, 5.3, 90, 1);
$sunrise = date_sunrise(time(), SUNFUNCS_RET_STRING, 52.7, 5.3, 90, 1);

function isBetween($from, $till, $input) {
	$f = DateTime::createFromFormat('!H:i', $from);
	$t = DateTime::createFromFormat('!H:i', $till);
	$i = DateTime::createFromFormat('!H:i', $input);
	if ($f > $t) $t->modify('+1 day');
	return ($f <= $i && $i <= $t) || ($f <= $i->modify('+1 day') && $i <= $t);
}

if( $file == '/index' || $file == '/' ) {
	$folder = 'smaterial';
} else {
	$folder = explode( '/', $_SERVER['PHP_SELF'] )[1];
}
$color = $colors[$folder]['color'];
$highlight = $colors[$folder]['highlight'];

$keywords .= ', smaterial, css, scss, material design, framework, html, js, css framework, material design framework, android, android design, app';
?>
<!DOCTYPE html>
<html <?php echo ($amp ? 'amp' : ''); ?> lang="en">
<head>
	<title><?php echo $title; ?> | SMaterial</title>

    <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
    <?php
    if( !$amp ) {
        echo '
        <link rel="stylesheet" href="/stylesheets/prism.css">
	    <link rel="stylesheet" href="/dist/css/smaterial-'.(isBetween($sunset, $sunrise, $currentTime) ? 'dark' : 'light').'.css">';
	}
	?>

	<link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="/images/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/images/favicon-16x16.png" sizes="16x16">

	<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, user-scalable=no">
    <meta charset="utf-8">
	<meta name="language" content="EN">
	<meta name="author" content="Derkjan Super">
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="keyword" content="<?php echo $keywords; ?>">

	<meta property="og:type" content="article">
	<meta property="og:title" content="<?php echo $title; ?> | SMaterial">
	<meta property="og:site_name" content="SMaterial">
	<meta property="article:section" content="<?php echo $title.' - '.ucfirst($folder); ?>">

	<meta name="theme-color" content="<?php echo $color; ?>">
	<meta name="msapplication-navbutton-color" content="<?php echo $color; ?>">
	<meta name="apple-mobile-web-app-status-bar-style" content="<?php echo $color; ?>">

    <?php
    if( $amp ) {
        echo '
            <link rel="canonical" href="'.$_SERVER['PHP_SELF'].'">
            <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "WebApplication",
                "headline": "'.$title.' - '.ucfirst($folder).'",
                "image": [
                    "/images/responsive.jpg"
                ]
            }
            </script>
            <script async src="//cdn.ampproject.org/v0.js"></script>
            <script async custom-element="amp-analytics" src="//cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
            <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
            <noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
            <style amp-custom>';
            require_once $_SERVER['DOCUMENT_ROOT'].'/dist/css/smaterial-amp.css';
        echo '</style>';
    } else {
		echo '
		    <link rel="amphtml" href="'.$_SERVER['PHP_SELF'].'?amp=true">
            <style>
            .appbar {
                background: '.$color.';            
             }
        
            main h1, main h2, main h3, main h4, main h5, main h6, main a {
                color: '.$color.';
            }
            
            main a:hover {
                color: '.$highlight.';
            }
            
            .drawer .active, .drawer a:hover, .drawer a:hover .material-icons {
                color: '.$color.' !important;
            }
            
            .raised-button {
                color: white;
                background: '.$color.';
            }
            
            .drawer-permanent-full-height .drawer-header img {
                height: 100%;
            }
            </style>';
	}
    ?>
</head>

<body class="test">
    <header class="appbar">
        <i class="material-icons trigger" data-trigger="drawer">menu</i>

        <div class="appbar-title">
            <h1><?php echo '<span class="xs-hidden s-hidden">'.ucfirst( $folder ).' -</span> '.$title; ?></h1>
        </div>

        <i class="material-icons">search</i>

        <div class="search-input">
            <div class="single-input">
                <input type="search" name="search" id="search">
                <label for="search">Search</label>
            </div>
        </div>

        <a href="#">Example</a>

        <i class="material-icons">mail <div class="badge">2</div></i>

        <i class="material-icons trigger" data-trigger="appbar-menu">more_vert</i>

        <nav class="menu appbar-menu" id="appbar-menu">
            <a href="#">Example</a>
            <a href="#">Example</a>
            <a href="#">Example</a>
            <a href="#">Example</a>
            <a href="#">Example</a>
            <a href="#">Example</a>
            <a href="#">Example</a>
            <a href="#">Example</a>
            <a href="#">Example</a>
            <a href="#">Example</a>
        </nav>
    </header>

<?php
if( $_SERVER['PHP_SELF'] === '/components/tabs.php' ) {
	?>
	<div class="tabs">
		<a href="#" class="tab-icon-text"><i class="material-icons">home</i><span>Example 1</span></a>
		<a href="#" class="tab-icon-text"><i class="material-icons">home</i><span>Example 2</span></a>
		<a href="#" class="tab-icon-text"><i class="material-icons">home</i><span>Example 3</span></a>
		<a href="#" class="tab-icon-text"><i class="material-icons">home</i><span>Example 4</span></a>
		<a href="#" class="tab-icon-text"><i class="material-icons">home</i><span>Example 5</span></a>
		<a href="#" class="tab-icon-text"><i class="material-icons">home</i><span>Example 6</span></a>
		<a href="#" class="tab-icon-text"><i class="material-icons">home</i><span>Example 7</span></a>
		<a href="#" class="tab-icon-text"><i class="material-icons">home</i><span>Example 8</span></a>
		<a href="#" class="tab-icon-text"><i class="material-icons">home</i><span>Example 9</span></a>
	</div>
	<?php
}
?>
    <nav id="drawer" class="drawer drawer-temporary">
        <header class="drawer-header">
            <<?php echo ($amp ? 'amp-img layout="responsive" height="120px" width="280px"' : 'img'); ?> src="/images/drawer-background.jpg" class="drawer-profile-background" alt="menu background">
            <div class="scrim"></div>
            <<?php echo ($amp ? 'amp-img layout="responsive" height="50px" width="50px"' : 'img'); ?> src="/images/profile-icon.jpg" class="drawer-profile-img" alt="profile image">
            <div class="drawer-profile-name">John Doe</div>
            <div class="drawer-profile-email">johndoe&#64;gmail.com</div>
            <div class="drawer-profile-more">
                <i class="material-icons arrow trigger" data-trigger="drawer-profile-menu">arrow_drop_down</i>

                <nav class="menu" id="drawer-profile-menu">
                    <a href="#">Facebook</a>
                    <a href="#">Google Plus</a>
                    <a href="#">Add account</a>
                </nav>
            </div>
        </header>
        <a href="#" class="drawer-dropdown">SMaterial <i class="material-icons">expand_more</i></a>
        <div class="dropdown">
            <a href="/" <?php echo ( $file == '/index' || $file == '/' ? 'class="active"' : '' ); ?>>Introduction</a>
            <a href="/smaterial/getting-started.php" <?php echo ( $file == '/smaterial/getting-started' ? 'class="active"' : '' ); ?>>Getting started</a>
            <a href="/smaterial/shadow.php" <?php echo ( $file == '/smaterial/shadow' ? 'class="active"' : '' ); ?>>Elevation and shadows</a>
            <a href="/smaterial/news.php" <?php echo ( $file == '/smaterial/news' ? 'class="active"' : '' ); ?>>What's new</a>
        </div>

        <a href="#" class="drawer-dropdown">Style <i class="material-icons">expand_more</i></a>
        <div class="dropdown">
            <a href="/style/color.php" <?php echo ( $file == '/style/color' ? 'class="active"' : '' ); ?>>Color</a>
            <a href="/style/icons.php" <?php echo ( $file == '/style/icons' ? 'class="active"' : '' ); ?>>Icons</a>
            <a href="/style/typography.php" <?php echo ( $file == '/style/typography' ? 'class="active"' : '' ); ?>>Typography</a>
            <a href="/style/functions.php" <?php echo ( $file == '/style/functions' ? 'class="active"' : '' ); ?>>Functions</a>
            <a href="/style/mixins.php" <?php echo ( $file == '/style/mixins' ? 'class="active"' : '' ); ?>>Mixins</a>
        </div>

        <a href="#" class="drawer-dropdown">Components <i class="material-icons">expand_more</i></a>
        <div class="dropdown">
            <a href="/components/appbar.php" <?php echo ( $file == '/components/appbar' ? 'class="active"' : '' ); ?>>Appbar</a>
            <a href="/components/bottom-navigation.php" <?php echo ( $file == '/components/bottom-navigation' ? 'class="active"' : '' ); ?>>Bottom navigation</a>
            <a href="/components/bottom-sheet.php" <?php echo ( $file == '/components/bottom-sheet' ? 'class="active"' : '' ); ?>>Bottom sheet</a>
            <a href="/components/buttons.php" <?php echo ( $file == '/components/buttons' ? 'class="active"' : '' ); ?>>Buttons</a>
            <a href="/components/cards.php" <?php echo ( $file == '/components/cards' ? 'class="active"' : '' ); ?>>Cards</a>
            <a href="/components/chips.php" <?php echo ( $file == '/components/chips' ? 'class="active"' : '' ); ?>>Chips</a>
            <a href="/components/data-tables.php" <?php echo ( $file == '/components/data-tables' ? 'class="active"' : '' ); ?>>Data tables</a>
            <a href="/components/dialogs.php" <?php echo ( $file == '/components/dialogs' ? 'class="active"' : '' ); ?>>Dialogs</a>
            <a href="/components/expansion-panels.php" <?php echo ( $file == '/components/expansion-panels' ? 'class="active"' : '' ); ?>>Expansion panels</a>
            <a href="/components/grid-lists.php" <?php echo ( $file == '/components/grid-lists' ? 'class="active"' : '' ); ?>>Grid lists</a>
            <a href="/components/menu.php" <?php echo ( $file == '/components/menu' ? 'class="active"' : '' ); ?>>Menu</a>
            <a href="/components/pickers.php" <?php echo ( $file == '/components/pickers' ? 'class="active"' : '' ); ?>>Pickers</a>
            <a href="/components/progress-activity.php" <?php echo ( $file == '/components/progress-activity' ? 'class="active"' : '' ); ?>>Progress &amp; activity</a>
            <a href="/components/selection-controls.php" <?php echo ( $file == '/components/selection-controls' ? 'class="active"' : '' ); ?>>Selection controls</a>
            <a href="/components/sliders.php" <?php echo ( $file == '/components/sliders' ? 'class="active"' : '' ); ?>>Slider</a>
            <a href="/components/snackbars-toasts.php" <?php echo ( $file == '/components/snackbars-toasts' ? 'class="active"' : '' ); ?>>Snackbar &amp; toasts</a>
            <a href="/components/steppers.php" <?php echo ( $file == '/components/steppers' ? 'class="active"' : '' ); ?>>Steppers</a>
            <a href="/components/tabs.php" <?php echo ( $file == '/components/tabs' ? 'class="active"' : '' ); ?>>Tabs</a>
            <a href="/components/text-fields.php" <?php echo ( $file == '/components/text-fields' ? 'class="active"' : '' ); ?>>Text fields</a>
            <a href="/components/tooltips.php" <?php echo ( $file == '/components/tooltips' ? 'class="active"' : '' ); ?>>Tooltips</a>
        </div>

        <a href="#" class="drawer-dropdown">Layout <i class="material-icons">expand_more</i></a>
        <div class="dropdown">
            <a href="/layout/grid.php" <?php echo ( $file == '/layout/grid' ? 'class="active"' : '' ); ?>>Responsive grid</a>
            <a href="/layout/screen-sizes.php" <?php echo ( $file == '/layout/screen-sizes' ? 'class="active"' : '' ); ?>>Screen sizes</a>
        </div>

        <a href="#" class="drawer-dropdown">Patterns <i class="material-icons">expand_more</i></a>
        <div class="dropdown">
            <a href="/patterns/navigation-drawer.php" <?php echo ( $file == '/patterns/navigation-drawer' ? 'class="active"' : '' ); ?>>Navigation drawer</a>
            <a href="/patterns/notifications.php" <?php echo ( $file == '/patterns/notifications' ? 'class="active"' : '' ); ?>>Notifications</a>
        </div>

        <a href="#" class="drawer-dropdown">Resources <i class="material-icons">expand_more</i></a>
        <div class="dropdown">
            <a href="/resources/amp.php" <?php echo ( $file == '/resources/amp' ? 'class="active"' : ''); ?>>Accelerated Mobile Pages (AMP)</a>
            <a href="/resources/templates.php" <?php echo ( $file == '/resources/templates' ? 'class="active"' : '' ); ?>>Templates</a>
        </div>
    </nav>

    <main class="main-content">