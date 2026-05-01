<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>TheLuxery | Premium Online Shopping for Fashion, Accessories & Lifestyle</title>

    <meta name="description" content="Shop premium fashion, accessories, and lifestyle products at TheLuxery. Discover high-quality items, exclusive deals, and a seamless online shopping experience.">
    <meta name="keywords" content="TheLuxery, online shopping, ecommerce website, fashion store, accessories online, lifestyle products, buy online, premium shopping">
    
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.png">

    <script>
        WebFontConfig = {
            google: { families: ['Segoe+Script:300,400,500,600', 'Poppins:300,400,500,600,700'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>
	<style>
           @media (max-width: 480px) {
                .header-icon.header-search-inline {
                    display: block !important;
                }
            }

            /* Product Card */
            .product-default {
                padding: 10px;
                border: 1px solid #e0e0e0;
                border-radius: 10px;
                transition: box-shadow 0.3s ease;
            }

            .product-default:hover {
                box-shadow: 0 4px 12px rgba(0, 136, 204, 0.5);
            }

            #loading {
                display: none;

                position: relative; /* 🔥 KEY CHANGE */
                width: 100%;
                height: 80px;

                backdrop-filter: blur(2px);
                background: transparent;

                z-index: 1;
            }

            #loading.active {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            /* loader container */
            .loading-overlay {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            /* dots animation */
            .bounce-loader {
                display: flex;
                gap: 6px;
            }

            .bounce-loader > div {
                width: 10px;
                height: 10px;
                background-color: #007bff;
                border-radius: 50%;
                animation: bounceDelay 1.4s infinite ease-in-out both;
            }

            .bounce1 { animation-delay: -0.32s; }
            .bounce2 { animation-delay: -0.16s; }

            @keyframes bounceDelay {
                0%, 80%, 100% {
                    transform: scale(0);
                    opacity: 0.4;
                }
                40% {
                    transform: scale(1);
                    opacity: 1;
                }
            }

            .title {
                font-size: 20px;
                font-weight: bold;
            }

            /* ✅ FIX ALL PRODUCT IMAGE SIZE */
            .img-box {
                width: 100%;
                aspect-ratio: 1 / 1; /* perfect square */
                position: relative;
                overflow: hidden;
                background: #f8f8f8;
            }

            /* main image */
            .img-box img {
                width: 100%;
                height: 100%;
                object-fit: cover; /* 🔥 KEY FIX */
                position: absolute;
                top: 0;
                left: 0;
                transition: opacity 0.3s ease;
            }

            /* hover image */
            .img-box .hover-img {
                opacity: 0;
            }

            .product-default:hover .hover-img {
                opacity: 1;
            }

            .product-default:hover .main-img {
                opacity: 0;
            }
        </style>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/demo11.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
</head>

<body>
    <div class="page-wrapper">

		    @include('layouts.header')

        <main class="main">
            <div class="home-slider-container clearfix">
                <div class="home-slider slide-animate owl-carousel owl-theme show-nav-hover">
                    <div class="home-slide home-slide1 d-flex align-items-center banner">
                        <img class="slide-bg" src="assets/images/demoes/demo11/slider/slide-1.jpg" width="1920"
                            height="804" alt="banner" />
                        <!-- End .slide-bg -->
                        <div class="container">
                            <div class="banner-layer banner-layer-right float-right appear-animate"
                                data-animation-name="fadeInUpShorter">
                                <h2>New Season Dresses</h2>
                                <h3 class="text-uppercase rotated-upto-text mb-0"><small>Up to</small>50% off</h3>

                                <hr class="divider-short-thick">

                                <h5 class="text-uppercase d-inline-block mb-0 ls-n-20">Starting at
                                    <span>$<em>39</em>99</span></h5>
                                <a href="demo11-shop.html" class="btn btn-light btn-xl btn-icon-right"
                                    role="button">Shop
                                    Now <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div><!-- End .banner-layer -->
                        </div>
                    </div><!-- End .home-slide -->

                    <div class="home-slide home-slide2 d-flex align-items-center banner">
                        <img class="slide-bg" src="assets/images/demoes/demo11/slider/slide-2.jpg" width="1920"
                            height="804" alt="banner" />
                        <!-- End .slide-bg -->
                        <div class="container">
                            <div class="banner-layer banner-layer-left float-left appear-animate"
                                data-animation-name="fadeInUpShorter">
                                <h2>New Season Hats</h2>
                                <h3 class="text-uppercase rotated-upto-text mb-0"><small>Up to</small>20% off</h3>

                                <hr class="divider-short-thick">

                                <h5 class="text-uppercase d-inline-block mb-0 ls-n-20">Starting at
                                    <span>$<em>19</em>99</span></h5>
                                <a href="demo11-shop.html" class="btn btn-light btn-xl btn-icon-right"
                                    role="button">Shop
                                    Now <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div><!-- End .banner-layer -->
                        </div>
                    </div><!-- End .home-slide -->
                </div><!-- End .home-slider -->
            </div><!-- End .home-slider-container -->

            <div class="banners-container text-uppercase clear appear-animate" data-animation-name="fadeIn">
                <div class="container">
                    <div class="row row-joined">
                        <div class="banner col-md-4">
                            <div class="banner-content text-left">
                                <h3 class="banner-title mb-0">Sunglasses</h3>
                                <p>16 Products</p>
                                <hr class="divider-short-thick">

                                <a href="{{ url('sunglasses') }}" class="btn">Shop now <i
                                        class="fas fa-long-arrow-alt-right"></i></a>
                            </div><!-- End .banner-content -->
                            <a href="#">
                                <img src="assets/images/demoes/demo11/banners/banner-1.jpg"
                                    style="background-color: #efefef;" alt="banner">
                            </a>
                        </div><!-- End .banner -->
                        <div class="banner col-md-4">
                            <div class="banner-content text-left">
                                <h3 class="banner-title m-b-1">Woman Shoes</h3>
                                <p>12 Products</p>
                                <hr class="divider-short-thick">

                                <a href="{{ url('shoes') }}" class="btn">Shop now <i
                                        class="fas fa-long-arrow-alt-right"></i></a>
                            </div><!-- End .banner-content -->
                            <a href="#">
                                <img src="assets/images/demoes/demo11/banners/banner-2.jpg"
                                    style="background-color: #efefef;" alt="banner">
                            </a>
                        </div><!-- End .banner -->
                        <div class="banner col-md-4">
                            <div class="banner-content text-left">
                                <h3 class="banner-title m-b-1">Woman Bags</h3>
                                <p>38 Products</p>
                                <hr class="divider-short-thick">

                                <a href="{{ url('bags') }}" class="btn">Shop now <i
                                        class="fas fa-long-arrow-alt-right"></i></a>
                            </div><!-- End .banner-content -->
                            <a href="#">
                                <img src="assets/images/demoes/demo11/banners/banner-3.jpg"
                                    style="background-color: #efefef;" alt="banner">
                            </a>
                        </div><!-- End .banner -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .banners-container -->

            <div class="container mb-5">
                <div class="info-boxes-container appear-animate" data-animation-name="fadeIn">
                    <div class="row row-joined">
                        <div class="info-box info-box-icon-left col-lg-4">
                            <i class="icon-shipping"></i>

                            <div class="info-box-content">
                                <h4>FREE SHIPPING &amp; RETURN</h4>
                                <p>Free shipping on all orders over $99.</p>
                            </div><!-- End .info-box-content -->
                        </div><!-- End .info-box -->

                        <div class="info-box info-box-icon-left col-lg-4">
                            <i class="icon-money"></i>

                            <div class="info-box-content">
                                <h4>MONEY BACK GUARANTEE</h4>
                                <p>100% money back guarantee</p>
                            </div><!-- End .info-box-content -->
                        </div><!-- End .info-box -->

                        <div class="info-box info-box-icon-left col-lg-4">
                            <i class="icon-support"></i>

                            <div class="info-box-content">
                                <h4>ONLINE SUPPORT 24/7</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div><!-- End .info-box-content -->
                        </div><!-- End .info-box -->
                    </div><!-- End .row -->
                </div><!-- End .info-boxes-container -->
            </div><!-- End .container -->

            <div class="container mb-4 mb-lg-6">
                <h2 class="section-title text-center appear-animate" data-animation-name="fadeInUpShorter"
                    data-animation-delay="200">Featured Products</h2>
                <p class="section-description text-center appear-animate" data-animation-name="fadeInUpShorter"
                    data-animation-delay="200">Amazing products added recently in our catalog</p>

                <div class="row product-ajax-grid appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="400" id="product-list">

					@foreach($products as $product)

						 @php
                            $media = collect($product->images ?? [])
                                ->sortBy(function($img) {
                                    return is_array($img) 
                                        ? ($img['serial_no'] ?? 0) 
                                        : ($img->serial_no ?? 0);
                                })
                                ->values()
                                ->take(2);

                            $firstImage = $media->first();
                            $secondImage = $media->skip(1)->first();

                            $img1 = is_array($firstImage) 
                                ? ($firstImage['file_path'] ?? '') 
                                : ($firstImage->file_path ?? '');

                            $img2 = is_array($secondImage) 
                                ? ($secondImage['file_path'] ?? '') 
                                : ($secondImage->file_path ?? '');
                        @endphp
						<div class="col-sm-3 col-6">
							<div class="product-default inner-quickview inner-icon">
								<figure>
                                    <a href="{{ url('product/' . ($product->product_url ?? '#')) }}">

                                        <div class="img-box">

                                            <img 
                                                src="{{ $img1 ? env('SOURCE_PANEL_IMAGE_URL') . $img1 : asset('default.jpg') }}" 
                                                class="main-img" 
                                                alt="product"
                                            >

                                            @if($img2)
                                                <img 
                                                    src="{{ env('SOURCE_PANEL_IMAGE_URL') . $img2 }}" 
                                                    class="hover-img" 
                                                    alt="product"
                                                >
                                            @endif

                                        </div>

                                    </a>

                                    {{-- Discount --}}
                                    @if(!empty($product->discount))
                                        <div class="label-group">
                                            <div class="product-label label-sale">{{ $product->discount }}%</div>
                                        </div>
                                    @endif

                                    <div class="btn-icon-group">
                                        <a href="{{ url('product/' . ($product->product_url ?? '#')) }}"
                                        class="btn-icon btn-add-cart">
                                            <i class="fa fa-arrow-right"></i>
                                        </a>
                                    </div>

                                    <a href="#" class="btn-quickview">Quick View</a>
                                </figure>

								<div class="product-details">
									<div class="category-wrap">
										<div class="category-list">
											<a href="#" class="product-category">
												{{ is_array($product->category ?? null) 
													? ($product->category['name'] ?? 'Category') 
													: ($product->category->name ?? 'Category') }}
											</a>
										</div>
									</div>

									<h3 class="product-title">
										<a href="{{ url('product/' . ($product->product_url ?? '#')) }}">
											{{ $product->product_name ?? 'Product Name' }}
										</a>
									</h3>

									<div class="price-box">
										@if(!empty($product->old_price))
											<span class="old-price">₹{{ $product->old_price }}</span>
										@endif

										<span class="product-price">
											₹{{ $product->product_price ?? 0 }}
										</span>
									</div>
								</div>
							</div>
						</div>

					@endforeach

				</div>

               <div id="loading">
                    <div class="loading-overlay">
                        <div class="bounce-loader">
                            <div class="bounce1"></div>
                            <div class="bounce2"></div>
                            <div class="bounce3"></div>
                        </div>
                    </div>
                </div>

                <div id="scroll-sentinel"></div>

                <hr class="mb-4 pb-1">

                <h2 class="section-title text-center appear-animate" data-animation-name="fadeIn"
                    data-animation-delay="100">Browse Categories</h2>
                <p class="section-description text-center appear-animate" data-animation-name="fadeIn"
                    data-animation-delay="100">Amazing categories with only top fashion products</p>

                <div class="owl-carousel owl-theme categories-slider content-center-bottom nav-outer appear-animate"
                    data-animation-name="fadeIn" data-animation-delay="100" data-owl-options="{
                    'nav': false,
                    'responsive': {
                        '0': {
                            'items': 1
                        },
                        '480': {
                            'items': 2
                        }
                    }
                }">
                    <div class="product-category">
                        <a href="{{ route('home') }}/bag">
                            <figure>
                                <img src="assets/images/demoes/demo11/categories/category-1.jpg" width="220"
                                    height="220" alt="Category" />
                            </figure>
                            <div class="category-content">
                                <h3>Bags</h3>
                            </div>
                        </a>
                    </div>
                    <div class="product-category">
                        <a href="{{ route('home') }}/watches">
                            <figure>
                                <img src="assets/images/demoes/demo11/categories/category-2.jpg" width="220"
                                    height="220" alt="Category" />
                            </figure>
                            <div class="category-content">
                                <h3>Watches</h3>
                            </div>
                        </a>
                    </div>
                    <div class="product-category">
                        <a href="{{ route('home') }}/jackets">
                            <figure>
                                <img src="assets/images/demoes/demo11/categories/category-3.jpg" width="220"
                                    height="220" alt="Category" />
                            </figure>
                            <div class="category-content">
                                <h3>Jackets</h3>
                            </div>
                        </a>
                    </div>
                    <div class="product-category">
                        <a href="{{ route('home') }}/sunglasses">
                            <figure>
                                <img src="assets/images/demoes/demo11/categories/category-4.jpg" width="220"
                                    height="220" alt="Category" />
                            </figure>
                            <div class="category-content">
                                <h3>Sunglasses</h3>
                            </div>
                        </a>
                    </div>
                    <div class="product-category">
                        <a href="{{ route('home') }}/shoes">
                            <figure>
                                <img src="assets/images/demoes/demo11/categories/category-5.jpg" width="220"
                                    height="220" alt="Category" />
                            </figure>
                            <div class="category-content">
                                <h3>Shoes</h3>
                            </div>
                        </a>
                    </div>                    
                </div><!-- End .categories-slider -->
            </div><!-- End .container -->

            <div class="promo-section mb-5" data-parallax="{'speed': 1.5}"
                data-image-src="assets/images/demoes/demo11/banners/category-bg.jpg">
                <div class="promo-content">
                    <h2 class="m-b-1 appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200">
                        New Season Sale</h2>
                    <h3 class="mb-1 appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="400">40%
                        OFF</h3>
                    <hr class="divider-short-thick appear-animate" data-animation-name="fadeInUpShorter"
                        data-animation-delay="600">
                    <a href="demo11-shop.html" class="btn btn-light appear-animate"
                        data-animation-name="fadeInUpShorter" data-animation-delay="800">Shop Now <i
                            class="fas fa-long-arrow-alt-right ml-2 pl-1"></i></a>
                </div>
            </div><!-- End .promo-section -->

          

            <div class="blog-section">
                <div class="container text-center">
                    <h2 class="section-title text-center appear-animate" data-animation-name="fadeInUpShorter"
                        data-animation-delay="200">FROM THE BLOG</h2>
                    <p class="section-description text-center mb-3 mb-lg-5 appear-animate"
                        data-animation-name="fadeInUpShorter" data-animation-delay="200">Only the latest news from us,
                        stay tuned.
                    </p>

                    <div class="owl-carousel owl-theme mb-4 pb-2 text-left appear-animate"
                        data-animation-name="fadeInUpShorter" data-animation-delay="500" data-owl-options="{
						'loop': false,
						'margin': 20,
						'autoHeight': true,
						'autoplay': false,
                        'items': 2,
                        'dots': false,
						'responsive': {
                            '0': {
								'items': 1
							},
							'576': {
								'items': 2
							}
						}
					}">
                        <article class="post">
                            <div class="post-media">
                                <a href="single.html">
                                    <img src="assets/images/demoes/demo11/blog/home/post-1.jpg" alt="Post" width="225"
                                        height="280">
                                </a>
                            </div><!-- End .post-media -->

                            <div class="post-body">
                                <h2 class="post-title">
                                    <a href="single.html">Fashion News</a>
                                </h2>
                                <div class="post-date">27-FEB-2018</div><!-- End .post-date -->
                                <div class="post-content">
                                    <p>Quisque elementum nibh at dolor pellentesque, a eleifend libero... </p>

                                    <a href="single.html" class="read-more">Read More<i
                                            class="fas fa-long-arrow-alt-right ml-1"></i></a>
                                </div><!-- End .post-content -->
                            </div><!-- End .post-body -->
                        </article><!-- End .post -->

                        <article class="post">
                            <div class="post-media">
                                <a href="single.html">
                                    <img src="assets/images/demoes/demo11/blog/home/post-2.jpg" alt="Post" width="225"
                                        height="280">
                                </a>
                            </div><!-- End .post-media -->

                            <div class="post-body">
                                <h2 class="post-title">
                                    <a href="single.html">Trends of Spring</a>
                                </h2>
                                <div class="post-date">27-FEB-2018</div><!-- End .post-date -->
                                <div class="post-content">
                                    <p>Quisque elementum nibh at dolor pellentesque, a eleifend libero... </p>

                                    <a href="single.html" class="read-more">Read More<i
                                            class="fas fa-long-arrow-alt-right ml-1"></i></a>
                                </div><!-- End .post-content -->
                            </div><!-- End .post-body -->
                        </article><!-- End .post -->

                        <article class="post">
                            <div class="post-media">
                                <a href="single.html">
                                    <img src="assets/images/demoes/demo11/blog/home/post-3.jpg" alt="Post" width="225"
                                        height="280">
                                </a>
                            </div><!-- End .post-media -->

                            <div class="post-body">
                                <h2 class="post-title">
                                    <a href="single.html">Women News</a>
                                </h2>
                                <div class="post-date">27-FEB-2018</div><!-- End .post-date -->
                                <div class="post-content">
                                    <p>Quisque elementum nibh at dolor pellentesque, a eleifend libero... </p>

                                    <a href="single.html" class="read-more">Read More<i
                                            class="fas fa-long-arrow-alt-right ml-1"></i></a>
                                </div><!-- End .post-content -->
                            </div><!-- End .post-body -->
                        </article><!-- End .post -->
                    </div>

                    <a class="btn btn-dark btn-lg appear-animate" data-animation-name="fadeInUpShorter"
                        data-animation-delay="700" href="blog.html">Our Blog</a>
                </div><!-- End .container -->
            </div><!-- End .blog-section -->

            <div class="brands-section appear-animate" data-animation-name="fadeIn" data-animation-delay="400">
                <div class="container">
                    <div class="brands-slider owl-carousel owl-theme images-center" data-owl-options="{
                        'loop': false,
                        'margin': 0
                    }">
                        <img src="assets/images/brands/small/brand1.png" width="140" height="60" alt="brand">
                        <img src="assets/images/brands/small/brand2.png" width="140" height="60" alt="brand">
                        <img src="assets/images/brands/small/brand3.png" width="140" height="60" alt="brand">
                        <img src="assets/images/brands/small/brand4.png" width="140" height="60" alt="brand">
                        <img src="assets/images/brands/small/brand5.png" width="140" height="60" alt="brand">
                        <img src="assets/images/brands/small/brand6.png" width="140" height="60" alt="brand">
                    </div><!-- End .brands-slider -->
                </div><!-- End. container-->
            </div><!-- End .brands-section -->
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
    <script src="assets/js/jquery.appear.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>
	<script>

