<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Jonny Be Good Dog Training Service</title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
  <![endif]-->
  
  <?php wp_head(); ?>
</head>

<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
<div class="container">
  <a class="navbar-brand" href="index.html"><?php echo get_bloginfo( 'name' ); ?></a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="about.html">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.html">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Portfolio
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
          <a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
          <a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
          <a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
          <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
          <a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Blog
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
          <a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>
          <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
          <a class="dropdown-item" href="blog-post.html">Blog Post</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Other Pages
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
          <a class="dropdown-item" href="full-width.html">Full Width Page</a>
          <a class="dropdown-item" href="sidebar.html">Sidebar Page</a>
          <a class="dropdown-item" href="faq.html">FAQ</a>
          <a class="dropdown-item" href="404.html">404</a>
          <a class="dropdown-item" href="pricing.html">Pricing Table</a>
        </div>
      </li>
    </ul>
  </div>
</div>
</nav>

<header>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <!-- Slide One - Set the background image for this slide in the line below -->
    <div class="carousel-item active" style="background-image: url('wp-content/uploads/img1-1900x1069.jpg')">
      <div class="carousel-caption d-none d-md-block">
        <a class="btn btn-lg btn-secondary btn-lg btn-danger" href="#">Book a FREE demo</a>
      </div>
    </div>
    <!-- Slide Two - Set the background image for this slide in the line below -->
    <div class="carousel-item" style="background-image: url('wp-content/uploads/img2-768x437.jpg')">
      <div class="carousel-caption d-none d-md-block">
        <h3>Second Slide</h3>
        <p>This is a description for the second slide.</p>
      </div>
    </div>
    <!-- Slide Three - Set the background image for this slide in the line below -->
    <div class="carousel-item" style="background-image: url('wp-content/uploads/img3-768x437.jpg')">
      <div class="carousel-caption d-none d-md-block">
        <h3>Third Slide</h3>
        <p>This is a description for the third slide.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</header>
</body>