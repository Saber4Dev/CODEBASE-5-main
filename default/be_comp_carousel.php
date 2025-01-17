<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<!-- Bootstrap Carousel (data-bs-ride="carousel" is auto initiliazed through Bootstrap JS) -->
<!-- For advanced Carousel usage you can check out https://getbootstrap.com/docs/5.2/components/carousel/ -->
<div class="content">
  <h2 class="content-heading">Carousel</h2>
  <div class="row">
    <div class="col-md-6">
      <!-- Slides Only -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Slides Only</h3>
        </div>
        <div class="block-content block-content-full">
          <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-interval="2000" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?php echo $cb->assets_folder; ?>/media/photos/photo1.jpg" class="d-block w-100" alt="Carousel Image 1">
              </div>
              <div class="carousel-item">
                <img src="<?php echo $cb->assets_folder; ?>/media/photos/photo2.jpg" class="d-block w-100" alt="Carousel Image 2">
              </div>
              <div class="carousel-item">
                <img src="<?php echo $cb->assets_folder; ?>/media/photos/photo3.jpg" class="d-block w-100" alt="Carousel Image 3">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Slides Only -->
    </div>
    <div class="col-md-6">
      <!-- With Controls -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">With Controls</h3>
        </div>
        <div class="block-content block-content-full">
          <div id="carouselExampleControls" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?php echo $cb->assets_folder; ?>/media/photos/photo4.jpg" class="d-block w-100" alt="Carousel Image 1">
              </div>
              <div class="carousel-item">
                <img src="<?php echo $cb->assets_folder; ?>/media/photos/photo5.jpg" class="d-block w-100" alt="Carousel Image 2">
              </div>
              <div class="carousel-item">
                <img src="<?php echo $cb->assets_folder; ?>/media/photos/photo6.jpg" class="d-block w-100" alt="Carousel Image 3">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
      <!-- END With Controls -->
    </div>
    <div class="col-md-6">
      <!-- With Indicators -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">With Indicators</h3>
        </div>
        <div class="block-content block-content-full">
          <div id="carouselExampleIndicators" class="carousel slide carousel-fade">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?php echo $cb->assets_folder; ?>/media/photos/photo7.jpg" class="d-block w-100" alt="Carousel Image 1">
              </div>
              <div class="carousel-item">
                <img src="<?php echo $cb->assets_folder; ?>/media/photos/photo8.jpg" class="d-block w-100" alt="Carousel Image 1">
              </div>
              <div class="carousel-item">
                <img src="<?php echo $cb->assets_folder; ?>/media/photos/photo9.jpg" class="d-block w-100" alt="Carousel Image 1">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
      <!-- END With Indicators -->
    </div>
    <div class="col-md-6">
      <!-- With Captions -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">With Captions</h3>
        </div>
        <div class="block-content block-content-full">
          <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?php echo $cb->assets_folder; ?>/media/photos/photo14.jpg" class="d-block w-100" alt="Carousel Image 1">
                <div class="carousel-caption d-none d-md-block bg-black-50 rounded-3 px-3">
                  <h5 class="h3 mb-2">
                    Cities
                  </h5>
                  <p class="mb-0">
                    Beautiful Wallpapers
                  </p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="<?php echo $cb->assets_folder; ?>/media/photos/photo21.jpg" class="d-block w-100" alt="Carousel Image 2">
                <div class="carousel-caption d-none d-md-block bg-black-50 rounded-3 px-3">
                  <h5 class="h3 mb-2">
                    Office
                  </h5>
                  <p class="mb-0">
                    Remove Working
                  </p>
                </div>
              </div>
              <div class="carousel-item">
              <img src="<?php echo $cb->assets_folder; ?>/media/photos/photo19.jpg" class="d-block w-100" alt="Carousel Image 3">
                <div class="carousel-caption d-none d-md-block bg-black-50 rounded-3 px-3">
                  <h5 class="h3 mb-2">
                    Mountains
                  </h5>
                  <p class="mb-0">
                    Inspiring Hikes
                  </p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
      <!-- END With Captions -->
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>