const SOURCE_PANEL_URL = "{{ env('SOURCE_PANEL_URL') }}";
const SOURCE_PANEL_IMAGE_URL = "{{ env('SOURCE_PANEL_IMAGE_URL') }}";

let offset = {{ count($products) }};
let isLoading = false;
let allProductsLoaded = false;

function getParamsFromUrl() {

    const path = window.location.pathname.replace(/^\/+|\/+$/g, '');
    const segments = path.split('/').filter(Boolean);

    let category = '';
    let search = '';

    // ✅ FIX: always take LAST segment
    if (segments.length >= 1) {
        category = segments[segments.length - 1];
    }

    // ignore base folder (local)
    if (category === 'theluxury') {
        category = '';
    }

    if (category === 'sourcepanel-latest') {
        category = '';
    }

    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('search')) {
        search = urlParams.get('search');
        category = '';
    }

    return { category, search };
}

// ✅ Load more function
function loadMoreProducts() {

    if (isLoading || allProductsLoaded) return;

    isLoading = true;
    document.getElementById('loading').classList.add('active');

    const params = getParamsFromUrl();

    fetch("{{ route('products.load.more') }}", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}",
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            offset: offset,
            category: params.category,
            search: params.search
        })
    })
    .then(response => response.json())
    .then(products => {

        if (products.length === 0) {
            allProductsLoaded = true;
            isLoading = false;

            document.getElementById('loading').classList.remove('active');

            // ✅ STOP observer completely
            observer.disconnect();

            // ✅ show message only once
            if (!document.getElementById('no-more-products')) {
                const msg = document.createElement('div');
                msg.id = "no-more-products";
                msg.innerText = "No more products";
                msg.style.textAlign = "center";
                msg.style.padding = "20px";
                msg.style.fontWeight = "bold";

                document.getElementById('product-list').after(msg);
            }

            return;
        }

        let html = '';

        products.forEach(product => {

            // ✅ FIX IMAGE ORDER
            let images = product.images || [];

            images.sort((a, b) => {
                return parseInt(a.serial_no || 0) - parseInt(b.serial_no || 0);
            });

            let img1 = images[0]?.file_path 
                ? SOURCE_PANEL_IMAGE_URL + images[0].file_path 
                : '/default.jpg';

            let img2 = images[1]?.file_path 
                ? SOURCE_PANEL_IMAGE_URL + images[1].file_path 
                : '';

            html += `
            <div class="col-sm-3 col-6">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="product/${product.product_url ?? '#'}">

                            <!-- ✅ FIXED IMAGE STRUCTURE -->
                            <div class="img-box">
                                <img src="${img1}" class="main-img" alt="product">

                                ${img2 ? `<img src="${img2}" class="hover-img" alt="product">` : ''}
                            </div>

                        </a>

                        ${product.discount ? `
                        <div class="label-group">
                            <div class="product-label label-sale">${product.discount}%</div>
                        </div>` : ''}

                        <div class="btn-icon-group">
                            <a href="product/${product.product_url ?? '#'}" class="btn-icon btn-add-cart">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>

                        <a href="#" class="btn-quickview">Quick View</a>
                    </figure>

                    <div class="product-details">

                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="#" class="product-category">
                                    ${product.category?.name ?? 'Category'}
                                </a>
                            </div>
                        </div>

                        <h3 class="product-title">
                            <a href="product/${product.product_url ?? '#'}">
                                ${product.product_name ?? 'Product Name'}
                            </a>
                        </h3>

                        <div class="price-box">
                            ${product.old_price ? `<span class="old-price">₹${product.old_price}</span>` : ''}
                            <span class="product-price">₹${product.product_price ?? 0}</span>
                        </div>

                    </div>
                </div>
            </div>
            `;
        });

        document.getElementById('product-list')
            .insertAdjacentHTML('beforeend', html);

        offset += products.length;
        isLoading = false;
        document.getElementById('loading').classList.remove('active');

    })
    .catch(err => {
        console.error(err);
        isLoading = false;
        document.getElementById('loading').classList.remove('active');
    });
}


// ✅ Infinite scroll
const sentinel = document.getElementById('scroll-sentinel');

const observer = new IntersectionObserver(entries => {
    if (entries[0].isIntersecting && !isLoading && !allProductsLoaded) {
        loadMoreProducts();
    }
}, {
    rootMargin: "0px 0px 30% 0px"
});

observer.observe(sentinel);

</script>
</body>

</html>