<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-6 col-left">
                <ul class="navbar-nav">
                <?php if (!empty($baseMenuLinks)): 
                    foreach ($baseMenuLinks as $item):
                        if ($item->item_visibility == 1 && $item->item_location == "top"): ?>
                    <li class="nav-item"><a href="<?= generateMenuItemURL($item, $baseCategories); ?>" class="nav-link"><?= esc($item->item_name); ?></a></li>
                    <?php endif;
                        endforeach;
                        endif; ?>
                    <li class="nav-item dropdown top-menu-dropdown">
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown"> <img
                                src="http://localhost/modesy/uploads/blocks/flag_eng.jpg" class="flag">Contact&nbsp;<i
                                class="icon-arrow-down"></i></a>
                        <ul class="dropdown-menu dropdown-menu-lang">
                            <li>
                                <a href="http://localhost/modesy/" class="dropdown-item selected"><img
                                        src="http://localhost/modesy/uploads/blocks/flag_eng.jpg"
                                        class="flag">Support</a>
                            </li>
                            <li>
                                <a href="http://localhost/modesy/bn/" class="dropdown-item "><img
                                        src="http://localhost/modesy/uploads/blocks/flag_6692107e54b0a.png"
                                        class="flag">Bengali</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-right">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#locationModal" class="nav-link btn-modal-location">Location</a>
                    </li>
                    <?php if ($generalSettings->multilingual_system == 1 && countItems($activeLanguages) > 1): ?>
                    <li class="nav-item dropdown top-menu-dropdown">
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown">
                             <img src="<?= base_url($activeLang->flag_path); ?>" class="flag"><?= esc($activeLang->name); ?>&nbsp;<i class="icon-arrow-down"></i></a>
                        <ul class="dropdown-menu dropdown-menu-lang">
                        <?php foreach ($activeLanguages as $language): 
                        $langURL = base_url($language->short_form);
                        if ($language->id == $generalSettings->site_lang):
                        $langURL = base_url();
                        endif; ?>
                        <li>
                          
                                <a href="<?= $langURL; ?>" class="dropdown-item <?= $language->id == $activeLang->id ? 'selected' : ''; ?>">
                                    <img src="<?= base_url($language->flag_path); ?>" class="flag"><?= esc($language->name); ?></a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <?php endif;?>
                    <?php if(authCheck()):?>
                    <li class="nav-item dropdown profile-dropdown p-r-0">
                        <a class="nav-link dropdown-toggle a-profile" data-toggle="dropdown" href="javascript:void(0)"
                            aria-expanded="false"><img
                                src="http://localhost/modesy/uploads/profile/avatar_669220c9ecca49-70342542.webp"
                                alt="MaP Hunter">MaP Hunter<i class="icon-arrow-down"></i><span
                                class="message-notification">1</span></a>
                        <ul class="dropdown-menu" style="">
                            <li><a href="http://localhost/modesy/admin"><i class="icon-admin"></i>Admin Panel</a></li>
                            <li><a href="http://localhost/modesy/dashboard"><i class="icon-dashboard"></i>Dashboard</a>
                            </li>
                            <li><a href="http://localhost/modesy/profile/map-hunter"><i
                                        class="icon-user"></i>Profile</a></li>
                            <li><a href="http://localhost/modesy/orders"><i class="icon-shopping-basket"></i>Orders</a>
                            </li>
                            <li><a href="http://localhost/modesy/quote-requests"><i class="icon-price-tag-o"></i>Quote
                                    Requests</a></li>
                            <li><a href="http://localhost/modesy/downloads"><i class="icon-download"></i>Downloads</a>
                            </li>
                            <li><a href="http://localhost/modesy/my-coupons">
                                    <div class="isvg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-ticket-perforated" viewBox="0 0 16 16">
                                            <path
                                                d="M4 4.85v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Z">
                                            </path>
                                            <path
                                                d="M1.5 3A1.5 1.5 0 0 0 0 4.5V6a.5.5 0 0 0 .5.5 1.5 1.5 0 1 1 0 3 .5.5 0 0 0-.5.5v1.5A1.5 1.5 0 0 0 1.5 13h13a1.5 1.5 0 0 0 1.5-1.5V10a.5.5 0 0 0-.5-.5 1.5 1.5 0 0 1 0-3A.5.5 0 0 0 16 6V4.5A1.5 1.5 0 0 0 14.5 3h-13ZM1 4.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v1.05a2.5 2.5 0 0 0 0 4.9v1.05a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-1.05a2.5 2.5 0 0 0 0-4.9V4.5Z">
                                            </path>
                                        </svg>
                                    </div>My Coupons
                                </a></li>
                            <li>
                                <a href="http://localhost/modesy/refund-requests">
                                    <div class="isvg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16" class="mds-svg-icon">
                                            <path
                                                d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z">
                                            </path>
                                        </svg>
                                    </div>
                                    Refund
                                </a>
                            </li>
                            <li>
                                <a href="http://localhost/modesy/messages"><i class="icon-mail"></i>Messages&nbsp;
                                    (1)
                                </a>
                            </li>
                            <li><a href="http://localhost/modesy/settings/edit-profile"><i
                                        class="icon-settings"></i>Settings</a></li>
                            <li>
                                <form action="http://localhost/modesy/logout" method="post" class="form-logout">
                                    <input type="hidden" name="csrf_token"
                                        value="d9a2e10b388a3381406aca93f3f63164"><input type="hidden" name="back_url"
                                        value="http://localhost/modesy/">
                                    <button type="submit" class="btn-logout"><i
                                            class="icon-logout"></i>&nbsp;&nbsp;Logout</button>
                                    <input type="hidden" name="sysLangId" value="1"></form>
                            </li>
                        </ul>
                    </li>
                    <?php else: 
                    if($generalSettings->registration_system == 1):?>
                    <li class="nav-item"><a href="<?= generateURL('authlogin'); ?>" class="nav-link"><?= trans("login"); ?></a><span>&nbsp;/&nbsp;</span><a href="<?= generateURL('register'); ?>" class="nav-link"><?= trans("register"); ?></a></li>
                    <?php endif;?>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </div>
</div>