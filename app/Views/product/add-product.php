<?= $this->extend('template/default') ?>

<?= $this->section('content') ?>

<section class="content-main">
    <div class="row">
        <div class="col-12">
            <div class="content-header">
                <h2 class="content-title">Add New Product</h2>
                <div>
                    <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save to draft</button>
                    <button class="btn btn-md rounded font-sm hover-up">Publish</button>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Basic</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Product title</label>
                            <input type="text" placeholder="Type here" class="form-control" id="product_name" />
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Full description</label>
                            <textarea placeholder="Type here" class="form-control make-tiny" rows="4"></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Additional description</label>
                            <textarea placeholder="Type here" class="form-control make-tiny" rows="4"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label class="form-label">Regular price</label>
                                    <div class="row gx-2">
                                        <input placeholder="<?= RUPEE ?>" type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label class="form-label">Sale price</label>
                                    <input placeholder="<?= RUPEE ?>" type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">Currency</label>
                                <select class="form-select">
                                    <option value="<?= RUPEE ?>">Rupee (<?= RUPEE ?>)</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Tax rate</label>
                            <input type="text" placeholder="%" class="form-control" id="product_name" />
                        </div>
                        <label class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" value="" />
                            <span class="form-check-label"> Make a template </span>
                        </label>
                    </form>
                </div>
            </div>
            <!-- card end// -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Inventory</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_stock" class="form-label">Stock</label>
                                    <input type="text" placeholder="0" class="form-control" id="product_stock" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_discount" class="form-label">Discount</label>
                                    <input type="text" placeholder="0%" class="form-control" id="product_discount" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Special Today</label>
                                    <select name="product_is_special" class="form-select" id="product_is_special">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>

                                    </select>
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label for="product_featured" class="form-label">Featured</label>
                                    <select name="product_featured" class="form-select" id="product_featured">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- card end// -->
            <!-- card end// -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Shipping</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Width</label>
                                    <input type="text" placeholder="inch" class="form-control" id="product_name" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Height</label>
                                    <input type="text" placeholder="inch" class="form-control" id="product_name" />
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Weight</label>
                            <input type="text" placeholder="gm" class="form-control" id="product_name" />
                        </div>
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Shipping fees</label>
                            <input type="text" placeholder="<?= RUPEE ?>" class="form-control" id="product_name" />
                        </div>
                    </form>
                </div>
            </div>
            <!-- card end// -->
        </div>
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Main Image</h4>
                </div>
                <div class="card-body">
                    <div class="input-upload">
                        <img src="<?= base_url() ?>/assets/imgs/theme/upload.svg" alt="" />
                        <input accept="image/*" class="form-control" type="file" />
                    </div>
                </div>
            </div>
            <!-- card end// -->

            <div class="card mb-4">
                <div class="card-header">
                    <h4>All Images</h4>
                </div>
                <div class="card-body">
                    <div class="input-upload">
                        <img src="<?= base_url() ?>/assets/imgs/theme/upload.svg" alt="" />
                        <input accept="image/*" name="all_images[]" class="form-control" type="file" multiple />
                    </div>
                </div>
            </div>
            <!-- card end// -->

            <div class="card mb-4">
                <div class="card-header">
                    <h4>Organization</h4>
                </div>
                <div class="card-body">
                    <div class="row gx-2">
                        <div class="col-sm-12 mb-3">
                            <label class="form-label">Category</label>
                            <select class="form-select">
                                <?php foreach ($categories as $category) : ?>
                                    <option><?= $category['c_name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Tags</label>
                            <input type="text" class="form-control" />
                            <small class="text-muted">separate the tags with comma (,)</small>
                        </div>
                    </div>
                    <!-- row.// -->
                </div>
            </div>
            <!-- card end// -->
        </div>
    </div>
</section>
<!-- content-main end// -->

<?= $this->endSection(); ?>