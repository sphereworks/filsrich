<div class="page-body">

<!-- Container-fluid starts-->

<div class="container-fluid">

    <div class="page-header">

        <div class="row">

            <div class="col-lg-6">

                <div class="page-header-left">

                    <h3>Product List

                        <small>Filsrich Admin panel</small>

                    </h3>

                </div>

            </div>

            <div class="col-lg-6">

                <ol class="breadcrumb pull-right">

                    <li class="breadcrumb-item"><a href="<?= base_url().'admin/home' ?>"><i data-feather="home"></i></a></li>

                    <li class="breadcrumb-item active">Product List</li>

                </ol>

            </div>

        </div>

    </div>

</div>

<!-- Container-fluid Ends-->



<!-- Container-fluid starts-->

<div class="container-fluid">

    <!-- <div class="row products-admin ratio_asos">

<?php 

    // if ($products) {

    //     foreach ($products as $row) {

    //     $u_path = 'attachments/shop_images/';

    //         if ($row->image != null && file_exists($u_path . $row->image)) {

    //             $image = base_url($u_path . $row->image);

    //         } else {

    //             $image = base_url('attachments/no-image.png');

    //         }

        ?>



                <div class="col-xl-3 col-sm-6">

                    <div class="card">

                        <div class="card-body product-box">

                            <div class="img-wrapper">

                                <div class="front">

                                    <a href="#"><img src="<?= $image ?>" class="img-fluid blur-up lazyload bg-img" alt=""></a>

                                    <div class="product-hover">

                                          <ul>

                                            <li>

                                                <a href="<?= base_url('admin/publish/' . $row->id) ?>"class="btn" type="button" data-original-title="" title=""><i class="ti-pencil-alt"></i></a>

                                            </li>

                                            <li>

                                                <a href="<?= base_url('admin/products?delete=' . $row->id) ?>" class="btn" type="button" data-original-title="" title=""><i class="ti-trash"></i></a>

                                            </li>

                                        </ul>

                                    </div>

                                </div>

                            </div>

                            <div class="product-detail">

                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>

                                <a href="#">

                                    <h6> <?= $row->title ?></h6>

                                </a>

                                <h4><?= $row->price ?></h4>

                                <ul class="color-variant">

                                    <li class="bg-light0"></li>

                                    <li class="bg-light1"></li>

                                    <li class="bg-light2"></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

     <?php  // } } ?> 



        </div> -->



        <div class="products_list">

            <div class="container-fluid">

                <div class="row">

                    <div class="card-header">

                                <h5>Product Lists</h5>

                            </div>

                        <div class="list_title table-responsive">

                           <table class="table table-bordered table-sm table-striped">

                            <thead>

                              <tr>

                                <th>Id</th>

                                <th>Product</th>

                                <th>Product Title</th>

                                 <th>Entry Type</th>

                                <th>Quantity</th>

                                <th class="text-center"><a href="<?= base_url('admin/publish/'); ?>" ><i class="fa fa-plus" aria-hidden="true"></i></a></th>

                              </tr>

                            </thead>

                            <tbody>

                            <?php

                            if ($products) { $i = 1;

                                foreach ($products as $row) {

                                $u_path = 'attachments/shop_images/';

                                    if ($row->image != null && file_exists($u_path . $row->image)) {

                                        $image = base_url($u_path . $row->image);

                                    } else {

                                        $image = base_url('attachments/no-image.png');

                                    }

                                ?>

                              <tr>

                                <td><?= $i ?></td>

                                <td><img src="<?= $image ?>"></td>

                                <td><?= $row->title ?></td>

                                <td>Add</td>

                                <td><?= $row->quantity ?></td>

                               <td class="text-center"><a href="<?= base_url('admin/publish/' . $row->id) ?>" class="btn" type="button" data-original-title="" title=""><i class="fa fa-pencil" aria-hidden="true" id="edit"></i></a> <a href="<?= base_url('admin/products?delete=' . $row->id) ?>" class="btn" type="button" data-original-title="" title=""><i class="fa fa-trash" aria-hidden="true" id="delete"></i></a> </td>

                              </tr>

                             <?php $i++;  }  } ?>      

                            </tbody>

                          </table>

                            <!-- <nav aria-label="Page navigation example">

                              <ul class="pagination">

                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>

                                <li class="page-item"><a class="page-link" href="#">1</a></li>

                                <li class="page-item"><a class="page-link" href="#">2</a></li>

                                <li class="page-item"><a class="page-link" href="#">3</a></li>

                                <li class="page-item"><a class="page-link" href="#">Next</a></li>

                              </ul>

                            </nav> -->

                        </div>

                    </div>

                </div>

            </div>