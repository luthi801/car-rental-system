<!-- Hero Section with Animated Background -->
<div class="hero-wrap ftco-degree-bg position-relative" style="background-image: url('home/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <!-- Animated Background Shapes -->
    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>
    <div class="shape shape-3"></div>
    <div class="shape shape-4"></div>

    <!-- Dark Overlay with Gradient -->
    <div class="overlay bg-gradient"></div>
    
    <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
            <div class="col-lg-8 ftco-animate text-center">
                <div class="text w-100 text-center mb-md-5 pb-md-5">
                    <h1 class="mb-4">
                        <span class="gradient-text-white">DRIVE</span>
                        <span class="gradient-text-green">XPRESS</span>
                    </h1>
                    <p class="sub-text">Drive with style - Premium car rentals at your fingertips</p>
                    <div class="mt-5">
                        <a href="{{url('/all_cars')}}" class="btn btn-primary btn-lg px-5 py-3">
                            Explore Cars
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Gradient Text */
.gradient-text-white {
    background: linear-gradient(to bottom, #ffffff, #e0e0e0);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 700;
    font-size: 3.5rem;
}

.gradient-text-green {
    background: linear-gradient(45deg, #00d25b, #00ff6e);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 700;
    font-size: 3.5rem;
}

/* Animated Background Shapes */
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

.shape-4 {
    width: 120px;
    height: 120px;
    top: 30%;
    right: 30%;
    animation-delay: 6s;
}

@keyframes float {
    0% {
        transform: translateY(0) rotate(0deg);
    }
    50% {
        transform: translateY(-20px) rotate(180deg);
    }
    100% {
        transform: translateY(0) rotate(360deg);
    }
}

/* Background Gradient Overlay */
.bg-gradient {
    background: linear-gradient(45deg, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6));
}

/* Sub Text Styling */
.sub-text {
    font-size: 1.5rem;
    color: #ffffff;
    font-weight: 300;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

/* Button Hover Effect */
.btn-primary {
    background: linear-gradient(45deg, #00d25b, #00ff6e);
    border: none;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 210, 91, 0.4);
}
</style>