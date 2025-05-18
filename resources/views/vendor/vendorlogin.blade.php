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

<div class="auth-container">
    @if(session()->has('message'))
        <div class="auth-alert">
            {{session()->get('message')}}
        </div>
    @endif

    <h1 class="auth-title">Vendor Login</h1>
    
    <form action="{{url('/')}}/vendorlogin" method="post" class="auth-form">
        @csrf
        <div class="form-group">
            <label for="username" class="form-label">Username</label>
            <i class="fas fa-store form-icon"></i>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your vendor username">
        </div>

        <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <i class="fas fa-lock form-icon"></i>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
        </div>

        <button type="submit" class="auth-button">
            <i class="fas fa-sign-in-alt me-2"></i>Log in
        </button>

        <div class="text-center mt-3">
            <a href="{{ url('/vendorsignup') }}" class="auth-link">
                Don't have a vendor account? Sign up
            </a>
        </div>
    </form>
</div>

<style>
    .auth-container {
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
        animation-duration: 25s;
        animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        animation-iteration-count: infinite;
    }

    .shape-1 {
        width: 200px;
        height: 200px;
        left: 5%;
        top: 20%;
        border-radius: 28% 72% 79% 21% / 21% 68% 32% 79%;
        animation-name: float-1;
    }

    .shape-2 {
        width: 300px;
        height: 300px;
        right: -100px;
        top: 40%;
        border-radius: 72% 28% 21% 79% / 79% 32% 68% 21%;
        animation-name: float-2;
        animation-delay: -5s;
    }

    .shape-3 {
        width: 250px;
        height: 250px;
        left: 30%;
        bottom: -50px;
        border-radius: 50%;
        animation-name: float-3;
        animation-delay: -12s;
    }

    .shape-4 {
        width: 180px;
        height: 180px;
        right: 20%;
        top: 10%;
        border-radius: 20% 80% 55% 45% / 55% 20% 80% 45%;
        animation-name: float-4;
        animation-delay: -7s;
    }

    @keyframes float-1 {
        0% { transform: translate(0, 0) rotate(0deg) scale(1); }
        25% { transform: translate(50px, 50px) rotate(90deg) scale(1.2); }
        50% { transform: translate(100px, 0px) rotate(180deg) scale(1); }
        75% { transform: translate(50px, -50px) rotate(270deg) scale(0.8); }
        100% { transform: translate(0, 0) rotate(360deg) scale(1); }
    }

    @keyframes float-2 {
        0% { transform: translate(0, 0) rotate(0deg) scale(1); }
        50% { transform: translate(-100px, 100px) rotate(-180deg) scale(1.1); }
        100% { transform: translate(0, 0) rotate(-360deg) scale(1); }
    }

    @keyframes float-3 {
        0% { transform: translate(0, 0) scale(1); }
        33% { transform: translate(-50px, -50px) scale(1.2); }
        66% { transform: translate(50px, -25px) scale(0.9); }
        100% { transform: translate(0, 0) scale(1); }
    }

    @keyframes float-4 {
        0% { transform: translate(0, 0) rotate(0deg) scale(1); }
        33% { transform: translate(30px, 50px) rotate(120deg) scale(1.1); }
        66% { transform: translate(-30px, 30px) rotate(240deg) scale(0.9); }
        100% { transform: translate(0, 0) rotate(360deg) scale(1); }
    }
</style>

@stop