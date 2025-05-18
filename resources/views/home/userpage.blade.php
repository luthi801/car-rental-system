<!DOCTYPE html>
<html lang="en">

<head>
    <title>DriveXpress</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="home/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="home/css/animate.css">
    <link rel="stylesheet" href="home/css/owl.carousel.min.css">
    <link rel="stylesheet" href="home/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="home/css/magnific-popup.css">
    <link rel="stylesheet" href="home/css/aos.css">
    <link rel="stylesheet" href="home/css/ionicons.min.css">
    <link rel="stylesheet" href="home/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="home/css/jquery.timepicker.css">
    <link rel="stylesheet" href="home/css/flaticon.css">
    <link rel="stylesheet" href="home/css/icomoon.css">
    <link rel="stylesheet" href="home/css/style.css">
</head>

<body>
    <!-- start nav -->
    @include('home.header')
    <!-- END nav -->

    @include('home.slider')

    <!-- start vehicle display -->
    @include('home.product')
    <!-- end vehicle display -->

    <!-- available categories -->
    @include('home.category')

    <!-- recruitment option -->
    <section class="ftco-section ftco-intro position-relative" style="background-image: url(home/images/bg_3.jpg);">
        <!-- Animated Background Shapes -->
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
        
        <div class="overlay bg-gradient"></div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-7 heading-section heading-section-white ftco-animate">
                    <span class="subheading text-white">Join Our Network</span>
                    <h2 class="mb-4">Become a DriveXpress Partner</h2>
                    <p class="mb-4">Join our growing network of car rental partners and start earning. We provide the platform, you provide the wheels.</p>
                    <div class="partner-benefits mb-4">
                        <div class="benefit-item">
                            <i class="fas fa-money-bill-wave"></i>
                            <span>Competitive Earnings</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-chart-line"></i>
                            <span>Growing Market</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-shield-alt"></i>
                            <span>Secure Platform</span>
                        </div>
                    </div>
                    <a href="{{url('/vendorsignup')}}" class="btn btn-primary btn-lg">
                        Become A Partner
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- stats display -->
    @php
    $proCount = $product_data->count();
    $cusCount = $cus_data->count();
    $vendCount = $vend_data->count();
    @endphp

    <section class="ftco-counter ftco-section img position-relative" id="section-counter">
        <div class="overlay bg-light-gradient"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="text">
                                <strong class="number gradient-text" data-number="2">0</strong>
                                <span>Years<br>Experience</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-car"></i>
                            </div>
                            <div class="text">
                                <strong class="number gradient-text" data-number="{{ $proCount }}">0</strong>
                                <span>Total<br>Cars</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-smile"></i>
                            </div>
                            <div class="text">
                                <strong class="number gradient-text" data-number="{{ $cusCount }}">0</strong>
                                <span>Happy<br>Customers</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="text">
                                <strong class="number gradient-text" data-number="{{ $vendCount }}">0</strong>
                                <span>Trusted<br>Partners</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    @include('home.footer')

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>

    <script src="home/js/jquery.min.js"></script>
    <script src="home/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="home/js/popper.min.js"></script>
    <script src="home/js/bootstrap.min.js"></script>
    <script src="home/js/jquery.easing.1.3.js"></script>
    <script src="home/js/jquery.waypoints.min.js"></script>
    <script src="home/js/jquery.stellar.min.js"></script>
    <script src="home/js/owl.carousel.min.js"></script>
    <script src="home/js/jquery.magnific-popup.min.js"></script>
    <script src="home/js/aos.js"></script>
    <script src="home/js/jquery.animateNumber.min.js"></script>
    <script src="home/js/bootstrap-datepicker.js"></script>
    <script src="home/js/jquery.timepicker.min.js"></script>
    <script src="home/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="home/js/google-map.js"></script>
    <script src="home/js/main.js"></script>

    <style>
    /* Recruitment Section Styling */
    .ftco-intro {
        padding: 100px 0;
        overflow: hidden;
    }

    .bg-gradient {
        background: linear-gradient(45deg, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6));
    }

    .shape {
        position: absolute;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(5px);
        border-radius: 50%;
        animation: float 8s infinite;
    }

    .shape-1 {
        width: 100px;
        height: 100px;
        top: 20%;
        left: 10%;
        animation-delay: 0s;
    }

    .shape-2 {
        width: 150px;
        height: 150px;
        top: 60%;
        right: 10%;
        animation-delay: 2s;
    }

    .shape-3 {
        width: 70px;
        height: 70px;
        bottom: 20%;
        left: 20%;
        animation-delay: 4s;
    }

    @keyframes float {
        0% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(180deg); }
        100% { transform: translateY(0) rotate(360deg); }
    }

    .subheading {
        font-size: 1.2rem;
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 1rem;
    }

    .partner-benefits {
        display: flex;
        gap: 2rem;
        margin-top: 2rem;
    }

    .benefit-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: white;
    }

    .benefit-item i {
        color: #00ff6e;
        font-size: 1.2rem;
    }

    /* Stats Section Styling */
    .ftco-counter {
        padding: 80px 0;
        background: #f8f9fa;
    }

    .bg-light-gradient {
        background: linear-gradient(45deg, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.95));
    }

    .stat-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        text-align: center;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }

    .stat-icon {
        width: 60px;
        height: 60px;
        margin: 0 auto 20px;
        background: linear-gradient(45deg, rgba(0, 210, 91, 0.1), rgba(0, 255, 110, 0.1));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .stat-icon i {
        font-size: 1.5rem;
        color: #00d25b;
    }

    .gradient-text {
        background: linear-gradient(45deg, #00d25b, #00ff6e);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 2.5rem;
        font-weight: 700;
        display: block;
        margin-bottom: 5px;
    }

    .stat-card .text span {
        color: #666;
        font-size: 1rem;
        font-weight: 500;
    }

    /* Button Styling */
    .btn-primary {
        background: linear-gradient(45deg, #00d25b, #00ff6e);
        border: none;
        border-radius: 30px;
        padding: 12px 30px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 210, 91, 0.4);
    }
    </style>
</body>

</html>