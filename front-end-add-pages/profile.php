<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="assets/filsrich-logo/favicon.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="assets/filsrich-logo/favicon.png" type="image/x-icon"/>
    <title>Profile</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="assets/css/themify-icons.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="assets/css/color17.css" media="screen" id="color">

</head>
<body>


<!-- header start -->
<?php include 'header.php';?>
<!-- header end -->

<!-- personal deatail section start -->
<section class="contact-page register-page">
    <div class="container">
        <div class="row back-color">
            <div class="col-sm-12">
                <h3 class="text-title">PERSONAL <span> DETAIL</span></h3>
                <form class="theme-form">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="name">First Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Your name" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="email">Last Name</label>
                            <input type="text" class="form-control" id="last-name" placeholder="Email" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="review">Phone number</label>
                            <input type="text" class="form-control" id="review" placeholder="Enter your number" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Email" required="">
                        </div>
                        <div class="col-md-12">
                            <label for="review">Write Your Message</label>
                            <textarea class="form-control mb-0" placeholder="Write Your Message" id="exampleFormControlTextarea1" rows="6"></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->


<!-- address section start -->
<section class="contact-page register-page section-b-space">
    <div class="container">
        <div class="row back-color">
            <div class="col-sm-12">
                <h3 class="text-title">SHIPPING <span>ADDRESS</span></h3>
                <form class="theme-form">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="name">flat / plot</label>
                            <input type="text" class="form-control" id="home-ploat" placeholder="company name" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="name">Address *</label>
                            <input type="text" class="form-control" id="address-two" placeholder="Address" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="email">Zip Code *</label>
                            <input type="text" class="form-control" id="zip-code" placeholder="zip-code" required="">
                        </div>
                        <div class="col-md-6 select_input">
                            <label for="review">Country *</label>
                            <select class="form-control" size="1">
                                <option value="India">India</option>
                                <option value="UAE">UAE</option>
                                <option value="U.K">U.K</option>
                                <option value="US">US</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="review">City *</label>
                            <input type="text" class="form-control" id="city" placeholder="City" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="review">Region/State *</label>
                            <input type="text" class="form-control" id="region-state" placeholder="Region/state" required="">
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-sm btn-solid" type="submit">Save setting</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->


<!-- footer start -->
<?php include 'footer.php';?>
<!-- footer end -->


<!-- theme setting -->


<!-- tap to top -->
<div class="tap-top">
    <div>
        <i class="fa fa-angle-double-up"></i>
    </div>
</div>
<!-- tap to top End -->


<!-- latest jquery-->
<script src="assets/js/jquery-3.3.1.min.js" ></script>
<script src="assets/js/main.js"></script>
<!-- menu js-->
<script src="assets/js/menu.js"></script>

<!-- lazyload js-->
<script src="assets/js/lazysizes.min.js"></script>

<!-- popper js-->
<script src="assets/js/popper.min.js" ></script>

<!-- slick js-->
<script  src="assets/js/slick.js"></script>

<!-- Bootstrap js-->
<script src="assets/js/bootstrap.js" ></script>

<!-- Bootstrap Notification js-->
<script src="assets/js/bootstrap-notify.min.js"></script>

<!-- Theme js-->
<script src="assets/js/script.js" ></script>

<script>
    function openSearch() {
        document.getElementById("search-overlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("search-overlay").style.display = "none";
    }
</script>

</body>

</html>