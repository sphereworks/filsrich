<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Home slider -->
<section class="p-0 ">
    <div class="slide-1 home-slider">
        <div>
            <div class="home  p-center  text-center">
                <div class="slider-contain" id="block" style="width: 100%; " data-vide-bg="<?= base_url('/assets/video/video.mp4') ?>" data-vide-options="position: 0% 50%">
                </div>
            </div>
        </div>
        <div>
        <div class="home  text-center">
             <div class="slider-contain" id="block" style="width: 100%; " data-vide-bg="<?= base_url('/assets/video/video.mp4') ?>" data-vide-options="position: 0% 50%">
            </div>
        </div>

        </div>
    </div>

</section>
<!-- Home slider end -->

<!-- banner section start -->
<section class="banner-padding banner-furniture absolute_banner ratio3_2">
    <div class="container">
        <div class="row partition3">
            <div class="col-md-4">
                <a href="#">
                    <div class="collection-banner p-left text-left">
                        <img src="assets/images/product-img/pro-1.jpg" alt="" class="img-fluid blur-up lazyload bg-img">
                        <div class="absolute-contain">
                            <h3>casual collection</h3>
                            <h4>festive sale</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="collection-banner p-left text-left">
                        <img src="assets/images/product-img/pro-2.jpg" alt="" class="img-fluid blur-up lazyload bg-img">
                        <div class="absolute-contain">
                            <h3>going out collection</h3>
                            <h4>upto 80% off</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="collection-banner p-left text-left">
                        <img src="assets/images/product-img/pro-3.jpg" alt="" class="img-fluid blur-up lazyload bg-img">
                        <div class="absolute-contain">
                            <h3>shoes & sandle</h3>
                            <h4>new collection</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- banner section end -->


<!-- Product tab slider -->
<div class="title4  section-t-space">
    <h4>special offer</h4>
    <h2 class="title-inner4 text-title">top <span>collection </span></h2>
    <div class="line">
        <span></span>
    </div>
</div>
<section class="section-b-space p-t-0 absolute-product ratio_asos">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="theme-tab">
                    <div class="tab-content-cls">
                        <div class="tab-content active default" >
                            <div class="text-title"><h3>Men's <span>Products</span></h3></div>
                            <div class="no-slider row">
                                <?php
                                if (!empty($products)) {
                                    $load::getProducts($products, 'col-sm-4 col-md-3', false);
                                } else {
                                    ?>
                                    <script>
                                        $(document).ready(function () {
                                            ShowNotificator('alert-info', '<?= lang('no_results') ?>');
                                        });
                                    </script>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="see_more"><a href="all-mens-products.php" class="btn btn-solid">See More </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product slider end -->

<!-- full banner section start -->
<section class="p-0 advertise-section">
    <div class="full-banner parallax text-center p-center">
        <img src="assets/images/product-img/product8.jpg" alt="" class="bg-img blur-up lazyload">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="banner-contain">
                        <h2>kids</h2>
                        <h3>fashion trends</h3>
                        <h4>special offer</h4>
                        <a href="#" class="btn btn-solid">shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- full banner section end -->


<!-- product section start -->
<section class="section-b-space box-product">
    <div class="full-box">
        <div class="container">
            <div class="title4">
                <h2 class="title-inner4 text-title">special <span>products</span></h2>
                <div class="line">
                    <span></span>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="theme-card">
                        <div class="offer-slider">
                            <div class="">
                                <div class="product-box2 product-box">
                                    <div class="media img-wrapper">
                                        <div class="front">
                                            <a href="#"><img src="assets/images/product-img/sproduct1.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="#"><img src="assets/images/product-img/sproduct2.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        </div>
                                        <div class="media-body align-self-center">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4><i class="fa fa-inr" aria-hidden="true"></i>500.00</h4>
                                            <div class="cart-bottom">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button>
                                                <a href="javascript:void(0)" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                                                <a href="#" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box2 product-box">
                                    <div class="media img-wrapper">
                                        <div class="front">
                                            <a href="#"><img src="assets/images/product-img/sproduct3.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="#"><img src="assets/images/product-img/sproduct4.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        </div>
                                        <div class="media-body align-self-center">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4><i class="fa fa-inr" aria-hidden="true"></i>500.00</h4>
                                            <div class="cart-bottom">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button>
                                                <a href="javascript:void(0)" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                                                <a href="#" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="theme-card">
                        <div class="offer-slider">
                            <div class="">
                                <div class="product-box2 product-box">
                                    <div class="media img-wrapper">
                                        <div class="front">
                                            <a href="#"><img src="assets/images/product-img/sproduct5.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="#"><img src="assets/images/product-img/sproduct6.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        </div>
                                        <div class="media-body align-self-center">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4><i class="fa fa-inr" aria-hidden="true"></i>500.00</h4>
                                            <div class="cart-bottom">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button>
                                                <a href="javascript:void(0)" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                                                <a href="#" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box2 product-box">
                                    <div class="media img-wrapper">
                                        <div class="front">
                                            <a href="#"><img src="assets/images/product-img/sproduct7.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="#"><img src="assets/images/product-img/sproduct8.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        </div>
                                        <div class="media-body align-self-center">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4><i class="fa fa-inr" aria-hidden="true"></i>500.00</h4>
                                            <div class="cart-bottom">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button>
                                                <a href="javascript:void(0)" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                                                <a href="#" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="theme-card">
                        <div class="offer-slider">
                            <div class="">
                                <div class="product-box2 product-box">
                                    <div class="media img-wrapper">
                                        <div class="front">
                                            <a href="#"><img src="assets/images/product-img/sproduct1.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="#"><img src="assets/images/product-img/sproduct2.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        </div>
                                        <div class="media-body align-self-center">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4><i class="fa fa-inr" aria-hidden="true"></i>500.00</h4>
                                            <div class="cart-bottom">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button>
                                                <a href="javascript:void(0)" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                                                <a href="#" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box2 product-box">
                                    <div class="media img-wrapper">
                                        <div class="front">
                                            <a href="#"><img src="assets/images/product-img/sproduct3.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="#"><img src="assets/images/product-img/sproduct4.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        </div>
                                        <div class="media-body align-self-center">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4><i class="fa fa-inr" aria-hidden="true"></i>500.00</h4>
                                            <div class="cart-bottom">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button>
                                                <a href="javascript:void(0)" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                                                <a href="#" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="theme-card ">
                        <div class="offer-slider">
                            <div class="">
                                <div class="product-box2 product-box">
                                    <div class="media img-wrapper">
                                        <div class="front">
                                            <a href="#"><img src="assets/images/product-img/sproduct5.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="#"><img src="assets/images/product-img/sproduct6.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        </div>
                                        <div class="media-body align-self-center">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4><i class="fa fa-inr" aria-hidden="true"></i>500.00</h4>
                                            <div class="cart-bottom">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button>
                                                <a href="javascript:void(0)" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                                                <a href="#" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box2 product-box">
                                    <div class="media img-wrapper">
                                        <div class="front">
                                            <a href="#"><img src="assets/images/product-img/sproduct7.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="#"><img src="assets/images/product-img/sproduct8.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        </div>
                                        <div class="media-body align-self-center">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4><i class="fa fa-inr" aria-hidden="true"></i>500.00</h4>
                                            <div class="cart-bottom">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button>
                                                <a href="javascript:void(0)" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                                                <a href="#" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product section end -->
