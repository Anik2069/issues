<!DOCTYPE html>
<html lang="en">
<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="bootstrap 4, premium, multipurpose, sass, scss, saas"/>
    <meta name="description" content="Bootstrap 4 Landing Page Template"/>
    <meta name="author" content="www.themeht.com"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>ZangMart | Home</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ asset("assets/images/favicon.ico") }}"/>

    <!-- inject css start -->

    <link href="{{ asset("assets/css/theme-plugin.css") }} " rel="stylesheet"/>
    <link href="{{ asset("assets/css/theme.min.css") }}" rel="stylesheet"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">

    <!-- inject css end -->


</head>

<body>

<!-- page wrapper start -->

<div class="page-wrapper">

    <!-- preloader start -->

    <div id="ht-preloader">
        <div class="loader clear-loader">
            <img class="img-fluid" src="{{ asset("assets/images/loader.gif") }}" alt="">
        </div>
    </div>

    <!-- preloader end -->


    <!--header start-->

    <header class="site-header">
        @include("nav")
    </header>

    <!--header end-->


    <!--hero section start-->


    <!--hero section end-->


    <!--body content start-->

@yield("content")

<!--body content end-->


    <!--footer start-->

@include("footer")

<!--footer end-->

</div>

<!-- page wrapper end -->

<!-- Cart Modal -->

@include("component")

<!-- Quick View Modal -->


<div id="modalshow">
    @include("product_pop_info")
</div>

<!-- Subscribe Modal -->
{{--<div class="modal fade" id="mailchimpModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" data-bg-img="assets/images/bg/08.png">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="mb-4">
                    <h6 class="text-primary mb-1">
                        — Newsletter
                    </h6>
                    <h2 class="mb-0">Subscribe get notified!</h2>
                </div>
                <div class="subscribe-form">
                    <form id="mc-form1" class="row align-items-center no-gutters mb-3">
                        <div class="col">
                            <input value="" name="EMAIL" class="email form-control input-2 bg-white" id="mc-email1"
                                   placeholder="Email Address" required="" type="email">
                        </div>
                        <div class="col-auto">
                            <input class="btn btn-primary overflow-auto" name="subscribe" value="Subscribe"
                                   type="submit">
                        </div>
                    </form>
                    --}}{{--<small>Get started for 1 Month free trial No Purchace required.</small>--}}{{--
                </div>
            </div>
        </div>
    </div>
</div>--}}


<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="las la-angle-up"></i></a></div>

<!--back-to-top end-->

<!-- inject js start -->

@include("custom_js")


<script src="{{ asset("assets/js/theme-plugin.js") }}"></script>
<script src="{{ asset("assets/js/theme-script.js") }}"></script>

<!-- inject js end -->

</body>
</html>
