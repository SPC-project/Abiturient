﻿<?php
	require_once "../static/lang/lang1.php";
?>
<head>
	<title><?php echo $Lang['important_information']; ?></title>
	<meta http-equiv="Content-type" content="text/html; charset=Windows-1251" />
        <link href="../static/css/css_menu/style.css" rel="stylesheet" type="text/css" />
		<link href="../static/css/css_menu/style1.css" rel="stylesheet" type="text/css" />
		<link href="../static/css/css_menu/menu.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="../static/css/css_menu/component.css" />
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Dancing+Script|Philosopher" rel="stylesheet">
		<link rel="shortcut icon" href="../static/images/images/icon.jpg" type="image/jpg">
</head>

<body>
<div id="shapka"><?php echo $Lang['shapka']; ?></div>
<div class="wrapper">
	<table width="100%">
	<header class="header">
	<?php
		require_once "../static/blocks/top.php";
	?>
	</table>
	<div id="header"></div>
	</header>
	<main div class="content">
	<?php
		require_once "../static/blocks/content_important_information.php";
	?>
	</main>
	</div>
	<footer class="footer">
	<?php
		require_once "../static/blocks/footer.php";
	?>
	</footer>
</body>