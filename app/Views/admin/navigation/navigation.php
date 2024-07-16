<script src="<?= base_url('assets/admin/vendor/sortable/Sortable.js'); ?>"></script>

<div class="row" style="margin-bottom: 20px;">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <label><?= trans("language"); ?></label>
        <select name="lang_id" class="form-control max-400" onchange="window.location.href = '<?= adminUrl(); ?>'+'/navigation?lang='+this.value;">

        </select>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <?= view('admin/includes/_messages'); ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                        <h3 class="box-title"><?= trans("navigation"); ?></h3><br>
                        <small><?= trans("navigation_exp"); ?> You can manage the navigation by dragging and dropping menu items. </small>
            </div>
            <div class="box-body">
                <div id="accordion" data-parent-id="0" data-item-type="none" class="panel-group nested-sortable navigation-editable main-nav-item-container">
                    <div class="panel panel-default nav-item" style="pointer-events: none">
                        <a href="javascript:void(0)" class="btn btn-sm btn-danger btn-nav-edit btn-show-hide-home"><?= trans("hide"); ?></a>
                        <div class="panel-heading"><h4 class="panel-title"><span><?= trans("home"); ?></span></h4></div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    
</div>
<div class="col-sm-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?= trans("menu_limit"); ?></h3>
                    </div>
                    <form action="<?= base_url('Admin/menuLimitPost'); ?>" method="post">
                        <?= csrf_field(); ?>
                        <div class="box-body">
                            <div class="form-group">
                                <label><?= trans('menu_limit'); ?>(<?= trans("number_of_links_in_menu"); ?>)</label>
                                <input type="number" class="form-control" name="menu_limit" placeholder="<?= trans('menu_limit'); ?>" value="" min="1" max="100" required>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary pull-right"><?= trans('save_changes'); ?></button>
                        </div>
                    </form>
                </div>
</div>
<script>
    $(".nav-template-item").click(function () {
        $(".nav-template-item").removeClass("active");
        $(this).addClass("active");
        var id = $(this).attr("data-nav-id");
        $("#input_navigation").val(id);
    });
</script>
