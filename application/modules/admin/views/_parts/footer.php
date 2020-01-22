<?php
if( base_url(uri_string()) != base_url().'admin') { ?>
</div>
</div>

<!-- add footer section start here -->
<footer>
<section class="footer-bck">
        <div class="container">
            <div class="row footer-theme partition-f">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-title footer-mobile-title">
                        <h4>about</h4>
                    </div>
                    <div class="footer-contant">
                        <div class="footer-logo">
                            <a href="<?= base_url().'admin/home' ?>"><img src="<?= base_url('backend_assets/images/filsrich-logo/logo-foot.png') ?>" alt=""></a>
                        </div>
                        <p>Filsrich India Pvt Ltd. provides the product focusing the Tiny, Small, Medium businesses. Also benefiting Manufacturers, Wholesalers, Traders, Retailers by bringing all under one roof. Get Ready to buy New Apparel to start business opportunities. </p>
                        <div class="footer-social">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/filsrich/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/filsrich/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/filsrichindia" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/filsrich/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.pinterest.ca/filsrichindia/" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col offset-xl-1">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>Product</h4>
                            <hr class="hr-foot">
                        </div>
                        <div class="footer-contant">
                            <ul>
                                <li><a href="all-mens-products.php">Men's</a></li>
                                <li><a href="all-womens-products.php">Women's</a></li>
                                <li><a href="all-kids-products.php">kid's</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>Information</h4>
                             <hr class="hr-foot">
                        </div>
                        <div class="footer-contant">
                            <ul>
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="term-conditions.php">Term & Conditions</a></li>
                                <li><a href="return-policy.php">Return Policy</a></li>
                                <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                <li><a href="disclaimer.php">Disclaimer</a></li>
                                <li><a href="contact-us.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>Location</h4>
                             <hr class="hr-foot">
                        </div>
                        <div class="footer-contant">
                            <ul class="contact-list">
                                <li><i class="fa fa-map-marker"></i>B-02, H-140, BSI Business Park,Sector-63, Noida, Uttar Pradesh-201301</li>
                                <li><i class="fa fa-phone"></i>Call Us: <a href="mailto:+91 – 9871046943">+91 – 9871046943</a></li>
                                <li><i class="fa fa-envelope-o"></i>Email Us: <a href="mailto: filsrichindia@gmail.com">filsrichindia@gmail.com</a><br><a href="mailto: info@filsrich.com" class="second-mail">
                                info@filsrich.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<div class="sub-footer ">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-md-12 col-sm-12">
                <div class="footer-end">
                    <p> © 2020 Filsrich.com, Filsrich India Private Limited. All rights reserved | Website Designed & Developed by <a href="https://redialsolutions.com/" target="_blank">Redial India Solutions Pvt. Ltd.</a> </p>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>
<div class="tap-top" style="display: block;">
<div><i class="fa fa-angle-double-up"></i></div>
</div>

<!-- add footer section end here -->
<?php } ?>
<!-- Bootstrap js-->
<script src="<?= base_url('/backend_assets/js/popper.min.js') ?>"></script>
<script src="<?= base_url('/backend_assets/js/bootstrap.js') ?>"></script>
<script>
    var urls = {
        changePass: '<?= base_url('admin/changePass') ?>',
        editShopCategorie: '<?= base_url('admin/editshopcategorie') ?>',
        changeTextualPageStatus: '<?= base_url('admin/changePageStatus') ?>',
        removeSecondaryImage: '<?= base_url('admin/removeSecondaryImage') ?>',
        productstatusChange: '<?= base_url('admin/productstatusChange') ?>',
        productsOrderBy: '<?= base_url('admin/products?orderby=') ?>',
        productStatusChange: '<?= base_url('admin/productStatusChange') ?>',
        changeOrdersOrderStatus: '<?= base_url('admin/changeOrdersOrderStatus') ?>',
        ordersOrderBy: '<?= base_url('admin/orders?order_by=') ?>',
        uploadOthersImages: '<?= base_url('admin/uploadOthersImages') ?>',
        loadOthersImages: '<?= base_url('admin/loadOthersImages') ?>',
        editPositionCategorie: '<?= base_url('admin/changePosition') ?>'
    };
</script>
<!-- Sidebar jquery-->
<script src="<?= base_url('/backend_assets/js/sidebar-menu.js') ?>"></script>
<!-- touchspin js-->
<script src="<?= base_url('/backend_assets/js/touchspin/vendors.min.js') ?>"></script>
<script src="<?= base_url('/backend_assets/js/touchspin/touchspin.js') ?>"></script>
<script src="<?= base_url('/backend_assets/js/touchspin/input-groups.min.js') ?>"></script>

