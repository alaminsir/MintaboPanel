<div class="price-box">
    <div class="ribbon ribbon-top-right">
        <span>Popular</span>
    </div>
    <div class="price-box-inner">
        <div class="pricing-name text-center">
        <h4 class="name font-600"><?= $item->item_name ?></h4>
        </div>
        <div class="plan-price text-center">
            <h3>
                <strong class="price font-700">
                <span>$</span><?= $item->monthly ?> 
                </strong>
            </h3>
        </div>
        <div class="price-features">
        <?= $item->item_features ?>
        <p>
            <i class="icon-check-thin"></i> Add 5 Products
        </p>
        <p>
            <i class="icon-check-thin"></i> 30 Days Time Limit
        </p>
        <p>
            <i class="icon-check-thin"></i> Vendor Dashboard
        </p>
        <p>
            <i class="icon-check-thin"></i> Sales Statistics
        </p>
        </div>
        <div class="text-center btn-plan-pricing-container">
        <a href="#" class="btn btn-md btn-custom">Choose Plan</a>
        </div>
    </div>
</div>