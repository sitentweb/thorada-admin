<?= $this->extend('template/default') ?>

<?= $this->section('content') ?>
<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Dashboard</h2>
            <p>Whole data about your business here</p>
        </div>
        <div>
            <a href="<?= base_url('/product/list') ?>" class="btn btn-primary"><i class="text-muted material-icons md-qr_code"></i>Products</a>
            <a href="<?= base_url('/category/') ?>" class="btn btn-warning"><i class="text-white material-icons md-post_add"></i>Categories</a>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="card card-body mb-4">
                <article class="icontext">
                    <span class="icon icon-sm rounded-circle bg-primary-light"><i class="text-primary material-icons md-shopping_basket"></i></span>
                    <div class="text">
                        <span><?= $analytics['product']['total'] ?></span>
                        <h6 class="mb-1 card-title"> Total Products</h6>

                        <span class="text-sm"> Database Products </span>
                    </div>
                </article>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-body mb-4">
                <article class="icontext">
                    <span class="icon icon-sm rounded-circle bg-success-light"><i class="text-success material-icons md-local_shipping"></i></span>
                    <div class="text">
                        <span><?= $analytics['product']['active'] ?></span>
                        <h6 class="mb-1 card-title">Active Products</h6>
                        <span class="text-sm"> Available Products </span>
                    </div>
                </article>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-body mb-4">
                <article class="icontext">
                    <span class="icon icon-sm rounded-circle bg-primary-light"><i class="text-primary material-icons md-qr_code"></i></span>
                    <div class="text">
                        <span><?= $analytics['category']['total'] ?></span>
                        <h6 class="mb-1 card-title"> Total Categories</h6>

                        <span class="text-sm"> Database Categories </span>
                    </div>
                </article>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-body mb-4">
                <article class="icontext">
                    <span class="icon icon-sm rounded-circle bg-info-light"><i class="text-info material-icons md-shopping_basket"></i></span>
                    <div class="text">
                        <span><?= $analytics['product']['special_today'] ?></span>
                        <h6 class="mb-1 card-title">Special Today</h6>
                        <span class="text-sm"> Today's Specials </span>
                    </div>
                </article>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8 col-lg-12">
            <div class="card mb-4">
                <article class="card-body">
                    <h5 class="card-title">Chart statistics (<?= date('Y') ?>)</h5>
                    <canvas id="myChart" height="120px"></canvas>
                </article>
            </div>

        </div>
        <div class="col-xl-4 col-lg-12">
            <div class="card mb-4">
                <article class="card-body">
                    <h5 class="card-title">Bar statistics (<?= date('Y') ?>)</h5>
                    <canvas id="myChart2" height="260px"></canvas>
                </article>
            </div>
        </div>
    </div>
    <div class="card mb-4">
        <header class="card-header">
            <h4 class="card-title">Latest orders</h4>
            <div class="row align-items-center">
                <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                    <div class="custom_select">
                        <select class="form-select select-nice">
                            <option selected>All Categories</option>
                            <option>Women's Clothing</option>
                            <option>Men's Clothing</option>
                            <option>Cellphones</option>
                            <option>Computer & Office</option>
                            <option>Consumer Electronics</option>
                            <option>Jewelry & Accessories</option>
                            <option>Home & Garden</option>
                            <option>Luggage & Bags</option>
                            <option>Shoes</option>
                            <option>Mother & Kids</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <input type="date" value="02.05.2021" class="form-control" />
                </div>
                <div class="col-md-2 col-6">
                    <div class="custom_select">
                        <select class="form-select select-nice">
                            <option selected>Status</option>
                            <option>All</option>
                            <option>Paid</option>
                            <option>Chargeback</option>
                            <option>Refund</option>
                        </select>
                    </div>
                </div>
            </div>
        </header>
        <div class="card-body">
            <div class="table-responsive">
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" class="text-center">
                                    <div class="form-check align-middle">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck01" />
                                        <label class="form-check-label" for="transactionCheck01"></label>
                                    </div>
                                </th>
                                <th class="align-middle" scope="col">Order ID</th>
                                <th class="align-middle" scope="col">Billing Name</th>
                                <th class="align-middle" scope="col">Date</th>
                                <th class="align-middle" scope="col">Total</th>
                                <th class="align-middle" scope="col">Payment Status</th>
                                <th class="align-middle" scope="col">Payment Method</th>
                                <th class="align-middle" scope="col">View Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck02" />
                                        <label class="form-check-label" for="transactionCheck02"></label>
                                    </div>
                                </td>
                                <td><a href="#" class="fw-bold">#SK2540</a></td>
                                <td>Neal Matthews</td>
                                <td>07 Oct, 2021</td>
                                <td>$400</td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success">Paid</span>
                                </td>
                                <td><i class="material-icons md-payment font-xxl text-muted mr-5"></i> Mastercard</td>
                                <td>
                                    <a href="#" class="btn btn-xs"> View details</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck03" />
                                        <label class="form-check-label" for="transactionCheck03"></label>
                                    </div>
                                </td>
                                <td><a href="#" class="fw-bold">#SK2541</a></td>
                                <td>Jamal Burnett</td>
                                <td>07 Oct, 2021</td>
                                <td>$380</td>
                                <td>
                                    <span class="badge badge-pill badge-soft-danger">Chargeback</span>
                                </td>
                                <td><i class="material-icons md-payment font-xxl text-muted mr-5"></i> Visa</td>
                                <td>
                                    <a href="#" class="btn btn-xs"> View details</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck04" />
                                        <label class="form-check-label" for="transactionCheck04"></label>
                                    </div>
                                </td>
                                <td><a href="#" class="fw-bold">#SK2542</a></td>
                                <td>Juan Mitchell</td>
                                <td>06 Oct, 2021</td>
                                <td>$384</td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success">Paid</span>
                                </td>
                                <td><i class="material-icons md-payment font-xxl text-muted mr-5"></i> Paypal</td>
                                <td>
                                    <a href="#" class="btn btn-xs"> View details</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck05" />
                                        <label class="form-check-label" for="transactionCheck05"></label>
                                    </div>
                                </td>
                                <td><a href="#" class="fw-bold">#SK2543</a></td>
                                <td>Barry Dick</td>
                                <td>05 Oct, 2021</td>
                                <td>$412</td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success">Paid</span>
                                </td>
                                <td><i class="material-icons md-payment font-xxl text-muted mr-5"></i> Mastercard</td>
                                <td>
                                    <a href="#" class="btn btn-xs"> View details</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck06" />
                                        <label class="form-check-label" for="transactionCheck06"></label>
                                    </div>
                                </td>
                                <td><a href="#" class="fw-bold">#SK2544</a></td>
                                <td>Ronald Taylor</td>
                                <td>04 Oct, 2021</td>
                                <td>$404</td>
                                <td>
                                    <span class="badge badge-pill badge-soft-warning">Refund</span>
                                </td>
                                <td><i class="material-icons md-payment font-xxl text-muted mr-5"></i> Visa</td>
                                <td>
                                    <a href="#" class="btn btn-xs"> View details</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck07" />
                                        <label class="form-check-label" for="transactionCheck07"></label>
                                    </div>
                                </td>
                                <td><a href="#" class="fw-bold">#SK2545</a></td>
                                <td>Jacob Hunter</td>
                                <td>04 Oct, 2021</td>
                                <td>$392</td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success">Paid</span>
                                </td>
                                <td><i class="material-icons md-payment font-xxl text-muted mr-5"></i> Paypal</td>
                                <td>
                                    <a href="#" class="btn btn-xs"> View details</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- table-responsive end// -->
        </div>
    </div>
