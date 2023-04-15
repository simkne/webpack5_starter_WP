<!doctype html>
<?php if (is_user_logged_in()) { ?>
  <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" class="wpadmin-logged-in">
<?php } else { ?>
  <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php } ?>

<head>

  <title><?= get_the_title() ?></title>

  <!-- meta tag header includes -->
  <meta name="author" content="simkne" />
  <meta name="description" content="<?= get_the_excerpt() ?>" />
  <meta name="keywords" content="<?= $metaTags ?>">
  <link rel="canonical" href="<?= wp_get_canonical_url() ?>">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.ico" />
  <meta name="robots" content="index, follow">

  <!-- compatability header includes -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- open graph header includes -->
  <meta property="og:title" content="<?= get_the_title() ?>" />
  <meta property="og:url" content="<?= wp_get_canonical_url() ?>" />
  <meta property="og:description" content="<?= get_the_excerpt() ?>" />

  <!-- wordpress header includes -->
  <?php wp_head(); ?>

</head>

<body>