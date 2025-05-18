@extends('adminpanel/navbar')
@section('content')

@include('shared.auth-styles')

<!-- Animated Background Shapes -->
<div class="animated-shapes">
    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>
    <div class="shape shape-3"></div>
    <div class="shape shape-4"></div>
    <div class="shape shape-5"></div>
</div>

<div class="auth-container" style="max-width: 800px;">
    @if(session()->has('message'))
        <div class="auth-alert" style="background: rgba(13, 202, 240, 0.1); color: #0dcaf0; border-color: rgba(13, 202, 240, 0.2);">
            {{session()->get('message')}}
        </div>
    @endif

    <h1 class="auth-title">Sign Up as Vendor</h1>
    
    <form action="{{url('/')}}/vendorsignup" method="post" class="auth-form">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Name" class="form-label">Full Name</label>
                    <i class="fas fa-user form-icon"></i>
                    <input type="text" maxlength="30" class="form-control" id="Name" name="Name" placeholder="Enter your full name" required>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone_number" class="form-label">Phone Number</label>
                    <i class="fas fa-phone form-icon"></i>
                    <input type="tel" class="form-control" id="phone_number" name="phone_number" placeholder="Enter your phone number" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="address" class="form-label">Address</label>
                    <i class="fas fa-map-marker-alt form-icon"></i>
                    <input type="text" maxlength="50" class="form-control" id="address" name="address" placeholder="Enter your address" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <i class="fas fa-envelope form-icon"></i>
                    <input type="email" maxlength="50" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="username" class="form-label">Username</label>
                    <i class="fas fa-store form-icon"></i>
                    <input type="text" maxlength="15" class="form-control" id="username" name="username" placeholder="Choose a username" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <i class="fas fa-lock form-icon"></i>
                    <input type="password" maxlength="30" class="form-control" id="password" name="password" placeholder="Create a password" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="cpassword" class="form-label">Confirm Password</label>
                    <i class="fas fa-lock form-icon"></i>
                    <input type="password" maxlength="30" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm your password" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="nid" class="form-label">NID Number</label>
                    <i class="fas fa-id-card form-icon"></i>
                    <input type="text" maxlength="20" class="form-control" id="nid" name="nid" placeholder="Enter your NID number" required>
                </div>
            </div>
        </div>

        <button type="submit" class="auth-button">
            <i class="fas fa-store-alt me-2"></i>Sign Up as Vendor
        </button>

        <div class="text-center mt-3">
            <a href="{{ url('/vendorlogin') }}" class="auth-link">
                Already have a vendor account? Log in
            </a>
        </div>
    </form>
</div>

<style>
    .auth-container {
        margin: 2rem auto 4rem auto;
        position: relative;
        z-index: 1;
    }

    /* Animated Shapes Styles */
    .animated-shapes {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: 0;
        pointer-events: none;
    }

    .shape {
        position: absolute;
        background: rgba(0, 210, 91, 0.1);
        backdrop-filter: blur(5px);
        border: 1px solid rgba(0, 210, 91, 0.2);
        animation-duration: 20s;
        animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        animation-iteration-count: infinite;
    }

    .shape-1 {
        width: 450px;
        height: 450px;
        right: -200px;
        top: -200px;
        border-radius: 35% 65% 65% 35% / 35% 35% 65% 65%;
        animation-name: float-1;
    }

    .shape-2 {
        width: 300px;
        height: 300px;
        left: -100px;
        bottom: 10%;
        border-radius: 45% 55% 55% 45% / 55% 45% 55% 45%;
        animation-name: float-2;
        animation-delay: -5s;
    }

    .shape-3 {
        width: 250px;
        height: 250px;
        right: 25%;
        top: 25%;
        border-radius: 50%;
        animation-name: float-3;
        animation-delay: -10s;
    }

    .shape-4 {
        width: 200px;
        height: 200px;
        left: 20%;
        top: 15%;
        border-radius: 70% 30% 30% 70% / 30% 70% 30% 70%;
        animation-name: float-4;
        animation-delay: -15s;
    }

    .shape-5 {
        width: 350px;
        height: 350px;
        right: 10%;
        bottom: -100px;
        border-radius: 25% 75% 75% 25% / 75% 25% 75% 25%;
        animation-name: float-5;
        animation-delay: -7s;
    }

    @keyframes float-1 {
        0% { transform: translate(0, 0) rotate(0deg) scale(1); }
        50% { transform: translate(-100px, 100px) rotate(180deg) scale(0.9); }
        100% { transform: translate(0, 0) rotate(360deg) scale(1); }
    }

    @keyframes float-2 {
        0% { transform: translate(0, 0) rotate(0deg) scale(1); }
        33% { transform: translate(80px, -60px) rotate(120deg) scale(1.1); }
        66% { transform: translate(-40px, 40px) rotate(240deg) scale(0.95); }
        100% { transform: translate(0, 0) rotate(360deg) scale(1); }
    }

    @keyframes float-3 {
        0% { transform: translate(0, 0) scale(1); }
        25% { transform: translate(40px, 40px) scale(1.15); }
        50% { transform: translate(-40px, 40px) scale(0.9); }
        75% { transform: translate(-40px, -40px) scale(1.05); }
        100% { transform: translate(0, 0) scale(1); }
    }

    @keyframes float-4 {
        0% { transform: translate(0, 0) rotate(0deg) scale(1); }
        33% { transform: translate(60px, 30px) rotate(-120deg) scale(1.1); }
        66% { transform: translate(-30px, 60px) rotate(-240deg) scale(0.9); }
        100% { transform: translate(0, 0) rotate(-360deg) scale(1); }
    }

    @keyframes float-5 {
        0% { transform: translate(0, 0) rotate(0deg) scale(1); }
        50% { transform: translate(75px, -50px) rotate(-180deg) scale(1.1); }
        100% { transform: translate(0, 0) rotate(-360deg) scale(1); }
    }
</style>

@stop