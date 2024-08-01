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














    <div class="mobile-nav-container">
<div class="nav-mobile-header">
<div class="container-fluid">
<div class="row">
<div class="nav-mobile-header-container">
<div class="d-flex justify-content-between">
<div class="flex-item flex-item-left item-menu-icon justify-content-start">
<a href="javascript:void(0)" class="btn-open-mobile-nav"><i class="icon-menu"></i></a>
</div>
<div class="flex-item flex-item-mid justify-content-center">
<div class="mobile-logo">
<a href="<?= langBaseUrl(); ?>"><img src="<?= getLogo(); ?>" alt="logo" class="logo"></a>
</div>
</div>
<div class="flex-item flex-item-right justify-content-end">
<a class="a-search-icon"><i id="searchIconMobile" class="icon-search"></i></a>

<a href="" class="a-mobile-cart"><i class="icon-cart"></i><span class="notification span_cart_product_count"></span></a>

</div>
</div>
</div>
</div>
<div class="row">
<div class="top-search-bar mobile-search-form">
<form action="<?= generateUrl('search'); ?>" method="get" id="form_validate_search_mobile">
<?= csrf_field(); ?>
<div class="left">
<div class="dropdown search-select">
<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><?= trans("all_categories"); ?></button>
<i class="icon-arrow-down search-select-caret"></i>
<input type="hidden" name="search_category_input" id="input_search_category_mobile" value="all">
<div class="dropdown-menu search-categories">
<a class="dropdown-item" data-value="all" href="javascript:void(0)"><?= trans("all_categories"); ?></a>
<?php if (!empty($parentCategories)):
foreach ($parentCategories as $searchCat):?>
<a class="dropdown-item" data-value="<?= $searchCat->id; ?>" href="javascript:void(0)"><?= esc($searchCat->name); ?></a>
<?php endforeach;
endif; ?>
</div>
</div>
</div>
<div class="right">
<input type="text" id="input_search_mobile" name="search" maxlength="300" pattern=".*\S+.*" class="form-control input-search" placeholder="<?= trans("search"); ?>" required autocomplete="off">
<button class="btn btn-default btn-search"><i class="icon-search"></i></button>
<div id="response_search_results_mobile" class="search-results-ajax"></div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</header>
<div id="overlay_bg" class="overlay-bg"></div>
<?= themeView("partials/_nav_mobile"); ?>



