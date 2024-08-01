<div id="wrapper">
  <div class="container">
    <div class="row">
      <div id="content" class="col-12">
        <nav class="nav-breadcrumb" aria-label="breadcrumb">
          <ol class="breadcrumb"></ol>
        </nav>
        <h1 class="page-title page-title-product m-b-15">Select Your Plan</h1>
        <div class="form-add-product">
          <div class="row justify-content-center">
            <div class="col-12 col-md-12">
              <div class="row">
                <div class="col-12">
                  <p class="start-selling-description text-muted">Select your membership plan to continue</p>
                </div>
              </div>
              <div class="row">
                <div class="col-12"></div>
              </div>
              <form action="#" method="post">
                <input type="hidden" name="csrf_token" value="23c4edab2f93dc73f993fed7f8582e57">
                <div class="row">
                  <div class="col-12">
                    <div class="price-box-container">
                    <?php if (!empty($hosting_plans)):
                            foreach ($hosting_plans as $item): ?>
                            <?= themeView('hosting/_host_item', ['item' => $item]); ?>
                            <?php endforeach;
                        endif; ?>
                    </div>
                  </div>
                </div>
                <input type="hidden" name="sysLangId" value="1">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>