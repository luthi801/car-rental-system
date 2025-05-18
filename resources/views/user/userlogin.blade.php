@extends('adminpanel/navbar')
@section('content')

@include('shared.auth-styles')

<!-- Animated Background Shapes -->
<div class="animated-shapes">
    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>
    <div class="shape shape-3"></div>
</div>

<div class="auth-container">
    @if(session()->has('message'))
        <div class="auth-alert">
            {{session()->get('message')}}
        </div>
    @endif

    <h1 class="auth-title">User Login</h1>
    
    <form action="{{url('/')}}/userlogin" method="post" class="auth-form">
        @csrf
        <div class="form-group">
            <label for="username" class="form-label">Username</label>
            <i class="fas fa-user form-icon"></i>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
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
            <a href="{{ url('/usersignup') }}" class="auth-link">
                Don't have an account? Sign up
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
        animation-duration: 18s;
        animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        animation-iteration-count: infinite;
    }

    .shape-1 {
        width: 350px;
        height: 350px;
        right: -100px;
        top: -100px;
        border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
        animation-name: float-1;
    }

    .shape-2 {
        width: 250px;
        height: 250px;
        left: 10%;
        bottom: 10%;
        border-radius: 40% 60% 70% 30% / 40% 50% 50% 60%;
        animation-name: float-2;
        animation-delay: -9s;
    }

    .shape-3 {
        width: 400px;
        height: 400px;
        right: 20%;
        top: 30%;
        border-radius: 35% 65% 65% 35% / 35% 45% 55% 65%;
        animation-name: float-3;
        animation-delay: -6s;
    }

    @keyframes float-1 {
        0% { transform: translate(0, 0) rotate(0deg) scale(1); }
        50% { transform: translate(-100px, 100px) rotate(180deg) scale(1.1); }
        100% { transform: translate(0, 0) rotate(360deg) scale(1); }
    }

    @keyframes float-2 {
        0% { transform: translate(0, 0) rotate(0deg) scale(1); }
        33% { transform: translate(100px, -50px) rotate(120deg) scale(0.9); }
        66% { transform: translate(-50px, 50px) rotate(240deg) scale(1.1); }
        100% { transform: translate(0, 0) rotate(360deg) scale(1); }
    }

    @keyframes float-3 {
        0% { transform: translate(0, 0) rotate(0deg) scale(1); }
        50% { transform: translate(50px, -80px) rotate(-180deg) scale(0.95); }
        100% { transform: translate(0, 0) rotate(-360deg) scale(1); }
    }
</style>

@stop