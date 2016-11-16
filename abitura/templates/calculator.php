<?php
	require_once "/lang/lang1.php";
	
?>
<head>
	<title><?php echo $Lang['probability']; ?></title>
	<meta http-equiv="Content-type" content="text/html; charset=Windows-1251" />
        <link href="../static/css/css_menu/style.css" rel="stylesheet" type="text/css" />
		<link href="../static/css/css_menu/menu.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="../static/css/css_menu/component.css" />
		<link rel="stylesheet" type="text/css" href="../static/css/calculator/css_calculator.css" />
		<script src="../static/js/js_calculator/calculator.js" type="text/javascript"></script>
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Dancing+Script|Philosopher" rel="stylesheet">
		<link rel="shortcut icon" href="../static/images/images/icon.jpg" type="image/jpg">
</head>

<body>
<div class="wrapper">
	<table width="100%">
	<?php
		require_once "../static/blocks/top4.php";
	?>
	</table>
	<div id="header"></div>
	<div class="content">
	<?php
		require_once "../static/blocks/content_calculator.php";
	?>
	</div>
	<div class="footer">
	<?php
		require_once "../static/blocks/footer.php";
	?>
	</div>	
</body>