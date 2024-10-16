<?= $this->include('partials/main') ?>

    <head>
        
        <?= $title_meta ?>

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
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Line Chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="lineChart" class="chartjs-chart" data-colors='["rgba(57, 128, 192, 0.2)", "#3980c0", "rgba(235, 239, 242, 0.2)", "#ebeff2"]'></canvas>   
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Bar Chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="bar" class="chartjs-chart" data-colors='["rgba(51, 161, 134, 0.8)", "rgba(51, 161, 134, 0.9)"]'></canvas>
                                          
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Pie Chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="pieChart" class="chartjs-chart" data-colors='["#33a186", "#ebeff2"]'></canvas>
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Donut Chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="doughnut" class="chartjs-chart" data-colors='["#3980c0", "#ebeff2"]'></canvas>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Polar Chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="polarArea" class="chartjs-chart" data-colors='["#fa6374", "#33a186", "#fc931d", "#3980c0"]'> </canvas>
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Radar Chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="radar" class="chartjs-chart" data-colors='["rgba(42, 181, 125, 0.2)", "#33a186", "rgba(57, 128, 192, 0.2)", "#3980c0"]'></canvas>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

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

         <!-- Chart JS -->
         <script src="/assets/libs/chart.js/chart.min.js"></script>
         <script src="/assets/js/pages/chartjs.init.js"></script> 

        <script src="/assets/js/app.js"></script>

    </body>
</html>
