<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_header_fixed = false;
$cb->l_header_style = 'light-glass';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Header Section -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo21@2x.jpg');">
  <div class="bg-white-90">
    <div class="content content-full content-top">
      <h1 class="py-5 text-black-75 text-center">Welcome Admin!</h1>
    </div>
  </div>
</div>
<!-- END Header Section -->

<!-- Page Content -->
<div class="content">
  <h2 class="content-heading">Static Header - Glass</h2>
  <p>This is the glass style for the Header. It is transparent and its position is absolute, so it will overlay the top content of main content. It is perfect if you would like to add a light background color or light image at the top of your page.</p>

  <!-- Dummy content -->
  <h2 class="content-heading">Dummy Content <small>To preview Header behaviour on scroll</small></h2>
  <div class="block block-rounded">
    <div class="block-content">
      <p class="text-center py-7">...</p>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-content">
      <p class="text-center py-7">...</p>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-content">
      <p class="text-center py-7">...</p>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-content">
      <p class="text-center py-7">...</p>
    </div>
  </div>
  <!-- END Dummy content -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>