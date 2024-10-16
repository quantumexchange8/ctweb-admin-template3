<?= $this->include('partials/main') ?>

    <head>
        
        <?= $title_meta ?>

        <!-- quill css -->
        <link href="/assets/libs/quill/quill.core.css" rel="stylesheet" type="text/css" />
        <link href="/assets/libs/quill/quill.bubble.css" rel="stylesheet" type="text/css" />
        <link href="/assets/libs/quill/quill.snow.css" rel="stylesheet" type="text/css" />

        <?= $this->include('partials/head-css') ?>

    </head>

    <?= $this->include('partials/body') ?>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?= $this->include('partials/menu') ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <?= $page_title ?>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Ckeditor Classic Editor</h4>
                                    </div><!-- end card header -->
                                    <div class="card-body">
                                        <div id="ckeditor-classic"></div>
                                    </div>
                                </div>
                            </div><!-- end col-->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="justify-content-between d-flex align-items-center my-1">
                                    <h5 class="mb-2 pb-3">Quilljs Editor</h5>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Snow Editor</h4>
                                    </div>
                                    <div class="card-body">

                                        <div id="snow-editor" style="height: 300px;">
                                            <h3><span class="ql-size-large">Hello World!</span></h3>
                                            <p><br></p>
                                            <h3>This is an simple editable area.</h3>
                                            <p><br></p>
                                            <ul>
                                                <li>
                                                    Select a text to reveal the toolbar.
                                                </li>
                                                <li>
                                                    Edit rich document on-the-fly, so elastic!
                                                </li>
                                            </ul>
                                            <p><br></p>
                                            <p>
                                                End of simple area
                                            </p>

                                        </div> <!-- end Snow-editor-->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Bubble Editor</h4>
                                    </div>
                                    <div class="card-body">

                                        <div id="bubble-editor" style="height: 300px;">
                                            <h3><span class="ql-size-large">Hello World!</span></h3>
                                            <p><br></p>
                                            <h3>This is an simple editable area.</h3>
                                            <p><br></p>
                                            <ul>
                                                <li>
                                                    Select a text to reveal the toolbar.
                                                </li>
                                                <li>
                                                    Edit rich document on-the-fly, so elastic!
                                                </li>
                                            </ul>
                                            <p><br></p>
                                            <p>
                                                End of simple area
                                            </p>
                                        </div> <!-- end Snow-editor-->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->  
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                
                <?= $this->include('partials/footer') ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <?= $this->include('partials/right-sidebar') ?>

        <?= $this->include('partials/vendor-scripts') ?>

        <!-- ckeditor -->
        <script src="/assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

        <!-- quill js -->
        <script src="/assets/libs/quill/quill.min.js"></script>

        <!-- init js -->
        <script src="/assets/js/pages/form-editor.init.js"></script>

        <script src="/assets/js/app.js"></script>

    </body>
</html>
