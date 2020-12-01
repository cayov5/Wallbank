<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/src/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/src/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/src/favicon/favicon-16x16.png">
    <link rel="manifest" href="/src/favicon/site.webmanifest">
    <link rel="mask-icon" href="/src/favicon/safari-pinned-tab.svg" color="#00FF7D">
    <link rel="shortcut icon" href="/src/favicon/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Wall Bank<?php if ($info['title']) { echo ' - '.$info['title']; } ?>">
    <meta name="application-name" content="Wall Bank<?php if ($info['title']) { echo ' - '.$info['title']; } ?>">
    <meta name="msapplication-TileColor" content="#00FF7D">
    <meta name="msapplication-config" content="/src/favicon/browserconfig.xml">
    <meta name="theme-color" content="#00FF7D">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="<?php echo '/dist/css/'.$info['style'].'.css?v='.$config['file-version'] ?>">
    <title>Wall Bank<?php if ($info['title']) { echo ' - '.$info['title']; } ?></title>
    <meta name="description" content="<?php if ($info['desc']) {echo $info['desc']; } ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
    <meta property="og:title" content="Wall Bank<?php if ($info['title']) { echo ' - '.$info['title']; } ?>">
    <meta property="og:description" content="<?php if ($info['desc']) {echo $info['desc']; } ?>">
    <meta property="og:image" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>dist/images/og_image.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
    <meta property="twitter:title" content="Wall Bank<?php if ($info['title']) { echo ' - '.$info['title']; } ?>">
    <meta property="twitter:description" content="<?php if ($info['desc']) {echo $info['desc']; } ?>">
    <meta property="twitter:image" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>dist/images/og_image.jpg">
  </head>
