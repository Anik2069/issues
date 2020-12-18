<div class="header-top bg-dark py-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 d-flex align-items-center justify-content-between text-white">
                <div class="d-none d-md-flex align-items-center"><small class="mr-3"><i
                            class="las la-store text-primary mr-1 align-middle"></i>Welcome to Our Shop ZangMart</small>
                    <small><i class="las la-truck text-primary mr-1 align-middle"></i> Shipping
                        worldwide</small>
                </div>
                <div class="d-flex align-items-center">
                    <div class="language-selection mr-2">
                        <div class="dropdown">
                            <button class="btn btn-sm text-white dropdown-toggle" data-toggle="dropdown">
                                English
                            </button>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">English</a>
                                <a class="dropdown-item" href="#">Arabic</a>
                                <a class="dropdown-item" href="#">French</a>
                                <a class="dropdown-item" href="#">Italian</a>
                            </div>
                        </div>
                    </div>
                    <div class="social-icons">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a class="text-muted" href="#"><i
                                        class="lab la-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item"><a class="text-muted" href="#"><i
                                        class="lab la-twitter"></i></a>
                            </li>
                            <li class="list-inline-item"><a class="text-muted" href="#"><i
                                        class="lab la-linkedin-in"></i></a>
                            </li>
                            <li class="list-inline-item"><a class="text-muted" href="#"><i
                                        class="lab la-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-md-3 py-2">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-6 d-none d-md-flex align-items-center">
                <a class="navbar-brand logo d-none d-lg-block" href="/">
                    <img class="img-fluid" src="{{ asset("assets/images/logo_2.jpg") }}" alt="">
                </a>
                <div class="media ml-lg-11"><i
                        class="las la-mobile-alt ic-2x bg-white rounded p-2 shadow-sm mr-2 text-primary"></i>
                    <div class="media-body"><span class="mb-0 d-block">Call Us</span>
                        <a class="text-muted" href="tel:+880-1672220022">+880-1672220022</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-nav align-items-center d-flex justify-content-end">
                    <form class="form-inline border rounded w-100">
                        <select
                            class="custom-select border-0 rounded-0 bg-light form-control d-none d-lg-inline">
                            <option selected>All Categories</option>
                            <option value="1">Men</option>
                            <option value="2">Women</option>
                            <option value="3">Kids</option>
                        </select>
                        <input class="form-control border-0 border-left col" type="search"
                               placeholder="Enter Your Keyword" aria-label="Search">
                        <button class="btn btn-primary text-white col-auto" type="submit"><i
                                class="las la-search"></i>
                        </button>
                    </form>
                </div>
            </div>
            <!--menu end-->
        </div>
    </div>
</div>
<div id="header-wrap" class="shadow-sm">
    <div class="container">
        <div class="row">
            <!--menu start-->
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light position-static">
                    <a class="navbar-brand logo d-lg-none" href="/">
                        <img class="img-fluid" src="{{ asset("assets/images/logo.png") }}" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item "><a class="nav-link  " href="/">Home</a>
                            </li>


                            <li class="nav-item dropdown position-static"><a class="nav-link dropdown-toggle"
                                                                             href="#" data-toggle="dropdown">Shop By
                                    Department</a>
                                <div class="dropdown-menu w-100">
                                    <!-- Tabs -->
                                    <div class="container p-0">
                                        <div class="row w-100 no-gutters">
                                            <div class="col-lg-8 p-lg-3">
                                                <form>
                                                    <div class="tab">
                                                        <!-- Nav -->
                                                        <nav class="nav nav-tabs border-0 mb-5"><a
                                                                class="nav-item nav-link active"
                                                                data-toggle="tab" onclick="getMenu(this)"
                                                                data-type="Men" href="#navTab">
                                                                Men
                                                            </a>
                                                            <a class="nav-item nav-link" onclick="getMenu(this)"
                                                               data-type="Women" data-toggle="tab"
                                                               href="#navTab">
                                                                Women
                                                            </a>
                                                            <a class="nav-item nav-link" onclick="getMenu(this)"
                                                               data-type="Kids" data-toggle="tab"
                                                               href="#navTab">
                                                                Kids
                                                            </a>
                                                            <a class="nav-item nav-link" onclick="getMenu(this)"
                                                               data-type="All" data-toggle="tab"
                                                               href="#navTab">
                                                                All
                                                            </a>
                                                        </nav>
                                                        <div class="tab-content p-0">
                                                            <div class="tab-pane fade show active" id="navTab">
                                                                @include("navTab")
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-4 d-none d-lg-block">
                                                <img class="img-fluid rounded-bottom rounded-top"
                                                     src="{{ asset("assets/images/header-img.jpg") }}" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            {{--  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                                               data-toggle="dropdown">Pages</a>
                                  <ul class="dropdown-menu">
                                      <li><a href="/about-us">About</a>
                                      </li>
                                      <li><a href="/offerPolicy">Offer Policy</a>
                                      </li>
                                      <li><a href="#">FAQ</a>
                                      </li>
                                      <li><a href="#">Login</a>
                                      </li>
                                      </li>
                                      <li><a href="#c">Sign Up</a>
                                      </li>


                                  </ul>
                              </li>--}}
                            <li class="nav-item"><a class="nav-link"
                                                    href="#">Product Video</a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                                    href="/offerPolicy">Offer Policy</a>
                            </li>

                            <li class="nav-item"><a class="nav-link" href="#">Lookbook</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route("contact-us") }}">Contact</a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                                    href="https://blogs.kandaexportimportltd.com/">Blog</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route("customer.login_page") }}">Login /
                                    Registration</a>
                            </li>
                        </ul>
                    </div>
                    <div class="right-nav align-items-center d-flex justify-content-end"><a class="mr-1 mr-sm-3"
                                                                                            href="#" data-toggle="modal"
                                                                                            data-target="#login"><i
                                class="las la-user-alt"></i></a>
                        <a class="mr-3 d-none d-sm-inline" href="#"><i class="lar la-heart"></i></a>
                        <div>
                            <a class="d-flex align-items-center" href="#" id="header-cart-btn"
                               data-toggle="modal" data-target="#cartModal" onclick="showcart();countCartData()"> <span
                                    class="bg-white px-2 py-1 shadow-sm rounded" id="countCartItem" data-cart-items="0">
                  <i class="las la-shopping-cart"></i>
                </span>
                                {{--   <div class="ml-4 d-none d-md-block"><small class="d-block text-muted">My
                                           Cart</small>
                                       <span class="text-dark">2 Items - $52</span>
                                   </div>--}}
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <!--menu end-->
        </div>
    </div>
</div>
