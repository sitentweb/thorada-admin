<?= $this->extend('template/default') ?>

<?= $this->section('content') ?>


<section class="content-main">
    <div class="content-header">
        <a href="javascript:history.back()"><i class="material-icons md-arrow_back"></i> Go back </a>
    </div>
    <div class="card mb-4">
        <div class="card-header bg-brand-2" style="height: 150px"></div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl col-lg flex-grow-0" style="flex-basis: 230px">
                    <div class="img-thumbnail shadow w-100 bg-white position-relative text-center" style="height: 190px; width: 200px; margin-top: -120px">
                        <img src="<?= 'https://thoradaadmin.sitentweb.com/' . $product['media'][0]['pm_image'] ?>" class="center-xy img-fluid" alt="Logo Brand" />
                    </div>
                </div>
                <!--  col.// -->
                <div class="col-xl col-lg">
                    <h3><?= $product['p_name'] ?></h3>
                    <p>
                        <?php if ($product['p_is_live'] == '1') : ?>
                            <span class="badge bg-success">Active</span>
                        <?php else : ?>
                            <span class="badge bg-secondary">Inactive</span>
                        <?php endif; ?>
                        <span class="mx-1"></span>
                        <?= $product['p_slug'] ?>
                    </p>
                    <div class="col-xl-8 gap-3 d-flex text-md-end">
                        <div>
                            <a href="#" class="btn btn-info btn-sm py-2">Edit Product</a>
                        </div>
                        <div>
                            <a href="#" class="btn btn-primary btn-sm py-2"> View Live <i class="material-icons mt-1 px-1 md-launch"></i> </a>
                        </div>
                    </div>
                    <!--  col.// -->
                </div>
                <!--  col.// -->

            </div>
            <!-- card-body.// -->
            <hr class="my-4" />

            <div class="row g-4 mb-4">
                <div class="col-md-12 col-lg-4 col-xl-2">
                    <article class="box">
                        <p class="mb-0 text-muted">Sale Price:</p>
                        <h5 class="text-success"><?= price($product['p_sale_price']) ?>/-</h5>
                        <p class="mb-0 text-muted">Main Price:</p>
                        <h5 class="text-success mb-0"><del><?= price($product['p_price']) ?></del></h5>
                    </article>
                </div>
                <!--  col.// -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <!-- <h6>Basic Details</h6> -->
                    <p>
                        <?= $product['category']['c_name'] ?> </p>
                    <p>
                        <span class="badge bg-warning"><?= $product['brand']['b_name'] ?></span>
                    </p>
                    <p>
                        <?php if ($product['p_stock'] != '0') : ?>
                            <span class="text-success">Stock: <?= $product['p_stock'] ?></span>
                        <?php else : ?>
                            <span class="badge bg-secondary">Out of Stock</span>

                        <?php endif; ?>
                    </p>
                    <p>
                        <?php if ($product['p_warranty'] != '0') : ?>
                            <span class="text-success">In Warranty</span>
                        <?php else : ?>
                            <span class="badge bg-secondary">No Warranty</span>

                        <?php endif; ?>
                    </p>
                </div>
                <!--  col.// -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <h6> </h6>
                    <p>
                        Shipping: <?= price($product['p_shipping_charge']) ?>/- </p>
                    <p>
                        <?= $product['p_is_cod'] == '1' ? "Cash on delivery" : "COD not available" ?> </p>
                    <p>
                        <?= $product['p_created_at'] ?>
                    </p>
                </div>
                <!--  col.// -->
                <div class="col-sm-6 col-xl-4 text-xl-end">
                    <map class="mapbox position-relative d-inline-block">
                        <img src="/assets/imgs/misc/map.jpg" class="rounded2" height="120" alt="map" />
                        <span class="map-pin" style="top: 50px; left: 100px"></span>
                        <button class="btn btn-sm btn-brand position-absolute bottom-0 end-0 mb-15 mr-15 font-xs">Large</button>
                    </map>
                </div>
                <!--  col.// -->
            </div>
            <div class="row">
                <div class="text-center" style="font-family:Arial, Helvetica, sans-serif;">
                    <div class="card">
                        <div class="card-body product-description">
                            <?= $product['p_description'] ?>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                if (localStorage.getItem('themeMode') != null) {
                    if (localStorage.getItem('themeMode') == 'dark') {
                        $('.product-description').find('*').addClass('text-white');
                    } else {
                        $('.product-description').find('*').removeClass('text-white');
                    }
                }
            </script>

            <!--  row.// -->
        </div>
        <!--  card-body.// -->
    </div>
    <!--  card.// -->

</section>
<!-- content-main end// -->

<?= $this->endSection() ?>