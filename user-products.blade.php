
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Fashion Greliaaa</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
</head>

<body>

    <!-- Pre Header -->
    <div id="pre-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>Our products are made with guaranteed quality. Find what you need here!</span>
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
                    <li class="nav-item">
                        <a class="nav-link" href="index" style="padding: 0 15px;">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="user-products" style="padding: 0 15px;">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about" style="padding: 0 15px;">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact" style="padding: 0 15px;">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login" style="padding: 0 15px;">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Page Content -->
    <div class="featured-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>Available Products</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- Products Container -->
<div class="container">
    <div class="row">
        @foreach ($products as $item)
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 100%; border: 1px solid #ddd; border-radius: 8px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top" alt="Product Image" style="width: 100%; height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->nama_produk }}</h5>
                        <p class="card-text">${{ number_format($item->harga, 2) }}</p>
                        <p class="card-text">{{ $item->deskripsi }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

    <!-- Footer -->
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

    <!-- Sub Footer -->
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2024 Fashion Greliaa - Design: <a rel="nofollow" href="https://www.facebook.com/tooplate">FashionGreliaa</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>

</body>

</html>
