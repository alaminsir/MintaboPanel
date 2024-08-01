<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-12 col-md-3 footer-widget">
                            <div class="row-custom">
                                <div class="footer-logo">
                                    <a href="<?= langBaseUrl();?>"><img src="<?= getLogo();?>" alt="logo"></a>
                                </div>
                            </div>
                            <div class="row-custom">
                                <div class="footer-about">
                                <?= $baseSettings->about_footer; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 footer-widget">
                            <div class="nav-footer">
                                <div class="row-custom">
                                    <h4 class="footer-title"><?= trans("footer_quick_links"); ?></h4>
                                </div>
                                <div class="row-custom">
                                    <ul>
                                <?php if (!empty($baseMenuLinks)): 
                                foreach ($baseMenuLinks as $item):
                                    if ($item->item_visibility == 1 && $item->item_location == "information"): ?>
                                <li class="nav-item"><a href="<?= generateMenuItemURL($item, $baseCategories); ?>" class="nav-link"><?= esc($item->item_name); ?></a></li>
                                <?php endif;
                                    endforeach;
                                    endif; ?>
                                    <?php if (!empty($menuLinks)):
                                            foreach ($menuLinks as $menuLink):
                                                if ($menuLink->location == 'quick_links'):
                                                    $itemLink = generateMenuItemUrl($menuLink);
                                                    if (!empty($menuLink->page_default_name)):
                                                        $itemLink = generateUrl($menuLink->page_default_name);
                                                    endif; ?>
                                                    <li><a href="<?= $itemLink; ?>"><?= esc($menuLink->title); ?></a></li>
                                                <?php endif;
                                            endforeach;
                                        endif; ?>
                                        <li><a href="<?= generateUrl('help_center'); ?>"><?= trans("help_center"); ?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 footer-widget">
                            <div class="nav-footer">
                                <div class="row-custom">
                                    <h4 class="footer-title"><?= trans("footer_information"); ?></h4>
                                </div>
                                <div class="row-custom">
                                    <ul>
                                    <?php if (!empty($menuLinks)):
                                            foreach ($menuLinks as $menuLink):
                                                if ($menuLink->location == 'information'):
                                                    $itemLink = generateMenuItemUrl($menuLink);
                                                    if (!empty($menuLink->page_default_name)):
                                                        $itemLink = generateUrl($menuLink->page_default_name);
                                                    endif; ?>
                                                    <li><a href="<?= $itemLink; ?>"><?= esc($menuLink->title); ?></a></li>
                                                <?php endif;
                                            endforeach;
                                        endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 footer-widget">
                        <div class="row">
                                <div class="col-12">
                                    <h4 class="footer-title"><?= trans("follow_us"); ?></h4>
                                    <div class="footer-social-links">
                                        <?= themeView('partials/_social_links', ['showRSS' => true]); ?>
                                    </div>
                                </div>
                            </div>
                            <?php if ($generalSettings->newsletter_status == 1): ?>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="newsletter">
                                            <div class="widget-newsletter">
                                                <h4 class="footer-title"><?= trans("newsletter"); ?></h4>
                                                <form id="form_newsletter_footer" class="form-newsletter">
                                                    <div class="newsletter">
                                                        <input type="email" name="email" class="newsletter-input" maxlength="199" placeholder="<?= trans("enter_email"); ?>" required>
                                                        <button type="submit" name="submit" value="form" class="newsletter-button"><?= trans("subscribe"); ?></button>
                                                    </div>
                                                    <input type="text" name="url">
                                                    <div id="form_newsletter_response"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="footer-bottom">
                <div class="container">
                    <div class="copyright"> <?= esc($baseSettings->copyright); ?></div>
                    <div class="footer-payment-icons">
                        <img src="http://localhost/modesy/assets/img/payment/visa.svg"
                            data-src="http://localhost/modesy/assets/img/payment/visa.svg" alt="visa"
                            class=" lazyloaded">
                        <img src="http://localhost/modesy/assets/img/payment/mastercard.svg"
                            data-src="http://localhost/modesy/assets/img/payment/mastercard.svg" alt="mastercard"
                            class=" lazyloaded">
                        <img src="http://localhost/modesy/assets/img/payment/maestro.svg"
                            data-src="http://localhost/modesy/assets/img/payment/maestro.svg" alt="maestro"
                            class=" lazyloaded">
                        <img src="http://localhost/modesy/assets/img/payment/amex.svg"
                            data-src="http://localhost/modesy/assets/img/payment/amex.svg" alt="amex"
                            class=" lazyloaded">
                        <img src="http://localhost/modesy/assets/img/payment/discover.svg"
                            data-src="http://localhost/modesy/assets/img/payment/discover.svg" alt="discover"
                            class=" lazyloaded">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="javascript:void(0)" class="scrollup"><i class="icon-arrow-up"></i></a>
<script src="<?= base_url($assetsPath . '/js/jquery-3.5.1.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url($assetsPath . '/js/plugins-2.4.js'); ?>"></script>
<script src="<?= base_url($assetsPath . '/js/script-2.4.min.js'); ?>"></script>
</body>

</html>