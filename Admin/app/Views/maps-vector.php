<?= $this->include('partials/main') ?>

    <head>
        
        <?= $title_meta ?>

        <!-- plugin css -->
        <link href="/assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">World Vector Map</h4>
                                     </div><!-- end card header -->
                                    <div class="card-body">
                                        <div id="world-map-line-markers" style="height: 420px"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->  
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">World Vector Map with Markers</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="world-map-markers" style="height: 350px"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">World Vector Map with Image Markers</h4>
                                    </div><!-- end card header -->
                                    <div class="card-body">
                                        <div id="world-map-markers-image"  style="height: 350px"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div><!-- end row-->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">USA Vector Map</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="usa-vectormap" style="height: 350px"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Canada Vector Map</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="canada-vectormap"  style="height: 350px"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

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

        <!-- Vector map-->
        <script src="/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="/assets/libs/jsvectormap/maps/world-merc.js"></script>
        <script src="/assets/libs/jsvectormap/maps/us-merc-en.js"></script>
        <script src="/assets/libs/jsvectormap/maps/canada.js"></script>

        <!-- vector-maps init -->
        <script src="/assets/js/pages/vector-maps.init.js"></script>

        <script src="/assets/js/app.js"></script>

    </body>
</html>
