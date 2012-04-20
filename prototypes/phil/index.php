<!doctype html>
<?php
$debug = false;

$colors = array('red', 'blue', 'green', 'purple', 'orange');

$ua = $_SERVER['HTTP_USER_AGENT'];
$is_phone = preg_match('/iPhone|iPod/i', $ua);
$is_tablet = preg_match('/iPad/i', $ua);
$is_mobile = $is_phone || $is_tablet;

$html_classes = array();
if($is_phone) { array_push($html_classes, 'is-phone'); }
if($is_tablet) { array_push($html_classes, 'is-tablet'); }
if($is_mobile) { array_push($html_classes, 'is-mobile'); }

$html_classes = implode(' ', $html_classes);

?>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 <?php echo $html_classes ?>" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8 <?php echo $html_classes ?>" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9 <?php echo $html_classes ?>" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js <?php echo $html_classes ?>"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>RoundUp</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="stylesheet" href="resources/css/main.css">
	<script src="resources/js/modernizr.min.js"></script>
</head>
<body>
	<header class="header js-header">

  	</header>

  	<section class="workout fixed left list js-droppable js-sortable">

  	</section>

  	<section class="exercises left">
  		<div class="list">
	  		<?php for($i = 0; $i < 300; $i++): ?>
	  		<div class="listitem left js-draggable js-listitem">
	  			<div class="badge <?php echo $colors[rand(0, count($colors) - 1)] ?>"><span class="arrow arrow-down"></span></div>
	  			<a href="#" class="delete js-delete">×</a>
	  		</div>
	  		<?php endfor; ?>
	  	</div>
  	</section>

  	<footer class="footer js-footer">

  	</footer>
  	<script src="resources/js/src/jquery.js"></script>
  	<script src="resources/js/src/jquery-ui.js"></script>
  	<script src="resources/js/src/jquery.easing.js"></script>
  	<script src="resources/js/src/roundup.js"></script>
</body>
</html>