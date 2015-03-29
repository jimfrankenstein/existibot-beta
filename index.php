<? include("utils.php"); ?>
<? $mobileClass = utils::mobileDetect(); ?>

<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie ie6 <?=$mobileClass?>" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie ie7 <?=$mobileClass?>"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie ie8 <?=$mobileClass?>"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie ie9 <?=$mobileClass?>"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js <?=$mobileClass?>" lang="en">
<!--<![endif]-->
	<head>
		<? include("includesTop.php"); ?>
	</head>
	<body>
		<? include("header.php"); ?>

		<main>
			<div class="bx" id="main_core">
				<? include( "home.php" ); ?>
			</div>
		</main>
		
		<? include("includesBottom.php"); ?>
		<? include("footer.php"); ?>
	</body>
</html>