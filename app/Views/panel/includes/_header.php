<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MaP Hunter - <?= trans("dashboard"); ?>  - Modesy</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" type="image/png" href="<?= getFavicon(); ?>"/>
    <?= csrf_meta(); ?>
    <?= view('panel/includes/_fonts'); ?>
    <link rel="stylesheet" href="<?= base_url('assets/admin/vendor/font-awesome/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/font-icons/css/mds-icons-2.4.min.css'); ?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/admin/vendor/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/vendor/datatables/dataTables.bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/vendor/datatables/jquery.dataTables_themeroller.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/vendor/tagsinput/jquery.tagsinput.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/vendor/pace/pace.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/vendor/magnific-popup/magnific-popup.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/plugins-2.4.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/AdminLTE.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/skin-black-light.min.css'); ?>">
    <link rel="stylesheet" href="http://localhost/modesy/assets/vendor/file-uploader/css/jquery.dm-uploader.min.css"/>
    <link rel="stylesheet" href="http://localhost/modesy/assets/vendor/file-uploader/css/styles.css"/>
    <link rel="stylesheet" href="http://localhost/modesy/assets/vendor/file-manager/file-manager.css">
    <link rel="stylesheet" href="http://localhost/modesy/assets/admin/css/main-2.4.min.css">
    <link rel="stylesheet" href="http://localhost/modesy/assets/admin/css/dashboard-2.4.min.css">
        <script src="http://localhost/modesy/assets/admin/js/jquery.min.js"></script>
    <script src="http://localhost/modesy/assets/vendor/file-uploader/js/jquery.dm-uploader.min.js"></script>
    <script src="http://localhost/modesy/assets/vendor/file-uploader/js/ui.js"></script>
    <script>
        var MdsConfig = {
            baseURL: '<?= base_url(); ?>',
            csrfTokenName: '<?= csrf_token() ?>',
            sysLangId: '1',
            directionality: false,
            thousandsSeparator: '.',
            commissionRate: '0',
            imageUploadLimit: parseInt('20'),
            textOk: "<?= trans("ok", true); ?>",
            textCancel: "<?= trans("cancel", true); ?>",
            textProcessing: "<?= trans("processing", true); ?>",
            textNoResultsFound: "<?= trans("no_results_found", true); ?>",
            textAcceptTerms: "<?= trans("msg_accept_terms", true); ?>",
        }
    </script>
    <style>.form-logout{margin:4px;border-radius:3px}.btn-logout{display:block;width:100%;background-color:transparent!important;border:0!important;box-shadow:none!important;padding:3px 20px;line-height:25px;color:#777!important;white-space:nowrap;border-radius:3px;-webkit-transition:.2s ease-in-out;-moz-transition:.2s ease-in-out;-ms-transition:.2s ease-in-out;-o-transition:.2s ease-in-out;transition:.2s ease-in-out}.btn-logout:hover{background-color:#f1f1f1!important;color:#333!important}.btn-logout i{display:inline-block;width:18px;text-align:center}</style>
</head>
<body class="hold-transition skin-black-light sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <div class="main-header-inner">
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="btn btn-sm btn-success pull-left btn-site-prev" target="_blank" href="<?= base_url();?>"><i class="fa fa-eye"></i> &nbsp;<span class="btn-site-prev-text"><?= trans("view_site"); ?></span></a>
                        </li>
                                                    <li class="nav-item dropdown language-dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    <img src="http://localhost/modesy/uploads/blocks/flag_eng.jpg" class="flag">English <i class="fa fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu">
                                                                                <a href="http://localhost/modesy/dashboard" class="selected " class="dropdown-item">
                                                <img src="http://localhost/modesy/uploads/blocks/flag_eng.jpg" class="flag">English                                            </a>
                                                                                    <a href="http://localhost/modesy/bn/dashboard" class=" " class="dropdown-item">
                                                <img src="http://localhost/modesy/uploads/blocks/flag_6692107e54b0a.png" class="flag">Bengali                                            </a>
                                                                        </div>
                            </li>
                                                <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="http://localhost/modesy/uploads/profile/avatar_669220c9ecca49-70342542.webp" class="user-image" alt="">
                                <span class="hidden-xs">MaP Hunter</span>&nbsp;<i class="fa fa-caret-down caret-profile"></i>
                            </a>
                            <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                                                                    <li><a href="http://localhost/modesy/admin"><i class="icon-admin"></i> Admin Panel</a></li>
                                                                <li><a href="http://localhost/modesy/profile/map-hunter"><i class="fa fa-user"></i> Profile</a></li>
                                <li><a href="http://localhost/modesy/settings"><i class="fa fa-cog"></i> Update Profile</a></li>
                                <li><a href="http://localhost/modesy/settings/change-password"><i class="fa fa-lock"></i> Change Password</a></li>
                                <li class="divider"></li>
                                <li>
                                    <form action="http://localhost/modesy/logout" method="post" class="form-logout">
                                        <input type="hidden" name="csrf_token" value="bc16ae46000c284aad54ba8f0add209b">                                        <input type="hidden" name="back_url" value="http://localhost/modesy/dashboard">
                                        <button type="submit" class="btn-logout text-left"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="sidebar-scrollbar">
                <div class="logo">
                    <a href="http://localhost/modesy/dashboard"><img src="<?= getLogo(); ?>" alt="logo"></a>
                </div>
                <div class="user-panel">
                    <div class="image">
                        <img src="http://localhost/modesy/uploads/profile/avatar_669220c9ecca49-70342542.webp" class="img-circle" alt="">
                    </div>
                    <div class="username">
                        <p>Hi, MaP Hunter</p>
                    </div>
                </div>
                                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">Navigation</li>
                        <li class="nav-home">
                            <a href="http://localhost/modesy/dashboard">
                                <i class="fa fa-home"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="header">Products</li>
                        <li class="nav-add-product">
                            <a href="http://localhost/modesy/dashboard/add-product">
                                <i class="fa fa-file"></i>
                                <span>Add Product</span>
                            </a>
                        </li>
                                                    <li class="nav-bulk-product-upload">
                                <a href="http://localhost/modesy/dashboard/bulk-product-upload">
                                    <i class="fa fa-cloud-upload"></i>
                                    <span>Bulk Product Upload</span>
                                </a>
                            </li>
                                                <li class="treeview">
                            <a href="#">
                                <i class="fa fa-shopping-basket"></i>
                                <span>Products</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="nav-products"><a href="http://localhost/modesy/dashboard/products">Products</a></li>
                                <li class="nav-pending-products"><a href="http://localhost/modesy/dashboard/products?st=pending">Pending Products</a></li>
                                <li class="nav-hidden-products"><a href="http://localhost/modesy/dashboard/products?st=hidden">Hidden Products</a></li>
                                                                    <li class="nav-expired-products"><a href="http://localhost/modesy/dashboard/products?st=expired">Expired Products</a></li>
                                                                <li class="nav-sold-products"><a href="http://localhost/modesy/dashboard/products?st=sold">Sold Products</a></li>
                                <li class="nav-drafts"><a href="http://localhost/modesy/dashboard/products?st=draft">Drafts</a></li>
                            </ul>
                        </li>
                                                    <li class="header">Sales</li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Sales</span>
                                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="nav-sales"><a href="http://localhost/modesy/dashboard/sales">Active Sales</a></li>
                                    <li class="nav-completed-sales"><a href="http://localhost/modesy/dashboard/sales?st=completed">Completed Sales</a></li>
                                    <li class="nav-cancelled-sales"><a href="http://localhost/modesy/dashboard/sales?st=cancelled">Cancelled Sales</a></li>
                                </ul>
                            </li>
                            <li class="nav-earnings">
                                <a href="http://localhost/modesy/dashboard/earnings">
                                    <i class="fa fa-money"></i>
                                    <span>Earnings</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-credit-card-alt" style="font-size: 14px;"></i>
                                    <span>Payouts</span>
                                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="nav-withdraw-money"><a href="http://localhost/modesy/dashboard/withdraw-money">Withdraw Money</a></li>
                                    <li class="nav-payouts"><a href="http://localhost/modesy/dashboard/payouts">Payouts</a></li>
                                    <li class="nav-set-payout-account"><a href="http://localhost/modesy/dashboard/set-payout-account">Set Payout Account</a></li>
                                </ul>
                            </li>
                                                    <li class="nav-quote-requests">
                                <a href="http://localhost/modesy/dashboard/quote-requests">
                                    <i class="fa fa-tag"></i>
                                    <span>Quote Requests</span>
                                                                    </a>
                            </li>
                                                    <li class="nav-coupons">
                                <a href="http://localhost/modesy/dashboard/coupons">
                                    <i class="fa fa-ticket"></i>
                                    <span>Coupons</span>
                                </a>
                            </li>
                            <li class="nav-refund-requests">
                                <a href="http://localhost/modesy/dashboard/refund-requests">
                                    <i class="fa fa-flag"></i>
                                    <span>Refund Requests</span>
                                                                    </a>
                            </li>
                                                <li class="header">Payments</li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-credit-card"></i>
                                <span>Payment History</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                                                    <li class="nav-payment-history"><a href="http://localhost/modesy/dashboard/payment-history?payment=membership">Membership Payments</a></li>
                                                                <li class="nav-payment-history"><a href="http://localhost/modesy/dashboard/payment-history?payment=promotion">Promotion Payments</a></li>
                            </ul>
                        </li>
                                                    <li class="header">Comments</li>
                                                            <li class="nav-comments">
                                    <a href="http://localhost/modesy/dashboard/comments">
                                        <i class="fa fa-comments"></i>
                                        <span>Comments</span>
                                    </a>
                                </li>
                                                                                        <li class="nav-reviews">
                                    <a href="http://localhost/modesy/dashboard/reviews">
                                        <i class="fa fa-star"></i>
                                        <span>Reviews</span>
                                    </a>
                                </li>
                                                                            <li class="header">Settings</li>
                        <li class="nav-shop-settings">
                            <a href="http://localhost/modesy/dashboard/shop-settings">
                                <i class="fa fa-cog"></i>
                                <span>Shop Settings</span>
                            </a>
                        </li>
                                                    <li class="nav-shipping-settings">
                                <a href="http://localhost/modesy/dashboard/shipping-settings">
                                    <i class="fa fa-truck"></i>
                                    <span>Shipping Settings</span>
                                </a>
                            </li>
                                            </ul>
                            </div>
        </section>
    </aside>
        <style>
        .nav-home > a{color: #2C344C !important; background-color:#F7F8FC;}    </style>
 