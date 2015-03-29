<?
	// change version number with any css or js update
	$versionNum = utils::versionNum();
	$mobileDetect = utils::mobileDetect();
	$mobileCache == "mobile" ? true : false;
	
	// i'm so meta, even this acronym
	$pageTitle = "Existibot";
	$metaDescription = "Existibot | A robot has an existential crisis";
	$metaKeywords = "existibot, avacado";
?>
		<title><?= $pageTitle ?></title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="description" content="<?= $metaDescription ?>">
		<meta name="keywords" content="<?= $metaKeywords ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">
		<meta http-equiv="Cache-control" content="public">
		
		<link rel="icon" type="image/x-icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		
		<link href="/library/css/styles.css?v=<?= $versionNum ?>" rel="stylesheet" type="text/css" />
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
		<script type="text/javascript">!window.jQuery && document.write(unescape('%3Cscript src="/library/js/jquery.js"%3E%3C/script%3E'))</script>
		<script src="/library/js/modernizr.js?v=<?= $versionNum ?>" type="text/javascript"></script>