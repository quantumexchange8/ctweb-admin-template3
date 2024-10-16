<?= $this->include('partials/main') ?>

    <head>
        
        <?= $title_meta ?>

        <!-- swiper css -->
        <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css">

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
                            <div class="col-lg-12">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <h4 class="card-title mb-5">Horizontal Timeline</h4>

                                        <div class="hori-timeline">
                                            <!-- Swiper -->
                                            <div class="swiper-container slider events">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="event-list">
                                                            <div class="item event-list">
                                                                <div class="event-date">
                                                                    <div class="text-primary font-size-13">03 May</div>
                                                                </div>
                                                                
                                                                <div class="px-3">
                                                                    <h5 class="font-size-17">First event</h5>
                                                                    <p class="text-muted">If several languages coalesce, the grammar of the resulting the individual</p>
                                                                    <div>
                                                                        <a href="#">View more <i class="mdi mdi-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="event-list">
                                                            <div class="item event-list">
                                                                <div class="event-date">
                                                                    <div class="text-primary font-size-13">08 May</div>
                                                                </div>
                                                                
                                                                <div class="px-3">
                                                                    <h5 class="font-size-17">Second event</h5>
                                                                    <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit illo inventore veritatis</p>
                                                                    <div>
                                                                        <a href="#">View more <i class="mdi mdi-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end swiper slide -->
                                                    <div class="swiper-slide">
                                                        <div class="event-list">
                                                            <div class="item event-list">
                                                                <div class="event-date">
                                                                    <div class="text-primary font-size-13">11 May</div>
                                                                </div>
                                                                
                                                                <div class="px-3">
                                                                    <h5 class="font-size-17">Third event</h5>
                                                                    <p class="text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                                                                    <div>
                                                                        <a href="#">View more <i class="mdi mdi-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end swiper slide -->
                                                    <div class="swiper-slide">
                                                        <div class="event-list">
                                                            <div class="item event-list">
                                                                <div class="event-date">
                                                                    <div class="text-primary font-size-13">16 May</div>
                                                                </div>
                                                                
                                                                <div class="px-3">
                                                                    <h5 class="font-size-17">Fourth event</h5>
                                                                    <p class="text-muted">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam</p>
                                                                    <div>
                                                                        <a href="#">View more <i class="mdi mdi-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end swiper slide -->
                                                    <div class="swiper-slide">
                                                        <div class="event-list">
                                                            <div class="item event-list">
                                                                <div class="event-date">
                                                                    <div class="text-primary font-size-13">23 May</div>
                                                                </div>
                                                                
                                                                <div class="px-3">
                                                                    <h5 class="font-size-17">Fifth event</h5>
                                                                    <p class="text-muted">Itaque earum rerum hic tenetur a sapiente delectus maiores alias consequatur aut</p>
                                                                    <div>
                                                                        <a href="#">View more <i class="mdi mdi-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end swiper slide -->
                                                    <div class="swiper-slide">
                                                        <div class="event-list">
                                                            <div class="item event-list">
                                                                <div class="event-date">
                                                                    <div class="text-primary font-size-13">27 May</div>
                                                                </div>
                                                                
                                                                <div class="px-3">
                                                                    <h5 class="font-size-17">Sixth event</h5>
                                                                    <p class="text-muted">Donec quam felis ultricies nec pellentesque eu pretium sem consequat quis</p>
                                                                    <div>
                                                                        <a href="#">View more <i class="mdi mdi-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end swiper slide -->
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-5">Vertical Timeline</h4>
                                        <div class="">
                                            <ul class="verti-timeline list-unstyled">
                                                <li class="event-list">
                                                    <div class="event-date text-primar">03 May</div>
                                                    <h5 class="font-size-17">Timeline event One</h5>
                                                    <p class="text-muted">Perspitis unde omnis it voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae explicabo.</p>       
                                                </li>
                                                <li class="event-list">
                                                    <div class="event-date text-primar">08 May</div>
                                                    <h5 class="font-size-17">Timeline event Two</h5>
                                                    <p class="text-muted">At vero eos dignissimos ducimus quos
                                                        dolores chooses to enjoy pleasure that has no annoying.</p>
                                                        <div class="d-flex flex-wrap align-items-start event-img mt-3 gap-2">
                                                            <img src="assets/images/small/img-2.jpg" alt="" class="img-fluid rounded" width="60">
                                                            <img src="assets/images/small/img-5.jpg" alt="" class="img-fluid rounded" width="60">
                                                        </div>       
                                                </li>
                                                <li class="event-list">
                                                    <div class="event-date text-primar">11 May</div>
                                                    <h5 class="font-size-17">Timeline event Three</h5>
                                                    <p class="text-muted">Vivamus ultrices massa turna interdum eu. Pellentesque habitant morbi tristique eget justo sit amet est varius mollis et quis nisi. Suspendisse potenti. senectus et netus et malesuada fames ac turpis egestas.</p>       
                                                </li>
                                                <li class="event-list">
                                                    <div class="event-date text-primar">16 May</div>
                                                    <h5 class="font-size-17">Timeline event Four</h5>
                                                    <p class="text-muted mb-0">Printing and typesetting industry. been the industry'scrambled it make a type specimen book.</p>       
                                                    <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light mt-4">See
                                                        more detail
                                                    </button>
                                                </li>
                                                <li class="event-list">
                                                    <div class="event-date text-primar">27 May</div>
                                                    <h5 class="font-size-17">Timeline event Five</h5>
                                                    <p class="text-muted">Excepturi, obcaecati, quisquam id
                                                        molestias eaque asperiores voluptatibus cupiditate error
                                                        assumenda delectus odit
                                                        similique earum voluptatem 
                                                        Odit, itaque, deserunt corporis vero ipsum nisi repellat ... <a href="#">Read more</a></p>    
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

        <!-- swiper js -->
        <script src="/assets/libs/swiper/swiper-bundle.min.js"></script>
        <!-- timeline init -->
        <script src="/assets/js/pages/timeline.init.js"></script>

        <script src="/assets/js/app.js"></script>

    </body>
</html>
