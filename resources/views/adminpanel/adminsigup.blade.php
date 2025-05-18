@extends('adminpanel/navbar')
@section('content')

@include('shared.auth-styles')

<!-- Animated Background Shapes -->
<div class="animated-shapes">
    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>
    <div class="shape shape-3"></div>
    <div class="shape shape-4"></div>
</div>

<div class="auth-container" style="max-width: 800px;">
    @if(session()->has('message'))
        <div class="auth-alert" style="background: rgba(13, 202, 240, 0.1); color: #0dcaf0; border-color: rgba(13, 202, 240, 0.2);">
            {{session()->get('message')}}
        </div>
    @endif

    <h1 class="auth-title">Sign Up as Admin</h1>
    
    <form action="{{url('/')}}/adminsignup" method="post" class="auth-form">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Name" class="form-label">Full Name</label>
                    <i class="fas fa-user-shield form-icon"></i>
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
                    <label for="ref_code" class="form-label">Reference Code</label>
                    <i class="fas fa-key form-icon"></i>
                    <input type="text" maxlength="5" class="form-control" id="ref_code" name="ref_code" placeholder="Enter admin reference code" required>
                    <small class="text-muted" style="color: rgba(255,255,255,0.6)!important;">Enter reference code given by other admins</small>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="ref_code_gen" class="form-label">Your Reference Code</label>
                    <i class="fas fa-key form-icon"></i>
                    <input type="text" maxlength="5" class="form-control" id="ref_code_gen" name="ref_code_gen" placeholder="Create your reference code" required>
                    <small class="text-muted" style="color: rgba(255,255,255,0.6)!important;">Create a code for future admin signups</small>
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
                    <i class="fas fa-user-cog form-icon"></i>
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
        </div>

        <button type="submit" class="auth-button">
            <i class="fas fa-user-shield me-2"></i>Sign Up as Admin
        </button>

        <div class="text-center mt-3">
            <a href="{{ url('/adminlogin') }}" class="auth-link">
                Already have an admin account? Log in
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
    
    .text-muted {
        font-size: 0.8rem;
        margin-top: 0.25rem;
        display: block;
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
        width: 300px;
        height: 300px;
        left: -150px;
        top: -150px;
        border-radius: 43% 57% 70% 30% / 30% 43% 57% 70%;
        animation-name: float-1;
    }

    .shape-2 {
        width: 400px;
        height: 400px;
        right: -200px;
        top: 30%;
        border-radius: 59% 41% 31% 69% / 59% 41% 59% 41%;
        animation-name: float-2;
        animation-delay: -5s;
    }

    .shape-3 {
        width: 200px;
        height: 200px;
        left: 20%;
        bottom: -100px;
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        animation-name: float-3;
        animation-delay: -10s;
    }

    .shape-4 {
        width: 250px;
        height: 250px;
        right: 20%;
        bottom: 20%;
        border-radius: 50% 50% 20% 80% / 25% 80% 20% 75%;
        animation-name: float-4;
        animation-delay: -15s;
    }

    @keyframes float-1 {
        0% { transform: translate(0, 0) rotate(0deg); }
        33% { transform: translate(100px, 100px) rotate(120deg); }
        66% { transform: translate(-50px, 200px) rotate(240deg); }
        100% { transform: translate(0, 0) rotate(360deg); }
    }

    @keyframes float-2 {
        0% { transform: translate(0, 0) rotate(0deg); }
        33% { transform: translate(-100px, -150px) rotate(-120deg); }
        66% { transform: translate(50px, -100px) rotate(-240deg); }
        100% { transform: translate(0, 0) rotate(-360deg); }
    }

    @keyframes float-3 {
        0% { transform: translate(0, 0) rotate(0deg) scale(1); }
        50% { transform: translate(150px, -100px) rotate(180deg) scale(1.2); }
        100% { transform: translate(0, 0) rotate(360deg) scale(1); }
    }

    @keyframes float-4 {
        0% { transform: translate(0, 0) rotate(0deg) scale(1); }
        50% { transform: translate(-100px, 100px) rotate(-180deg) scale(0.8); }
        100% { transform: translate(0, 0) rotate(-360deg) scale(1); }
    }
</style>

@stop