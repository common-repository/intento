<?php

/**
 * Plugin Name: intento›
 * Description: Avec intento›, dotez-vous d'un allié digital pour mieux suivre et engager vos prospects, du premier contact à la conclusion d'une vente.
 * Version: 1.0.2
 * Author: intento› team
 * Author URI: https://www.intento.io
 */

add_action('wp_head', 'ittio_header_scripts');

function ittio_header_scripts ( $content ) {
	if(!is_user_logged_in()) {
    ?>

		<script>
			(function(w, d, t, f) {
			    date = 1 * new Date();
			    a = d.createElement(t),
			        m = d.getElementsByTagName(t)[0];
			    a.async = 1;
			    a.src = f;
			    a.onload = function() { w.intento.init(date) };
			    m.parentNode.insertBefore(a, m);
			})(window, document, 'script', 'https://t.i-t-t.co/intento.js');
		</script>

	<?php
	}
}