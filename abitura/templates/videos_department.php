<?php
	require_once "/lang/lang1.php";
?>
<head>
	<title><?php echo $Lang['videos']; ?></title>
	<meta http-equiv="Content-type" content="text/html; charset=Windows-1251" />
        <link href="../static/css/css_menu/style.css" rel="stylesheet" type="text/css" />
		<link href="../static/css/css_menu/menu.css" rel="stylesheet" type="text/css" /> 
		
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Dancing+Script|Philosopher" rel="stylesheet">
		<link rel="shortcut icon" href="../static/images/images/icon.jpg" type="image/jpg">
		
		<link rel="stylesheet" type="text/css" href="../static/css/css_video/initcarousel-2.css">
		
		<script src="../static/js/js_video/jquery.js"></script>
		<script src="../static/js/js_video/initcarousel-2.js"></script>
		<script src="../static/js/js_video/amazingcarousel.js"></script>
		
		
		
</head>

<body>
<table width="100%">
	<?php
		require_once "../static/blocks/top2.php";
	?>		
</table>
<div id="header">
</div>
	<div class="content">
	<?php
		require_once "../static/blocks/content_video.php";
	?>
	</div>
	<div class="footer">
	<?php
		require_once "../static/blocks/footer.php";
	?>
	</div>
</body>