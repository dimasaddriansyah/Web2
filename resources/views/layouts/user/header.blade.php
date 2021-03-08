<section style="height:100%; width: 100%; box-sizing: border-box; background-color: #FFFFFF">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        .modal-header-2-2.modal {
            top: 2rem;
        }

        .header-2-2 .navbar,
        .hero-header-2-2 {
            padding: 3rem 2rem;
        }

        .header-2-2 .navbar-light .navbar-nav .nav-link {
            font-size: 18px;
            color: #1d1e3c;
            font-weight: 300;
            line-height: 1.5rem;
        }

        .header-2-2 .navbar-light .navbar-nav .nav-link:hover {
            font-size: 18px;
            color: #1d1e3c;
            font-weight: 600;
            line-height: 1.5rem;
        }

        .header-2-2 .navbar-light .navbar-nav .active>.nav-link,
        .header-2-2 .navbar-light .navbar-nav .nav-link.active,
        .header-2-2 .navbar-light .navbar-nav .nav-link.show,
        .header-2-2 .navbar-light .navbar-nav .show>.nav-link {
            font-weight: 600;
        }

        .header-2-2 .navbar-light .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .header-2-2 .navbar-light .navbar-toggler {
            border: none;
        }

        .modal-content-header-2-2 .modal-header,
        .modal-content-header-2-2 .modal-footer {
            border: none;
        }

        .btn:focus,
        .btn:active {
            outline: none !important;
        }

        .btn-fill-header-2-2 {
            background-color: #27C499;
            border-radius: 12px;
            color: #ffffff;
            font-weight: 600;
            padding: 12px 32px 12px 32px;
            font-size: 18px;
        }

        .btn-fill-header-2-2:hover {
            color: #ffffff;
            --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
                0 4px 6px -2px rgba(0, 0, 0, 0.05);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .btn-no-fill-header-2-2 {
            color: #1D1E3C;
            font-weight: 300;
            line-height: 1.75rem;
            padding: 12px 32px 12px 32px;
            font-size: 18px;
        }

        .modal-header-2-2 .modal-dialog .modal-content {
            border-radius: 8px;
            background-color: #FFFFFF;
            border: none;
        }

        .responsive-header-2-2 li a {
            padding: 1rem 1rem;
        }

        .text-caption-header-2-2 {
            margin-bottom: 2rem;
            line-height: 1.625;
            font-size: 0.875rem;
            line-height: 1.25rem;
            font-weight: 600;
            color: #27C499;
        }

        .left-column-header-2-2 {
            margin-bottom: 0.75rem;
            width: 100%;
        }

        .right-column-header-2-2 {
            width: 100%;
        }

        .title-text-big-header-2-2 {
            font-weight: 600;
            margin-bottom: 2rem;
            font-size: 2.25rem;
            line-height: 2.5rem;
            color: #272E35;
        }

        .title-text-small-header-2-2 {
            font-weight: 600;
            margin-bottom: 2rem;
            font-size: 2.25rem;
            line-height: 2.5rem;
            color: #272E35;
            padding-left: 0;
            padding-right: 0;
        }

        .div-button-header-2-2 {
            margin-left: 0;
            margin-right: 0;
        }

        .btn-try-header-2-2 {
            font-weight: 600;
            color: #FFFFFF;
            padding: 1rem 1.5rem 1rem 1.5rem;
            font-size: 1rem;
            line-height: 1.5rem;
            border-radius: 0.75rem;
            background-color: #27C499;
            margin-bottom: 1rem;
            margin-right: 0;
        }

        .btn-try-header-2-2:hover {
            color: #FFFFFF;
            --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
                0 4px 6px -2px rgba(0, 0, 0, 0.05);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .btn-outline-header-2-2 {
            font-weight: 400;
            border: 1px solid #555B61;
            color: #555B61;
            padding: 1rem 1.5rem 1rem 1.5rem;
            font-size: 1rem;
            line-height: 1.5rem;
            border-radius: 0.75rem;
            background-color: transparent;
            margin-bottom: 1rem;
        }

        .btn-outline-header-2-2:hover {
            border: 1px solid #27C499;
            color: #27C499;
        }

        .btn-outline-header-2-2:hover div path {
            fill: #27C499;
        }

        @media (min-width: 576px) {
            .modal-header-2-2 .modal-dialog {
                max-width: 95%;
                border-radius: 12px;
            }

            .header-2-2 .navbar {
                padding: 3rem 2rem;
            }

            .hero-header-2-2 {
                padding: 3rem 2rem 5rem 2rem;
            }

            .title-text-big-header-2-2 {
                font-size: 3rem;
                line-height: 1.2;
            }

            .title-text-small-header-2-2 {
                font-size: 3rem;
                line-height: 1.2;
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }

            .div-button-header-2-2 {
                margin-left: 0;
                margin-right: 0.75rem;
            }

            .btn-try-header-2-2 {
                margin-bottom: 0;
                margin-right: 0.75rem;
            }

            .btn-outline-header-2-2 {
                margin-bottom: 0;
            }
        }

        @media (min-width: 768px) {
            .header-2-2 .navbar {
                padding: 3rem 4rem;
            }

            .hero-header-2-2 {
                padding: 3rem 4rem 5rem 4rem;
            }

            .left-column-header-2-2 {
                margin-bottom: 3rem;
            }

            .title-text-small-header-2-2 {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }

            .div-button-header-2-2 {
                margin-left: 0;
                margin-right: 0.5rem;
            }

            .btn-try-header-2-2 {
                margin-right: 0.5rem;
            }
        }

        @media (min-width: 992px) {
            .header-2-2 .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: 1.25rem;
                padding-left: 1.25rem;
            }

            .header-2-2 .navbar {
                padding: 3rem 6rem;
            }

            .hero-header-2-2 {
                padding: 3rem 6rem 5rem 6rem;
            }

            .left-column-header-2-2 {
                width: 50%;
                margin-bottom: 0;
            }

            .right-column-header-2-2 {
                width: 50%;
            }

            .title-text-big-header-2-2 {
                font-size: 3.75rem;
                line-height: 1.2;
            }

            .title-text-small-header-2-2 {
                font-size: 3.75rem;
                line-height: 1.2;
            }

            .div-button-header-2-2 {
                margin-left: 0;
                margin-right: 2rem;
            }

            .btn-try-header-2-2 {
                margin-right: 2rem;
            }
        }

    </style>
    <div class="header-2-2" style="font-family: 'Poppins', sans-serif;">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="#">
                <img style="margin-right:0.75rem"
                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-5.png"
                    alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="modal"
                data-bs-target="#targetModal-header-2-2">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="modal-header-2-2 modal fade" id="targetModal-header-2-2" tabindex="-1" role="dialog"
                aria-labelledby="targetModalLabel-header-2-2" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-content-header-2-2">
                        <div class="modal-header" style="padding:	2rem; padding-bottom: 0;">
                            <a class="modal-title" id="targetModalLabel-header-2-2">
                                <img style="margin-top:0.5rem"
                                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-5.png"
                                    alt="">
                            </a>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body" style="padding:	2rem; padding-top: 0; padding-bottom: 0;">
                            <ul class="navbar-nav responsive-header-2-2 me-auto mt-2 mt-lg-0">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Foods</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Drinks</a>
                                </li>
                            </ul>
                            @if (Auth::guard('user')->user())
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fas fa-bell"></i>
                                            <span class="badge rounded-pill bg-danger align-text-top">0</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fas fa-shopping-bag"></i>
                                            <span class="badge rounded-pill bg-danger align-text-top">0</span>
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            {{ Auth::guard('user')->user()->name }}
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end mb-3"
                                            aria-labelledby="navbarDarkDropdownMenuLink">
                                            <li>
                                                <a class="dropdown-item" href="{{ url('history') }}">
                                                    <i class="fa fa-list me-2"></i> Riwayat Pemesanan</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{ url('/ubahakun') }}">
                                                    <i class="fa fa-user-edit me-2"></i>Ubah Akun</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item text-danger" href="{{ route('logout') }}">
                                                    <i class="fas fa-sign-out-alt me-2"></i> Logout</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            @else
                                <a href="{{ route('register') }}"
                                    class="btn btn-default btn-no-fill-header-2-2 mt-2 mb-4">Register</a>
                                <a href="{{ route('login') }}" class="btn btn-fill-header-2-2 mt-2 mb-4">Login</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo-header-2-2">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Foods</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Drinks</a>
                    </li>
                </ul>
                @if (Auth::guard('user')->user())
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-bell"></i>
                                <span class="badge rounded-pill bg-danger align-text-top">0</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-shopping-bag"></i>
                                <span class="badge rounded-pill bg-danger align-text-top">0</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::guard('user')->user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="{{ url('history') }}">
                                        <i class="fa fa-list me-2"></i> Riwayat Pemesanan</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ url('/ubahakun') }}">
                                        <i class="fa fa-user-edit me-2"></i>Ubah Akun</a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-danger" href="{{ route('logout') }}">
                                        <i class="fas fa-sign-out-alt me-2"></i> Logout</a>
                                </li>
                            </ul>
                        @else
                            <a href="{{ route('register') }}"
                                class="btn btn-default btn-no-fill-header-2-2">Register</a>
                            <a href="{{ route('login') }}" class="btn btn-fill-header-2-2">Login</a>
                @endif
                </li>
                </ul>
            </div>
        </nav>

        {{-- Hero --}}
        <div>
            <div class="mx-auto d-flex flex-lg-row flex-column hero-header-2-2">
                <!-- Left Column -->
                <div
                    class="left-column-header-2-2 d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
                    <p class="text-caption-header-2-2">FREE 30 DAY TRIAL</p>
                    <h1 class="title-text-big-header-2-2 d-lg-inline d-none">The best way<br> to organize your
                        online learning</h1>
                    <h1 class="title-text-small-header-2-2 d-lg-none d-inline">The best way to organize your online
                        learning</h1>
                    <div
                        class="div-button-header-2-2 d-inline d-lg-flex align-items-center mx-lg-0 mx-auto justify-content-center">
                        <button class="btn d-inline-flex mb-md-0 btn-try-header-2-2">Try it free</button>
                        <button class="btn btn-outline-header-2-2">
                            <div class="d-flex align-items-center">
                                <svg class="me-2" width="13" height="12" viewBox="0 0 13 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.9293 7.99988L6.66668 5.15788V10.8419L10.9293 7.99988ZM12.9173 8.27722L5.85134 12.9879C5.80115 13.0213 5.74283 13.0404 5.6826 13.0433C5.62238 13.0462 5.5625 13.0327 5.50934 13.0042C5.45619 12.9758 5.41175 12.9334 5.38075 12.8817C5.34976 12.83 5.33337 12.7708 5.33334 12.7105V3.28922C5.33337 3.22892 5.34976 3.16976 5.38075 3.11804C5.41175 3.06633 5.45619 3.02398 5.50934 2.99552C5.5625 2.96706 5.62238 2.95355 5.6826 2.95644C5.74283 2.95932 5.80115 2.97848 5.85134 3.01188L12.9173 7.72255C12.963 7.75299 13.0004 7.79423 13.0263 7.84261C13.0522 7.89099 13.0658 7.94501 13.0658 7.99988C13.0658 8.05475 13.0522 8.10878 13.0263 8.15716C13.0004 8.20553 12.963 8.24678 12.9173 8.27722Z"
                                        fill="#555B61" />
                                </svg>
                                Watch the video
                            </div>
                        </button>
                    </div>
                </div>
                <!-- Right Column -->
                <div class="right-column-header-2-2 text-center d-flex justify-content-center pe-0">
                    <img id="img-fluid" style="display: block;max-width: 100%;height: auto;"
                        src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-1.png"
                        alt="">
                </div>
            </div>
        </div>
    </div>


</section>