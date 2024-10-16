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
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Badges</h4>
                                                    <p class="card-title-desc">Add any of the below mentioned modifier classes to change the appearance of a badge.</p>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div>
                                            <h5 class="font-size-14">Default</h5>
                                            <div class="d-flex flex-wrap gap-2 mt-1">
                                                <span class="badge bg-primary">Primary</span>
                                                <span class="badge bg-success">Success</span>
                                                <span class="badge bg-info">Info</span>
                                                <span class="badge bg-warning">Warning</span>
                                                <span class="badge bg-danger">Danger</span>
                                                <span class="badge bg-dark text-light">Dark</span>
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <h5 class="font-size-14">Soft Badge</h5>
                                            <div class="d-flex flex-wrap gap-2 mt-1">
                                                <span class="badge text-primary bg-primary-subtle">Primary</span>
                                                <span class="badge text-success  bg-success-subtle">Success</span>
                                                <span class="badge text-info bg-info-subtle">Info</span>
                                                <span class="badge text-warning  bg-warning-subtle">Warning</span>
                                                <span class="badge text-danger  bg-danger-subtle">Danger</span>
                                                <span class="badge text-dark bg-dark-subtle">Dark</span>
                                            </div>
                                        </div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Pill Badges</h4>
                                        <p class="card-title-desc">Use the <code>.rounded-pill</code> modifier class to make
                                            badges more rounded.
                                        </p>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div>
                                            <h5 class="font-size-14">Default</h5>
                                            <div class="d-flex flex-wrap gap-2 mt-1">
                                                <span class="badge rounded-pill bg-primary">Primary</span>
                                                <span class="badge rounded-pill bg-success">Success</span>
                                                <span class="badge rounded-pill bg-info">Info</span>
                                                <span class="badge rounded-pill bg-warning">Warning</span>
                                                <span class="badge rounded-pill bg-danger">Danger</span>
                                                <span class="badge rounded-pill bg-dark text-light">Dark</span>
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <h5 class="font-size-14">Soft Badge</h5>
                                            <div class="d-flex flex-wrap gap-2 mt-1">
                                                <span class="badge rounded-pill text-primary bg-primary-subtle">Primary</span>
                                                <span class="badge rounded-pill text-success  bg-success-subtle">Success</span>
                                                <span class="badge rounded-pill text-info bg-info-subtle">Info</span>
                                                <span class="badge rounded-pill text-warning  bg-warning-subtle">Warning</span>
                                                <span class="badge rounded-pill text-danger  bg-danger-subtle">Danger</span>
                                                <span class="badge rounded-pill text-dark bg-dark-subtle">Dark</span>
                                            </div>
                                        </div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Badges in Buttons</h4>
                                        <p class="card-title-desc">Badges can be used as part of links or buttons to provide a counter.</p>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div class="d-flex flex-wrap gap-2">
                                            <button type="button" class="btn btn-primary">
                                                Notifications <span class="badge bg-success ms-1">4</span>
                                            </button>
                                            <button type="button" class="btn btn-success">
                                                Messages <span class="badge bg-danger ms-1">2</span>
                                            </button>
                                            <button type="button" class="btn btn-outline-secondary">
                                                Draft <span class="badge bg-success ms-1">2</span>
                                            </button>
                                        </div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Badges Position Examples</h4>
                                        <p class="card-title-desc">Example of Badges Position</p>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div class="d-flex flex-wrap gap-3">
                                            <button type="button" class="btn btn-primary position-relative">
                                                Mails <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">+99 <span class="visually-hidden">unread messages</span></span>
                                            </button>

                                            
                                            <button type="button" class="btn btn-light position-relative">
                                                Alerts <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-1"><span class="visually-hidden">unread messages</span></span>
                                            </button>

                                            <button type="button" class="btn btn-primary position-relative p-0 avatar-sm rounded">
                                                <span class="avatar-title bg-transparent">
                                                    <i class="bx bxs-envelope"></i>
                                                </span>
                                                <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-1"><span class="visually-hidden">unread messages</span></span>
                                            </button>

                                            <button type="button" class="btn btn-light position-relative p-0 avatar-sm rounded-circle">
                                                <span class="avatar-title bg-transparent text-reset">
                                                    <i class="bx bxs-bell"></i>
                                                </span>
                                            </button>

                                            <button type="button" class="btn btn-light position-relative p-0 avatar-sm rounded-circle">
                                                <span class="avatar-title bg-transparent text-reset">
                                                    <i class="bx bx-menu"></i>
                                                </span>
                                                <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                                            </button>
                                        </div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Popovers</h4>
                                        <p class="card-title-desc">Four options are available: top, right, bottom, and left aligned. Directions are mirrored when using Bootstrap in RTL.</p>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div class="d-flex flex-wrap gap-2">
                                        
                                            <button type="button" class="btn btn-secondary waves-effect" data-bs-toggle="popover" data-bs-placement="top"
                                                data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                Popover on top
                                            </button>
                                        
                                            <button type="button" class="btn btn-secondary waves-effect" data-bs-toggle="popover" data-bs-placement="right"
                                                data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                Popover on right
                                            </button>
                                        
                                            <button type="button" class="btn btn-secondary waves-effect" data-bs-toggle="popover" data-bs-placement="bottom"
                                                data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                Popover on bottom
                                            </button>
                                        
                                            <button type="button" class="btn btn-secondary waves-effect" data-bs-toggle="popover" data-bs-placement="left"
                                                title="Popover Title" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                Popover on left
                                            </button>
                                        
                                            <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="popover"
                                                data-bs-trigger="focus" title="Dismissible popover"
                                                data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</button>
                                        </div>
        
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
        
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Tooltips</h4>
                                        <p class="card-title-desc">Hover over the links below to see tooltips:</p>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div class="d-flex flex-wrap gap-2">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Tooltip on top">
                                                Tooltip on top
                                            </button>
                                        
                                            <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="right"
                                                title="Tooltip on right">
                                                Tooltip on right
                                            </button>
                                        
                                            <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="Tooltip on bottom">
                                                Tooltip on bottom
                                            </button>
                                        
                                            <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Tooltip on left">
                                                Tooltip on left
                                            </button>
                                        
                                        </div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Pagination Default Example</h4>
                                        <p class="card-title-desc">Pagination links indicate a series of related content exists across multiple pages.</p>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                            </ul>
                                        </nav>
        
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination mb-0">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <i class="mdi mdi-chevron-left"></i>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <i class="mdi mdi-chevron-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
        
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="font-size-14">Pagination Disabled and Active</h5>
                                        <p class="card-title-desc">Pagination links are customizable for
                                            different circumstances. Use <code>.disabled</code> for links that appear
                                            un-clickable and <code>.active</code> to
                                            indicate the current page.</p>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <nav aria-label="...">
                                            <ul class="pagination">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item active">
                                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
        
                                        <nav aria-label="...">
                                            <ul class="pagination mb-0">
                                                <li class="page-item disabled">
                                                    <span class="page-link"><i class="mdi mdi-chevron-left"></i></span>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item active">
                                                    <span class="page-link">
                                                        2
                                                        <span class="sr-only">(current)</span>
                                                    </span>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#"><i class="mdi mdi-chevron-right"></i></a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->


                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="font-size-14">Pagination Sizing</h5>
                                        <p class="card-title-desc">Fancy larger or smaller pagination? Add <code>.pagination-lg</code> or <code>.pagination-sm</code> for additional
                                                sizes.</p>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <nav aria-label="...">
                                            <ul class="pagination pagination-lg">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
        
                                        <nav aria-label="...">
                                            <ul class="pagination pagination-sm mb-0">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

        
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="font-size-14">Pagination Alignment</h5>
                                        <p class="card-title-desc">Change the alignment of pagination
                                            components with flexbox utilities.</p>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
        
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-end mb-0">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->                        
        
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Border Spinner</h4>
                                        <p class="card-title-desc">Use the border spinners for a lightweight loading indicator.</p>
                                    </div><!-- end card header -->

                                    <div class="card-body">                                        
                                        <div>
                                            <div class="spinner-border text-primary m-1" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-border text-secondary m-1" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-border text-success m-1" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-border text-info m-1" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-border text-warning m-1" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-border text-danger m-1" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-border text-dark m-1" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
        
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->                       
                            
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Growing Spinner</h4>
                                        <p class="card-title-desc">If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!</p>
                                    </div><!-- end card header -->
                                    
                                    <div class="card-body">
                                        <div>
                                            <div class="spinner-grow text-primary m-1" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-grow text-secondary m-1" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-grow text-success m-1" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-grow text-info m-1" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-grow text-warning m-1" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-grow text-danger m-1" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-grow text-dark m-1" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
        
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Close Button</h4>
                                        <p  class="card-title-desc">Provide an option to dismiss or close a component with <code>.btn-close</code>. Default styling is limited, but highly customizable. Modify the Sass variables to replace the default <code>background-image</code>. <strong>Be sure to include text for screen readers</strong>, as we’ve done with <code>aria-label</code>.</p>
                                    </div><!-- end card header -->

                                    <div class="card-body">                                        
                                        <button type="button" class="btn-close" aria-label="Close"></button>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Disable Close Button</h4>
                                        <p class="card-title-desc">Disabled close buttons change their <code>opacity</code>. We’ve also applied <code>pointer-events: none</code> and <code>user-select: none</code> to preventing hover and active states from triggering.</p>
                                    </div><!-- end card header -->

                                    <div class="card-body">                                        
                                        <button type="button" class="btn-close" disabled aria-label="Close"></button>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card overflow-hidden">
                                    <div class="card-header">
                                        <h4 class="card-title">Close Button White Variant</h4>
                                        <p class="card-title-desc">Change the default <code>.btn-close</code> to be white with the <code>.btn-close-white</code> class. This class uses the <code>filter</code> property to invert the <code>background-image</code>.</p>
                                    </div><!-- end card header -->

                                    <div class="card-body">                                        
                                        <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                                        <button type="button" class="btn-close btn-close-white" disabled aria-label="Close"></button>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Additive Border</h4>
                                        <p class="card-title-desc">Add borders to custom elements</p>
                                    </div><!-- end card header -->
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap gap-2">
                                            <span class="border border-primary bg-light p-5 d-inline-block"></span>
                                            <span class="border-top border-primary bg-light p-5 d-inline-block"></span>
                                            <span class="border-end border-primary bg-light p-5 d-inline-block"></span>
                                            <span class="border-bottom border-primary bg-light p-5 d-inline-block"></span>
                                            <span class="border-start border-primary bg-light p-5 d-inline-block"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end row -->


                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Subtractive Border</h4>
                                        <p class="card-title-desc">Or remove borders.</p>
                                    </div><!-- end card header -->
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap gap-2">
                                            <span class="border border-0 border-primary bg-light p-5 d-inline-block"></span>
                                            <span class="border border-top-0 border-primary bg-light p-5 d-inline-block"></span>
                                            <span class="border border-end-0 border-primary bg-light p-5 d-inline-block"></span>
                                            <span class="border border-bottom-0 border-primary bg-light p-5 d-inline-block"></span>
                                            <span class="border border-start-0 border-primary bg-light p-5 d-inline-block"></span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        
                            <div class="col-xl-6">
                                <div class="card card-h-100">
                                    <div class="card-header">
                                        <h4 class="card-title">Border Opacity</h4>
                                        <p class="card-title-desc">To change that opacity, override --bs-border-opacity via custom styles or inline styles.</p>
                                    </div><!-- end card header -->
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap gap-2">
                                            <span class="border border-primary border-opacity-10 bg-light p-5 d-inline-block"></span>
                                            <span class="border border-primary border-opacity-25 bg-light p-5 d-inline-block"></span>
                                            <span class="border border-primary border-opacity-50 bg-light p-5 d-inline-block"></span>
                                            <span class="border border-primary border-opacity-75 bg-light p-5 d-inline-block"></span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Border Width</h4>
                                        <p class="card-title-desc">Add classes to an element to easily width apply.</p>
                                    </div><!-- end card header -->
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap gap-2">
                                            <span class="border border-1 p-5 d-inline-block"></span>
                                            <span class="border border-2 p-5 d-inline-block"></span>
                                            <span class="border border-3 p-5 d-inline-block"></span>
                                            <span class="border border-4 p-5 d-inline-block"></span>
                                            <span class="border border-5 p-5 d-inline-block"></span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Color</h4>
                                        <p class="card-title-desc">Change the border color using utilities built on our theme colors.</p>
                                    </div> <!-- end card header -->
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap gap-2">
                                            <span class="border border-primary p-5 d-inline-block"></span>
                                            <span class="border border-secondary  p-5 d-inline-block"></span>
                                            <span class="border border-success  p-5 d-inline-block"></span>
                                            <span class="border border-danger  p-5 d-inline-block"></span>
                                            <span class="border border-warning  p-5 d-inline-block"></span>
                                            <span class="border border-info  p-5 d-inline-block"></span>
                                            <span class="border border-light  p-5 d-inline-block"></span>
                                            <span class="border border-dark  p-5 d-inline-block"></span>
                                        </div>
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card card-h-100">
                                    <div class="card-header">
                                        <h4 class="card-title">Border Radius</h4>
                                        <p class="card-title-desc">Add classes to an element to easily round its corners.</p>
                                    </div><!-- end card header -->
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap gap-3 align-items-center">
                                            <img src="assets/images/users/avatar-10.jpg" class="rounded avatar-xl" alt=" ">
                                            <img src="assets/images/users/avatar-10.jpg" class="rounded-top avatar-xl" alt="">
                                            <img src="assets/images/users/avatar-10.jpg" class="rounded-end avatar-xl" alt="">
                                            <img src="assets/images/users/avatar-10.jpg" class="rounded-bottom avatar-xl" alt="">
                                            <img src="assets/images/users/avatar-10.jpg" class="rounded-start avatar-xl" alt="">
                                            <img src="assets/images/users/avatar-10.jpg" class="rounded-circle avatar-xl" alt="">
                                            <img src="assets/images/small/img-3.jpg" alt="" class="rounded-pill w-25 h-auto">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        
                            <div class="col-xl-6">
                                <div class="card card-h-100">
                                    <div class="card-header">
                                        <h4 class="card-title">Rounded Sizes</h4>
                                        <p class="card-title-desc">Use the scaling classes for larger or smaller rounded corners. Sizes range from 0 to 5, and can be configured by modifying the utilities API.</p>
                                    </div><!-- end card header -->
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap gap-2">
                                            <img src="assets/images/users/avatar-10.jpg" class="rounded-0 avatar-xl" alt="">
                                            <img src="assets/images/users/avatar-10.jpg" class="rounded-1 avatar-xl" alt="">
                                            <img src="assets/images/users/avatar-10.jpg" class="rounded-2 avatar-xl" alt="">
                                            <img src="assets/images/users/avatar-10.jpg" class="rounded-3 avatar-xl" alt="">
                                            <img src="assets/images/users/avatar-10.jpg" class="rounded-4 avatar-xl" alt="">
                                            <img src="assets/images/users/avatar-10.jpg" class="rounded-5 avatar-xl" alt="">
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div>
                                              
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

        <script src="/assets/js/app.js"></script>

    </body>
</html>
