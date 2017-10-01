<?php
/*
Plugin Name: Notamagic: Google Analytics Plugin
Plugin URI: http://notamagic.com
Description: Adds a Google analytics trascking code to the <head> of your theme, by hooking to wp_head.
Author: Dragan Filipovic
Version: 1.0
 */
?>
<?php
function notamagic_google_analytics() { ?>
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-96488089-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-96488089-1');
</script>
<?php }
add_action( 'wp_head', 'notamagic_google_analytics', 10 );