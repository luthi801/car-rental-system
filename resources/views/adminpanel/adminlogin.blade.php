@extends('adminpanel/navbar')
@section('content')
    <style>
        body {
            background: #f0f2f5 !important;
            background-image: linear-gradient(to right bottom, #3a3a3a, #2e2e2e, #2b2b2b, #272727, #2a2a2a) !important;
        }
        
        .navbar {
            margin-bottom: 2rem;
        }

        .navbar-nav {
            margin-left: 1rem !important;
        }

        .login-container {
            min-height: calc(100vh - 100px);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            position: relative;
            overflow: hidden;
            margin-top: -2rem;
        }

        /* Animated Background Shapes */
        .shape {
            position: absolute;
            background: rgba(0, 210, 91, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 210, 91, 0.2);
            z-index: 0;
        }

        .shape-1 {
            width: 500px;
            height: 500px;
            border-radius: 38% 62% 63% 37% / 41% 44% 56% 59%;
            top: -15%;
            right: -10%;
            animation: morph1 20s linear infinite;
        }

        .shape-2 {
            width: 400px;
            height: 400px;
            border-radius: 59% 41% 70% 30% / 53% 51% 49% 47%;
            bottom: -10%;
            left: -5%;
            animation: morph2 20s linear infinite;
        }

        .shape-3 {
            width: 300px;
            height: 300px;
            border-radius: 42% 58% 40% 60% / 45% 40% 60% 55%;
            top: 20%;
            left: -10%;
            animation: morph3 20s linear infinite;
        }

        .shape-4 {
            width: 350px;
            height: 350px;
            border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
            bottom: 15%;
            right: -5%;
            animation: morph4 20s linear infinite;
        }

        @keyframes morph1 {
            0% { transform: rotate(0deg) scale(1) translateX(0); }
            25% { transform: rotate(90deg) scale(1.1) translateX(20px); }
            50% { transform: rotate(180deg) scale(1) translateX(0); }
            75% { transform: rotate(270deg) scale(0.9) translateX(-20px); }
            100% { transform: rotate(360deg) scale(1) translateX(0); }
        }

        @keyframes morph2 {
            0% { transform: rotate(0deg) scale(1) translateY(0); }
            25% { transform: rotate(-90deg) scale(0.9) translateY(-20px); }
            50% { transform: rotate(-180deg) scale(1) translateY(0); }
            75% { transform: rotate(-270deg) scale(1.1) translateY(20px); }
            100% { transform: rotate(-360deg) scale(1) translateY(0); }
        }

        @keyframes morph3 {
            0% { transform: rotate(0deg) scale(1) translate(0, 0); }
            25% { transform: rotate(45deg) scale(1.2) translate(15px, 15px); }
            50% { transform: rotate(90deg) scale(1) translate(0, 0); }
            75% { transform: rotate(135deg) scale(0.8) translate(-15px, -15px); }
            100% { transform: rotate(180deg) scale(1) translate(0, 0); }
        }

        @keyframes morph4 {
            0% { transform: rotate(0deg) scale(1) translate(0, 0); }
            25% { transform: rotate(-45deg) scale(0.8) translate(-20px, 20px); }
            50% { transform: rotate(-90deg) scale(1) translate(0, 0); }
            75% { transform: rotate(-135deg) scale(1.2) translate(20px, -20px); }
            100% { transform: rotate(-180deg) scale(1) translate(0, 0); }
        }

        .login-container::before {
            content: '';
            position: absolute;
            width: 1000px;
            height: 1000px;
            border-radius: 50%;
            background: linear-gradient(45deg, #00d25b20, #00d25b10);
            top: -50%;
            right: -50%;
            transform: translateY(-50%);
            z-index: 0;
            animation: pulse 15s infinite;
        }

        .login-container::after {
            content: '';
            position: absolute;
            width: 800px;
            height: 800px;
            border-radius: 50%;
            background: linear-gradient(45deg, #00d25b10, #00d25b05);
            bottom: -40%;
            left: -40%;
            transform: translateY(50%);
            z-index: 0;
            animation: pulse 20s infinite reverse;
        }

        @keyframes pulse {
            0% { transform: scale(1) rotate(0deg); }
            50% { transform: scale(1.2) rotate(180deg); }
            100% { transform: scale(1) rotate(360deg); }
        }

        .login-card {
            background: rgba(40, 40, 40, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 3rem;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 1;
            border: 1px solid rgba(206, 212, 218, 0.5);
            transform: translateY(0);
            transition: all 0.3s ease;
        }

        .login-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .login-logo {
            text-align: center;
            margin-bottom: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
        }

        .login-logo .brand-wrapper {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .login-logo .brand-icon {
            font-size: 2rem;
            color: #00d25b;
        }

        .login-logo .brand-text {
            font-size: 1.75rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            display: flex;
            gap: 2px;
        }

        .login-logo .brand-drive {
            background: linear-gradient(45deg, #ffffff 0%, #e6e6e6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 600;
        }

        .login-logo .brand-xpress {
            background: linear-gradient(45deg, #00d25b 0%, #00ff6e 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 700;
        }

        .login-logo .shield-icon {
            font-size: 2.5rem;
            color: #00d25b;
            margin-top: 0.5rem;
            animation: float 3s infinite ease-in-out;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .login-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .login-header h1 {
            color: #00d25b;
            font-weight: 700;
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
            letter-spacing: 1px;
        }

        .login-header p {
            color: #6c757d;
            font-size: 1rem;
        }

        .form-group {
            margin-bottom: 1.8rem;
            position: relative;
        }

        .form-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            transition: all 0.3s ease;
        }

        .form-control {
            background-color: rgba(248, 249, 250, 0.1);
            border: 2px solid rgba(233, 236, 239, 0.2);
            color: #ffffff;
            padding: 1rem 1rem 1rem 2.8rem;
            border-radius: 12px;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }

        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.15);
            border-color: #00d25b;
            color: #ffffff;
            box-shadow: 0 0 0 3px rgba(0, 210, 91, 0.1);
        }

        .form-control:focus + i {
            color: #00d25b;
        }

        .form-label {
            color: rgba(255, 255, 255, 0.8);
            font-weight: 500;
            margin-bottom: 0.8rem;
            font-size: 0.95rem;
            display: block;
        }

        .btn-login {
            background: linear-gradient(45deg, #00d25b, #00b050);
            border: none;
            color: #ffffff;
            padding: 1rem 30px;
            border-radius: 12px;
            font-weight: 600;
            width: 100%;
            transition: all 0.3s ease;
            font-size: 1rem;
            letter-spacing: 0.5px;
            position: relative;
            overflow: hidden;
        }

        .btn-login:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                120deg,
                transparent,
                rgba(255, 255, 255, 0.2),
                transparent
            );
            transition: all 0.6s;
        }

        .btn-login:hover {
            background: linear-gradient(45deg, #00b050, #00d25b);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 210, 91, 0.4);
        }

        .btn-login:hover:before {
            left: 100%;
        }

        .alert {
            border-radius: 12px;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: rgba(0, 210, 91, 0.1);
            border: 1px solid rgba(0, 210, 91, 0.2);
            color: #ffffff;
        }

        @media (max-width: 576px) {
            .login-card {
                padding: 2rem;
            }
            .login-header h1 {
                font-size: 1.8rem;
            }
        }
    </style>

    <div class="login-container">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
        <div class="shape shape-4"></div>
        
        <div class="login-card">
            @if(session()->has('message'))
                <div class="alert alert-info">
                    {{session()->get('message')}}
                </div>
            @endif

            <div class="login-logo">
                <div class="brand-wrapper">
                    <i class="fas fa-car-side brand-icon"></i>
                    <span class="brand-text">
                        <span class="brand-drive">DRIVE</span><span class="brand-xpress">XPRESS</span>
                    </span>
                </div>
            </div>

            <div class="login-header">
                <h1>Admin Portal</h1>
                <p>Enter your credentials to continue</p>
            </div>

            <form action="{{url('/')}}/adminlogin" method="post">
                @csrf
                <div class="form-group">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
                    <i class="fas fa-user"></i>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                    <i class="fas fa-lock"></i>
                </div>

                <button type="submit" class="btn btn-login">
                    Sign In <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </form>
        </div>
    </div>
@stop