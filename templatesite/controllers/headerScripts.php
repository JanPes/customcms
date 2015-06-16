<?php 
	if($page_no == 2){
		echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<!-- Add jQuery library -->
			<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

			<!-- Add mousewheel plugin (this is optional) -->
			<script type="text/javascript" src="includes/js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

			<!-- Add fancyBox -->
			<link rel="stylesheet" href="includes/js/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
			<script type="text/javascript" src="includes/js/fancybox/source/jquery.fancybox.pack.js"></script>

			<!-- Optionally add helpers - button, thumbnail and/or media -->
			<link rel="stylesheet" href="includes/js/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
			<script type="text/javascript" src="includes/js/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
			<script type="text/javascript" src="includes/js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

			<link rel="stylesheet" href="includes/js/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
			<script type="text/javascript" src="includes/js/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>';
	}
else echo '';
?>