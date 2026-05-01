<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Contact TheLuxery | Customer Support & Help</title>

    <meta name="description" content="Contact TheLuxery for support, product inquiries, and order assistance. Reach our team for a smooth and reliable shopping experience.">
    <meta name="keywords" content="contact TheLuxery, ecommerce support, customer service, online shopping help">

    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.png">

    <script>
        WebFontConfig = {
            google: { families: [ 'Segoe+Script:300,400,500,600', 'Poppins:300,400,500,600,700' ] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[ 0 ];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/demo11.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
</head>

<body>
    <div class="page-wrapper">
       @include('layouts.header')

        <main class="main contact-two">
            <div id="map"></div><!-- End #map -->

            <div class="container">
                <div class="row ">
                    <div class="col-md-8">
                        <h2 class="contact-title">Leave a <strong>Message</strong></h2>

                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group required-field">
                                        <label for="contact-name">Name</label>
                                        <input type="text" class="form-control" id="contact-name" name="contact-name"
                                            required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label for="contact-email">Email</label>
                                        <input type="email" class="form-control" id="contact-email" name="contact-email"
                                            required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="contact-subject">Subject</label>
                                        <input type="text" class="form-control" id="contact-subject"
                                            name="contact-subject">
                                    </div><!-- End .form-group -->
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group required-field mb-0">
                                        <label for="contact-message">Message</label>
                                        <textarea cols="30" rows="1" id="contact-message" class="form-control"
                                            name="contact-message" required></textarea>
                                    </div><!-- End .form-group -->

                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-primary">Send Message</button>
                                    </div><!-- End .form-footer -->
                                </div>
                            </div>
                        </form>
                    </div><!-- End .col-md-8 -->

                    <div class="col-md-4">
                        <h2 class="contact-title">Contact <strong>Details</strong></h2>

                        <div class="contact-info">
                            <div class="porto-sicon-box d-flex align-items-center">
                                <div class="porto-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="porto-sicon-description">
                                    0201 203 2032<br>
                                    0201 203 2032
                                </div>
                            </div>
                            <div class="porto-sicon-box  d-flex align-items-center">
                                <div class="porto-icon">
                                    <i class="fas fa-mobile-alt mobile-phone"></i>
                                </div>
                                <div class="porto-sicon-description">
                                    201-123-39223<br>
                                    02-123-3928
                                </div>
                            </div>
                            <div class="porto-sicon-box  d-flex align-items-center">
                                <div class="porto-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="porto-sicon-description">
                                    porto@gmail.com<br>
                                    porto@portotemplate.com
                                </div>
                            </div>
                            <div class="porto-sicon-box  d-flex align-items-center">
                                <div class="porto-icon">
                                    <i class="fab fa-skype"></i>
                                </div>
                                <div class="porto-sicon-description">
                                    porto_skype<br>
                                    porto_templete
                                </div>
                            </div>
                        </div><!-- End .contact-info -->
                    </div><!-- End .col-md-4 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </main><!-- End .main -->

      @include('layouts.footer')
    </div><!-- End .page-wrapper -->

    <div class="sticky-navbar">
        <div class="sticky-info">
            <a href="demo11.html">
                <i class="icon-home"></i>Home
            </a>
        </div>
        <div class="sticky-info">
            <a href="demo11-shop.html" class="">
                <i class="icon-bars"></i>Categories
            </a>
        </div>
        <div class="sticky-info">
            <a href="wishlist.html" class="">
                <i class="icon-wishlist-2"></i>Wishlist
            </a>
        </div>
        <div class="sticky-info">
            <a href="login.html" class="">
                <i class="icon-user-2"></i>Account
            </a>
        </div>
        <div class="sticky-info">
            <a href="cart.html" class="">
                <i class="icon-shopping-cart position-relative">
                    <span class="cart-count badge-circle">3</span>
                </i>Cart
            </a>
        </div>
    </div>

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/nouislider.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>
    <!-- Google Map-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDc3LRykbLB-y8MuomRUIY0qH5S6xgBLX4"></script>
    <script src="assets/js/map.js"></script>
</body>

</html>