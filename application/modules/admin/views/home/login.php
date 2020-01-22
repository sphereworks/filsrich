<div class="login_page">
<div class="page-wrapper">
    <div class="authentication-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-0 card-right">
                    <div class="card tab2-card">
                        <div class="card-body">
                        <div class="filsrich-logo"><img src="<?= base_url('/assets/filsrich-logo/logo.png') ?>" alt=""></a></div>
                            <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="top-profile-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true"><span class="icon-user mr-2"></span>Login</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="top-tabContent">
                                <div class="tab-pane fade show active" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
                            <?php
                                if ($this->session->flashdata('err_login')) {
                                    ?>
                                    <div class="alert alert-danger"><?= $this->session->flashdata('err_login') ?></div>
                                    <?php
                                }
                                ?>        
                                <form class="form-horizontal auth-form" action="" method="POST">
                                        <div class="form-group">
                                            <input required="" name="username"  class="form-control" placeholder="Username" id="exampleInputEmail1">
                                        </div>
                                        <div class="form-group">
                                            <input required="" name="password" type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-terms">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                                <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                                                <a href="#" class="btn btn-default forgot-pass">lost your password</a>
                                            </div>
                                        </div>
                                        <div class="form-button">
                                            <button class="btn btn-primary" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="http://dev.filsrich.com/" class="btn btn-primary back-btn"><i data-feather="arrow-left"></i>back</a>
        </div>
    </div>
</div>
</div>