<?= $this->extend('template/default'); ?>

<?= $this->section('content') ?>

<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Order List</h2>
            <p>Here you can manager the order history list & can update them</p>
        </div>
        <div>
            <input type="text" placeholder="Search order ID" class="form-control bg-white" />
        </div>
    </div>
    <div class="card mb-4">
        <header class="card-header">
            <div class="row gx-3">
                <div class="col-lg-4 col-md-6 me-auto">
                    <input type="text" placeholder="Search..." class="form-control" />
                </div>
                <div class="col-lg-2 col-6 col-md-3">
                    <select class="form-select">
                        <option>Status</option>
                        <option>Active</option>
                        <option>Disabled</option>
                        <option>Show all</option>
                    </select>
                </div>
                <div class="col-lg-2 col-6 col-md-3">
                    <select class="form-select">
                        <option>Show 20</option>
                        <option>Show 30</option>
                        <option>Show 40</option>
                    </select>
                </div>
            </div>
        </header>
        <!-- card-header end// -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th scope="col">Product</th>
                            <th scope="col">Customer</th>
                            <th scope="col">Type</th>
                            <th scope="col">(Qty)Total</th>
                            <th scope="col">Status</th>
                            <th scope="col">Date</th>
                            <th scope="col" class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orders as $order) : ?>
                            <?php foreach ($order['order_details'] as $single_order) : ?>
                                <tr>
                                    <td>#<?= $order['order_bundle_id'] ?></td>
                                    <td><b><?= $single_order['product']['p_name'] ?></b></td>
                                    <td><b><?= $order['user']['u_first_name'] . ' ' . $order['user']['u_last_name'] ?></b></td>
                                    <td>
                                        <?php if ($order['order_type'] == '1') : ?>
                                            <span class="badge bg-info">COD</span>
                                        <?php else : ?>
                                            <span class="badge bg-secondary">Prepaid</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>(x<?= $single_order['oh_quantity'] ?>) <?= price($single_order['oh_total_price']) ?>/-</td>
                                    <td>
                                        <?php if ($single_order['oh_order_status'] == '1') : ?>
                                            <span class="badge rounded-pill alert-warning">Pending</span>
                                        <?php elseif ($single_order['oh_order_status'] == '2') : ?>
                                            <span class="badge rounded-pill alert-warning">Confirm</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>03.12.2020</td>
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
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
            <!-- table-responsive //end -->
        </div>
        <!-- card-body end// -->
    </div>
    <!-- card end// -->
    <div class="pagination-area mt-15 mb-50">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-start">
                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                <li class="page-item"><a class="page-link" href="#">02</a></li>
                <li class="page-item"><a class="page-link" href="#">03</a></li>
                <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">16</a></li>
                <li class="page-item">
                    <a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a>
                </li>
            </ul>
        </nav>
    </div>
</section>
<!-- content-main end// -->

<?= $this->endSection(); ?>