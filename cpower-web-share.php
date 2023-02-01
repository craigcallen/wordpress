<?
add_action( 'wp_footer', function () { ?>

  <script language="JavaScript">
    openShare = async () => {
      if (navigator && navigator.share) {
        await shareNative();
      }
    };

      function shareNative() {
    return new Promise(async (resolve) => {
      const shareUrl =
            `${window.location.protocol}//${window.location.host}`;

      await navigator.share({
        url: document.querySelector('link[rel="canonical"]').getAttribute('href'),
      });

      resolve();
    });
  }
  </script>

<?php } );
