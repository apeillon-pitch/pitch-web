<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
 <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" media="print" onload="this.onload=null;this.media='all'">-->
  <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PDCV8LKM');</script>
  <!-- End Google Tag Manager -->
  <!-- Event snippet for Page vue conversion page -->

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q0RE2W7WLL"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-Q0RE2W7WLL');
  </script>

  <script>
    gtag('event', 'conversion', {'send_to': 'AW-857100355/7fkgCNrj_-AZEMOg2ZgD'});
  </script>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDCV8LKM"
          height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
$splash_colors = ['#231f20', '#fff'];
$random_splash_color = $splash_colors[array_rand($splash_colors)];
?>

<div id="splash-screen" style="background-color: <?php echo esc_attr($random_splash_color); ?>">
  <p class="d-flex flex-column justify-content-center align-items-center" style="margin-top:90px; gap:50px;">
    <?php if($random_splash_color == '#fff') { ?>
    <img src="<?php echo get_template_directory_uri(); ?>/resources/images/lepitch.svg"
         class="logo" alt="Agence Wordpress Paris et Nice" width="200px" height="auto" style="max-width: 200px">
    <?php } else { ?>
    <img src="<?php echo get_template_directory_uri(); ?>/resources/images/pitch-white.svg"
         class="logo" alt="Agence Wordpress Paris et Nice" width="200px" height="auto" style="max-width: 200px">
    <?php } ?>
    <?php if($random_splash_color == '#fff') {
      $color = '#231f20';
    } else {
      $color = 'white';
    }?>
    <strong style="color:<?php echo $color; ?>">Agence WordPress</strong>
  </p>
</div>
<?php wp_body_open(); ?>
<?php do_action('get_header'); ?>

<div id="app">
  <?php echo view(app('sage.view'), app('sage.data'))->render(); ?>
</div>

<?php do_action('get_footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
