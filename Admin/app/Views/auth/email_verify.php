<?= $this->include('partials/main') ?>

    <head>
        
        <?= $title_meta ?>

        <?= $this->include('partials/head-css') ?>
        <style type="text/css">
            .error{
              border-color:red;
            }
            .valid{
              border-color:green;
            }
        </style>

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
                                <div class="avatar-lg mx-auto">
                                    <div class="avatar-title rounded-circle bg-light">
                                        <i class="bx bxs-envelope h2 mb-0 text-primary"></i>
                                    </div>
                                </div>
                                <div class="p-2 mt-4">
                                    <div class="text-center">
                                        <h4>Verify your email</h4>
                                        <p class="mb-5">Please enter the 4 digit code sent to <span class="fw-bold"><?= ($otp_email) ? $otp_email : '' ?></span></p>
                                    </div>
                                    
                                    <form id="otp-form" action="otp-verify" method="post">
                                        <?php if(!empty(session()->getFlashdata('error'))): ?>
                                            <div class="alert alert-danger" role="alert"><?= session()->getFlashdata('error') ?></div>
                                        <?php endif; ?>
                                        <?php if(!empty(session()->getFlashdata('success'))): ?>
                                            <div class="alert alert-success" role="alert"><?= session()->getFlashdata('success') ?></div>
                                        <?php endif; ?>
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="email" value="<?= ($otp_email) ? $otp_email : '' ?>">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="digit1-input" class="visually-hidden">Digit 1</label>
                                                    <input type="text"
                                                        name="otp_1"
                                                        class="form-control form-control-lg text-center two-step"
                                                        maxLength="1"
                                                        data-value="1"
                                                        id="digit1-input" required>
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="digit2-input" class="visually-hidden">Digit 2</label>
                                                    <input type="text"
                                                        name="otp_2"
                                                        class="form-control form-control-lg text-center two-step"
                                                        maxLength="1"
                                                        data-value="2"
                                                        id="digit2-input" required>
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="digit3-input" class="visually-hidden">Digit 3</label>
                                                    <input type="text"
                                                        name="otp_3"
                                                        class="form-control form-control-lg text-center two-step"
                                                        maxLength="1"
                                                        data-value="3"
                                                        id="digit3-input" required>
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="digit4-input" class="visually-hidden">Digit 4</label>
                                                    <input type="text"
                                                        name="otp_4"
                                                        class="form-control form-control-lg text-center two-step"
                                                        maxLength="1"
                                                        data-value="4"
                                                        id="digit4-input" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <button class="btn btn-primary w-100 waves-effect waves-light" id="btn-submit" type="submit">Confirm</button>
                                        </div>
                                    </form>

                                <div class="mt-5 text-center">
                                    <p class="text-muted mb-0">Didn't receive an email ? <a href="<?= ($otp_email) ? 'otp-resend' : '#' ?>"
                                        class="text-primary fw-semibold"> Resend </a> </p>
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

        <!-- two-step-verification js -->
        <script src="/assets/js/pages/two-step-verification.init.js"></script>
    </body>
</html>
