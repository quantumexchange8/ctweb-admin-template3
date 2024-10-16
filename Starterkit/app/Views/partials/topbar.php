<header id="page-topbar" class="isvertical-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="/" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.svg" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-sm.svg" alt="" height="22"> <span class="logo-txt"><?= lang('Files.Symox') ?></span>
                    </span>
                </a>

                <a href="/" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.svg" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-sm.svg" alt="" height="22"> <span class="logo-txt"><?= lang('Files.Symox') ?></span>
                    </span>
                </a>
                
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- Search -->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="<?= lang('Files.Search') ?>">
                    <span class="bx bx-search"></span>
                </div>
            </form>
        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block d-lg-none">
                <button type="button" class="btn header-item"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-sm" data-feather="search"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                    <form class="p-2">
                        <div class="search-box">
                            <div class="position-relative">
                                <input type="text" class="form-control rounded bg-light border-0" placeholder="<?= lang('Files.Search') ?>">
                                <i class="mdi mdi-magnify search-icon"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block language-switch">
                <button type="button" class="btn header-item"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php
                        $session = \Config\Services::session();
                        $lang = $session->get('lang');
                        switch($lang){
                            case 'en':
                               echo '<img class="header-lang-img" src="assets/images/flags/us.jpg" alt="Header Language" height="16">';
                                break;
                            case 'es':
                               echo '<img class="header-lang-img" src="assets/images/flags/spain.jpg" alt="Header Language" height="16">';
                                break;
                            case 'de':
                               echo '<img class="header-lang-img" src="assets/images/flags/germany.jpg" alt="Header Language" height="16">';
                                break;
                            case 'it':
                               echo '<img class="header-lang-img" src="assets/images/flags/italy.jpg" alt="Header Language" height="16">';
                                break;
                            case 'ru':
                               echo '<img class="header-lang-img" src="assets/images/flags/russia.jpg" alt="Header Language" height="16">';
                                break;
                            default:
                                echo '<img class="header-lang-img" src="assets/images/flags/us.jpg" alt="Header Language" height="16">';
                        }
                    ?>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    
                    <!-- item-->
                    <?php if($lang !== 'en'):  ?>
                    <a href="<?= base_url('lang/en'); ?>" class="dropdown-item notify-item language" data-lang="eng">
                        <img src="/assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                    </a>
                    <?php endif ?>

                    <!-- item-->
                    <?php if($lang !== 'es'):  ?>
                    <a href="<?= base_url('lang/es'); ?>" class="dropdown-item notify-item language" data-lang="sp">
                        <img src="/assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                    </a>
                    <?php endif ?>

                    <!-- item-->
                    <?php if($lang !== 'de'):  ?>
                    <a href="<?= base_url('lang/de'); ?>" class="dropdown-item notify-item language" data-lang="gr">
                        <img src="/assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                    </a>
                    <?php endif ?>

                    <!-- item-->
                    <?php if($lang !== 'it'):  ?>
                    <a href="<?= base_url('lang/it'); ?>" class="dropdown-item notify-item language" data-lang="it">
                        <img src="/assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                    </a>
                    <?php endif ?>

                    <!-- item-->
                    <?php if($lang !== 'ru'):  ?>
                    <a href="<?= base_url('lang/ru'); ?>" class="dropdown-item notify-item language" data-lang="ru">
                        <img src="/assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                    </a>
                    <?php endif ?>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon-sm" data-feather="bell"></i>
                <span class="noti-dot bg-danger rounded-pill">3</span>
            </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0 font-size-15"> <?= lang('Files.Notifications') ?> </h5>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small"> <?= lang('Files.Mark all as read') ?></a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 250px;">
                        <h6 class="dropdown-header bg-light"><?= lang('Files.New') ?></h6>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex border-bottom align-items-start">
                                <div class="flex-shrink-0">
                                    <img src="assets/images/users/avatar-3.jpg"
                                    class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Justin Verduzco</h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-13"><?= lang('Files.It will seem like simplified English') ?> <span class="badge text-success bg-success-subtle">Review</span></p>
                                        <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> <?= lang('Files.1 hour ago') ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex border-bottom align-items-start">
                                <div class="flex-shrink-0">
                                    <div class="avatar-sm me-3">
                                        <span class="avatar-title bg-primary rounded-circle font-size-16">
                                            <i class="bx bx-shopping-bag"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1"><?= lang('Files.New order has been placed') ?></h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-13"><?= lang('Files.Open the order confirmation or shipment confirmation.') ?></p>
                                        <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> <?= lang('Files.5 hours ago') ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <h6 class="dropdown-header bg-light">Earlier</h6>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex border-bottom align-items-start">
                                <div class="flex-shrink-0">
                                    <div class="avatar-sm me-3">
                                        <span class="avatar-title bg-success-subtle text-success rounded-circle font-size-16">
                                            <i class="bx bx-cart"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1"><?= lang('Files.Your item is shipped') ?></h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-13"><?= lang('Files.Open the order confirmation or shipment confirmation.') ?></p>
                                        <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> <?= lang('Files.1 day ago') ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="d-flex border-bottom align-items-start">
                                <div class="flex-shrink-0">
                                    <img src="assets/images/users/avatar-4.jpg"
                                        class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Salena Layfield</h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-13"><?= lang('Files.Yay ! Everything worked!') ?></p>
                                        <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> <?= lang('Files.1 hour ago') ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                            <i class="uil-arrow-circle-right me-1"></i> <span><?= lang('Files.View More') ?></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-none d-sm-inline-block">
                <button type="button" class="btn header-item light-dark" id="mode-setting-btn">
                    <i data-feather="moon" class="icon-sm layout-mode-dark"></i>
                    <i data-feather="sun" class="icon-sm layout-mode-light"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                    alt="Header Avatar">
                </button>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <a class="dropdown-item" href="javascript: void(0);"><i class='bx bx-user-circle text-muted font-size-18 align-middle me-1'></i> <span class="align-middle"><?= lang('Files.My Account') ?></span></a>
                    <a class="dropdown-item" href="javascript: void(0);"><i class='bx bx-chat text-muted font-size-18 align-middle me-1'></i> <span class="align-middle"><?= lang('Files.Chat') ?></span></a>
                    <a class="dropdown-item" href="javascript: void(0);"><i class='bx bx-buoy text-muted font-size-18 align-middle me-1'></i> <span class="align-middle"><?= lang('Files.Support') ?></span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item d-flex align-items-center" href="javascript: void(0);"><i class='bx bx-cog text-muted font-size-18 align-middle me-1'></i> <span class="align-middle me-3"><?= lang('Files.Settings') ?></span><span class="badge badge-soft-success ms-auto"><?= lang('Files.New') ?></span></a>
                    <a class="dropdown-item" href="auth-lock-screen"><i class='bx bx-lock text-muted font-size-18 align-middle me-1'></i> <span class="align-middle"><?= lang('Files.Lock screen') ?></span></a>
                    <a class="dropdown-item" href="auth-logout"><i class='bx bx-log-out text-muted font-size-18 align-middle me-1'></i> <span class="align-middle"><?= lang('Files.Logout') ?></span></a>
                </div>
            </div>
        </div>
    </div>
</header>