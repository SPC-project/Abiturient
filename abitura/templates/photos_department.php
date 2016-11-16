<?php
	require_once "/lang/lang1.php";
?>
<head>
	<title><?php echo $Lang['photos']; ?></title>
	<meta http-equiv="Content-type" content="text/html; charset=Windows-1251" />
        <link href="../static/css/css_menu/style.css" rel="stylesheet" type="text/css" />
		<link href="../static/css/css_menu/menu.css" rel="stylesheet" type="text/css" /> 
		
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Dancing+Script|Philosopher" rel="stylesheet">
		<link rel="shortcut icon" href="../static/images/images/icon.jpg" type="image/jpg">
		
		<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
		<script src="../static/js/js_photo/slick.js" type="text/javascript"></script>
		<script src="../static/js/js_photo/slick.min.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="../static/css/css_photo/slick.css">
		<link rel="stylesheet" type="text/css" href="../static/css/css_photo/slick-theme.css">
		<link rel="stylesheet" type="text/css" href="../static/css/css_photo/increase.css">
		
</head>

<body>
<table width="100%">
	<?php
		require_once "../static/blocks/top3.php";
	?>		
</table>
	<div id="header"></div>
	<div class="content">
	<?php
		require_once "../static/blocks/content_photo.php";
	?>	
	</div>
	<div class="footer">
	<?php
		require_once "../static/blocks/footer.php";
	?>
	</div>
		
		  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 5
      });
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 5
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
    });
  </script>
</body>
</html>