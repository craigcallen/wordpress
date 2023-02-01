<?
//Load Font Awesome and Set Web App Title
add_action( 'wp_head', function () { ?>
<script src="https://kit.fontawesome.com/46bc241c6d.js" crossorigin="anonymous"></script>
<meta name="apple-mobile-web-app-title" content="CPOWER">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0"/>
<meta name="theme-color" media="(prefers-color-scheme: light)" content="#1F5389">
<meta name="theme-color" media="(prefers-color-scheme: dark)" content="#1F5389">
<meta name="apple-mobile-web-app-status-bar-style" content="dark">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<link rel="manifest" href="/mobile-app/manifest.json">
<meta name="apple-itunes-app" content="app-id=1603307589">
<script src="/mobile-app/safari-links.js"></script>
<script src="/mobile-app/pwabuilder-sw.js"></script>
<script src="/mobile-app/pwabuilder-sw-register.js"></script>

<script type="module">
   import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';
   const el = document.createElement('pwa-update');
   document.body.appendChild(el);
</script>
<?php } );
