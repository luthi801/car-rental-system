<!DOCTYPE html>
<html>
    <head>
        <title>DriveXpress</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            :root {
                --primary-color: #00d25b;
                --dark-bg: #2a2a2a;
                --card-bg: #ffffff;
                --text-muted: #6c757d;
            }

            body {
                margin: 0;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                min-height: 100vh;
                background-color: var(--dark-bg);
                background-image: linear-gradient(to right bottom, #3a3a3a, #2e2e2e, #2b2b2b, #272727, #2a2a2a);
            }

            .navbar {
                background: rgba(42, 42, 42, 0.98);
                backdrop-filter: blur(10px);
                padding: 0.8rem 0;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                width: 100%;
                transition: all 0.3s ease;
            }

            .container-fluid {
                width: 100%;
                max-width: 1400px;
                margin: 0 auto;
                padding: 0 2rem;
                display: flex;
                align-items: center;
            }

            .navbar-brand {
                color: var(--primary-color) !important;
                font-size: 1.5rem;
                font-weight: 700;
                text-decoration: none;
                display: flex;
                align-items: center;
                gap: 0.5rem;
                transition: all 0.3s ease;
                padding: 0;
                margin-right: 2rem;
            }

            .navbar-brand .brand-drive {
                color: #ffffff;
                background: linear-gradient(45deg, #ffffff 0%, #e6e6e6 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            .navbar-brand .brand-express {
                color: var(--primary-color);
                background: linear-gradient(45deg, var(--primary-color) 0%, #00ff6e 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            .navbar-brand:hover {
                transform: translateY(-1px);
                opacity: 0.9;
            }

            .navbar-toggler {
                border: none;
                background: transparent;
                padding: 0.5rem;
                cursor: pointer;
                outline: none;
            }

            .navbar-toggler-icon {
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 0.7)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            }

            .navbar-collapse {
                flex-grow: 1;
                display: flex;
            }

            .navbar-nav {
                display: flex;
                gap: 0.5rem;
                margin: 0;
                padding: 0;
                list-style: none;
                width: 100%;
            }

            .nav-item {
                display: flex;
                align-items: center;
            }

            .nav-link {
                color: rgba(255, 255, 255, 0.8) !important;
                text-decoration: none;
                font-weight: 500;
                padding: 0.5rem 1rem;
                border-radius: 8px;
                transition: all 0.3s ease;
                position: relative;
                font-size: 0.95rem;
                display: flex;
                align-items: center;
                gap: 0.5rem;
                white-space: nowrap;
            }

            .nav-link i {
                font-size: 1rem;
                margin-right: 0.2rem;
                opacity: 0.8;
                transition: all 0.3s ease;
            }

            .nav-link:hover {
                color: var(--primary-color) !important;
                background: rgba(0, 210, 91, 0.1);
            }

            .nav-link:hover i {
                opacity: 1;
                transform: translateY(-1px);
            }

            .nav-link.active {
                color: var(--primary-color) !important;
                background: rgba(0, 210, 91, 0.15);
                font-weight: 600;
            }

            .nav-link::after {
                content: '';
                position: absolute;
                bottom: 0;
                left: 50%;
                width: 0;
                height: 2px;
                background: var(--primary-color);
                transition: all 0.3s ease;
                transform: translateX(-50%);
                opacity: 0;
            }

            .nav-link:hover::after {
                width: 80%;
                opacity: 0.5;
            }

            @media (max-width: 991px) {
                .navbar-collapse {
                    background: rgba(42, 42, 42, 0.98);
                    padding: 1rem;
                    border-radius: 12px;
                    margin-top: 1rem;
                    border: 1px solid rgba(255, 255, 255, 0.1);
                    position: absolute;
                    top: 100%;
                    left: 0;
                    right: 0;
                    margin-left: 1rem;
                    margin-right: 1rem;
                }

                .navbar-nav {
                    flex-direction: column;
                    gap: 0.5rem;
                }

                .nav-link {
                    padding: 0.8rem 1rem;
                }
            }

            /* Wrapper for content */
            .content-wrapper {
                padding-top: 1rem;
                min-height: calc(100vh - 80px);
            }
        </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="welcome">
                        <i class="fas fa-car-side"></i>
                        <span class="brand-drive">DRIVE</span><span class="brand-express">XPRESS</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">
                                    <i class="fas fa-home"></i> Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('userlogin') ? 'active' : '' }}" href="userlogin">
                                    <i class="fas fa-sign-in-alt"></i> Login
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('usersignup') ? 'active' : '' }}" href="usersignup">
                                    <i class="fas fa-user-plus"></i> Signup
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('adminlogin') ? 'active' : '' }}" href="adminlogin">
                                    <i class="fas fa-user-shield"></i> Admin Login
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('adminsignup') ? 'active' : '' }}" href="adminsignup">
                                    <i class="fas fa-user-cog"></i> Admin Signup
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('vendorlogin') ? 'active' : '' }}" href="vendorlogin">
                                    <i class="fas fa-store"></i> Vendor Login
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('vendorsignup') ? 'active' : '' }}" href="vendorsignup">
                                    <i class="fas fa-store-alt"></i> Vendor Signup
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="content-wrapper">
            @yield('content')
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>