<?= $this->extend('template/default') ?>

<?= $this->section('content') ?>
<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Categories</h2>
            <p>Add, edit or delete a category</p>
        </div>
        <div>
            <input type="text" placeholder="Search Categories" class="form-control bg-white" />
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <form>
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Name</label>
                            <input type="text" placeholder="Type here" class="form-control" id="product_name" />
                        </div>
                        <div class="mb-4">
                            <label for="product_slug" class="form-label">Slug</label>
                            <input type="text" placeholder="Type here" class="form-control" id="product_slug" />
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Parent</label>
                            <select class="form-select">
                                <option>Fruit</option>
                                <option>Snack</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Description</label>
                            <textarea placeholder="Type here" class="form-control"></textarea>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary">Create category</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-9">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" />
                                        </div>
                                    </th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Parent</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($categories as $category) : ?>
                                    <tr>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" />
                                            </div>
                                        </td>
                                        <td><?= $category['c_id'] ?></td>
                                        <td><b><?= $category['c_name'] ?></b></td>
                                        <td><?= $category['c_slug'] ?></td>
                                        <td><?= $category['c_is_parent'] == 1 ? 'Yes' : 'No' ?></td>
                                        <td class="text-end">
                                            <div class="dropdown">
                                                <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">View detail</a>
                                                    <a class="dropdown-item" href="#">Edit info</a>
                                                    <a class="dropdown-item text-danger" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <!-- dropdown //end -->
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- .col// -->
            </div>
            <!-- .row // -->
        </div>
        <!-- card body .// -->
    </div>
    <!-- card .// -->
</section>
<!-- content-main end// -->

<?= $this->endSection() ?>