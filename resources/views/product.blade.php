<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Shop Premium Products Online | TheLuxery</title>

    <meta name="description" content="Buy premium fashion, accessories, and lifestyle products at TheLuxery. Explore high-quality items with the best prices and secure online shopping.">
    <meta name="keywords" content="buy products online, ecommerce products, fashion products, accessories shopping, TheLuxery store, online store">

    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/images/icons/favicon.png">

    <script>
        WebFontConfig = {
            google: { families: ['Segoe+Script:300,400,500,600', 'Poppins:300,400,500,600,700'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = '../assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="../assets/css/demo11.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/fontawesome-free/css/all.min.css">
    <style>
    .product-media-list {
        display: flex;
        flex-direction: column;
        gap: 20px; /* space between items */
        }
    @media (max-width: 480px) {
        .header-icon.header-search-inline {
        display:block !important;
        }
    }

    .product-default {
        padding: 10px;
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        transition: box-shadow 0.3s ease;
    }

    .product-default:hover {
        box-shadow: 0 4px 12px rgba(0, 136, 204, 0.5);
    }

    .whatsapp-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background-color: #17a74d;
        color: #fff;
        text-decoration: none;
        font-weight: 600;
        padding: 10px 18px;
        border-radius: 8px;
        transition: none;
        cursor: pointer;
    }
    
    .whatsapp-btn img {
        display: inline-block;
    }
    .whatsapp-btn span {
        color: #fff !important;
    }
    
</style>
</head>

<body>
    <div class="page-wrapper">

            @include('layouts.header')

        <main class="main">
            <div class="container">
                <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="demo11.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Products</a></li>
                    </ol>
                </nav>
                <div class="product-single-container product-single-default">
                    <div class="cart-message d-none">
                        <strong class="single-cart-notice">“Men Black Sports Shoes”</strong>
                        <span>has been added to your cart.</span>
                    </div>
                    @php
                        $sortedImages = $product->images->sortBy('serial_no');

                        $mainImage = optional($sortedImages->first())->file_path;
                        $mainExt = strtolower(pathinfo($mainImage, PATHINFO_EXTENSION));
                        $mediaUrl = env('SOURCE_PANEL_IMAGE_URL') . $mainImage;

                        $videoExtensions = ['mp4', 'mov', 'avi', 'webm'];
                    @endphp
                    <div class="row">
                        <div class="col-lg-5 col-md-6 product-single-gallery">
                            <div class="product-slider-container">
                                <div class="label-group">
                                    <div class="product-label label-hot">HOT</div>
                                    <!---->
                                    <div class="product-label label-sale">
                                        -16%
                                    </div>
                                </div>

                                <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                                    <div class="product-item" id="mainMediaContainer">
                                        @if($sortedImages->count())
                                            <img 
                                                id="mainProductMedia"
                                                src="{{ env('SOURCE_PANEL_IMAGE_URL') . $sortedImages->first()->file_path }}" 
                                                alt="{{ $product->product_name }}"
                                                style="width:100%; object-fit:cover;"
                                            >
                                        @endif
                                    </div>                                    
                                </div>
                               
                            </div>

                             <div class="prod-thumbnail owl-dots">
                                @foreach ($product->images->sortBy('serial_no') as $image)
                                    @php
                                        $ext = strtolower(pathinfo($image->file_path, PATHINFO_EXTENSION));
                                        $isVideo = in_array($ext, $videoExtensions);
                                        $mediaUrl = env('SOURCE_PANEL_IMAGE_URL') . $image->file_path;
                                    @endphp

                                    <div class="owl-dot"
                                        data-src="{{ $mediaUrl }}"
                                        data-type="{{ $isVideo ? 'video' : 'image' }}"
                                        data-ext="{{ $ext }}"
                                        style="cursor:pointer;">

                                        @if($isVideo)
                                            <video width="110" height="110" muted autoplay loop playsinline preload="metadata" controls
                                                style="object-fit: cover; border-radius: 4px;">
                                                <source src="{{ $mediaUrl }}" type="video/{{ $ext }}">
                                            </video>
                                        @else
                                            <img src="{{ $mediaUrl }}" width="110" height="110" alt="product-thumbnail"
                                                style="object-fit: cover; border-radius: 4px;" />
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div><!-- End .product-single-gallery -->

                        <div class="col-lg-7 col-md-6 product-single-details">
                            <h1 class="product-title">{{ $product->product_name }}</h1>

                             <div class="product-nav">
                                @if($prevProduct)
                                    <div class="product-prev">
                                        <a href="{{ url('product/' . $prevProduct->product_url) }}">
                                            <span class="product-link"></span>
                                            <span class="product-popup">
                                                <span class="box-content">
                                                    <img alt="product" width="150" height="150"
                                                        src="{{ $prevProduct->images->first()?->file_path 
                                                                ? env('SOURCE_PANEL_IMAGE_URL') . '/' . $prevProduct->images->first()->file_path 
                                                                : env('SOURCE_PANEL_IMAGE_URL') . '/NPIA.png' }}"
                                                                style="padding-top: 0px;">                                                        

                                                    <span>{{ $prevProduct->title }}</span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                @endif

                                @if($nextProduct)
                                    <div class="product-next">
                                        <a href="{{ url('product/' . $nextProduct->product_url) }}">
                                            <span class="product-link"></span>
                                            <span class="product-popup">
                                                <span class="box-content">
                                                   <img alt="product" width="150" height="150"
                                                        src="{{ $nextProduct->images->first()?->file_path 
                                                            ? env('SOURCE_PANEL_IMAGE_URL') . '/' . $nextProduct->images->first()->file_path 
                                                            : env('SOURCE_PANEL_IMAGE_URL') . '/NPIA.png' }}"

                                                        style="padding-top: 0px;">
                                                    <span>{{ $nextProduct->title }}</span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                @endif
                            </div>

                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->

                                <a href="#" class="rating-link">( 6 Reviews )</a>
                            </div><!-- End .ratings-container -->

                            <hr class="short-divider">

                             @php
                                $firstVariant = $variants->first();
                            @endphp

                            @if (!empty($firstVariant->product_price))
                                <div class="price-box" style="font-size: 30px; color: navy;">
                                    <span id="variant-price" 
                                        style="{{ $firstVariant->purchase_value != 715 ? 'text-decoration: underline; text-decoration-color: navy;' : '' }}">
                                        USD{{ number_format($firstVariant->product_price) }} +shipping fees
                                    </span>
                                </div>
                            @endif

                            <div class="product-meta" style="margin: 10px 0;">
                                <p>{{ $product->sku }} / {{ $product->purchase_code }}</p>
                            </div>

                            <div class="product-desc">
                                {!! $product->description !!}
                                {!! $product->chinese_description !!}
                            </div>

                         @php
                            use Illuminate\Support\Facades\Http;

                            $categoryIds = array_filter(explode(',', $product->category_ids));

                            $response = Http::get(env('SOURCEPANEL_API_BASE_URL') . 'categories');
                            $categories = $response->json();
                        @endphp

                        @if (!empty($categoryIds) && $categoryIds[0] == '1')
                            @foreach (array_slice($categoryIds, 1) as $catId)
                                @php
                                    $category = collect($categories)->firstWhere('category_id', $catId);
                                @endphp

                                @if($category)
                                    <p>{{ $category['category_name'] }}</p>
                                @endif
                            @endforeach
                        @endif

                        @if (!empty($product->size))                        
                            <strong class="product-size me-3"> Size: <span id="variant-size">{{ str_replace(' ', '', $product->size) }}</span></strong>
                        @endif

                            <div class="product-action">
                                
                                    <a href="https://api.whatsapp.com/send?phone=8618202031361&text={{ urlencode(url()->current()) }}"
                                        target="_blank"
                                        title="Buy on WhatsApp"
                                        class="whatsapp-btn">
                                        <img src="{{ env('SOURCE_PANEL_ECOMMERCE_URL') }}/public/whatsapp.png" 
                                                alt="WhatsApp" 
                                            width="24" 
                                            height="24"/>
                                        <span>Buy on WhatsApp</span>
                                    </a>     
                                
                            </div><!-- End .product-action -->
                          
                            <hr class="divider mb-0 mt-0">

                            <div class="product-single-share mb-2 mb-md-1 pb-1">
                                <label class="sr-only">Share:</label>

                                <div class="social-icons mr-2">
                                    <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"
                                        title="Facebook"></a>
                                    <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"
                                        title="Twitter"></a>
                                    <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank"
                                        title="Linkedin"></a>
                                    <a href="#" class="social-icon social-gplus fab fa-google-plus-g" target="_blank"
                                        title="Google +"></a>
                                    <a href="#" class="social-icon social-mail icon-mail-alt" target="_blank"
                                        title="Mail"></a>
                                </div><!-- End .social-icons -->

                                <a href="wishlist.html" class="btn-icon-wish add-wishlist" title="Add to Wishlist"><i
                                        class="icon-wishlist-2"></i><span>Add to
                                        Wishlist</span></a>
                            </div><!-- End .product single-share -->
                        </div><!-- End .product-single-details -->
                    </div><!-- End .row -->
                </div><!-- End .product-single-container -->

            <div class="product-media-list">
                @foreach ($product->images->sortBy('serial_no') as $image)
                    @php
                        $ext = strtolower(pathinfo($image->file_path, PATHINFO_EXTENSION));
                        $isVideo = in_array($ext, $videoExtensions);
                        $mediaUrl = env('SOURCE_PANEL_IMAGE_URL') . $image->file_path;
                    @endphp

                    <div class="media-item" style="margin-bottom: 20px;">
                        @if($isVideo)
                            <video muted autoplay loop playsinline controls
                                style="width: 100%; height: auto; object-fit: cover; border-radius: 6px;">
                                <source src="{{ $mediaUrl }}" type="video/{{ $ext }}">
                            </video>
                        @else
                            <img src="{{ $mediaUrl }}" alt="product-media"
                                style="width: 100%; height: auto; object-fit: cover; border-radius: 6px;">
                        @endif
                    </div>
                @endforeach
            </div>

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
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/plugins.min.js"></script>
    <script src="../assets/js/nouislider.min.js"></script>

    <!-- Main JS File -->
    <script src="../assets/js/main.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {

            document.querySelectorAll(".prod-thumbnail .owl-dot").forEach(function (thumb) {
                thumb.addEventListener("click", function () {

                    let src = this.getAttribute("data-src");
                    let type = this.getAttribute("data-type");
                    let ext = this.getAttribute("data-ext");

                    let container = document.getElementById("mainMediaContainer");

                    if (type === "video") {
                        container.innerHTML = `
                            <video width="100%" autoplay muted loop playsinline controls style="object-fit: cover;">
                                <source src="${src}" type="video/${ext}">
                            </video>
                        `;
                    } else {
                        container.innerHTML = `
                            <img src="${src}" style="width:100%; object-fit:cover;" />
                        `;
                    }

                });
            });

        });
        </script>
        
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5e565d3e298c395d1ce9e507/1j3igdrg8';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
</body>

</html>