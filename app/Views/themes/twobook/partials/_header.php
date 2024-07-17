<!DOCTYPE html>
<html lang="<?= $activeLang->short_form; ?>">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= escSls($title); ?> - <?= escSls($baseSettings->site_title); ?></title>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>
    <link rel="shortcut icon" type="image/png" href="<?= getFavicon(); ?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/vendor/font-icons/css/mds-icons-2.4.min.css'); ?>"/>
    <?= themeView('partials/_fonts'); ?>
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>"/>
    <link rel="stylesheet" href="<?= base_url($assetsPath . '/css/style-2.4.min.css'); ?>"/>
    <link rel="stylesheet" href="<?= base_url($assetsPath . '/css/plugins-2.4.css'); ?>"/>
    <style>:root {--vr-color-main: #222222;}      .nav-mobile-header .flex-item-left, .nav-mobile-header .flex-item-right{ width: 100px;}.nav-mobile-header .flex-item-mid{width: calc(100% - 200px);}
</style>
    </head>
<body>
<header id="header">
    <?= themeView('partials/_tob_bar');?>
    <?php // themeView('partials/_nav_main');?>
    <?= themeView('partials/_nav');?>

</header>


