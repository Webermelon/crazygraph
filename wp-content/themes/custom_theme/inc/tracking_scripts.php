<?php

/************************************************************************************/
/* Google Analytics */
/************************************************************************************/
add_action( 'wp_head', 'analytics' );
function analytics() {
	if ( ! ENVIROMENT_IS_PRODUCTION ) {
		return;
	}
	?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146237248-1"></script>
	<script>
	 window.dataLayer = window.dataLayer || [];
	 function gtag(){dataLayer.push(arguments);}
	 gtag('js', new Date());
	 gtag('config', 'UA-146237248-1');
	</script>
	<?php
}
