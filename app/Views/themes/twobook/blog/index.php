<div id="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog-content">
                    <nav class="nav-breadcrumb" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= langBaseUrl(); ?>"><?= trans("home"); ?></a></li>
                            <?php if (!empty($category)): ?>
                                <li class="breadcrumb-item"><a href="<?= generateUrl("blog"); ?>"><?= trans("blog"); ?></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?= esc($category->name); ?></li>
                            <?php else: ?>
                                <li class="breadcrumb-item active" aria-current="page"><?= trans('blog'); ?></li>
                            <?php endif; ?>
                        </ol>
                    </nav>
                    <h1 class="page-title"><?= trans("blog"); ?></h1>
                    <div class="row">
                        <div class="col-12">
                            <ul class="blog-categories">
                                <li class="<?= ($activeCategory == 'all') ? 'active' : ''; ?>">
                                    <a href="<?= generateUrl("blog"); ?>"><?= trans('all'); ?></a>
                                </li>
                                <?php if (!empty($categories)):
                                    foreach ($categories as $category): ?>
                                        <li class="<?= $activeCategory == $category->slug ? 'active' : ''; ?>">
                                            <a href="<?= generateUrl("blog") . '/' . esc($category->slug); ?>"><?= esc($category->name); ?></a>
                                        </li>
                                    <?php endforeach;
                                endif; ?>
                            </ul>
                        </div>
                    </div>
             
                    <div class="row">
                        <?php if (!empty($posts)):
                            foreach ($posts as $item): ?>
                                <div class="col-xs-12 col-sm-6 col-lg-4">
                                    <?= themeView('blog/_blog_item', ['item' => $item]); ?>
                                </div>
                            <?php endforeach;
                        endif; ?>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <?= $pager->links; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>