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
    </head>
<body>
<header id="header">
    <?= themeView('partials/_tob_bar');?>
    <?= themeView('partials/_nav_main');?>

</header>