</section>

<script>
    /*Sale statistics Chart*/
    function DashboardChartRender() {
        var aData = [];
        aData = <?php echo json_encode($analytics['product']['analytics']); ?>;

        console.log(aData);
        var months = [];
        var productData = [];


        var monthLabel = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

        aData.forEach(pr => {
            months.push(pr.p_month);
            productData.push(pr.total_products);
        });

        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: monthLabel,
                datasets: [{
                        label: 'Products',
                        tension: 0.3,
                        fill: true,
                        backgroundColor: 'rgba(44, 120, 220, 0.2)',
                        borderColor: 'rgba(44, 120, 220)',
                        data: productData.reverse()
                    },
                    {
                        label: 'Categories',
                        tension: 0.3,
                        fill: true,
                        backgroundColor: 'rgba(4, 209, 130, 0.2)',
                        borderColor: 'rgb(4, 209, 130)',
                        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                    },
                    {
                        label: 'Sales',
                        tension: 0.3,
                        fill: true,
                        backgroundColor: 'rgba(380, 200, 230, 0.2)',
                        borderColor: 'rgb(380, 200, 230)',
                        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                    }

                ]
            },
            options: {
                plugins: {
                    legend: {
                        labels: {
                            usePointStyle: true,
                        },
                    }
                }
            }
        });

        var ctx2 = document.getElementById('myChart2').getContext('2d');
        var chart2 = new Chart(ctx2, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: monthLabel,
                datasets: [{
                        label: 'Products',
                        tension: 0.3,
                        fill: true,
                        backgroundColor: 'rgba(44, 120, 220, 0.2)',
                        borderColor: 'rgba(44, 120, 220)',
                        data: productData.reverse()
                    },
                    {
                        label: 'Categories',
                        tension: 0.3,
                        fill: true,
                        backgroundColor: 'rgba(4, 209, 130, 0.2)',
                        borderColor: 'rgb(4, 209, 130)',
                        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                    },
                    {
                        label: 'Sales',
                        tension: 0.3,
                        fill: true,
                        backgroundColor: 'rgba(380, 200, 230, 0.2)',
                        borderColor: 'rgb(380, 200, 230)',
                        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                    }

                ]
            },
            options: {
                plugins: {
                    legend: {
                        labels: {
                            usePointStyle: true,
                        },
                    }
                }
            }
        });
    }

    DashboardChartRender();
</script>
<?= $this->endSection() ?>