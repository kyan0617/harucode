<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/_static/dist/css/style.css">
  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/_static/dist/img/favicon.ico">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="site-wrapper">
    <!-- <header> -->
    <header class="l-header">
      <div class="l-header__inner">
        <a href="<?php echo esc_url(home_url()); ?>" class="l-header__link">
          <h1 class="l-header__title">haru&nbsp;code</h1>
        </a>
      </div>
    </header><!-- </header> -->