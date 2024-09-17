<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/filsrich-logo/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/filsrich-logo/favicon.png" type="image/x-icon">
    <title> Media </title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/flag-icon.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.css">
    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="assets/css/prism.css">
    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="assets/css/chartist.css">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/admin.css">
</head>
<body>
<!-- page-wrapper Start-->
<div class="page-wrapper">
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- header -->
        <?php include 'header.php';?>
        <!-- header -->
           
           <div class="page-body">
          
             <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Media
                                    <small>Filshrich Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Media </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid bulk-cate">
                <div class="card ">
                    <div class="card-header">
                        <h5>Dropzone Media</h5>
                    </div>
                    <div class="card-body">
                        <form class="dropzone digits" id="singleFileUpload" action="/upload.php">
                            <div class="dz-message needsclick"><i class="fa fa-cloud-upload"></i>
                                <h4 class="mb-0 f-w-600">Drop files here or click to upload.</h4>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5>Media File List</h5>
                    </div>
                    <div class="card-body">
                        <div id="batchDelete" class="category-table media-table"></div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

           </div>
        <!-- footer start-->
         <?php include 'footer.php';?>
        <!-- footer end-->
    </div>

</div>

<!-- latest jquery-->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js-->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.js"></script>

<!-- feather icon js-->
<script src="assets/js/icons/feather-icon/feather.min.js"></script>
<script src="assets/js/icons/feather-icon/feather-icon.js"></script>

<!-- Sidebar jquery-->
<script src="assets/js/sidebar-menu.js"></script>

<!--chartist js-->
<script src="assets/js/chart/chartist/chartist.js"></script>

<!--chartjs js-->
<script src="assets/js/chart/chartjs/chart.min.js"></script>

<!-- lazyload js-->
<script src="assets/js/lazysizes.min.js"></script>

<!--copycode js-->
<script src="assets/js/prism/prism.min.js"></script>
<script src="assets/js/clipboard/clipboard.min.js"></script>
<script src="assets/js/custom-card/custom-card.js"></script>

<!--counter js-->
<script src="assets/js/counter/jquery.waypoints.min.js"></script>
<script src="assets/js/counter/jquery.counterup.min.js"></script>
<script src="assets/js/counter/counter-custom.js"></script>

<!--peity chart js-->
<script src="assets/js/chart/peity-chart/peity.jquery.js"></script>

<!--sparkline chart js-->
<script src="assets/js/chart/sparkline/sparkline.js"></script>

<!--Customizer admin-->
<script src="assets/js/admin-customizer.js"></script>

<!--dashboard custom js-->
<script src="assets/js/dashboard/default.js"></script>

<!--right sidebar js-->
<script src="assets/js/chat-menu.js"></script>

<!--height equal js-->
<script src="assets/js/height-equal.js"></script>

<!-- lazyload js-->
<script src="assets/js/lazysizes.min.js"></script>

<!--script admin-->
<script src="assets/js/admin-script.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
