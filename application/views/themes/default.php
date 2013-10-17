<html lang="en">
<head>
<title><?php echo $title; ?></title>
<meta name="resource-type" content="document" />
<meta name="robots" content="all, index, follow" />
<meta name="googlebot" content="all, index, follow" />
	<?php
	/**
	 * -- Copy from here --
	 */
	if (! empty ( $meta ))
		foreach ( $meta as $name => $content ) {
			echo "\n\t\t";
			?><meta name="<?php echo $name; ?>"
	content="<?php print_r($content); ?>" /><?php
		}
	echo "\n";
	
	if (! empty ( $canonical )) {
		echo "\n\t\t";
		?><link rel="canonical" href="<?php echo $canonical?>" /><?php
	}
	echo "\n\t";
	
	foreach ( $css as $file ) {
		echo "\n\t\t";
		?><link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" /><?php
	}?>
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/template.css" type="text/css" />
	<?php
	echo "\n\t";
	
	foreach ( $js as $file ) {
		echo "\n\t\t";
		?><script src="<?php echo $file; ?>"></script><?php
	}
	echo "\n\t";
	
	/**
	 * -- to here --
	 */
	?>

    <!-- Le styles -->
<link
	href="<?php echo base_url(); ?>assets/themes/default/hero_files/bootstrap.css"
	rel="stylesheet">
<link
	href="<?php echo base_url(); ?>assets/themes/default/hero_files/bootstrap-responsive.css"
	rel="stylesheet">
<link
	href="<?php echo base_url(); ?>assets/themes/default/css/general.css"
	rel="stylesheet">
<link
	href="<?php echo base_url(); ?>assets/themes/default/css/custom.css"
	rel="stylesheet">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<!-- Le fav and touch icons -->
<link rel="shortcut icon"
	href="<?php echo base_url(); ?>assets/themes/default/images/favicon.png"
	type="image/x-icon" />
<meta property="og:image"
	content="<?php echo base_url(); ?>assets/themes/default/images/facebook-thumb.png" />
<link rel="image_src"
	href="<?php echo base_url(); ?>assets/themes/default/images/facebook-thumb.png" />
<style type="text/css">
</style>
</head>
<body>
<div class="bigContents">
	<div class="contents">
		<div class="header"><?php include 'include/defaultHeader.php';?></div>
		<div class="bodyContents">
			<div class="LEFT"><?php include 'include/defaultLeftMenu.php';?></div>
			<div class="CONTENTS_BODY">BODY</div>
		</div>
		<div class="footer"><?php include 'include/defaultFooter.php';?></div>
	</div></div>
</body>
</html>
