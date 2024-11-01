@extends('layouts.content')
@section('content')
<body class="template-index home2-default">
    <div id="pre-loader">
        <img src="{{ asset('assets/images/loader.gif') }}" alt="Loading..." />
    </div>
    <div class="pageWrapper">
        <!--Promotion Bar-->
        <div class="notification-bar mobilehide">
            <a href="#" class="notification-bar__message">20% off your very first purchase, use promo code: belle fashion</a>
            <span class="close-announcement">×</span>
        </div>
        <!--End Promotion Bar-->
        <!--Search Form Drawer-->
        <div class="search">
            <div class="search__form">
                <form class="search-bar__form" action="#">
                    <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                    <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
                </form>
                <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
            </div>
        </div>
        <!--End Search Form Drawer-->
        <!--Top Header-->
        <x-header />
        <!--End Top Header-->
        <!--Header-->
        <div class="header-wrap animated d-flex border-bottom">
            <div class="container-fluid">        
                <div class="row align-items-center">
                    <!--Desktop Logo-->
                    <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                        <a href="index.html">
                            <img src="assets/images/logo.svg" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                        </a>
                    </div>
                    <!--End Desktop Logo-->
                    <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                        <div class="d-block d-lg-none">
                            <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                                <i class="icon anm anm-times-l"></i>
                                <i class="anm anm-bars-r"></i>
                            </button>
                        </div>
                        <!--Desktop Menu-->
                        <x-navbar />
                        <!--End Desktop Menu-->
                    </div>
                    <!--Mobile Logo-->
                    <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/images/logo.svg" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                            </a>
                        </div>
                    </div>
                    <!--Mobile Logo-->
                    <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                        <div class="site-cart">
                            <a href="#" class="site-header__cart" title="Cart">
                                <i class="icon anm anm-bag-l"></i>
                                <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">2</span>
                            </a>
                            <!--Minicart Popup-->
                            <div id="header-cart" class="block block-cart">
                                <ul class="mini-products-list">
                                    <li class="item">
                                        <a class="product-image" href="#">
                                            <img src="assets/images/product-images/cape-dress-1.jpg" alt="3/4 Sleeve Kimono Dress" title="" />
                                        </a>
                                        <div class="product-details">
                                            <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                            <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                            <a class="pName" href="cart.html">Sleeve Kimono Dress</a>
                                            <div class="variant-cart">Black / XL</div>
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <span class="label">Qty:</span>
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="priceRow">
                                                <div class="product-price">
                                                    <span class="money">$59.00</span>
                                                </div>
                                             </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a class="product-image" href="#">
                                            <img src="assets/images/product-images/cape-dress-2.jpg" alt="Elastic Waist Dress - Black / Small" title="" />
                                        </a>
                                        <div class="product-details">
                                            <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                            <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                            <a class="pName" href="cart.html">Elastic Waist Dress</a>
                                            <div class="variant-cart">Gray / XXL</div>
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <span class="label">Qty:</span>
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                               <div class="priceRow">
                                                <div class="product-price">
                                                    <span class="money">$99.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="total">
                                    <div class="total-in">
                                        <span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">$748.00</span></span>
                                    </div>
                                     <div class="buttonSet text-center">
                                        <a href="cart.html" class="btn btn-secondary btn--small">View Cart</a>
                                        <a href="checkout.html" class="btn btn-secondary btn--small">Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <!--End Minicart Popup-->
                        </div>
                        <div class="site-header__search">
                            <button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header-->
        
        <!--Mobile Menu-->
        <div class="mobile-nav-wrapper" role="navigation">
            <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
            <ul id="MobileNav" class="mobile-nav">
                <li class="lvl1 parent megamenu"><a href="index.html">Home <i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="#" class="site-nav">Home Group 1<i class="anm anm-plus-l"></i></a>
                  <ul>
                    <li><a href="index.html" class="site-nav">Home 1 - Classic</a></li>
                    <li><a href="home2-default.html" class="site-nav">Home 2 - Default</a></li>
                    <li><a href="home15-funiture.html" class="site-nav">Home 15 - Furniture </a></li>
                    <li><a href="home3-boxed.html" class="site-nav">Home 3 - Boxed</a></li>
                    <li><a href="home4-fullwidth.html" class="site-nav">Home 4 - Fullwidth</a></li>
                    <li><a href="home5-cosmetic.html" class="site-nav">Home 5 - Cosmetic</a></li>
                    <li><a href="home6-modern.html" class="site-nav">Home 6 - Modern</a></li>
                    <li><a href="home7-shoes.html" class="site-nav last">Home 7 - Shoes</a></li>
                  </ul>
                </li>
                <li><a href="#" class="site-nav">Home Group 2<i class="anm anm-plus-l"></i></a>
                  <ul>
                    <li><a href="home8-jewellery.html" class="site-nav">Home 8 - Jewellery</a></li>
                    <li><a href="home9-parallax.html" class="site-nav">Home 9 - Parallax</a></li>
                    <li><a href="home10-minimal.html" class="site-nav">Home 10 - Minimal</a></li>
                    <li><a href="home11-grid.html" class="site-nav">Home 11 - Grid</a></li>
                    <li><a href="home12-category.html" class="site-nav">Home 12 - Category</a></li>
                    <li><a href="home13-auto-parts.html" class="site-nav">Home 13 - Auto Parts</a></li>
                    <li><a href="home14-bags.html" class="site-nav last">Home 14 - Bags</a></li>
                  </ul>
                </li>
                <li><a href="#" class="site-nav">New Sections<i class="anm anm-plus-l"></i></a>
                  <ul>
                    <li><a href="home11-grid.html" class="site-nav">Image Gallery</a></li>
                    <li><a href="home5-cosmetic.html" class="site-nav">Featured Product</a></li>
                    <li><a href="home7-shoes.html" class="site-nav">Columns with Items</a></li>
                    <li><a href="home6-modern.html" class="site-nav">Text columns with images</a></li>
                    <li><a href="home2-default.html" class="site-nav">Products Carousel</a></li>
                    <li><a href="home9-parallax.html" class="site-nav last">Parallax Banner</a></li>
                  </ul>
                </li>
                <li><a href="#" class="site-nav">New Features<i class="anm anm-plus-l"></i></a>
                  <ul>
                    <li><a href="home13-auto-parts.html" class="site-nav">Top Information Bar </a></li>
                    <li><a href="#" class="site-nav">Age Varification </a></li>
                    <li><a href="#" class="site-nav">Footer Blocks</a></li>
                    <li><a href="#" class="site-nav">2 New Megamenu style</a></li>
                    <li><a href="#" class="site-nav">Show Total Savings </a></li>
                    <li><a href="#" class="site-nav">New Custom Icons</a></li>
                    <li><a href="#" class="site-nav last">Auto Currency</a></li>
                  </ul>
                </li>
              </ul>
            </li>
                <li class="lvl1 parent megamenu"><a href="#">Shop <i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="#" class="site-nav">Shop Pages<i class="anm anm-plus-l"></i></a>
                  <ul>
                    <li><a href="shop-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                    <li><a href="shop-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                    <li><a href="shop-fullwidth.html" class="site-nav">Fullwidth</a></li>
                    <li><a href="shop-grid-3.html" class="site-nav">3 items per row</a></li>
                    <li><a href="shop-grid-4.html" class="site-nav">4 items per row</a></li>
                    <li><a href="shop-grid-5.html" class="site-nav">5 items per row</a></li>
                    <li><a href="shop-grid-6.html" class="site-nav">6 items per row</a></li>
                    <li><a href="shop-grid-7.html" class="site-nav">7 items per row</a></li>
                    <li><a href="shop-listview.html" class="site-nav last">Product Listview</a></li>
                  </ul>
                </li>
                <li><a href="#" class="site-nav">Shop Features<i class="anm anm-plus-l"></i></a>
                  <ul>
                    <li><a href="shop-left-sidebar.html" class="site-nav">Product Countdown </a></li>
                    <li><a href="shop-right-sidebar.html" class="site-nav">Infinite Scrolling</a></li>
                    <li><a href="shop-grid-3.html" class="site-nav">Pagination - Classic</a></li>
                    <li><a href="shop-grid-6.html" class="site-nav">Pagination - Load More</a></li>
                    <li><a href="product-labels.html" class="site-nav">Dynamic Product Labels</a></li>
                    <li><a href="product-swatches-style.html" class="site-nav">Product Swatches </a></li>
                    <li><a href="product-hover-info.html" class="site-nav">Product Hover Info</a></li>
                    <li><a href="shop-grid-3.html" class="site-nav">Product Reviews</a></li>
                    <li><a href="shop-left-sidebar.html" class="site-nav last">Discount Label </a></li>
                  </ul>
                </li>
              </ul>
            </li>
                <li class="lvl1 parent megamenu"><a href="product-layout-1.html">Product <i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="product-layout-1.html" class="site-nav">Product Page<i class="anm anm-plus-l"></i></a>
                  <ul>
                    <li><a href="product-layout-1.html" class="site-nav">Product Layout 1</a></li>
                    <li><a href="product-layout-2.html" class="site-nav">Product Layout 2</a></li>
                    <li><a href="product-layout-3.html" class="site-nav">Product Layout 3</a></li>
                    <li><a href="product-with-left-thumbs.html" class="site-nav">Product With Left Thumbs</a></li>
                    <li><a href="product-with-right-thumbs.html" class="site-nav">Product With Right Thumbs</a></li>
                    <li><a href="product-with-bottom-thumbs.html" class="site-nav last">Product With Bottom Thumbs</a></li>
                  </ul>
                </li>
                <li><a href="short-description.html" class="site-nav">Product Features<i class="anm anm-plus-l"></i></a>
                  <ul>
                    <li><a href="short-description.html" class="site-nav">Short Description</a></li>
                    <li><a href="product-countdown.html" class="site-nav">Product Countdown</a></li>
                    <li><a href="product-video.html" class="site-nav">Product Video</a></li>
                    <li><a href="product-quantity-message.html" class="site-nav">Product Quantity Message</a></li>
                    <li><a href="product-visitor-sold-count.html" class="site-nav">Product Visitor/Sold Count </a></li>
                    <li><a href="product-zoom-lightbox.html" class="site-nav last">Product Zoom/Lightbox </a></li>
                  </ul>
                </li>
                <li><a href="#" class="site-nav">Product Features<i class="anm anm-plus-l"></i></a>
                  <ul>
                    <li><a href="product-with-variant-image.html" class="site-nav">Product with Variant Image</a></li>
                    <li><a href="product-with-color-swatch.html" class="site-nav">Product with Color Swatch</a></li>
                    <li><a href="product-with-image-swatch.html" class="site-nav">Product with Image Swatch</a></li>
                    <li><a href="product-with-dropdown.html" class="site-nav">Product with Dropdown</a></li>
                    <li><a href="product-with-rounded-square.html" class="site-nav">Product with Rounded Square</a></li>
                    <li><a href="swatches-style.html" class="site-nav last">Product Swatches All Style</a></li>
                  </ul>
                </li>
                <li><a href="#" class="site-nav">Product Features<i class="anm anm-plus-l"></i></a>
                  <ul>
                    <li><a href="product-accordion.html" class="site-nav">Product Accordion</a></li>
                    <li><a href="product-pre-orders.html" class="site-nav">Product Pre-orders </a></li>
                    <li><a href="product-labels-detail.html" class="site-nav">Product Labels</a></li>
                    <li><a href="product-discount.html" class="site-nav">Product Discount In %</a></li>
                    <li><a href="product-shipping-message.html" class="site-nav">Product Shipping Message</a></li>
                    <li><a href="product-shipping-message.html" class="site-nav last">Size Guide </a></li>
                  </ul>
                </li>
              </ul>
            </li>
                <li class="lvl1 parent megamenu"><a href="about-us.html">Pages <i class="anm anm-plus-l"></i></a>
              <ul>
                  <li><a href="cart-variant1.html" class="site-nav">Cart Page <i class="anm anm-plus-l"></i></a>
                    <ul class="dropdown">
                        <li><a href="cart-variant1.html" class="site-nav">Cart Variant1</a></li>
                        <li><a href="cart-variant2.html" class="site-nav">Cart Variant2</a></li>
                     </ul>
                </li>
                <li><a href="compare-variant1.html" class="site-nav">Compare Product <i class="anm anm-plus-l"></i></a>
                    <ul class="dropdown">
                        <li><a href="compare-variant1.html" class="site-nav">Compare Variant1</a></li>
                        <li><a href="compare-variant2.html" class="site-nav">Compare Variant2</a></li>
                     </ul>
                </li>
                <li><a href="checkout.html" class="site-nav">Checkout</a></li>
                <li><a href="about-us.html" class="site-nav">About Us<span class="lbl nm_label1">New</span></a></li>
                <li><a href="contact-us.html" class="site-nav">Contact Us</a></li>
                <li><a href="faqs.html" class="site-nav">FAQs</a></li>
                <li><a href="lookbook1.html" class="site-nav">Lookbook<i class="anm anm-plus-l"></i></a>
                  <ul>
                    <li><a href="lookbook1.html" class="site-nav">Style 1</a></li>
                    <li><a href="lookbook2.html" class="site-nav last">Style 2</a></li>
                  </ul>
                </li>
                <li><a href="404.html" class="site-nav">404</a></li>
                <li><a href="coming-soon.html" class="site-nav">Coming soon<span class="lbl nm_label1">New</span></a></li>
              </ul>
            </li>
                <li class="lvl1 parent megamenu"><a href="blog-left-sidebar.html">Blog <i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="blog-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                <li><a href="blog-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                <li><a href="blog-fullwidth.html" class="site-nav">Fullwidth</a></li>
                <li><a href="blog-grid-view.html" class="site-nav">Gridview</a></li>
                <li><a href="blog-article.html" class="site-nav">Article</a></li>
              </ul>
            </li>
                <li class="lvl1"><a href="#"><b>Buy Now!</b></a>
            </li>
          </ul>
        </div>
        <!--End Mobile Menu-->
        
        <!--Body Content-->
        <div id="page-content">
            <!--Home slider-->
            <div class="slideshow slideshow-wrapper pb-section">
                <div class="home-slideshow">
                    <div class="slide">
                        <div class="blur-up lazyload">
                            <img class="blur-up lazyload" data-src="assets/images/slideshow-banners/home2-default-banner1.jpg" src="assets/images/slideshow-banners/home2-default-banner1.jpg" alt="Shop Our New Collection" title="Shop Our New Collection" />
                            <div class="slideshow__text-wrap slideshow__overlay classic middle">
                                <div class="slideshow__text-content middle">
                                    <div class="container">
                                        <div class="wrap-caption right">
                                            <h2 class="h1 mega-title slideshow__title">Our New Collection</h2>
                                            <span class="mega-subtitle slideshow__subtitle">Save up to 50% Off</span>
                                            <span class="btn">Shop now</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="blur-up lazyload">
                            <img class="blur-up lazyload" data-src="assets/images/slideshow-banners/home2-default-banner2.jpg" src="assets/images/slideshow-banners/home2-default-banner2.jpg" alt="Summer Bikini Collection" title="Summer Bikini Collection" />
                            <div class="slideshow__text-wrap slideshow__overlay classic middle">
                                <div class="slideshow__text-content middle">
                                    <div class="container">
                                        <div class="wrap-caption center">
                                            <h2 class="h1 mega-title slideshow__title">Fashion &amp; Show</h2>
                                            <span class="mega-subtitle slideshow__subtitle">A World Fashion and Trendy Fashion Clother's</span>
                                            <span class="btn">Shop now</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Home slider-->



            <!--Weekly Bestseller-->
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="section-header text-center">
                                <h2 class="h2">Weekly Bestseller</h2>
                                <p>Our most popular products based on sales</p>
                            </div>
                            <div class="productSlider grid-products">

                                @foreach ( $products as $product)
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout-1.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image1.jpg" src="assets/images/product-images/product-image1.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image1-1.jpg" src="assets/images/product-images/product-image1-1.jpg" alt="image" title="product">
                                            <!-- End hover image -->
                                            <!-- Variant Image-->
                                            <img class="grid-view-item__image hover variantImg" src="assets/images/product-images/product-image1.jpg" alt="image" title="product">
                                            <!-- Variant Image-->
                                            <!-- product label -->
                                            <div class="product-labels rounded"><span class="lbl on-sale">Sale</span> <span class="lbl pr-label1">new</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->
                                        
                                        <!-- countdown start -->
                                        <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                        <!-- countdown end -->
    
                                        <!-- Start product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                            <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                        </form>
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                            <div class="compare-btn">
                                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                    <i class="icon anm anm-random-r"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product button -->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout-1.html">{{ $product->product_name}}</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            {{-- <span class="old-price">$500.00</span> --}}
                                            <span class="price">{{ $product->price }}</span>
                                        </div>
                                        <!-- End product price -->
                                        <!-- Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch small rounded navy" rel="assets/images/product-images/product-image-stw1.jpg"></li>
                                            <li class="swatch small rounded green" rel="assets/images/product-images/product-image-stw1-1.jpg"></li>
                                            <li class="swatch small rounded gray" rel="assets/images/product-images/product-image-stw1-2.jpg"></li>
                                            <li class="swatch small rounded aqua" rel="assets/images/product-images/product-image-stw1-3.jpg"></li>
                                            <li class="swatch small rounded orange" rel="assets/images/product-images/product-image-stw1-4.jpg"></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                @endforeach
                                
                                
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <!--Weekly Bestseller-->


            <!--Parallax Section-->
            <div class="section">
                <div class="hero hero--large hero__overlay bg-size">
                    <img class="bg-img" src="assets/images/parallax-banners/parallax-banner.jpg" alt="" />
                    <div class="hero__inner">
                        <div class="container">
                            <div class="wrap-text left text-small font-bold">
                                <h2 class="h2 mega-title">Belle <br> The best choice for your store</h2>
                                <div class="rte-setting mega-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                <a href="#" class="btn">Purchase Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Parallax Section-->
            <!--New Arrivals-->
            <div class="product-rows section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="section-header text-center">
                                <h2 class="h2">New Arrivals</h2>
                                <p>Grab these new items before they are gone!</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid-products">
                        <div class="row">
                            @foreach ( $products as $product)
                                @if ($loop->index<4)
                                    <div class="col-6 col-sm-2 col-md-3 col-lg-3 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="product-layout-1.html" class="grid-view-item__link">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image1.jpg" src="assets/images/product-images/product-image1.jpg" alt="image" title="product">
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image1-1.jpg" src="assets/images/product-images/product-image1-1.jpg" alt="image" title="product">
                                                <!-- End hover image -->
                                                <!-- Variant Image-->
                                                <img class="grid-view-item__image hover variantImg" src="assets/images/product-images/product-image1.jpg" alt="image" title="product">
                                                <!-- Variant Image-->
                                                <!-- product label -->
                                                <div class="product-labels rounded"><span class="lbl on-sale">Sale</span> <span class="lbl pr-label1">new</span></div>
                                                <!-- End product label -->
                                            </a>
                                            <!-- end product image -->
                                            
                                            <!-- countdown start -->
                                            <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                            <!-- countdown end -->
                
                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                            </form>
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="product-layout-1.html">{{ $product->product_name }}</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                {{-- <span class="old-price">$500.00</span> --}}
                                                <span class="price">{{ $product->price }}</span>
                                            </div>
                                            <!-- End product price -->
                                            <!-- Color Variant -->
                                            <ul class="swatches">
                                                <li class="swatch small rounded navy" rel="assets/images/product-images/product-image-stw1.jpg"></li>
                                                <li class="swatch small rounded green" rel="assets/images/product-images/product-image-stw1-1.jpg"></li>
                                                <li class="swatch small rounded gray" rel="assets/images/product-images/product-image-stw1-2.jpg"></li>
                                                <li class="swatch small rounded aqua" rel="assets/images/product-images/product-image-stw1-3.jpg"></li>
                                                <li class="swatch small rounded orange" rel="assets/images/product-images/product-image-stw1-4.jpg"></li>
                                            </ul>
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End product details -->
                                    </div>   
                                @endif      
                            @endforeach
                               
                        </div>
                        {{-- </div> --}}


                        {{-- 3rd row of pictures --}}
                        <div class="row">

                            @foreach ($products as $product)
                                @if($loop->index<4)
                                    <div class="col-6 col-sm-2 col-md-3 col-lg-3 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="product-layout-1.html" class="grid-view-item__link">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image5.jpg" src="assets/images/product-images/product-image5.jpg" alt="image" title="product" />
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image5-1.jpg" src="assets/images/product-images/product-image5-1.jpg" alt="image" title="product" />
                                                <!-- End hover image -->
                                                <!-- Variant Image-->
                                                <img class="grid-view-item__image hover variantImg" src="assets/images/product-images/product-image5.jpg" alt="image" title="product">
                                                <!-- Variant Image-->
                                            </a>
                                            <!-- end product image -->
                
                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                            </form>
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->
            
                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="product-layout-1.html">{{ $product->product_name }}</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">{{ $product->price }}</span>
                                            </div>
                                            <!-- End product price -->
                                            <!-- Color Variant -->
                                            <ul class="swatches">
                                                <li class="swatch small rounded gray" rel="assets/images/product-images/product-image16.jpg"></li>
                                                <li class="swatch small rounded red" rel="assets/images/product-images/product-image5.jpg"></li>
                                                <li class="swatch small rounded orange" rel="assets/images/product-images/product-image5-1.jpg"></li>
                                                <li class="swatch small rounded yellow" rel="assets/images/product-images/product-image17.jpg"></li>
                                            </ul>
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                @endif
                            @endforeach
                            
                        </div>    
                            
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                <a href="shop-left-sidebar.html" class="btn">View all</a>
                            </div>
                        </div>
                    </div>
               </div>
            </div>	
            <!--End Featured Product-->


            {{-- New arrival second section --}}
            
            <!--Logo Slider-->
            <div class="section logo-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="section-header text-center">
                                <h2 class="h2">The Most Loved Brands</h2>
                            </div>
                            <div class="logo-bar">
                                <div class="logo-bar__item">
                                    <img src="assets/images/logo/brandlogo1.png" alt="" title="" />
                                </div>
                                <div class="logo-bar__item">
                                    <img src="assets/images/logo/brandlogo2.png" alt="" title="" />
                                </div>
                                <div class="logo-bar__item">
                                    <img src="assets/images/logo/brandlogo3.png" alt="" title="" />
                                </div>
                                <div class="logo-bar__item">
                                    <img src="assets/images/logo/brandlogo4.png" alt="" title="" />
                                </div>
                                <div class="logo-bar__item">
                                    <img src="assets/images/logo/brandlogo5.png" alt="" title="" />
                                </div>
                                <div class="logo-bar__item">
                                    <img src="assets/images/logo/brandlogo6.png" alt="" title="" />
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Logo Slider-->
        </div>
        <!--End Body Content-->
        
      
        <!--Scoll Top-->
        <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
        <!--End Scoll Top-->
        
        <!--Quick View popup-->
        <div class="modal fade quick-view-popup" id="content_quickview">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div id="ProductSection-product-template" class="product-template__container prstyle1">
                    <div class="product-single">
                    <!-- Start model close -->
                    <a href="javascript:void()" data-dismiss="modal" class="model-close-btn pull-right" title="close"><span class="icon icon anm anm-times-l"></span></a>
                    <!-- End model close -->
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product-details-img">
                                <div class="pl-20">
                                    <img src="assets/images/product-detail-page/camelia-reversible-big1.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-single__meta">
                                    <h2 class="product-single__title">Product Quick View Popup</h2>
                                    <div class="prInfoRow">
                                        <div class="product-stock"> <span class="instock ">In Stock</span> <span class="outstock hide">Unavailable</span> </div>
                                        <div class="product-sku">SKU: <span class="variant-sku">19115-rdxs</span></div>
                                    </div>
                                    <p class="product-single__price product-single__price-product-template">
                                        <span class="visually-hidden">Regular price</span>
                                        <s id="ComparePrice-product-template"><span class="money">$600.00</span></s>
                                        <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                            <span id="ProductPrice-product-template"><span class="money">$500.00</span></span>
                                        </span>
                                    </p>
                                    <div class="product-single__description rte">
                                        Belle Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as fashion,...
                                    </div>
                                    
                                <form method="post" action="http://annimexweb.com/cart/add" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
                                    <div class="swatch clearfix swatch-0 option1" data-option-index="0">
                                        <div class="product-form__item">
                                          <label class="header">Color: <span class="slVariant">Red</span></label>
                                          <div data-value="Red" class="swatch-element color red available">
                                            <input class="swatchInput" id="swatch-0-red" type="radio" name="option-0" value="Red">
                                            <label class="swatchLbl color medium rectangle" for="swatch-0-red" style="background-image:url(assets/images/product-detail-page/variant1-1.jpg);" title="Red"></label>
                                          </div>
                                          <div data-value="Blue" class="swatch-element color blue available">
                                            <input class="swatchInput" id="swatch-0-blue" type="radio" name="option-0" value="Blue">
                                            <label class="swatchLbl color medium rectangle" for="swatch-0-blue" style="background-image:url(assets/images/product-detail-page/variant1-2.jpg);" title="Blue"></label>
                                          </div>
                                          <div data-value="Green" class="swatch-element color green available">
                                            <input class="swatchInput" id="swatch-0-green" type="radio" name="option-0" value="Green">
                                            <label class="swatchLbl color medium rectangle" for="swatch-0-green" style="background-image:url(assets/images/product-detail-page/variant1-3.jpg);" title="Green"></label>
                                          </div>
                                          <div data-value="Gray" class="swatch-element color gray available">
                                            <input class="swatchInput" id="swatch-0-gray" type="radio" name="option-0" value="Gray">
                                            <label class="swatchLbl color medium rectangle" for="swatch-0-gray" style="background-image:url(assets/images/product-detail-page/variant1-4.jpg);" title="Gray"></label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                        <div class="product-form__item">
                                          <label class="header">Size: <span class="slVariant">XS</span></label>
                                          <div data-value="XS" class="swatch-element xs available">
                                            <input class="swatchInput" id="swatch-1-xs" type="radio" name="option-1" value="XS">
                                            <label class="swatchLbl medium rectangle" for="swatch-1-xs" title="XS">XS</label>
                                          </div>
                                          <div data-value="S" class="swatch-element s available">
                                            <input class="swatchInput" id="swatch-1-s" type="radio" name="option-1" value="S">
                                            <label class="swatchLbl medium rectangle" for="swatch-1-s" title="S">S</label>
                                          </div>
                                          <div data-value="M" class="swatch-element m available">
                                            <input class="swatchInput" id="swatch-1-m" type="radio" name="option-1" value="M">
                                            <label class="swatchLbl medium rectangle" for="swatch-1-m" title="M">M</label>
                                          </div>
                                          <div data-value="L" class="swatch-element l available">
                                            <input class="swatchInput" id="swatch-1-l" type="radio" name="option-1" value="L">
                                            <label class="swatchLbl medium rectangle" for="swatch-1-l" title="L">L</label>
                                          </div>
                                        </div>
                                    </div>
                                    <!-- Product Action -->
                                    <div class="product-action clearfix">
                                        <div class="product-form__item--quantity">
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>                                
                                        <div class="product-form__item--submit">
                                            <button type="button" name="add" class="btn product-form__cart-submit">
                                                <span>Add to cart</span>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- End Product Action -->
                                </form>
                                <div class="display-table shareRow">
                                    <div class="display-table-cell">
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                    <!--End-product-single-->
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Quick View popup-->
        
        <!-- Newsletter Popup -->
        <div class="newsletter-wrap" id="popup-container">
          <div id="popup-window">
            <a class="btn closepopup"><i class="icon icon anm anm-times-l"></i></a>
            <!-- Modal content-->
            <div class="display-table splash-bg">
              <div class="display-table-cell width40"><img src="assets/images/newsletter-img.jpg" alt="Join Our Mailing List" title="Join Our Mailing List" /> </div>
              <div class="display-table-cell width60 text-center">
                <div class="newsletter-left">
                  <h2>Join Our Mailing List</h2>
                  <p>Sign Up for our exclusive email list and be the first to know about new products and special offers</p>
                  <form action="#" method="post">
                    <div class="input-group">
                      <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required="">
                      <span class="input-group__btn">
                      <button type="submit" class="btn newsletter__submit" name="commit" id="subscribeBtn"> <span class="newsletter__submit-text--large">Subscribe</span> </button>
                      </span> </div>
                  </form>
                  <ul class="list--inline site-footer__social-icons social-icons">
                    <li><a class="social-icons__link" href="#" title="Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    <li><a class="social-icons__link" href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a class="social-icons__link" href="#" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <li><a class="social-icons__link" href="#" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a class="social-icons__link" href="#" title="YouTube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    <li><a class="social-icons__link" href="#" title="Vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Newsletter Popup -->
        
         <!-- Including Jquery -->
         <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
         <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
         <script src="assets/js/vendor/jquery.cookie.js"></script>
         <script src="assets/js/vendor/wow.min.js"></script>
         <!-- Including Javascript -->
         <script src="assets/js/bootstrap.min.js"></script>
         <script src="assets/js/plugins.js"></script>
         <script src="assets/js/popper.min.js"></script>
         <script src="assets/js/lazysizes.js"></script>
         <script src="assets/js/main.js"></script>
         <!--For Newsletter Popup-->
         <script>
            jQuery(document).ready(function(){  
              jQuery('.closepopup').on('click', function () {
                  jQuery('#popup-container').fadeOut();
                  jQuery('#modalOverly').fadeOut();
              });
              
              var visits = jQuery.cookie('visits') || 0;
              visits++;
              jQuery.cookie('visits', visits, { expires: 1, path: '/' });
              console.debug(jQuery.cookie('visits')); 
              if ( jQuery.cookie('visits') > 1 ) {
                jQuery('#modalOverly').hide();
                jQuery('#popup-container').hide();
              } else {
                  var pageHeight = jQuery(document).height();
                  jQuery('<div id="modalOverly"></div>').insertBefore('body');
                  jQuery('#modalOverly').css("height", pageHeight);
                  jQuery('#popup-container').show();
              }
              if (jQuery.cookie('noShowWelcome')) { jQuery('#popup-container').hide(); jQuery('#active-popup').hide(); }
            }); 
            
            jQuery(document).mouseup(function(e){
              var container = jQuery('#popup-container');
              if( !container.is(e.target)&& container.has(e.target).length === 0)
              {
                container.fadeOut();
                jQuery('#modalOverly').fadeIn(200);
                jQuery('#modalOverly').hide();
              }
            });
            
            /*--------------------------------------
                Promotion / Notification Cookie Bar 
              -------------------------------------- */
              if(Cookies.get('promotion') != 'true') {   
                 $(".notification-bar").show();         
              }
              $(".close-announcement").on('click',function() {
                $(".notification-bar").slideUp();  
                Cookies.set('promotion', 'true', { expires: 1});  
                return false;
              });
        </script>
        <!--End For Newsletter Popup-->
    </div>
    </body>
    
    <!-- belle/home2-default.html   11 Nov 2019 12:23:42 GMT -->
    </html>   
@endsection
