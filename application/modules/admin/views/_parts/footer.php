<?php
if( base_url(uri_string()) != base_url().'admin') { ?>
</div>
</div>

<!-- add footer section start here -->
<footer>
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
    
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$("#userfile").change(function() {
  readURL(this);
});
</script>
</body>
</html>