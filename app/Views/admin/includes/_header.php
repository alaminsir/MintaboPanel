<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= esc($title); ?> - <?= esc($baseSettings->application_name); ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" type="image/png" href="<?= getFavicon(); ?>"/>
    <?= csrf_meta(); ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="<?= base_url('assets/admin/vendor/font-awesome/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/vendor/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/vendor/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/vendor/datatables/dataTables.bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/vendor/datatables/jquery.dataTables_themeroller.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/vendor/tagsinput/jquery.tagsinput.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/vendor/pace/pace.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/vendor/magnific-popup/magnific-popup.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/plugins-2.4.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/AdminLTE.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/_all-skins.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/main-2.4.min.css'); ?>">
    <script>var directionality = 'ltr';</script>
    <?php if ($activeLang->text_direction == 'rtl'): ?>
        <link href="<?= base_url('assets/admin/css/rtl-2.4.min.css'); ?>" rel="stylesheet"/>
        <script>directionality = 'rtl';</script>
    <?php endif; ?>
    <script src="<?= base_url('assets/admin/js/jquery.min.js'); ?>"></script>

        <script>
        var MdsConfig = {
            baseURL: '<?= base_url(); ?>',
            csrfTokenName: '<?= csrf_token() ?>',
            sysLangId: '<?= $activeLang->id; ?>',
            directionality: false,
            textOk: "<?= trans("ok", true); ?>",
            textCancel: "<?= trans("cancel", true); ?>",
            textNone: "<?= trans("none", true); ?>",
            textProcessing: "<?= trans("processing", true); ?>",
            textSelectImage: "<?= trans("select_image", true); ?>",
        }
    </script>
    <style>.form-logout {
            margin: 4px;
            border-radius: 3px
        }

        .btn-logout {
            display: block;
            width: 100%;
            background-color: transparent !important;
            border: 0 !important;
            box-shadow: none !important;
            padding: 3px 20px;
            line-height: 25px;
            color: #777 !important;
            white-space: nowrap;
            border-radius: 3px;
            -webkit-transition: .2s ease-in-out;
            -moz-transition: .2s ease-in-out;
            -ms-transition: .2s ease-in-out;
            -o-transition: .2s ease-in-out;
            transition: .2s ease-in-out
        }

        .btn-logout:hover {
            background-color: #f1f1f1 !important;
            color: #333 !important
        }

        .btn-logout i {
            display: inline-block;
            width: 18px;
            text-align: center
        }</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <div class="main-header-inner">
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"><i class="fa fa-bars" aria-hidden="true"></i></a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li><a class="btn btn-sm btn-success pull-left btn-site-prev" target="_blank" href="<?= base_url();?>"><i class="fa fa-eye"></i> <span class="btn-site-prev-text">View Site</span></a></li>
                        <li class="dropdown user-menu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <i class="fa fa-globe"></i>&nbsp;
                                <?= esc($activeLang->name); ?>                                <span class="fa fa-caret-down"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <?php if (!empty($activeLanguages)):
                                    foreach ($activeLanguages as $language): ?>
                                        <li>
                                            <form action="<?= base_url('Admin/setActiveLanguagePost'); ?>" method="post">
                                                <?= csrf_field(); ?>
                                                <button type="submit" value="<?= $language->id; ?>" name="lang_id" class="control-panel-lang-btn"><?= characterLimiter($language->name, 20, '...'); ?></button>
                                            </form>
                                        </li>
                                    <?php endforeach;
                                endif; ?>
                            </ul>
                        </li>
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="<?= getUserAvatar(user()->avatar); ?>" class="user-image" alt="">
                                <span class="hidden-xs"><i class="fa fa-caret-down"></i> </span>
                            </a>
                            <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                                <?php //if (  ()): ?>
                                    <li><a href="<?= dashboardUrl(); ?>"><i class="fa fa-th-large"></i> <?= trans("dashboard"); ?></a></li>
                                <?php //endif; ?>
                                <li><a href="<?= generateProfileUrl(user()->slug); ?>"><i class="fa fa-user"></i> <?= trans("profile"); ?></a></li>
                                <li><a href="<?= generateUrl('settings'); ?>"><i class="fa fa-cog"></i> <?= trans("update_profile"); ?></a></li>
                                <li><a href="<?= generateUrl('settings', 'change_password'); ?>"><i class="fa fa-lock"></i> <?= trans("change_password"); ?></a></li>
                                <li class="divider"></li>
                                <li>
                                    <form action="<?= base_url('logout'); ?>" method="post" class="form-logout">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="back_url" value="<?= getCurrentUrl(); ?>">
                                        <button type="submit" class="btn-logout text-left"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;<?= trans("logout"); ?></button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <aside class="main-sidebar" style="background-color: #343B4A;">
        <section class="sidebar sidebar-scrollbar">
            <a href="<?= adminUrl(); ?>" class="logo">
                <span class="logo-mini"></span>
                <span class="logo-lg"><b><?= esc($baseSettings->application_name); ?></b> <?= trans("panel"); ?></span>
            </a>
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?= getUserAvatar(user()->avatar); ?>" class="img-circle" alt="">
                </div>
                <div class="pull-left info">
                    <p><?= esc(user()->username); ?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> <?= trans("online"); ?></a>
                </div>
            </div>
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header"><?= trans("navigation"); ?></li>
                <li class="treeview <?php isAdminNavActive(['home-dash', 'ecom-dash', 'domain-dash', 'hosting-dash']); ?>">
                    <a href="#"><i class="fa fa-shopping-cart"></i><span><?= trans("home"); ?></span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu">
                        <li class="nav-home"><a href="<?= adminUrl('home-dash'); ?>"> <?= trans("home"); ?></a></li>
                        <li class="nav-ecom"><a href="<?= adminUrl('ecom-dash'); ?>">E-Commerce</a></li>
                        <li class="nav-domain"><a href="<?= adminUrl('domain-dash'); ?>">Domain</a></li>
                        <li class="nav-hosting"><a href="<?= adminUrl('hosting-dash'); ?>"> Hosting</a></li>
                    </ul>
                </li>

                    <li class="header">Orders</li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-shopping-cart"></i><span>Orders</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                        <ul class="treeview-menu">
                            <li class="nav-orders"><a href="http://localhost/modesy/admin/orders"> Orders</a></li>
                            <li class="nav-transactions"><a href="http://localhost/modesy/admin/transactions"> Transactions</a></li>
                            <li class="nav-order-bank-transfers"><a href="http://localhost/modesy/admin/order-bank-transfers"> Bank Transfers Notifications</a></li>
                        </ul>
                    </li>
                    <li class="nav-digital-sales">
                        <a href="<?= adminUrl('digital-sales'); ?>"><i class="fa fa-shopping-bag"></i><span><?= trans("digital_sales"); ?></span></a>
                    </li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-money" aria-hidden="true"></i><span><?= trans("earnings"); ?></span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                        <ul class="treeview-menu">
                            <li class="nav-earnings"><a href="<?= adminUrl('earnings'); ?>"> <?= trans("earnings"); ?></a></li>
                            <li class="nav-seller-balances"><a href="<?= adminUrl('seller-balances'); ?>"> <?= trans("seller_balances"); ?></a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                    <a href="#"><i class="fa fa-credit-card" aria-hidden="true"></i><span><?= trans("payouts"); ?></span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                        <ul class="treeview-menu">
                            <li class="nav-add-payout"><a href="<?= adminUrl('add-payout'); ?>"> <?= trans("add_payout"); ?></a></li>
                            <li class="nav-payout-requests"><a href="<?= adminUrl('payout-requests'); ?>"> <?= trans("payout_requests"); ?></a></li>
                            <li class="nav-payout-settings"><a href="<?= adminUrl('payout-settings'); ?>"> <?= trans("payout_settings"); ?></a></li>
                        </ul>
                    </li>
                    <li class="nav-refund-requests">
                        <a href="<?= adminUrl('refund-requests'); ?>"><i class="fa fa-flag"></i><span><?= trans("refund_requests"); ?></span></a>
                    </li>
                    <li class="header"><?= trans("products"); ?></li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-shopping-basket angle-left" aria-hidden="true"></i><span>Products</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="#"> Products</a></li>
                            <li class=""><a href="#"> Special Offers</a></li>
                            <li class=""><a href="#"> Pending Products</a></li>
                            <li class=""><a href="#"> Hidden Products</a></li>
                            <li class=""><a href="#"> Sold Products</a></li>
                            <li class=""><a href="#"> Drafts</a></li>
                            <li class=""><a href="#"> Deleted Products</a></li>
                            <li><a href="#" target="_blank"> Add Product</a></li>
                            <li><a href=""> Bulk Product Upload</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-dollar" aria-hidden="true"></i><span>Featured Products</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                        <ul class="treeview-menu">
                            <li class="nav-featured-products"><a href="#"> Products</a></li>
                            <li class="nav-featured-products-pricing"><a href="#"> Pricing</a></li>
                            <li class="nav-featured-products-transactions"><a href="#"> Transactions</a></li>
                        </ul>
                    </li>
                    <li class="nav-quote-requests">
                        <a href="#"><i class="fa fa-tag"></i> <span>Quote Requests</span></a>
                    </li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-folder-open"></i><span>Categories</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                        <ul class="treeview-menu">
                            <li class="nav-categories"><a href="http://localhost/modesy/admin/categories"> Categories</a></li>
                            <li class="nav-bulk-category-upload"><a href="http://localhost/modesy/admin/bulk-category-upload"> Bulk Category Upload</a></li>
                        </ul>
                    </li>
                    <li class="nav-brands">
                        <a href="#"><i class="fa fa-asterisk"></i> <span>Brands</span></a>
                    </li>
                    <li class="nav-custom-fields">
                        <a href="#"><i class="fa fa-plus-square-o"></i> <span>Custom Fields</span></a>
                    </li>
                    <li class="header">Content</li>
                    <li class="nav-pages">
                        <a href="<?= adminUrl('pages'); ?>"><i class="fa fa-file"></i><span>Pages</span></a>
                    </li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-file-text"></i><span>Blog</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                        <ul class="treeview-menu">
                            <li class="nav-blog-posts"><a href="http://localhost/modesy/admin/blog-posts"> Posts</a></li>
                            <li class="nav-blog-categories"><a href="http://localhost/modesy/admin/blog-categories"> Categories</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                            <a href="#"><i class="fa fa-map-marker"></i><span>Location</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                            <ul class="treeview-menu">
                                <li class="nav-countries"><a href="http://localhost/modesy/admin/countries"> Countries</a></li>
                                <li class="nav-states"><a href="http://localhost/modesy/admin/states"> States</a></li>
                                <li class="nav-cities"><a href="http://localhost/modesy/admin/cities"> Cities</a></li>
                            </ul>
                    </li>
                    <li class="header">Membership</li>
                    <li class="nav-users">
                        <a href="http://localhost/modesy/admin/users"><i class="fa fa-users"></i><span>Users</span></a>
                    </li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-adjust"></i><span>Membership Plans</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                        <ul class="treeview-menu">
                            <li class="nav-membership-plans"><a href="http://localhost/modesy/admin/membership-plans"> Membership Plans</a></li>
                            <li class="nav-transactions-membership"><a href="http://localhost/modesy/admin/transactions-membership"> Transactions</a></li>
                        </ul>
                    </li>
                    <li class="nav-shop-opening-requests">
                        <a href="http://localhost/modesy/admin/shop-opening-requests"><i class="fa fa-question-circle"></i><span>Shop Opening Requests</span></a>
                    </li>
                    <li class="nav-roles-permissions">
                        <a href="http://localhost/modesy/admin/roles-permissions"><i class="fa fa-key"></i><span>Roles & Permissions</span></a>
                    </li>
                                <li class="header hide li-mt">Management Tools</li>
                                    <li class="treeview">
                        <a href="#"><i class="fa fa-support"></i><span>Help Center</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                        <ul class="treeview-menu">
                            <li class="nav-knowledge-base"><a href="http://localhost/modesy/admin/knowledge-base"> Knowledge Base</a></li>
                            <li class="nav-support-tickets"><a href="http://localhost/modesy/admin/support-tickets"> Support Tickets</a></li>
                        </ul>
                    </li>

                                    <li class="nav-ad-spaces">
                        <a href="http://localhost/modesy/admin/ad-spaces"><i class="fa fa-dollar"></i> <span>Ad Spaces</span></a>
                    </li>
                                    <li class="nav-contact-messages">
                        <a href="http://localhost/modesy/admin/contact-messages"><i class="fa fa-paper-plane" aria-hidden="true"></i><span>Contact Messages</span></a>
                    </li>
                                    <li class="nav-reviews">
                        <a href="http://localhost/modesy/admin/reviews"><i class="fa fa-star"></i><span>Reviews</span></a>
                    </li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-comments"></i><span>Comments</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                        <ul class="treeview-menu">
                                <li class="nav-pending-product-comments"><a href="http://localhost/modesy/admin/pending-product-comments"> Product Comments</a></li>
                                <li class="nav-pending-blog-comments"><a href="http://localhost/modesy/admin/pending-blog-comments"> Blog Comments</a></li>
                        </ul>
                    </li>
                    <li class="nav-abuse-reports">
                        <a href="http://localhost/modesy/admin/abuse-reports"><i class="fa fa-warning" aria-hidden="true"></i><span>Abuse Reports</span></a>
                    </li>
                    <li class="nav-newsletter">
                        <a href="http://localhost/modesy/admin/newsletter"><i class="fa fa-envelope-o" aria-hidden="true"></i><span>Newsletter</span></a>
                    </li>
                    <li class="header text-uppercase">Settings</li>
                        <li class="nav-preferences">
                            <a href="#"><i class="fa fa-check-square-o"></i><span>Preferences</span></a>
                        </li>
                        <li class="treeview<?php isAdminNavActive(['themes', 'navigation', 'slider', 'homepage-manager']); ?>">
                            <a href="#"><i class="fa fa-cogs"></i><span>Frontend <?= trans("settings"); ?></span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                            <ul class="treeview-menu">
                                <li class="nav-themes"><a href="<?= adminUrl('themes'); ?>"><?= trans("themes"); ?> Setting</span></a></li>
                                <li class="nav-navigation"><a href="<?= adminUrl('navigation'); ?>"><span><?= trans("navigation"); ?></span></a></li>
                                <li class="nav-slider"><a href="<?= adminUrl('slider'); ?>"><span><?= trans("slider"); ?></span></a></li>
                                <li class="nav-homepage-manager"><a href="<?= adminUrl('homepage-manager'); ?>"><span><?= trans("homepage_manager"); ?></span></a></li>
                            </ul>
                        </li>
                        <li class="treeview<?php isAdminNavActive(['general-settings', 'language-settings', 'social-login', 'update-language', 'edit-translations', 'email-settings', 'visual-settings', 'font-settings', 'route-settings',
                            'product-settings', 'payment-settings', 'currency-settings']); ?>">
                            <a href="#"><i class="fa fa-cogs"></i><span><?= trans("settings"); ?></span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                            <ul class="treeview-menu">
                                <?php //if (hasPermission('general_settings')) : ?>
                                    <li class="nav-general-settings"><a href="<?= adminUrl('general-settings'); ?>"> <?= trans("general_settings"); ?></a></li>
                                    <li class="nav-language-settings"><a href="<?= adminUrl('language-settings'); ?>"> <?= trans("language_settings"); ?></a></li>
                                    <li class="nav-storage"><a href="<?= adminUrl('storage'); ?>"><span>Storage</span></a></li>
                                    <li class="nav-cache-system"><a href="<?= adminUrl('cache-system'); ?>"><span>Cache System</span></a> </li>
                                    <li class="nav-seo-tools"><a href="<?= adminUrl('seo-tools'); ?>"><span>SEO Tools</span></a></li>
                                <?php //endif;
                                //if (hasPermission('product_settings')): ?>
                                    <li class="nav-product-settings"><a href="<?= adminUrl('product-settings'); ?>"> <?= trans("product_settings"); ?></a></li>
                                <?php// endif;
                            //    if (hasPermission('payment_settings')):?>
                                    <li class="nav-payment-settings"><a href="<?= adminUrl('payment-settings'); ?>"> <?= trans("payment_settings"); ?></a></li>
                                    <li class="nav-currency-settings"><a href="<?= adminUrl('currency-settings'); ?>"> <?= trans("currency_settings"); ?></a></li>
                                <?php// endif;
                              //  if (hasPermission('general_settings')) : ?>
                                    <li class="nav-email-settings"><a href="<?= adminUrl('email-settings'); ?>"> <?= trans("email_settings"); ?></a></li>
                                    <li class="nav-social-login"><a href="<?= adminUrl('social-login'); ?>"> <?= trans("social_login"); ?></a></li>
                                    <li class="nav-visual-settings"><a href="<?= adminUrl('visual-settings'); ?>"> <?= trans("visual_settings"); ?></a></li>
                                    <li class="nav-font-settings"><a href="<?= adminUrl('font-settings'); ?>"> <?= trans("font_settings"); ?></a></li>
                                    <li class="nav-route-settings"><a href="<?= adminUrl('route-settings'); ?>"> <?= trans("route_settings"); ?></a></li>
                                <?php// endif; ?>
                            </ul>
                        </li>
                        <li class="treeview<?php isAdminNavActive(['hosting-settings',  'currency-settings']); ?>">
                            <a href="#"><i class="fa fa-cogs"></i><span>Hosting <?= trans("settings"); ?></span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                            <ul class="treeview-menu">
                                    <li class="nav-server-settings"><a href="">Server Setiing</a></li>
                                    <li class="nav-language-settings"><a href="<?= adminUrl('language-settings'); ?>"> <?= trans("language_settings"); ?></a></li>
                                    <li class="nav-product-settings"><a href="<?= adminUrl('product-settings'); ?>"> <?= trans("product_settings"); ?></a></li>
                            </ul>
                        </li>
                    <li>
                        <div class="database-backup">
                            <form action="<?= base_url('Admin/downloadDatabaseBackup'); ?>" method="post">
                                <?= csrf_field(); ?>
                                <button type="submit" class="btn btn-block"><i class="fa fa-download"></i>&nbsp;&nbsp;<?= trans("download_database_backup"); ?></button>
                            </form>
                        </div>
                    </li>
                    <li class="header">&nbsp;</li>
            </ul>
        </section>
    </aside>
    <?php
    $segment2 = $segment = getSegmentValue(2);
    $segment3 = $segment = getSegmentValue(3);
    $uriString = $segment2;
    if (!empty($segment3)) {
        $uriString .= '-' . $segment3;
    } ?>
    <style>
        <?php if(!empty($uriString)):
        echo '.nav-'.$uriString.' > a{color: #fff !important;}';
        else:
        echo '.nav-home > a{color: #fff !important;}';
        endif;
       if (true):
        echo '.li-mt {display: block !important;}';
        endif; ?>
    </style>
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-sm-12">
                    <?= view('admin/includes/_messages'); ?>
                </div>
            </div>