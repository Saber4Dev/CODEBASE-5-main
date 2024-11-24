<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Page specific configuration
$cb->l_header_style = '';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<!-- User Info Section -->
<div class="bg-image bg-image-bottom" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/profile-cover.jpg');">
  <div class="bg-primary-dark-op py-4">
    <div class="content content-full text-center">
      <!-- User Avatar -->
      <div class="mb-3">
        <a class="img-link" href="javascript:void(0)">
          <?php $cb->get_avatar(15, '', 96, 'img-thumb'); ?>
        </a>
      </div>

      <!-- User Info -->
      <h1 class="h3 text-white fw-bold mb-2">
        <?php echo $user->name; ?>
      </h1>
      <h2 class="h5 fw-medium text-white-75">
        <?php echo $user->role; ?> <a class="text-primary-light" href="javascript:void(0)">@<?php echo $user->username; ?></a>
      </h2>

      <!-- Action Buttons -->
      <div class="mt-3">
        <button type="button" class="btn btn-primary me-1">
          <i class="fa fa-fw fa-envelope opacity-50 me-1"></i> Message
        </button>
        <a class="btn btn-alt-primary" href="profile/edit">
          <i class="fa fa-fw fa-pencil-alt opacity-50 me-1"></i> Edit Profile
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Main Content -->
<div class="content">
  <!-- Stats -->
  <div class="row items-push text-center mb-4">
    <div class="col-6 col-md-3">
      <div class="fs-sm fw-semibold text-muted text-uppercase">Projects</div>
      <a class="link-fx fs-3" href="javascript:void(0)"><?php echo $user->projects_count; ?></a>
    </div>
    <div class="col-6 col-md-3">
      <div class="fs-sm fw-semibold text-muted text-uppercase">Followers</div>
      <a class="link-fx fs-3" href="javascript:void(0)"><?php echo $user->followers_count; ?></a>
    </div>
    <div class="col-6 col-md-3">
      <div class="fs-sm fw-semibold text-muted text-uppercase">Following</div>
      <a class="link-fx fs-3" href="javascript:void(0)"><?php echo $user->following_count; ?></a>
    </div>
    <div class="col-6 col-md-3">
      <div class="fs-sm fw-semibold text-muted text-uppercase">Rating</div>
      <div class="text-warning fs-3">
        <i class="fa fa-fw fa-star"></i> <?php echo $user->rating; ?>
      </div>
    </div>
  </div>

  <!-- Projects Section -->
  <h2 class="content-heading d-flex justify-content-between align-items-center">
    <span class="fw-semibold"><i class="si si-briefcase me-1"></i> Recent Projects</span>
    <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary">View All</button>
  </h2>
</div>

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?> 