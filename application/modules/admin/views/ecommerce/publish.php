<?php

$timeNow = time();

if (validation_errors()) {

    ?>

    <hr>

    <div class="alert alert-danger"><?= validation_errors() ?></div>

    <hr>

    <?php

}

if ($this->session->flashdata('result_publish')) {

    ?>

    <hr>

    <div class="alert alert-success"><?= $this->session->flashdata('result_publish') ?></div>

    <hr>

    <?php

}

?>

<div class="page-body">

<!-- Container-fluid starts-->

<div class="container-fluid">

    <div class="page-header">

        <div class="row">

            <div class="col-lg-6">

                <div class="page-header-left">

                    <h3>Add Products

                        <small>Filsrich Admin panel</small>

                    </h3>

                </div>

            </div>

            <div class="col-lg-6">

                <ol class="breadcrumb pull-right">

                    <li class="breadcrumb-item"><a href="<?= base_url().'admin/home' ?>"><i data-feather="home"></i></a></li>

                    <li class="breadcrumb-item">Physical</li>

                    <li class="breadcrumb-item active">Add Product</li>

                </ol>

            </div>

        </div>

    </div>

</div>

<!-- Container-fluid Ends-->


<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Add Product</h5>
                </div>
                <div class="card-body">
                <form method="POST" action="" enctype="multipart/form-data">
                <input type="hidden" name="in_slider" value=<?= null ?> >
                <input type="hidden" placeholder="Position number" name="position" value="<?= @$_POST['position'] ?>" class="form-control">
                <input type="hidden" value="<?= isset($_POST['folder']) ? $_POST['folder'] : $timeNow ?>" name="folder">
                <input type="hidden" name="translations[]" value="en" >
                <input type="hidden" name="basic_description[]" id="basic_description" value="<?= $trans_load != null && isset($trans_load['en']['basic_description']) ? $trans_load['en']['basic_description'] : '' ?>" >

                <input type="hidden" name="old_price[]"  value="<?= $trans_load != null && isset($trans_load['en']['old_price']) ? $trans_load['en']['old_price'] : '' ?>" class="form-control">

                    <div class="row product-adding">
                        <div class="col-md-4">
                            <div class="add-product">

                                    <?php

                                            if (isset($_POST['image']) && $_POST['image'] != null) {

                                                $image = 'attachments/shop_images/' . $_POST['image'];

                                                if (!file_exists($image)) {

                                                    $image = 'backend_assets/images/pro3/1.jpg';

                                                }

                                                ?>
                                                 <img src="<?= base_url($image) ?>" id="blah" class="img-fluid image_zoom_1 blur-up lazyloaded">

                                                <input type="hidden" name="old_image" value="<?= $_POST['image'] ?>">

                                                <?php if (isset($_GET['to_lang'])) { ?>

                                                    <input type="hidden" name="image" value="<?= $_POST['image'] ?>">

                                                    <?php

                                                }

                                            }else { ?>

                                            <img src="<?= base_url('/backend_assets/images/product-img/1.jpg') ?>" id="blah" alt="" class="img-fluid image_zoom_1 blur-up lazyloaded">

                                           <?php }

                                            ?>

                                        <ul class="file-upload-product">

                                            <!-- <li><div class="box-input-file">

                                            <?= $otherImgs ?>

                                            </div></li> -->

                                            <li><div class="box-input-file"><input class="upload" type="file"  id="userfile" name="userfile"><i class="fa fa-plus"></i></div></li>
                                        </ul>
                                    </div>
                                    <div class="form-group bordered-group">
        <div class="others-images-container">
            <?= $otherImgs ?>
        </div>
        <a href="javascript:void(0);" data-toggle="modal" data-target="#modalMoreImages" class="btn btn-default">Upload more images</a>
    </div>
                                </div>
                        <div class="col-md-8 input_css">
                            <form class="needs-validation add-product-form" id="pub_form" novalidate="">
                                <div class="form">

                                    <div class="form-group mb-3 row">

                                        <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Title :</label>

                                        <input class="form-control col-xl-8 col-sm-7" id="validationCustom01" type="text" name="title[]" value="<?= $trans_load != null && isset($trans_load['en']['title']) ? $trans_load['en']['title'] : '' ?>" >

                                        <div class="valid-feedback">Looks good!</div>

                                    </div>

                                    <div class="form-group mb-3 row">

                                        <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Price :</label>

                                        

                                        <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" type="text" name="price[]" placeholder="without currency at the end" value="<?= $trans_load != null && isset($trans_load['en']['price']) ? $trans_load['en']['price'] : '' ?>"   >

                                        <div class="valid-feedback">Looks good!</div>

                                    </div>

                                    <div class="form-group mb-3 row">

                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Product Category :</label>

                                        <select class="form-control digits col-xl-8 col-sm-7" name="shop_categorie">

                                            <?php foreach ($shop_categories as $key_cat => $shop_categorie) { ?>

                                                <option <?= isset($_POST['shop_categorie']) && $_POST['shop_categorie'] == $key_cat ? 'selected=""' : '' ?> value="<?= $key_cat ?>">

                                                    <?php

                                                    foreach ($shop_categorie['info'] as $nameAbbr) {

                                                        if ($nameAbbr['abbr'] == $this->config->item('language_abbr')) {

                                                            echo $nameAbbr['name'];

                                                        }

                                                    }

                                                    ?>

                                                </option>

                                            <?php } ?>

                                        </select>

                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>

                                    </div>

                                </div>

                                <div class="form">

                                    <div class="form-group row">

                                        <label for="exampleFormControlSelect1" class="col-xl-3 col-sm-4 mb-0">Select Size :</label>

                                        <select class="form-control digits col-xl-8 col-sm-7" id="exampleFormControlSelect1">

                                            <option>Small</option>

                                            <option>Medium</option>

                                            <option>Large</option>

                                            <option>Extra Large</option>

                                        </select>

                                    </div>

                                    <div class="form-group row">

                                        <label class="col-xl-3 col-sm-4 mb-0">Total Products :</label>

                                        <fieldset class="qty-box col-xl-9 col-xl-8 col-sm-7 pl-0">

                                            <div class="input-group">

                                                <input class="touchspin"  name="quantity" type="text" value="<?= @$_POST['quantity'] ?  @$_POST['quantity'] : 0 ?>">

                                            </div>

                                        </fieldset>

                                    </div>

                                    <div class="form-group row">

                                        <label class="col-xl-3 col-sm-4">Add Description :</label>

                                        <div class="col-xl-8 col-sm-7 pl-0 description-sm">

                                            <textarea id="editor1" name="description[]" cols="10" rows="4"><?= $trans_load != null && isset($trans_load['en']['description']) ? $trans_load['en']['description'] : '' ?></textarea>

                                        </div>

                                    </div>

                                    <div class="form-group mb-3 row">

                                        <label class="col-xl-3 col-sm-4 mb-0">Details : </label>

                                        <input class="form-control col-xl-8 col-sm-7" type="text"  >

                                    </div>

                                     <div class="form-group mb-3 row">

                                        <label class="col-xl-3 col-sm-4 mb-0">Meta Title : </label>

                                        <input class="form-control col-xl-8 col-sm-7" type="text"  >

                                    </div>

                                     <div class="form-group row">

                                        <label class="col-xl-3 col-sm-4">Add Description :</label>

                                        <div class="col-xl-8 col-sm-7 pl-0 description-sm">

                                            <textarea id="editor1" name="editor1" cols="10" rows="4" style="width: 100%;"></textarea>

                                        </div>

                                    </div>

                                     <div class="form-group mb-3 row">

                                        <label class="col-xl-3 col-sm-4 mb-0">Meta Keywords : </label>

                                        <input class="form-control col-xl-8 col-sm-7" type="text"  >

                                    </div>

                                    <div class="form-group mb-3 row">

                                        <label class="col-xl-3 col-sm-4 mb-0">Slug : </label>

                                        <input class="form-control col-xl-8 col-sm-7" name="url" value="<?=  @$_POST['url'] ?  @$_POST['url'] :'' ?>" type="text"  >

                                    </div>

                                </div>

                                <div class="offset-xl-3 offset-sm-4">

                                    <button type="submit" name="submit" class="btn btn-primary">Publish</button>

                                    <?php if ($this->uri->segment(3) !== null) { ?>

                                    <a href="<?= base_url('admin/products') ?>" type="button" class="btn btn-light">Discard</a>

                                    <?php } ?>

                                </div>

                            </form>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 

