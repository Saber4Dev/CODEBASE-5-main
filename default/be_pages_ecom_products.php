<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_sidebar_dark = true;
$cb->l_header_style = 'dark-glass';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo26@2x.jpg');">
  <div class="bg-black-75">
    <div class="content content-top content-full text-center">
      <div class="py-3">
        <h1 class="h2 fw-bold text-white mb-2">Products</h1>
        <h2 class="h4 fw-normal text-white-75 mb-0">You currently have 4,360 in the catalog!</h2>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Breadcrumb -->
<div class="bg-body-light border-bottom">
  <div class="content py-1 text-center">
    <nav class="breadcrumb bg-body-light py-2 mb-0">
      <a class="breadcrumb-item" href="be_pages_ecom_dashboard.php">e-Commerce</a>
      <span class="breadcrumb-item active">Products</span>
    </nav>
  </div>
</div>
<!-- END Breadcrumb -->

<!-- Page Content -->
<div class="content">
  <!-- Overview -->
  <h2 class="content-heading">Overview</h2>
  <div class="row">
    <!-- All Products -->
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full block-sticky-options">
          <div class="block-options">
            <div class="block-options-item">
              <i class="far fa-circle fa-2x text-info-light"></i>
            </div>
          </div>
          <div class="py-3 text-center">
            <div class="fs-2 fw-bold mb-0 text-info">3580</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">All Products</div>
          </div>
        </div>
      </a>
    </div>
    <!-- END All Products -->

    <!-- Top Sellers -->
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full block-sticky-options">
          <div class="block-options">
            <div class="block-options-item">
              <i class="fa fa-star fa-2x text-warning-light"></i>
            </div>
          </div>
          <div class="py-3 text-center">
            <div class="fs-2 fw-bold mb-0 text-warning">95</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">Top Sellers</div>
          </div>
        </div>
      </a>
    </div>
    <!-- END Top Sellers -->

    <!-- Out of Stock -->
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full block-sticky-options">
          <div class="block-options">
            <div class="block-options-item">
              <i class="fa fa-exclamation-triangle fa-2x text-danger-light"></i>
            </div>
          </div>
          <div class="py-3 text-center">
            <div class="fs-2 fw-bold mb-0 text-danger">30</div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">Out of Stock</div>
          </div>
        </div>
      </a>
    </div>
    <!-- END Out of Stock -->

    <!-- Add Product -->
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow" href="be_pages_ecom_product_edit.php">
        <div class="block-content block-content-full block-sticky-options">
          <div class="block-options">
            <div class="block-options-item">
              <i class="fa fa-archive fa-2x text-success-light"></i>
            </div>
          </div>
          <div class="py-3 text-center">
            <div class="fs-2 fw-bold mb-0 text-success">
              <i class="fa fa-plus"></i>
            </div>
            <div class="fs-sm fw-semibold text-uppercase text-muted">New Product</div>
          </div>
        </div>
      </a>
    </div>
    <!-- END Add Product -->
  </div>
  <!-- END Overview -->

  <!-- Products -->
  <div class="content-heading d-flex justify-content-between align-items-center">
    <span>
      Products <small>(3580)</small>
    </span>
    <div class="space-x-1">
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-sm btn-alt-secondary" id="ecom-products-category-drop" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span>Category</span>
          <i class="fa fa-angle-down opacity-50 ms-1"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="ecom-products-category-drop">
          <a class="dropdown-item" href="javascript:void(0)">
            <i class="fa fa-fw fa-gamepad opacity-50 me-1"></i> Video Games
          </a>
          <a class="dropdown-item" href="javascript:void(0)">
            <i class="fa fa-fw fa-desktop opacity-50 me-1"></i> Electronics
          </a>
          <a class="dropdown-item" href="javascript:void(0)">
            <i class="fa fa-fw fa-mobile-alt opacity-50 me-1"></i> Mobile Phones
          </a>
          <a class="dropdown-item" href="javascript:void(0)">
            <i class="fa fa-fw fa-home opacity-50 me-1"></i> House
          </a>
          <a class="dropdown-item" href="javascript:void(0)">
            <i class="far fa-fw fa-futbol opacity-50 me-1"></i> Hobby
          </a>
          <a class="dropdown-item" href="javascript:void(0)">
            <i class="fa fa-fw fa-car opacity-50 me-1"></i> Auto - Moto
          </a>
          <a class="dropdown-item" href="javascript:void(0)">
            <i class="fa fa-fw fa-users opacity-50 me-1"></i> Kids
          </a>
          <a class="dropdown-item" href="javascript:void(0)">
            <i class="fa fa-fw fa-heartbeat opacity-50 me-1"></i> Health
          </a>
          <a class="dropdown-item" href="javascript:void(0)">
            <i class="fab fa-fw fa-black-tie opacity-50 me-1"></i> Fashion
          </a>
        </div>
      </div>
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-sm btn-alt-secondary" id="ecom-products-filter-drop" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span>All</span>
          <i class="fa fa-angle-down opacity-50 ms-1"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="ecom-products-filter-drop">
          <a class="dropdown-item" href="javascript:void(0)">
            <i class="fa fa-fw fa-star text-warning me-1"></i> Top Sellers
          </a>
          <a class="dropdown-item" href="javascript:void(0)">
            <i class="fa fa-fw fa-exclamation-triangle text-danger me-1"></i> Out of Stock
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item active" href="javascript:void(0)">
            <i class="far fa-fw fa-circle text-info opacity-50 me-1"></i> All
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-content bg-body-light">
      <!-- Search -->
      <form action="be_pages_ecom_products.php" method="POST" onsubmit="return false;">
        <div class="mb-4">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search products..">
            <button type="submit" class="btn btn-primary">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </form>
      <!-- END Search -->
    </div>
    <div class="block-content block-content-full">
      <!-- Products Table -->
      <table class="table table-borderless table-striped">
        <thead>
          <tr>
            <th style="width: 100px;">ID</th>
            <th class="d-none d-sm-table-cell">Status</th>
            <th class="d-none d-sm-table-cell">Submitted</th>
            <th>Product</th>
            <th class="d-none d-md-table-cell">Category</th>
            <th class="text-end">Value</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i = 1; $i < 16; $i++) { ?>
            <tr>
              <td>
                <a class="fw-semibold" href="be_pages_ecom_product_edit.php">PID.<?php echo 425 - $i; ?></a>
              </td>
              <td class="d-none d-sm-table-cell">
                <?php if (rand(0, 1) == 1) { ?>
                  <span class="badge bg-success">Available</span>
                <?php } else { ?>
                  <span class="badge bg-danger">Out of Stock</span>
                <?php } ?>
              </td>
              <td class="d-none d-sm-table-cell">
                2017/09/<?php echo 28 - $i; ?>
              </td>
              <td>
                <a href="be_pages_ecom_product_edit.php">Product #<?php echo 25 - $i; ?></a>
              </td>
              <td class="d-none d-md-table-cell">
                <?php
                // Category seed data
                $be_ecom_cat = array(
                    '0' => 'Video Games',
                    '1' => 'Electronics',
                    '2' => 'Mobile Phones',
                    '3' => 'House',
                    '4' => 'Hobby',
                    '5' => 'Auto - Moto',
                    '6' => 'Kids',
                    '7' => 'Health',
                    '8' => 'Fashion'
                );
                ?>
                <a href="be_pages_ecom_products.php"><?php echo $be_ecom_cat[rand(0, 8)]; ?></a>
              </td>
              <td class="text-end">$<?php echo rand(10, 99); ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <!-- END Products Table -->

      <!-- Navigation -->
      <nav aria-label="Products navigation">
        <ul class="pagination justify-content-end mb-0">
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)" aria-label="Previous">
              <span aria-hidden="true">
                <i class="fa fa-angle-left"></i>
              </span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li class="page-item active">
            <a class="page-link" href="javascript:void(0)">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">2</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="javascript:void(0)">...</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">39</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">40</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)" aria-label="Next">
              <span aria-hidden="true">
                <i class="fa fa-angle-right"></i>
              </span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- END Navigation -->
    </div>
  </div>
  <!-- END Products -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>