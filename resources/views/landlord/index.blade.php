<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>:: W3Elements.net :: Web elements creator</title>
    <link rel="icon" href="{{ public_path().'/landlord/images/favicon-w3e.png' }}" type="image/x-icon"> <!-- Favicon-->

    <!-- project css file  -->
    <link rel="stylesheet" href="{{ public_path().'/landlord/css/al.style.min.css' }}">

    <!-- project layout css file -->
    <link rel="stylesheet" href="{{ public_path().'/landlord/css/al.project.min.css' }}">
    <link rel="stylesheet" href="{{ public_path().'/landlord/css/style.css' }}">
</head>

<body class="font-raleway">
    <div id="mainDiv" class="theme-cyan">

        <!-- Top Header -->
        <nav class="navbar navbar-expand-lg py-lg-3 lp-menu">
            <div class="container">
                <a class="navbar-brand fw-bold text-primary fs-2 logo" href="/">
                    <img src="{{ public_path().'/landlord/images/logo-w3e.png' }}" class="img-fluid" width="25%"/>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-expanded="false">
                    <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-6">
                        <li class="nav-item"><a class="nav-link me-2" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link me-2" href="#">Products</a></li>
                        <li class="nav-item"><a class="nav-link me-2" href="#">Services</a></li>
                        <li class="nav-item"><a class="nav-link me-2" href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Banner -->
        <div class="section hero-area">
            <div class="container">
                <div class="row align-items-center mb-5">
                    <div class="col-xl-6 col-lg-5 co-12">
                        <div class="row g-3">
                            <div class="col-lg-6 col-md-6 col-6">
                                <img class="img-fluid rounded mb-3" src="{{ public_path().'/landlord/images/project/profile1.jpg' }}" alt="#">
                                <img class="img-fluid rounded mb-3" src="{{ public_path().'/landlord/images/project/profile2.jpg' }}" alt="#">
                            </div>
                            <div class="col-lg-6 col-md-6 col-6">
                                <img class="img-fluid rounded mt-lg-5 mb-3" src="{{ public_path().'/landlord/images/project/profile3.jpg' }}" alt="#">
                                <img class="img-fluid rounded mb-3" src="{{ public_path().'/landlord/images/project/profile4.jpg' }}" alt="#">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7 co-12">
                        <div class="inner-content p-md-0 p-lg-3 p-xl-4">
                            <div class="hero-text">
                                <h1 class="bg-text">Ease Your <span class="text-gradient fw-bold">Business</span> Activities</h1>
                                <p class="color-500 lead mb-4">Good product will lead to bettar result. Plan work, Keep activities on track, and manage production easily with our Products</p>
                                <button type="submit" class="btn px-4 py-3 lift btn-primary text-uppercase">Our Products</button>
                                <a href="https://www.youtube.com/embed/vWfOS1br8pk" target="_blank" class="btn px-4 py-3 lift color-800 text-uppercase" title="#"><i class="fa fa-youtube fa-lg px-2 text-secondary" aria-hidden="true"></i>Watch How it Work</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- .row end -->
            </div>
        </div>

        <!-- registration -->
        <div class="section utility">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-xl-4">
                        <form method="post" action="{{ route('register') }}">
                            @csrf
                            <div class="form-floating mb-1">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full Name">
                                <label>Full Name</label>
                            </div>
                            @error('name')
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                            @enderror
                            <div class="form-floating mb-1">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                                <label>Email</label>
                            </div>
                            @error('email')
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                            @enderror
                            <div class="form-floating mb-1">
                                <input type="text" class="form-control" name="domain" value="{{ old('domain') }}" oninput="this.value=this.value.toLowerCase()" maxlength="10" placeholder="Domain Name">
                                <label>Doamin ID</label>
                                <small>Your domain will be &nbsp; <strong>domain_id.w3lements.net</strong></small>
                            </div>
                            @error('domain')
                            <small class="text-danger">{{ $errors->first('domain') }}</small>
                            @enderror
                            <div class="form-floating mb-1">
                                <input type="password" class="form-control" name="password" placeholder="******">
                                <label>Password</label>
                            </div>
                            @error('password')
                            <small class="text-danger">{{ $errors->first('password') }}</small>
                            @enderror
                            <div class="form-floating mb-1">
                                <input type="password" class="form-control" name="password_confirmation" placeholder="******">
                                <label>Password Confirmation</label>
                            </div>
                            @error('password_confirmation')
                            <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
                            @enderror
                            <button type="submit" class="btn btn-submit btn-block btn-primary mt-3">Register Now!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- utility -->
        <div class="section utility">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-xl-9">
                        <h2 class="h1 fw-bold color-600">Project Management <span class="text-gradient">ALUI</span></h2>
                        <p class="color-500 lead mb-4">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                        <img class="img-fluid rounded mb-3" src="{{ public_path().'/landlord/images/project/scrum-board.svg' }}" alt="#">
                    </div>
                </div>
            </div>
        </div>

        <!-- feature -->
        <div class="section feature">
            <div class="container">
                <div class="row g-3 align-items-center">
                    <div class="col-lg-5 col-xl-4 order-2 order-lg-1">
                        <h2 class="fw-bold mb-4 h1">Besic <span class="text-gradient">Feature</span></h2>
                        <ul class="list-unstyled list mb-0 px-2">
                            <li class="position-relative mb-3">
                                <span class="dot-btn"></span> <span class="mx-4">Compnay knowleadge bases</span>
                            </li>
                            <li class="position-relative mb-3">
                                <span class="dot-btn"></span> <span class="mx-4">Workgroup Project knowleadge bases </span>
                            </li>
                            <li class="position-relative mb-3">
                                <span class="dot-btn"></span> <span class="mx-4">Multipal task bases</span>
                            </li>
                            <li class="position-relative mb-3">
                                <span class="dot-btn"></span> <span class="mx-4">Kanban Board</span>
                            </li>
                            <li class="position-relative mb-3">
                                <span class="dot-btn"></span> <span class="mx-4">User Activity</span>
                            </li>
                            <li class="position-relative mb-3">
                                <span class="dot-btn"></span> <span class="mx-4">Project Activity</span>
                            </li>
                            <li class="position-relative mb-3">
                                <span class="dot-btn"></span> <span class="mx-4">Access Permissions</span>
                            </li>
                            <li class="position-relative mb-3">
                                <span class="dot-btn"></span> <span class="mx-4">Priority Set</span>
                            </li>
                            <li class="position-relative mb-3">
                                <span class="dot-btn"></span> <span class="mx-4">Progress Flow Check</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-xl-8 order-1 order-lg-2">
                        <img class="img-fluid rounded" src="{{ public_path().'/landlord/images/project/project-tracker.png' }}" alt="#">
                    </div>
                </div>
            </div>
        </div>

        <!-- Risk-Management -->
        <div class="section risk-identfy">
            <div class="container">
                <div class="row g-3 align-items-center">
                    <div class="col-xl-4">
                        <img class="img-fluid rounded" src="{{ public_path().'/landlord/images/project/identify-risk.png' }}" alt="#">
                    </div>
                    <div class="col-xl-8">
                        <div class="identyfy-inner">
                            <h2 class="fw-bold mb-4">Identify <span class="text-gradient">Risks</span></h2>
                            <p class="color-500 lead mb-4">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                            <h2 class="fw-bold mb-4 "><span class="text-gradient">Risks</span> Impact Assessment</h2>
                            <p class="color-500 lead mb-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                            <button type="submit" class="btn px-4 py-3 lift btn-primary text-uppercase">GET DETAILS</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pricing Table -->
        <div class="section pricing-table">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-8">
                        <div class="section-title text-center">
                            <span>PRICING TABLE</span>
                            <h2 class="h1 mt-3 fw-bold ">Our Pricing <span class="text-gradient">Plan</span></h2>
                            <p class="lead">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                        </div>
                    </div>
                </div>
                <div class="row g-4 justify-content-center align-items-center">
                    <div class="col-lg-3 col-sm-12">
                        <div class="card">
                            <div class="card-body py-4 text-center">
                                <h6 class="text-uppercase">Basic</h6>
                                <div><span class="display-5 text-primary">$99</span> <span class="text-muted">/Month</span></div>
                            </div>
                            <div class="card-footer border-top-0 px-4">
                                <p class="d-flex justify-content-between py-1"><span><i class="fa fa-check-circle me-2"></i> User:</span> <span>50</span></p>
                                <p class="d-flex justify-content-between py-1"><span><i class="fa fa-check-circle me-2"></i> Onlinespace:</span> <span>500MB</span></p>
                                <p class="d-flex justify-content-between py-1"><span><i class="fa fa-check-circle me-2"></i> Support:</span> <span>No</span></p>
                                <p class="d-flex justify-content-between py-1"><span><i class="fa fa-check-circle me-2"></i> Domain:</span> <span>1</span></p>
                                <p class="d-flex justify-content-between py-1"><span><i class="fa fa-check-circle me-2"></i> Hidden Fees:</span> <span>No</span></p>
                            </div>
                            <div class="card-body text-center">
                                <a href="#" class="btn btn-white border lift">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="card py-0 py-md-5 shadow">
                            <div class="card-body py-4 text-center">
                                <h6 class="text-uppercase">Business</h6>
                                <div><span class="display-5 text-primary">$249</span> <span class="text-muted">/Month</span></div>
                            </div>
                            <div class="card-footer border-top-0 px-4">
                                <p class="d-flex justify-content-between py-1"><span><i class="fa fa-check-circle me-2"></i> User:</span> <span>100</span></p>
                                <p class="d-flex justify-content-between py-1"><span><i class="fa fa-check-circle me-2"></i> Onlinespace:</span> <span>5GB</span></p>
                                <p class="d-flex justify-content-between py-1"><span><i class="fa fa-check-circle me-2"></i> Support:</span> <span>Yes</span></p>
                                <p class="d-flex justify-content-between py-1"><span><i class="fa fa-check-circle me-2"></i> Domain:</span> <span>1</span></p>
                                <p class="d-flex justify-content-between py-1"><span><i class="fa fa-check-circle me-2"></i> Hidden Fees:</span> <span>No</span></p>
                            </div>
                            <div class="card-body text-center">
                                <a href="#" class="btn btn-primary border lift">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <div class="card">
                            <div class="card-body py-4 text-center">
                                <h6 class="text-uppercase">Professional</h6>
                                <div><span class="display-5 text-primary">$399</span> <span class="text-muted">/Month</span></div>
                            </div>
                            <div class="card-footer border-top-0 px-4">
                                <p class="d-flex justify-content-between py-1"><span><i class="fa fa-check-circle me-2"></i> User:</span> <span>Unlimited</span></p>
                                <p class="d-flex justify-content-between py-1"><span><i class="fa fa-check-circle me-2"></i> Onlinespace:</span> <span>1TB</span></p>
                                <p class="d-flex justify-content-between py-1"><span><i class="fa fa-check-circle me-2"></i> Support:</span> <span>Yes</span></p>
                                <p class="d-flex justify-content-between py-1"><span><i class="fa fa-check-circle me-2"></i> Domain:</span> <span>Unlimited</span></p>
                                <p class="d-flex justify-content-between py-1"><span><i class="fa fa-check-circle me-2"></i> Hidden Fees:</span> <span>No</span></p>
                            </div>
                            <div class="card-body text-center">
                                <a href="#" class="btn btn-white border lift">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="section pb-0 footer">
            <div class="footer-top py-5 bg-primary-gradient text-light">
                <div class="container">
                    <div class="row g-3 align-items-center justify-content-center">
                        <div class="col-lg-6 col-12">
                            <div class="download-text">
                                <h3>Download Our Best Apps</h3>
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor incididunt ut labore et dolore</span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 text-md-end">
                            <a class="btn btn-light btn-lg" href="#"><i class="fa fa-play"></i> App Store</a>
                            <a class="btn btn-light btn-lg" href="#"><i class="fa fa-google"></i> Google Play</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="d-flex align-items-center mb-2">
                                <h3 class="mb-0 fw-bold color-900">ALUI</h3>
                            </div>
                            <span class="lead">Start building your creative website with our awesome template Massive.</span>
                            <ul class="mt-3 address fs-6 lh-lg">
                                <li><span>Address:</span> 555 Wall Street, NY, USA</li>
                                <li><span>Email:</span> example@ttm.com</li>
                                <li><span>Call:</span> 123-456-1818</li>
                            </ul>
                        </div>
                        <div class="col-lg-8 col-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <h5 class="mb-4">Products</h5>
                                    <ul class="footer-link">
                                        <li><a href="#">Task Mangament</a></li>
                                        <li><a href="#">Project Mangament</a></li>
                                        <li><a href="#">Time Tracker</a></li>
                                        <li><a href="#">User Mangament</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <h5 class="mb-4">About Us</h5>
                                    <ul class="footer-link">
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">Careers</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <h5 class="mb-4">Join Our Newsletter</h5>
                                    <p class="text-muted">Subscribe to get the latest jobs posted, candidates...</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <p>© {{ date('Y') }} w3elements.net</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal: Setting -->
        <div class="modal fade" id="SettingsModal" tabindex="-1">
            <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">AL-UI Setting</h5>
                    </div>
                    <div class="modal-body custom_scroll">
                        <!-- Settings: Font -->
                        <div class="setting-font">
                            <small class="card-title text-muted">Google font Settings</small>
                            <ul class="list-group font_setting mb-3 mt-1">
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font" id="font-opensans" value="font-opensans">
                                        <label class="form-check-label" for="font-opensans">
                                            Open Sans Google Font
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font" id="font-quicksand" value="font-quicksand">
                                        <label class="form-check-label" for="font-quicksand">
                                            Quicksand Google Font
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font" id="font-nunito" value="font-nunito">
                                        <label class="form-check-label" for="font-nunito">
                                            Nunito Google Font
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font" id="font-Raleway" value="font-raleway" checked="">
                                        <label class="form-check-label" for="font-Raleway">
                                            Raleway Google Font
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Settings: Color -->
                        <div class="setting-theme">
                            <small class="card-title text-muted">Theme Color Settings</small>
                            <ul class="list-unstyled d-flex justify-content-between choose-skin mb-2 mt-1">
                                <li data-theme="indigo"><div class="indigo"></div></li>
                                <li data-theme="blue"><div class="blue"></div></li>
                                <li data-theme="cyan"><div class="cyan"></div></li>
                                <li data-theme="green"><div class="green"></div></li>
                                <li data-theme="orange" class="active"><div class="orange"></div></li>
                                <li data-theme="blush"><div class="blush"></div></li>
                                <li data-theme="red"><div class="red"></div></li>
                                <li data-theme="dynamic"><div class="dynamic"><i class="fa fa-paint-brush"></i></div></li>
                            </ul>
                        </div>
                        <!-- Settings: Theme dynamics -->
                        <div class="dt-setting">
                            <small class="card-title text-muted">Dynamic Color Settings</small>
                            <ul class="list-group list-unstyled mb-3 mt-1">
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label>Primary Color</label>
                                    <button id="primaryColorPicker" class="btn bg-primary avatar xs border-0 rounded-0"></button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label>Secondary Color</label>
                                    <button id="secondaryColorPicker" class="btn bg-secondary avatar xs border-0 rounded-0"></button>
                                </li>
                            </ul>
                        </div>
                        <!-- Settings: Light/dark -->
                        <div class="setting-mode">
                            <small class="card-title text-muted">Light/Dark & Contrast Layout</small>
                            <ul class="list-group list-unstyled mb-0 mt-1">
                                <li class="list-group-item d-flex align-items-center py-1 px-2">
                                    <div class="form-check form-switch theme-switch mb-0">
                                        <input class="form-check-input" type="checkbox" id="theme-switch">
                                        <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center py-1 px-2">
                                    <div class="form-check form-switch theme-high-contrast mb-0">
                                        <input class="form-check-input" type="checkbox" id="theme-high-contrast">
                                        <label class="form-check-label" for="theme-high-contrast">Enable High Contrast</label>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center py-1 px-2">
                                    <div class="form-check form-switch theme-rtl mb-0">
                                        <input class="form-check-input" type="checkbox" id="theme-rtl">
                                        <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-start text-center">
                        <button type="button" class="btn flex-fill btn-primary lift">Save Changes</button>
                        <button type="button" class="btn flex-fill btn-white border lift" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    
        <a class="page-setting" href="#" title="Settings" data-bs-toggle="modal" data-bs-target="#SettingsModal"><i class="fa fa-gear"></i></a>

    </div>

    <!-- Jquery Core Js -->
    <script src="{{ public_path().'/landlord/bundles/libscripts.bundle.js' }}"></script>

    <!-- Jquery Page Js -->
    <script src="{{ public_path().'/landlord/js/main.js' }}"></script>
    <script src="{{ public_path().'/landlord/js/setting.js' }}"></script>
</body>
</html>