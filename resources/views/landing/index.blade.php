<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Zeta admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Zeta admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ url('/assets') }}/images/logo/favicon-icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ url('/assets') }}/images/logo/favicon-icon.png" type="image/x-icon">
    <title>Zeta admin dashboard </title>
    @include('admin.components.style.css')
</head>

<body class="landing-wrraper">
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper landing-page">
        <!-- header start-->
        @include('landing.pages.header')
        <!-- header end-->
        <!-- landing home start-->
        <section class="landing-home" id="home"><img class="img-fluid bg-img-cover"
                src="{{ url('/assets') }}/images/landing/landing-home/home-bg.png" alt="">
            <div class="custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="landing-home-contain">
                            <div>
                                <ul class="landing-icon">
                                    <li><a href="index.html" target="_blank"><img class="img-fluid me-2"
                                                src="{{ url('/assets') }}/images/landing/icon/html/html.png"
                                                alt=""></a>
                                    </li>
                                    <li> <a href="https://react.pixelstrap.com/zeta/dashboard/default"
                                            target="_blank"><img class="img-fluid me-2"
                                                src="{{ url('/assets') }}/images/landing/icon/react/props_state.png"
                                                alt=""></a></li>
                                </ul>
                                <h2>On Stop<span>For all admin template</span></h2>
                                <p> Zeta is Perfect Admin template for any business. it has all features and modules to
                                    create your amazing C-panel. this template for selling Default, Crypto, Ecommerce
                                    etc......</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="animat-block">
                <li><img class="img-fluid" src="{{ url('/assets') }}/images/landing/landing-home/1.png" alt="">
                </li>
                <li><img class="img-fluid" src="{{ url('/assets') }}/images/landing/landing-home/2.jpg" alt="">
                </li>
                <li><img class="img-fluid" src="{{ url('/assets') }}/images/landing/landing-home/3.jpg" alt="">
                </li>
                <li><img class="img-fluid" src="{{ url('/assets') }}/images/landing/landing-home/circle.png"
                        alt="">
                </li>
                <li><img class="img-fluid" src="{{ url('/assets') }}/images/landing/landing-home/circle.png"
                        alt="">
                </li>
                <li><img class="img-fluid" src="{{ url('/assets') }}/images/landing/landing-home/react-orange.png"
                        alt="">
                </li>
                <li><img class="img-fluid" src="{{ url('/assets') }}/images/landing/landing-home/react-yellow.png"
                        alt="">
                </li>
                <li><img class="img-fluid" src="{{ url('/assets') }}/images/landing/landing-home/react-yellow.png"
                        alt="">
                </li>
            </ul>
        </section>
        <!-- landing home end-->
        <!-- demo section start-->
        <section class="demo-section section-py-space" id="dashboard">
            <div class="title">
                <h1>Dashboard</h1>
            </div>
            <div class="custom-container">
                <div class="row demo-block">
                    <div class="col-lg-4 col-md-6 wow pulse">
                        <div class="demo-box">
                            <div class="img-wrraper"><img class="img-fluid"
                                    src="{{ url('/assets') }}/images/landing/demo/default.jpg" alt=""></div>
                            <div class="demo-title"><a class="btn" href="index.html" target="_blank">Html</a><a
                                    class="btn ms-2" href="https://react.pixelstrap.com/zeta/dashboard/default"
                                    target="_blank">React</a></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow pulse">
                        <div class="demo-box">
                            <div class="img-wrraper"><img class="img-fluid"
                                    src="{{ url('/assets') }}/images/landing/demo/ecommerce.jpg" alt=""></div>
                            <div class="demo-title"><a class="btn" href="dashboard-02.html"
                                    target="_blank">Html</a><a class="btn ms-2"
                                    href="https://react.pixelstrap.com/zeta/dashboard/ecommerce"
                                    target="_blank">React</a></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow pulse">
                        <div class="demo-box">
                            <div class="img-wrraper"><img class="img-fluid"
                                    src="{{ url('/assets') }}/images/landing/demo/crypto.jpg" alt=""></div>
                            <div class="demo-title"><a class="btn" href="crypto-dashboard.html"
                                    target="_blank">Html</a><a class="btn ms-2"
                                    href="https://react.pixelstrap.com/zeta/dashboard/crypto"
                                    target="_blank">React</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- demo section end-->
        <!--Applications start-->
        <section class="demo-section section-py-space" id="Applications">
            <div class="title">
                <h1>Usefull application</h1>
            </div>
            <div class="custom-container">
                <div class="row demo-block" id="aniimated-thumbnials" itemscope="">
                    <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
                        <div class="demo-box">
                            <div class="img-wrraper"><a href="social-app.html"><img class="img-fluid"
                                        src="{{ url('/assets') }}/images/landing/application/1.jpg"
                                        alt=""></a></div>
                            <div class="demo-detail">
                                <div class="demo-title"> <a class="btn" href="social-app.html">Social App</a>
                                </div>
                            </div>
                        </div>
                    </figure>
                    <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
                        <div class="demo-box">
                            <div class="img-wrraper"><a href="knowledgebase.html"><img class="img-fluid"
                                        src="{{ url('/assets') }}/images/landing/application/2.jpg"
                                        alt=""></a></div>
                            <div class="demo-detail">
                                <div class="demo-title"><a class="btn" href="knowledgebase.html">Knowledgebase
                                    </a></div>
                            </div>
                        </div>
                    </figure>
                    <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
                        <div class="demo-box">
                            <div class="img-wrraper"><a href="support-ticket.html"><img class="img-fluid"
                                        src="{{ url('/assets') }}/images/landing/application/3.jpg"
                                        alt=""></a></div>
                            <div class="demo-detail">
                                <div class="demo-title"><a class="btn" href="support-ticket.html">Support
                                        Ticket</a></div>
                            </div>
                        </div>
                    </figure>
                    <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
                        <div class="demo-box">
                            <div class="img-wrraper"><a href="email-application.html"><img class="img-fluid"
                                        src="{{ url('/assets') }}/images/landing/application/4.jpg"
                                        alt=""></a></div>
                            <div class="demo-detail">
                                <div class="demo-title"><a class="btn" href="email-application.html">Email
                                        Dashboard </a></div>
                            </div>
                        </div>
                    </figure>
                    <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
                        <div class="demo-box">
                            <div class="img-wrraper"><a href="to-do.html"><img class="img-fluid"
                                        src="{{ url('/assets') }}/images/landing/application/5.jpg"
                                        alt=""></a></div>
                            <div class="demo-detail">
                                <div class="demo-title"> <a class="btn" href="to-do.html">To-Do</a></div>
                            </div>
                        </div>
                    </figure>
                    <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
                        <div class="demo-box">
                            <div class="img-wrraper"><a href="job-cards-view.html"><img class="img-fluid"
                                        src="{{ url('/assets') }}/images/landing/application/6.jpg"
                                        alt=""></a></div>
                            <div class="demo-detail">
                                <div class="demo-title"><a class="btn" href="job-cards-view.html">Job Search</a>
                                </div>
                            </div>
                        </div>
                    </figure>
                    <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
                        <div class="demo-box">
                            <div class="img-wrraper"><a href="product-page.html"><img class="img-fluid"
                                        src="{{ url('/assets') }}/images/landing/application/7.jpg"
                                        alt=""></a></div>
                            <div class="demo-detail">
                                <div class="demo-title"><a class="btn" href="product-page.html">Ecommerce </a>
                                </div>
                            </div>
                        </div>
                    </figure>
                    <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
                        <div class="demo-box">
                            <div class="img-wrraper"><a href="kanban.html"><img class="img-fluid"
                                        src="{{ url('/assets') }}/images/landing/application/8.jpg"
                                        alt=""></a></div>
                            <div class="demo-detail">
                                <div class="demo-title"><a class="btn" href="kanban.html">Kanban </a></div>
                            </div>
                        </div>
                    </figure>
                    <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
                        <div class="demo-box">
                            <div class="img-wrraper"><a href="file-manager.html"><img class="img-fluid"
                                        src="{{ url('/assets') }}/images/landing/application/9.jpg"
                                        alt=""></a></div>
                            <div class="demo-detail">
                                <div class="demo-title"><a class="btn" href="file-manager.html">File Manager </a>
                                </div>
                            </div>
                        </div>
                    </figure>
                    <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
                        <div class="demo-box">
                            <div class="img-wrraper"><a href="projects.html"><img class="img-fluid"
                                        src="{{ url('/assets') }}/images/landing/application/10.jpg"
                                        alt=""></a></div>
                            <div class="demo-detail">
                                <div class="demo-title"><a class="btn" href="projects.html">Project </a></div>
                            </div>
                        </div>
                    </figure>
                    <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
                        <div class="demo-box">
                            <div class="img-wrraper"><a href="contacts.html"><img class="img-fluid"
                                        src="{{ url('/assets') }}/images/landing/application/11.jpg"
                                        alt=""></a></div>
                            <div class="demo-detail">
                                <div class="demo-title"><a class="btn" href="contacts.html">Contacts </a></div>
                            </div>
                        </div>
                    </figure>
                    <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
                        <div class="demo-box">
                            <div class="img-wrraper"><a href="chat.html"><img class="img-fluid"
                                        src="{{ url('/assets') }}/images/landing/application/12.jpg"
                                        alt=""></a></div>
                            <div class="demo-detail">
                                <div class="demo-title"> <a class="btn" href="chat.html">Chat</a></div>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </section>
        <!--Applications end-->
        <!-- frameworks start-->
        <section class="framework section-py-space" id="framework">
            <div class="custom-container">
                <div class="row">
                    <div class="col-sm-12 wow pulse">
                        <div class="title">
                            <h1>Top Frameworks</h1>
                        </div>
                    </div>
                    <div class="col-sm-12 framworks">
                        <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link d-flex active" id="pills-home-tab"
                                    data-bs-toggle="pill" href="#pills-home" role="tab"
                                    aria-controls="pills-home" aria-selected="true"> <img
                                        src="{{ url('/assets') }}/images/landing/icon/html/html.png" alt="">
                                    <div class="text-start">
                                        <h5 class="mb-0">HTML</h5>
                                        <p class="mb-0">Frameworks</p>
                                    </div>
                                </a></li>
                            <li class="nav-item"><a class="d-flex nav-link" id="pills-contact-tab"
                                    data-bs-toggle="pill" href="#pills-contact" role="tab"
                                    aria-controls="pills-contact" aria-selected="false"> <img
                                        src="{{ url('/assets') }}/images/landing/icon/react/props_state.png"
                                        alt="">
                                    <div class="text-start">
                                        <h5 class="mb-0">React</h5>
                                        <p class="mb-0">Frameworks</p>
                                    </div>
                                </a></li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <ul class="framworks-list">
                                    <li class="bounceIn wow">
                                        <div> <img
                                                src="{{ url('/assets') }}/images/landing/icon/laravel/bootstrap.png"
                                                alt=""></div>
                                        <h6>Booxstrap 5</h6>
                                    </li>
                                    <li class="bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/html/css.png"
                                                alt="">
                                        </div>
                                        <h6>CSS</h6>
                                    </li>
                                    <li class="bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/html/sass.png"
                                                alt="">
                                        </div>
                                        <h6>Sass</h6>
                                    </li>
                                    <li class="bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/html/pug.png"
                                                alt="">
                                        </div>
                                        <h6>Pug</h6>
                                    </li>
                                    <li class="bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/html/npm.png"
                                                alt="">
                                        </div>
                                        <h6>NPM</h6>
                                    </li>
                                    <li class="bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/html/gulp.png"
                                                alt="">
                                        </div>
                                        <h6>Gulp</h6>
                                    </li>
                                    <li class="bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/html/kit.png"
                                                alt="">
                                        </div>
                                        <h6>Starter Kit</h6>
                                    </li>
                                    <li class="bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/html/uikits.png"
                                                alt="">
                                        </div>
                                        <h6>40+ UI Kits</h6>
                                    </li>
                                    <li class="bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/html/layout.png"
                                                alt="">
                                        </div>
                                        <h6>8+ Layout</h6>
                                    </li>
                                    <li class="bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/html/builders.png"
                                                alt=""></div>
                                        <h6>Builders</h6>
                                    </li>
                                    <li class="bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/html/iconset.png"
                                                alt=""></div>
                                        <h6>11 Icon Sets</h6>
                                    </li>
                                    <li class="bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/html/forms.png"
                                                alt="">
                                        </div>
                                        <h6>Forms</h6>
                                    </li>
                                    <li class="bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/html/table.png"
                                                alt="">
                                        </div>
                                        <h6>Tables</h6>
                                    </li>
                                    <li class="bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/html/apps.png"
                                                alt="">
                                        </div>
                                        <h6>17+ Apps</h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <ul class="framworks-list">
                                    <li class="box bounceIn wow">
                                        <div> <img
                                                src="{{ url('/assets') }}/images/landing/icon/react/props_state.png"
                                                alt=""></div>
                                        <h6>State & Props</h6>
                                    </li>
                                    <li class="box bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/react/hook.png"
                                                alt="">
                                        </div>
                                        <h6>React Hook</h6>
                                    </li>
                                    <li class="box bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/react/reactstrap.png"
                                                alt=""></div>
                                        <h6>React Strap</h6>
                                    </li>
                                    <li class="box bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/react/noquery.png"
                                                alt=""></div>
                                        <h6>No Jquery</h6>
                                    </li>
                                    <li class="box bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/react/redux.png"
                                                alt="">
                                        </div>
                                        <h6>Redux</h6>
                                    </li>
                                    <li class="box bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/react/firebase.png"
                                                alt=""></div>
                                        <h6>Firebase Auth</h6>
                                    </li>
                                    <li class="box bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/react/crud.png"
                                                alt="">
                                        </div>
                                        <h6>Firebase Crud</h6>
                                    </li>
                                    <li class="box bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/react/chat.png"
                                                alt="">
                                        </div>
                                        <h6>Chat</h6>
                                    </li>
                                    <li class="box bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/react/animation.png"
                                                alt=""></div>
                                        <h6>Router Animation</h6>
                                    </li>
                                    <li class="box bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/react/firebase.png"
                                                alt=""></div>
                                        <h6>Firebase Auth</h6>
                                    </li>
                                    <li class="box bounceIn wow">
                                        <div> <img
                                                src="{{ url('/assets') }}/images/landing/icon/react/reactrouter.png"
                                                alt=""></div>
                                        <h6>React Router</h6>
                                    </li>
                                    <li class="box bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/react/chat.png"
                                                alt="">
                                        </div>
                                        <h6>Chat</h6>
                                    </li>
                                    <li class="box bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/react/chart.png"
                                                alt="">
                                        </div>
                                        <h6>Chart</h6>
                                    </li>
                                    <li class="box bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/react/map.png"
                                                alt="">
                                        </div>
                                        <h6>Map</h6>
                                    </li>
                                    <li class="box bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/react/gallery.png"
                                                alt=""></div>
                                        <h6>Gallery</h6>
                                    </li>
                                    <li class="box bounceIn wow">
                                        <div> <img src="{{ url('/assets') }}/images/landing/icon/react/map.png"
                                                alt="">
                                        </div>
                                        <h6>Map</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- frameworks end-->
                </div>
            </div>
        </section>
        <!-- counter-section start-->
        @include('landing.pages.counter')
        <!-- counter-section end-->
        <!-- unic-cards start-->
        @include('landing.pages.unic')
        <!-- unic-cards end-->
        <!--footer start-->
        @include('landing.pages.footer')
        <!--footer end-->
    </div>
    @include('landing.components.style_js')
    <!-- Plugin used-->
</body>

</html>