<form method="POST" action="" enctype="multipart/form-data">

    <input type="hidden" value="<?= isset($_POST['folder']) ? $_POST['folder'] : $timeNow ?>" name="folder">

    <div class="form-group available-translations">

        <b>Languages</b>

      

    </div>

        <div>

            <input type="hidden" name="translations[]" value="en" >

            <div class="form-group"> 

                <label>Title</label>

                <input type="text" name="title[]" value="<?= $trans_load != null && isset($trans_load['en']['title']) ? $trans_load['en']['title'] : '' ?>" class="form-control">

            </div>



            <div class="form-group">

                <a href="javascript:void(0);" class="btn btn-default showSliderDescrption" data-descr="">Show Slider Description <span class="glyphicon glyphicon-circle-arrow-down"></span></a>

            </div>

            <div class="theSliderDescrption" id="theSliderDescrption-" <?= isset($_POST['in_slider']) && $_POST['in_slider'] == 1 ? 'style="display:block;"' : '' ?>>

                <div class="form-group">

                    <label for="basic_description">Slider Description </label>

                    <textarea name="basic_description[]" id="basic_description" rows="50" class="form-control"><?= $trans_load != null && isset($trans_load['en']['basic_description']) ? $trans_load['en']['basic_description'] : '' ?></textarea>

                </div>

            </div>

            <div class="form-group">

                <label for="description">Description</label>

                <textarea name="description[]" id="description" rows="50" class="form-control"><?= $trans_load != null && isset($trans_load['en']['description']) ? $trans_load['en']['description'] : '' ?></textarea>

            </div>

            <div class="form-group for-shop">

                <label>Price </label>

                <input type="text" name="price[]" placeholder="without currency at the end" value="<?= $trans_load != null && isset($trans_load['en']['price']) ? $trans_load['en']['price'] : '' ?>" class="form-control">

            </div>

            <div class="form-group for-shop">

                <label>Old Price </label>

                <input type="text" name="old_price[]" placeholder="without currency at the end" value="<?= $trans_load != null && isset($trans_load['en']['old_price']) ? $trans_load['en']['old_price'] : '' ?>" class="form-control">

            </div>

        </div>

   

    <div class="form-group bordered-group">

        <?php

        if (isset($_POST['image']) && $_POST['image'] != null) {

            $image = 'attachments/shop_images/' . $_POST['image'];

            if (!file_exists($image)) {

                $image = 'attachments/no-image.png';

            }

            ?>

            <p>Current image:</p>

            <div>

                <img src="<?= base_url($image) ?>" class="img-responsive img-thumbnail" style="max-width:300px; margin-bottom: 5px;">

            </div>

            <input type="hidden" name="old_image" value="<?= $_POST['image'] ?>">

            <?php if (isset($_GET['to_lang'])) { ?>

                <input type="hidden" name="image" value="<?= $_POST['image'] ?>">

                <?php

            }

        }

        ?>

        <label for="userfile">Cover Image</label>

        <input type="file" id="userfile" name="userfile">

    </div>

    <div class="form-group bordered-group">

        <div class="others-images-container">

            <?= $otherImgs ?>

        </div>

        <a href="javascript:void(0);" data-toggle="modal" data-target="#modalMoreImages" class="btn btn-default">Upload more images</a>

    </div>

    <div class="form-group for-shop">

        <label>Shop Categories</label>

        <select class="selectpicker form-control show-tick show-menu-arrow" name="shop_categorie">

            <?php foreach ($shop_categories as $key_cat => $shop_categorie) { ?>

                <option <?= isset($_POST['shop_categorie']) && $_POST['shop_categorie'] == $key_cat ? 'selected=""' : '' ?> value="<?= $key_cat ?>">

                    <?php

                    foreach ($shop_categorie['info'] as $nameAbbr) {

                        if ($nameAbbr['abbr'] == $this->config->item('language_abbr')) {

                            echo $nameAbbr['name'];

                        }

                    }

                    ?>

                </option>

            <?php } ?>

        </select>

    </div>

    <div class="form-group for-shop">

        <label>Quantity</label>

        <input type="text" placeholder="number" name="quantity" value="<?= @$_POST['quantity'] ?>" class="form-control" id="quantity">

    </div>

    <?php if ($showBrands == 1) { ?>

        <div class="form-group for-shop">

            <label>Brand</label>

            <select class="selectpicker" name="brand_id">

                <?php foreach ($brands as $brand) { ?>

                    <option <?= isset($_POST['brand_id']) && $_POST['brand_id'] == $brand['id'] ? 'selected' : '' ?> value="<?= $brand['id'] ?>"><?= $brand['name'] ?></option>

                <?php } ?>

            </select>

        </div>

    <?php } if ($virtualProducts == 1) { ?>

        <div class="form-group for-shop">

            <label>Virtual Products <a href="javascript:void(0);" data-toggle="modal" data-target="#virtualProductsHelp"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label>

            <textarea class="form-control" name="virtual_products"><?= @$_POST['virtual_products'] ?></textarea>

        </div>

    <?php } ?>

    <div class="form-group for-shop">

        <label>In Slider</label>

        <select class="selectpicker" name="in_slider">

            <option value="1" <?= isset($_POST['in_slider']) && $_POST['in_slider'] == 1 ? 'selected' : '' ?>>Yes</option>

            <option value="0" <?= isset($_POST['in_slider']) && $_POST['in_slider'] == 0 || !isset($_POST['in_slider']) ? 'selected' : '' ?>>No</option>

        </select>

    </div>

    <div class="form-group for-shop">

        <label>Position</label>

        <input type="text" placeholder="Position number" name="position" value="<?= @$_POST['position'] ?>" class="form-control">

    </div>

    <button type="submit" name="submit" class="btn btn-lg btn-default btn-publish">Publish</button>

    <?php if ($this->uri->segment(3) !== null) { ?>

        <a href="<?= base_url('admin/products') ?>" class="btn btn-lg btn-default">Cancel</a>

    <?php } ?>

