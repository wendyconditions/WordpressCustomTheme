<?php get_header(); ?>

<?php
if (get_field('services')) {
    $services = get_field('services');
}?>


<?php
if (get_field('title_of_service')) {
    $titleofservice = get_field('title_of_service');
}?>

<?php
if (get_field('basic_package_text')) {
    $basicpackagetext = get_field('basic_package_text');
}?>

<?php
if (get_field('minor_package_text')) {
    $minorpackagetext = get_field('minor_package_text');
}?>

<?php
if (get_field('advanced_package_text')) {
    $advancedpackagetext = get_field('advanced_package_text');
}?>



<div class="container">
      <h2 class="my-4">Services</h2>
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

      <div class="row mb-4">
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
      <div class="row mb-4">
        <div class="col-lg-6">
          <h2>Currently booking appointments</h2>
          <p>Jonny Be Good Dog Training currently offers training in the following cities:</p>
          <ul>
            <li>
              <strong>Phoenix, Arizona</strong>
            </li>
            <li>Tempe, Arizona</li>
            <li>Tucson, Arizona</li>
            <li>Mesa, Arizona</li>
          </ul>
          <p>Please contact us for questions regarding training, boarding, or custom training plans. We serve the entire Phoenix area within a 100 miles radius. </p>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
        </div>
      </div>
      <!-- /.row -->

      
      <div class="row">
        <div class="col-lg-12 mb-4">
        <h2 class="my-4">Testimonials</h2>
        <div class="col-lg-12 col-sm-12">
      
        <?php if (is_active_sidebar('wendy-testimonial-widgets')) : ?>
    <div id="widget-area" class="chw-widget-area widget-area" role="complementary">
    <?php dynamic_sidebar('wendy-testimonial-widgets'); ?>
    </div>
      <?php endif; ?>
      <br>
      <a class="btn btn-lg btn-secondary float-left btn-danger" href="https://www.yelp.com/biz/jonny-be-good-dog-training-service-phoenix" target="_blank">More Reviews...</a>  
           </div>
        </div>
      </div>


      <hr>

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
          <p>Follow @JonnyBeGoodDogTraining on social media</p>
          <p>
          <a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
          <a href="#"><i class="fa fa-2x fa-instagram"></i></a>
          <a href="#"><i class="fa fa-2x fa-youtube-square"></i></a>
          </p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block btn-danger" href="#">Book a FREE demo</a>
        </div>
      </div>

    </div>
    <!-- /.container -->

    <?php get_footer(); ?>