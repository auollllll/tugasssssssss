
<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Fashion Greliaaa </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->
  </head>

  <body>
    
    <!-- Pre Header -->
    <div id="pre-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <span>Welcome! We are ready to provide the best service for you.</span>
          </div>
        </div>
      </div>
    </div>

    
 <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
  <p><a class="navbar-brand" href="#">
          <img src="assets/images/logogreliaa.png" alt="" style="width: 150px; height: auto;">
      </a> 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button></p>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item active"> <!-- Tambahkan "active" di sini -->
                  <a class="nav-link" href="index" style="padding: 0 15px;">Home</a>
              </li>
              {{-- <li class="nav-item">
                  <a class="nav-link" href="products" style="padding: 0 15px;">Products</a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link" href="user-products" style="padding: 0 15px;">Products</a>
            </li>
              <li class="nav-item">
                  <a class="nav-link" href="about" style="padding: 0 15px;">About Us</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="contact" style="padding: 0 15px;">Contact Us</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="login" style="padding: 0 15px;">Logout</a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link" href="login" style="padding: 0 15px;">Login</a>
          </li>
          </ul>
      </div>
  </div>
</nav>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
<div class="banner">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="caption">
          <h2>Greliaa - Fashion Shop for Kids</h2>
          <div class="line-dec"></div>
          <p>Welcome to Greliaa! Discover our collection of children’s fashion with <strong>trendy and comfortable outfits</strong> for every occasion. Designed with love and care, our shop brings style and joy to kids everywhere.
          <br><br>Explore the latest trends in kids' fashion. Follow us on <a rel="nofollow" href="https://www.facebook.com/tooplate/">Tooplate</a> for more updates and inspiration.</p>
          <div class="main-button">
            <a href="#">Shop Now!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Banner Ends Here -->


    <!-- Featured Starts Here -->
    <div class="featured-items">
      @extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome to the Fashion Store</h1>
        <a href="{{ route('products.index') }}" class="btn btn-primary">See All Products</a>
        
        <div class="row">
            @foreach ($products as $item)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top" alt="{{ $item->nama_produk }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nama_produk }}</h5>
                            <p class="card-text">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

    </div>
    <!-- Featred Ends Here -->
{{-- 
<!-- Promo Notification Form Starts Here -->
<div class="promo-form" style="background-color: #f7f9fc; padding: 40px; border-radius: 8px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="section-heading">
          <h2 style="color: #333; font-weight: bold;">Get Notification of Discounts and Best Offers!</h2>
          <p style="color: #666; font-size: 1.1em;">Enter your email to receive information about our latest discounts, special offers and newest collections.</p>
        </div>
      </div>
      <div class="col-md-8 offset-md-2">
        <div class="main-content">
          <form id="promo-notification" action="" method="get">
            <div class="row">
              <div class="col-md-9">
                <fieldset>
                  <input name="email" type="email" class="form-control" id="email" 
                  placeholder="Enter Your Email" required=""
                  style="padding: 12px; border-radius: 4px; border: 1px solid #ccc;">
                </fieldset>
              </div>
              <div class="col-md-3">
                <fieldset>
                  <button type="submit" id="form-submit" class="button" 
                  style="background-color: #ff6347; color: #fff; padding: 12px 20px; border: none; border-radius: 4px; width: 100%;">
                  Check Discount
                  </button>
                </fieldset>
              </div>
            </div>
          </form>
          <p class="privacy-note mt-3" style="color: #999; font-size: 0.9em;">
            By providing your email, you will receive regular updates about our exclusive offers.<a href="#" style="color: #ff6347; text-decoration: underline;">Privacy Policy</a>.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Promo Notification Form Ends Here --> --}}



    
    <!-- Footer Starts Here -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-menu">
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">How It Works ?</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="social-icons">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Ends Here -->


    <!-- Sub Footer Starts Here -->
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright-text">
              <p>Copyright &copy; 2024 Company Name 
                
                - Design: <a rel="nofollow" href="https://www.facebook.com/tooplate">FashionGreliaa</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sub Footer Ends Here -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
