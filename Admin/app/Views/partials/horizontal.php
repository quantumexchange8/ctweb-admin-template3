<header id="page-topbar" class="ishorizontal-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="/" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="/assets/images/CurrentTech_Logo.png" alt="" height="30">
                    </span>
                    <span class="logo-lg">
                        <img src="/assets/images/currenttech_logo.svg" alt="" height="40">
                    </span>
                </a>

                <a href="/" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="/assets/images/CurrentTech_Logo.png" alt="" height="30">
                    </span>
                    <span class="logo-lg">
                        <img src="/assets/images/currenttech_logo.svg" alt="" height="40">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <div class="topnav">
                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
        
                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle arrow-none" href="/" id="topnav-dashboard" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bx-tachometer'></i>
                                    <span data-key="t-dashboards"><?= lang('Files.Dashboard') ?></span>
                                </a>
                            </li>
        
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                                    <i class='bx bx-grid-alt'></i>
                                    <span data-key="t-apps"><?= lang('Files.Apps') ?></span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-pages">
    
                                    <a href="calendar" class="dropdown-item" data-key="t-calendar"><?= lang('Files.Calendar') ?></a>
                                    <a href="chat" class="dropdown-item" data-key="t-chat"><?= lang('Files.Chat') ?></a>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email"
                                            role="button">
                                            <span data-key="t-email"><?= lang('Files.Email') ?></span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-email">
                                            <a href="email-inbox" class="dropdown-item" data-key="t-inbox"><?= lang('Files.Inbox') ?></a>
                                            <a href="email-read" class="dropdown-item" data-key="t-read-email"><?= lang('Files.Read Email') ?></a>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce"
                                            role="button">
                                            <?= lang('Files.Ecommerce') ?> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                            <a href="ecommerce-products" class="dropdown-item" data-key="t-products"><?= lang('Files.Products') ?></a>
                                            <a href="ecommerce-product-detail" class="dropdown-item" data-key="t-product-detail"><?= lang('Files.Product Detail') ?></a>
                                            <a href="ecommerce-orders" class="dropdown-item" data-key="t-orders"><?= lang('Files.Orders') ?></a>
                                            <a href="ecommerce-customers" class="dropdown-item" data-key="t-customers"><?= lang('Files.Customers') ?></a>
                                            <a href="ecommerce-cart" class="dropdown-item" data-key="t-cart"><?= lang('Files.Cart') ?></a>
                                            <a href="ecommerce-checkout" class="dropdown-item" data-key="t-checkout"><?= lang('Files.Checkout') ?></a>
                                            <a href="ecommerce-shops" class="dropdown-item" data-key="t-shops"><?= lang('Files.Shops') ?></a>
                                            <a href="ecommerce-add-product" class="dropdown-item" data-key="t-add-product"><?= lang('Files.Add Product') ?></a>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-invoice"
                                            role="button"><span data-key="t-invoices"><?= lang('Files.Invoices') ?></span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-invoice">
                                            <a href="invoices-list" class="dropdown-item" data-key="t-invoice-list"><?= lang('Files.Invoice List') ?></a>
                                            <a href="invoices-detail" class="dropdown-item" data-key="t-invoice-detail"><?= lang('Files.Invoice Detail') ?></a>
                                        </div>
                                    </div>
    
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-contact"
                                            role="button">
                                           <span data-key="t-contacts"><?= lang('Files.Contacts') ?></span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-contact">
                                            <a href="contacts-grid" class="dropdown-item" data-key="t-user-grid"><?= lang('Files.User Grid') ?></a>
                                            <a href="contacts-list" class="dropdown-item" data-key="t-user-list"><?= lang('Files.User List') ?></a>
                                            <a href="contacts-user-settings" class="dropdown-item" data-key="t-user-settings"><?= lang('Files.User Settings') ?></a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bxl-bootstrap'></i>
                                   <span data-key="t-bootstrap">Elements</span> <div class="arrow-down"></div>
                                </a>
    
                                <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl" aria-labelledby="topnav-uielement">
                                    <div class="ps-2 p-lg-0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div>
                                                    <div class="menu-title"><?= lang('Files.Elements') ?></div>
                                                    <div class="row g-0">
                                                        <div class="col-lg-4">
                                                            <div>
                                                                <a href="ui-alerts" class="dropdown-item" data-key="t-alerts"><?= lang('Files.Alerts') ?></a>
                                                                <a href="ui-buttons" class="dropdown-item" data-key="t-buttons"><?= lang('Files.Buttons') ?></a>
                                                                <a href="ui-cards" class="dropdown-item" data-key="t-cards"><?= lang('Files.Cards') ?></a>
                                                                <a href="ui-carousel" class="dropdown-item" data-key="t-carousel"><?= lang('Files.Carousel') ?></a>
                                                                <a href="ui-dropdowns" class="dropdown-item" data-key="t-dropdowns"><?= lang('Files.Dropdowns') ?></a>
                                                                <a href="ui-grid" class="dropdown-item" data-key="t-grid"><?= lang('Files.Grid') ?></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div>
                                                                <a href="ui-images" class="dropdown-item" data-key="t-images"><?= lang('Files.Images') ?></a>
                                                                <a href="ui-modals" class="dropdown-item" data-key="t-modals"><?= lang('Files.Modals') ?></a>
                                                                <a href="ui-offcanvas" class="dropdown-item" data-key="t-offcanvas"><?= lang('Files.Offcanvas') ?></a>
                                                                <a href="ui-placeholders" class="dropdown-item" data-key="t-placeholders"><?= lang('Files.Placeholders') ?></a>
                                                                <a href="ui-progressbars" class="dropdown-item" data-key="t-progress-bars"><?= lang('Files.Progress Bars') ?></a>
                                                                <a href="ui-tabs-accordions" class="dropdown-item" data-key="t-tabs-accordions"><?= lang('Files.Tabs & Accordions') ?></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <a href="ui-typography" class="dropdown-item" data-key="t-typography"><?= lang('Files.Typography') ?></a>
                                                            <a href="ui-video" class="dropdown-item" data-key="t-video"><?= lang('Files.Video') ?></a>
                                                            <a href="ui-general" class="dropdown-item" data-key="t-general"><?= lang('Files.General') ?></a>
                                                            <a href="ui-colors" class="dropdown-item" data-key="t-colors"><?= lang('Files.Colors') ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
        
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button"
                                >
                                    <i class='bx bx-layer' ></i>
                                    <span data-key="t-components"><?= lang('Files.Components') ?></span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-components">
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-extended"
                                            role="button">
                                            <span data-key="t-extendeds"><?= lang('Files.Extended') ?></span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-form">
                                            <a href="extended-lightbox" class="dropdown-item" data-key="t-lightbox"><?= lang('Files.Lightbox') ?></a>
                                            <a href="extended-rangeslider" class="dropdown-item" data-key="t-range-slider"><?= lang('Files.Range Slider') ?></a>
                                            <a href="extended-sweet-alert" class="dropdown-item" data-key="t-sweet-alert"><?= lang('Files.SweetAlert 2') ?></a>
                                            <a href="extended-rating" class="dropdown-item" data-key="t-rating"><?= lang('Files.Rating') ?></a>
                                            <a href="extended-notifications" class="dropdown-item" data-key="t-notifications"><?= lang('Files.Notifications') ?></a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                            role="button">
                                            <span data-key="t-forms"><?= lang('Files.Forms') ?></span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-form">
                                            <a href="form-elements" class="dropdown-item"  data-key="t-basic-elements"><?= lang('Files.Basic Elements') ?></a>
                                            <a href="form-validation" class="dropdown-item" data-key="t-validation"><?= lang('Files.Validation') ?></a>
                                            <a href="form-advanced" class="dropdown-item" data-key="t-advanced-plugins"><?= lang('Files.Advanced Plugins') ?></a>
                                            <a href="form-editors" class="dropdown-item" data-key="t-editors"><?= lang('Files.Editors') ?></a>
                                            <a href="form-uploads" class="dropdown-item" data-key="t-file-upload"><?= lang('Files.File Upload') ?></a>
                                            <a href="form-wizard" class="dropdown-item" data-key="t-wizard"><?= lang('Files.Wizard') ?></a>
                                            <a href="form-mask" class="dropdown-item"  data-key="t-mask"><?= lang('Files.Mask') ?></a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                            role="button">
                                            <span data-key="t-tables"><?= lang('Files.Tables') ?></span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-table">
                                            <a href="tables-basic" class="dropdown-item" data-key="t-bootstrap-basic"><?= lang('Files.Bootstrap Basic') ?></a>
                                            <a href="tables-advanced" class="dropdown-item" data-key="t-advanced-tables"><?= lang('Files.Advance Tables') ?></a>
                                            <a href="dynamic-table-advance" class="dropdown-item" data-key="t-dynamic-advanced-tables"><?= lang('Files.Dynamic Advance Table') ?></a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts"
                                            role="button">
                                            <span data-key="t-charts"><?= lang('Files.Charts') ?></span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                            <a href="charts-apex" class="dropdown-item" data-key="t-apex-charts"><?= lang('Files.Apex Charts') ?></a>
                                            <a href="charts-chartjs" class="dropdown-item" data-key="t-chartjs-charts"><?= lang('Files.Chartjs') ?></a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons"
                                            role="button">
                                            <span data-key="t-icons"><?= lang('Files.Icons') ?></span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                            <a href="icons-feather" class="dropdown-item" data-key="t-feather"><?= lang('Files.Feather') ?></a>
                                            <a href="icons-boxicons" class="dropdown-item" data-key="t-boxicons"><?= lang('Files.Boxicons') ?></a>
                                            <a href="icons-materialdesign" class="dropdown-item" data-key="t-material-design"><?= lang('Files.Material Design') ?></a>
                                            <a href="icons-dripicons" class="dropdown-item" data-key="t-dripicons"><?= lang('Files.Dripicons') ?></a>
                                            <a href="icons-fontawesome" class="dropdown-item" data-key="t-font-awesome"><?= lang('Files.Font Awesome 5') ?></a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map"
                                            role="button">
                                            <span data-key="t-maps"><?= lang('Files.Maps') ?></span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-map">
                                            <a href="maps-google" class="dropdown-item" data-key="t-google"><?= lang('Files.Google') ?></a>
                                            <a href="maps-vector" class="dropdown-item" data-key="t-vector"><?= lang('Files.Vector') ?></a>
                                            <a href="maps-leaflet" class="dropdown-item" data-key="t-leaflet"><?= lang('Files.Leaflet') ?></a>
                                        </div>
                                    </div>
                                </div>
                               
                            </li>
        
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button">
                                <i class='bx bx-file'></i>
                                    <span data-key="t-pages"><?= lang('Files.Pages') ?></span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-more">
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth"
                                            role="button">
                                            <span data-key="t-authentication"><?= lang('Files.Authentication') ?></span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                            <a href="auth-login" class="dropdown-item" data-key="t-login"><?= lang('Files.Login') ?></a>
                                            <a href="auth-register" class="dropdown-item" data-key="t-register"><?= lang('Files.Register') ?></a>
                                            <a href="auth-recoverpw" class="dropdown-item" data-key="t-recover-password"><?= lang('Files.Recover Password') ?></a>
                                            <a href="auth-lock-screen" class="dropdown-item" data-key="t-lock-screen"><?= lang('Files.Lock Screen') ?></a>
                                            <a href="auth-logout" class="dropdown-item" data-key="t-logout"><?= lang('Files.Logout') ?></a>
                                            <a href="auth-confirm-mail" class="dropdown-item" data-key="t-confirm-mail"><?= lang('Files.Confirm Mail') ?></a>
                                            <a href="auth-email-verification" class="dropdown-item" data-key="t-email-verification"><?= lang('Files.Email Verification') ?></a>
                                            <a href="auth-two-step-verification" class="dropdown-item" data-key="t-two-step-verification"><?= lang('Files.Two Step Verification') ?></a>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility"
                                            role="button">
                                            <span data-key="t-utility"><?= lang('Files.Utility') ?></span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                            <a href="pages-maintenance" class="dropdown-item" data-key="t-maintenance"><?= lang('Files.Maintenance') ?></a>
                                            <a href="pages-comingsoon" class="dropdown-item" data-key="t-coming-soon"><?= lang('Files.Coming Soon') ?></a>
                                            <a href="pages-timeline" class="dropdown-item" data-key="t-timeline"><?= lang('Files.Timeline') ?></a>
                                            <a href="pages-faqs" class="dropdown-item" data-key="t-faqs"><?= lang('Files.FAQs') ?></a>
                                            <a href="pages-pricing" class="dropdown-item" data-key="t-pricing"><?= lang('Files.Pricing') ?></a>
                                            <a href="pages-404" class="dropdown-item" data-key="t-error-404"><?= lang('Files.Error') ?> 404</a>
                                            <a href="pages-500" class="dropdown-item" data-key="t-error-500"><?= lang('Files.Error') ?> 500</a>
                                        </div>
                                    </div>

                                    <a href="layouts-vertical" class="dropdown-item" data-key="t-vertical"><?= lang('Files.Vertical') ?></a>
                                </div>
                            </li>
        
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-sm" data-feather="search"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                    <form class="p-3">
                        <div class="search-box">
                            <div class="position-relative">
                                <input type="text" class="form-control rounded" placeholder="<?= lang('Files.Search') ?>">
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
                                <a href="javascript:void(0);" class="small"> <?= lang('Files.Mark all as read') ?></a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 250px;">
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex border-bottom align-items-start bg-light">
                                <div class="flex-shrink-0">
                                    <img src="assets/images/users/avatar-3.jpg"
                                    class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Justin Verduzco</h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-13"><?= lang('Files.It will seem like simplified English') ?> <span class="badge text-success  bg-success-subtle">Review</span></p>
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
                        <a class="btn btn-sm btn-link font-size-14 btn-block text-decoration-underline fw-bold text-center" href="javascript:void(0)">
                            <span><?= lang('Files.View More') ?> <i class='bx bx-right-arrow-alt'></i></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-none d-sm-inline-block">
                <button type="button" class="btn header-item light-dark" id="mode-setting-btn">
                    <i data-feather="moon" class="icon-sm layout-mode-dark "></i>
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
                    <a class="dropdown-item" href="contacts-user-settings"><i class='bx bx-user-circle text-muted font-size-18 align-middle me-1'></i> <span class="align-middle"><?= lang('Files.My Account') ?></span></a>
                    <a class="dropdown-item" href="chat"><i class='bx bx-chat text-muted font-size-18 align-middle me-1'></i> <span class="align-middle"><?= lang('Files.Chat') ?></span></a>
                    <a class="dropdown-item" href="pages-faqs"><i class='bx bx-buoy text-muted font-size-18 align-middle me-1'></i> <span class="align-middle"><?= lang('Files.Support') ?></span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i class='bx bx-cog text-muted font-size-18 align-middle me-1'></i> <span class="align-middle me-3"><?= lang('Files.Settings') ?></span><span class="badge badge-soft-success ms-auto"><?= lang('Files.New') ?></span></a>
                    <a class="dropdown-item" href="auth-lock-screen"><i class='bx bx-lock text-muted font-size-18 align-middle me-1'></i> <span class="align-middle"><?= lang('Files.Lock screen') ?></span></a>
                    <a class="dropdown-item" href="logout"><i class='bx bx-log-out text-muted font-size-18 align-middle me-1'></i> <span class="align-middle"><?= lang('Files.Logout') ?></span></a>
                </div>
            </div>
        </div>
    </div>
</header>
    
