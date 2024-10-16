<?= $this->include('partials/main') ?>

    <head>
        
        <?= $title_meta ?>

        <?= $this->include('partials/head-css') ?>

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
                                    <h5 class="text-primary">Welcome Back!</h5>
                                    <p class="text-muted">Sign in to continue.</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <?php if(!empty(session()->getFlashdata('error'))): ?>
                                        <div class="alert alert-danger" role="alert"><?= session()->getFlashdata('error') ?></div>
                                    <?php endif; ?>
                                    <?php if(!empty(session()->getFlashdata('success'))): ?>
                                        <div class="alert alert-success" role="alert"><?= session()->getFlashdata('success') ?></div>
                                    <?php endif; ?>
                                    <form action="authCheck" method="post">
                                        <?= csrf_field(); ?>
                                        <div class="mb-3">
                                            <label class="form-label" for="username">Email</label>
                                            <input type="text" class="form-control" name="email" id="username" value="admin@themesdesign.in" placeholder="Enter email">
                                            <span class="text-danger"><?= isset($validation) ? $validation->showError('email') : '' ?></span>
                                        </div>
                                        <div class="mb-3">
                                            <div class="float-end">
                                                <a href="forget-password" class="text-muted">Forgot password?</a>
                                            </div>
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="password" id="userpassword" value="123456" placeholder="Enter password">
                                            <span class="text-danger"><?= isset($validation) ? $validation->showError('password') : '' ?></span>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="auth-remember-check">
                                            <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                        </div>
                                        <div class="mt-3 text-end">
                                            <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Log In</button>
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
                                            <p class="mb-0">Don't have an account ? <a href="register" class="fw-medium text-primary"> Signup now </a> </p>
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
