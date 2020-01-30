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
    <title>Register</title>

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

<!--section start-->
<section class="register-page section-b-space">
    <div class="container">
        <div class="row back-color">
            <div class="col-lg-12">
                <h3 class="text-title">create <span>account</span></h3>
                <div class="theme-card">
                    <form class="theme-form">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="email">First Name</label>
                                <input type="text" class="form-control" id="fname" placeholder="First Name" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="review">Last Name</label>
                                <input type="password" class="form-control" id="lname" placeholder="Last Name" required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="email">email</label>
                                <input type="text" class="form-control" id="email" placeholder="Email" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="review">Phone </label>
                                <input type="password" class="form-control" id="review" placeholder="Mobile Number" required="">
                            </div><a href="#" class="btn btn-solid">create Account</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->


<!-- footer start -->
<?php include 'footer.php';?>
<!-- footer end -->


<!-- tap to top start -->
<div class="tap-top">
    <div><i class="fa fa-angle-double-up"></i></div>
</div>
<!-- tap to top end -->


<!-- latest jquery-->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/main.js"></script>
<!-- menu js-->
<script src="assets/js/menu.js"></script>

<!-- lazyload js-->
<script src="assets/js/lazysizes.min.js"></script>

<!-- popper js-->
<script src="assets/js/popper.min.js"></script>

<!-- slick js-->
<script src="assets/js/slick.js"></script>

<!-- Bootstrap js-->
<script src="assets/js/bootstrap.js"></script>

<!-- Bootstrap Notification js-->
<script src="assets/js/bootstrap-notify.min.js"></script>

<!-- Theme js-->
<script src="assets/js/script.js"></script>

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