
<h1>HOME TEMPLATE</h1>
<?php echo $content; ?>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE-Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><? echo $title; ?></title>


		<?php echo Asset::css('bootstrap.css');?>
		<?php echo Asset::css('style.css'); ?>

	</head>

	<body>
		<div class="col-md-12 container">

			<div class="col-md-2 wrapper-navbar">
				<div class="navbar">
					
				</div>
			</div>
			<div class="col-md-10 wrapper-content">
				<div class="content">
					
				</div>
			</div>

		</div>
	</body>
</html>