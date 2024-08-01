<div class="top-bar">
    <div class="container">
      <div class="navbar navbar-light navbar-expand">
          <a class="navbar-brand" href="<?= langBaseUrl();?>"><img src="<?= getLogo();?>" width="120" alt="logo" class="img-fluid"></a>
              <ul class="nav navbar-nav ml-auto">
              <?php if ($generalSettings->show_home_link == 1): ?>
              <li class=" nav-item"><a href="<?= langBaseUrl(); ?>" class="nav-link "><?= trans("home"); ?></a></li>
              <?php endif;?>
              <?php if (!empty($baseMenuLinks)): 
                    foreach ($baseMenuLinks as $item):
                        if ($item->item_visibility == 1 && $item->item_location == "main"): ?>
                    <li class="nav-item"><a href="<?= generateMenuItemURL($item, $baseCategories); ?>" class="nav-link"><?= esc($item->item_name); ?></a></li>
                    <?php endif; endforeach; endif; ?>
                    <li class="nav-item dropdown top-menu-dropdown">
                        <a href="<?= langBaseUrl('hosting');?>" class="nav-link dropdown-toggle" data-toggle="dropdown"> Hosting &nbsp;<i class="icon-arrow-down"></i></a>
                        <ul class="dropdown-menu dropdown-menu-lang">
                            <li><a href="<?= langBaseUrl('hosting/shared-hosting');?>" class="dropdown-item selected">Shared Hosting</a></li>
                            <li><a href="<?= langBaseUrl('hosting/vps-hosting');?>" class="dropdown-item selected">Vps Hosting</a></li>
                            <li><a href="#" class="dropdown-item selected">Dedicatied Hosting</a></li>
                        </ul>
                    </li>
                <li class="nav-item">
                  <a id="nav_main_category_1" href="#" class="nav-link " data-id="1" data-parent-id="0" data-has-sb="1">Market</a>
                </li>
                <li class="nav-item dropdown" data-category-id="4">
                  <a id="nav_main_category_4" href="#" class="nav-link " data-id="4" data-parent-id="0" data-has-sb="1">Service</a>

                </li>
                <li class="nav-item dropdown" data-category-id="5">
                  <a id="nav_main_category_5" href="#" class="nav-link" data-id="5" data-parent-id="0" data-has-sb="1">Market</a>

                </li>
                <li class="nav-item dropdown" data-category-id="6">
                  <a id="nav_main_category_6" href="#" class="nav-link" data-id="6" data-parent-id="0" data-has-sb="1">Help Center</a>
                </li>
                <li class="nav-item dropdown" data-category-id="7">
                  <a id="nav_main_category_7" href="#" class="nav-link" data-id="7" data-parent-id="0" data-has-sb="1">Page</a>
                </li>
              </ul>
            </div>
      </div>
    </div>
</div>