<!-- form validation js-->
<script src="<?= base_url('/backend_assets/js/dashboard/form-validation-custom.js') ?>"></script>

<!-- ckeditor js-->
<script src="<?= base_url('/backend_assets/js/editor/ckeditor/ckeditor.js') ?>"></script>
<script src="<?= base_url('/backend_assets/js/editor/ckeditor/styles.js') ?>"></script>
<script src="<?= base_url('/backend_assets/js/editor/ckeditor/adapters/jquery.js') ?>"></script>
<script src="<?= base_url('/backend_assets/js/editor/ckeditor/ckeditor.custom.js') ?>"></script>

<!-- Zoom js-->
<script src="<?= base_url('/backend_assets/js/jquery.elevatezoom.js') ?>"></script>
<script src="<?= base_url('/backend_assets/js/zoom-scripts.js') ?>"></script>

<!--Customizer admin-->
<script src="<?= base_url('/backend_assets/js/admin-customizer.js') ?>"></script>

<!-- lazyload js-->
<script src="<?= base_url('/backend_assets/js/lazysizes.min.js') ?>"></script>

<!--right sidebar js-->
<script src="<?= base_url('/backend_assets/js/chat-menu.js') ?>"></script>

<!--script admin-->
<script src="<?= base_url('/backend_assets/js/admin-script.js') ?>"></script>
<!-- latest jquery-->
<script src="<?= base_url('/backend_assets/js/jquery-3.3.1.min.js') ?>"></script>

<!-- Bootstrap js-->
<script src="<?= base_url('/backend_assets/js/popper.min.js') ?>"></script>
<script src="<?= base_url('/backend_assets/js/bootstrap.js') ?>"></script>

<!-- feather icon js-->
<script src="<?= base_url('/backend_assets/js/icons/feather-icon/feather.min.js') ?>"></script>
<script src="<?= base_url('/backend_assets/js/icons/feather-icon/feather-icon.js') ?>"></script>

<!-- Sidebar jquery-->
<script src="<?= base_url('/backend_assets/js/sidebar-menu.js') ?>"></script>

<!--chartist js-->
<script src="<?= base_url('/backend_assets/js/chart/chartist/chartist.js') ?>"></script>

<!--chartjs js-->
<script src="<?= base_url('/backend_assets/js/chart/chartjs/chart.min.js') ?>"></script>

<!-- lazyload js-->
<script src="<?= base_url('/backend_assets/js/lazysizes.min.js') ?>"></script>

<!--copycode js-->
<script src="<?= base_url('/backend_assets/js/prism/prism.min.js') ?>"></script>
<script src="<?= base_url('/backend_assets/js/clipboard/clipboard.min.js') ?>"></script>
<script src="<?= base_url('/backend_assets/js/custom-card/custom-card.js') ?>"></script>

<!--counter js-->
<script src="<?= base_url('/backend_assets/js/counter/jquery.waypoints.min.js') ?>"></script>
<script src="<?= base_url('/backend_assets/js/counter/jquery.counterup.min.js') ?>"></script>
<script src="<?= base_url('/backend_assets/js/counter/counter-custom.js') ?>"></script>

<!--peity chart js-->
<script src="<?= base_url('/backend_assets/js/chart/peity-chart/peity.jquery.js') ?>"></script>

<!--sparkline chart js-->
<script src="<?= base_url('/backend_assets/js/chart/sparkline/sparkline.js') ?>"></script>

<!--Customizer admin-->
<script src="<?= base_url('/backend_assets/js/admin-customizer.js') ?>"></script>

<!--dashboard custom js-->
<script src="<?= base_url('/backend_assets/js/dashboard/default.js') ?>"></script>

<!--right sidebar js-->
<script src="<?= base_url('/backend_assets/js/chat-menu.js') ?>"></script>

<!--height equal js-->
<script src="<?= base_url('/backend_assets/js/height-equal.js') ?>"></script>

<!-- lazyload js-->
<script src="<?= base_url('/backend_assets/js/lazysizes.min.js') ?>"></script>

<!--script admin-->
<script src="<?= base_url('/backend_assets/js/admin-script.js') ?>"></script>
<!--script mine_admin-->
<script src="<?= base_url('/backend_assets/js/mine_admin.js') ?>"></script>
<script src="<?= base_url('/backend_assets/js/slick.js') ?>"></script>
<script src="<?= base_url('/backend_assets/js/main.js') ?>"></script>
<script>
    $('.single-item').slick({
            arrows: false,
            dots: true
        }
    );
</script>
</body>
</html>