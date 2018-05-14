<?php get_header(); ?>

<!--<h2><?php echo get_bloginfo( 'description' ); ?></h2> -->

<?php
if( get_field('services')){
 $services = get_field('services');
}?>

<?php
if( get_field('title_of_service')){
 $titleofservice = get_field('title_of_service');
}?>

<?php
if( get_field('basic_package_text')){
 $basicpackagetext = get_field('basic_package_text');
}?>

<?php
if( get_field('minor_package_text')){
 $minorpackagetext = get_field('minor_package_text');
}?>

<?php
if( get_field('advanced_package_text')){
 $advancedpackagetext = get_field('advanced_package_text');
}?>



<div class="container">

      <h1 class="my-4">Services</h1>

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-12 mb-4">
          <div class="card">
            <h4 class="card-header"><?php echo $titleofservice;?></h4>
            <div class="card-body">
              <p class="card-text">
              
              <?php echo $services;?>
              </div>
            <!--<div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>-->
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Portfolio Section -->
      <h2>Dog Training Packages</h2>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-75">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Basic Package</a>
              </h4>
              <p class="card-text"><?php echo $basicpackagetext;?></p>
              <button type="button" class="btn btn-primary">Learn more</button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-75">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Minor Package</a>
              </h4>
              <p class="card-text"><?php echo $minorpackagetext;?></p>
              <button type="button" class="btn btn-primary">Learn more</button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-75">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Advanced Package</a>
              </h4>
              <p class="card-text"><?php echo $advancedpackagetext;?></p>
              <button type="button" class="btn btn-primary">Learn more</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Features Section -->
      <div class="row">
        <div class="col-lg-6">
          <h2>Modern Business Features</h2>
          <p>The Modern Business template by Start Bootstrap includes:</p>
          <ul>
            <li>
              <strong>Bootstrap v4</strong>
            </li>
            <li>jQuery</li>
            <li>Font Awesome</li>
            <li>Working contact form with validation</li>
            <li>Unstyled page elements for easy customization</li>
          </ul>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block btn-danger" href="#">Book a FREE demo</a>
        </div>
      </div>

    </div>
    <!-- /.container -->

    <?php get_footer(); ?>