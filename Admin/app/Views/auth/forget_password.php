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
                                <img src="assets/images/currenttech_logo.svg" alt="" height="40">
                            </a>
                       </div>

                        <div class="card">
                            <div class="card-body p-4"> 
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Recover Password</h5>
                                </div>
                                <div class="p-2 mt-4">
                                    <?php if(!empty(session()->getFlashdata('error'))): ?>
                                    <div class="alert alert-danger text-center small mb-4" role="alert">
                                        <?= session()->getFlashdata('error') ?>
                                    </div>
                                    <?php endif; ?>
                                    <?php if(!empty(session()->getFlashdata('success'))): ?>
                                    <div class="alert alert-success text-center small mb-4" role="alert">
                                        <?= session()->getFlashdata('success') ?>
                                    </div>
                                    <?php endif; ?>
                                    <!-- email-check -->
                                    <form action="/" method="post">
                                        <?= csrf_field() ?>
                                        <div class="mb-3">
                                            <label class="form-label" for="useremail">Email</label>
                                            <input type="email" class="form-control" name="email" id="useremail" placeholder="Enter email">
                                            <span class="text-danger"><?= isset($validation) ? $validation->showError('email') : '' ?></span>
                                        </div>
                                        
                                        <div class="mt-3 text-end">
                                            <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Reset</button>
                                        </div>
                
                                        <div class="mt-4 text-center">
                                            <p class="mb-0">Remember It ? <a href="login" class="fw-medium text-primary"> Sign in </a></p>
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
