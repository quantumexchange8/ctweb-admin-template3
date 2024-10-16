<?= $this->include('partials/main') ?>

    <head>
        
        <?= $title_meta ?>

        <?= $this->include('partials/head-css') ?>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>

    <?= $this->include('partials/body') ?>

    <div class="authentication-bg min-vh-100">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="d-flex flex-column min-vh-100 px-3 pt-4">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-lg-6 col-xl-5">

                        <div class="text-center mb-4">
                            <a href="/">
                                <img src="/assets/images/currenttech_logo.svg" alt="" height="40">
                            </a>
                       </div>

                        <div class="card">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Register Account</h5>
                                </div>
                                <div class="p-2 mt-4">
                                    <?php if(!empty(session()->getFlashdata('error'))): ?>
                                        <div class="alert alert-danger text-center small mb-4" role="alert"><?= session()->getFlashdata('error') ?> </div>
                                    <?php endif; ?>
                                    <!-- registerStore -->
                                    <form action="/" method="post">
                                        <?= csrf_field(); ?>
                                        <div class="mb-3">
                                            <label class="form-label" for="name">Name</label>
                                            <input type="text" class="form-control" name="name" id="name" value="<?= set_value('name') ?>" placeholder="Enter name">
                                            <span class="text-danger"><?= isset($validation) ? $validation->showError('name') : '' ?></span>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="useremail">Email</label>
                                            <input type="email" class="form-control" name="email" id="useremail" value="<?= set_value('email') ?>" placeholder="Enter email">
                                            <span class="text-danger"><?= isset($validation) ? $validation->showError('email') : '' ?></span>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                            <span class="text-danger"><?= isset($validation) ? $validation->showError('password') : '' ?></span>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="confirmpassword">Confirm Password</label>
                                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Enter Confirm Password">
                                            <span class="text-danger"><?= isset($validation) ? $validation->showError('confirm_password') : '' ?></span>
                                        </div>

                                        <div class="mb-3">
                                            <div class="g-recaptcha" data-sitekey="6Lc5pm0dAAAAAMW1Ws7hmv1GabOcertsFN2aWW01"></div>
                                        </div>
                                        
                                        <div class="mt-3 text-end">
                                            <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Register</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <div class="signin-other-title">
                                                <h5 class="font-size-14 mb-3 title">Sign in with</h5>
                                            </div>
            
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()" class="social-list-item bg-primary text-white border-primary">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()" class="social-list-item bg-info text-white border-info">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()" class="social-list-item bg-danger text-white border-danger">
                                                        <i class="mdi mdi-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <p class="text-muted mb-0">Already have an account ? <a href="login" class="fw-medium text-primary"> Login</a></p>
                                        </div>
                                    </form>
                                </div>
            
                            </div>
                        </div>

                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center text-muted p-4">
                            <p class="text-white-50">© <script>document.write(new Date().getFullYear())</script> Current Tech.
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- end container -->
    </div>
    <!-- end authentication section -->

        <?= $this->include('partials/vendor-scripts') ?>

    </body>
</html>