</form> -->



<!-- Modal Upload More Images -->

<div class="modal fade" id="modalMoreImages" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                <h4 class="modal-title" id="myModalLabel">Upload more images</h4>

            </div>

            <div class="modal-body">

                <form id="uploadImagesForm">

                    <input type="hidden" value="<?= isset($_POST['folder']) ? $_POST['folder'] : $timeNow ?>" name="folder">

                    <label for="others">Select images</label>

                    <input type="file" name="others[]" id="others" multiple />

                </form>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-default finish-upload">

                    <span class="finish-text">Finish</span>

                    <img src="<?= base_url('assets/imgs/load.gif') ?>" class="loadUploadOthers" alt="">

                </button>

            </div>

        </div>

    </div>

</div>

<!-- virtualProductsHelp -->

<div class="modal fade" id="virtualProductsHelp" tabindex="-1" role="dialog" aria-labelledby="virtualProductsHelp">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                <h4 class="modal-title" id="myModalLabel">What are virtual products?</h4>

            </div>

            <div class="modal-body">

                Sometimes we want to sell products that are for electronic use such as books. In the box below, you can enter links to products that can be downloaded after you confirm the order as "Processed" through the "Orders" tab, an email will be sent to the customer entered with the entire text entered in the "virtual products" field.

                We have left only the possibility to add links in this field because sometimes it is necessary that the electronic stuff you provide for downloading will be uploaded to other servers. If you want, you can add your files to "file manager" and take the links to them to add to the "virtual products"

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>

        </div>

    </div>