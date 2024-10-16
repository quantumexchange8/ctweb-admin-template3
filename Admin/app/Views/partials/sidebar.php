<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="/" class="logo logo-dark">
            <span class="logo-sm">
                <img src="/assets/images/CurrentTech_Logo.png" alt="" height="22"> 
            </span>
            <span class="logo-lg">
                <img src="/assets/images/currenttech_logo.svg" alt="" height="35">
            </span>
        </a>

        <a href="/" class="logo logo-light">
            <span class="logo-lg">
                <img src="/assets/images/CurrentTech_Logo.png" alt="" height="22">
            </span>
            <span class="logo-sm">
                <img src="/assets/images/currenttech_logo.svg" alt="" height="35">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu"><?= lang('Files.Menu') ?></li>

                <li>
                    <a href="/">
                        <i class="bx bx-tachometer icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboards"><?= lang('Files.Dashboard') ?></span>
                        <span class="badge rounded-pill bg-success">5+</span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-applications"><?= lang('Files.Applications') ?></li>

                <li>
                    <a href="calendar">
                        <i class="bx bx-calendar icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar"><?= lang('Files.Calendar') ?></span>
                    </a>
                </li>

                <li>
                    <a href="chat">
                        <i class="bx bx-chat icon nav-icon"></i>
                        <span class="menu-item" data-key="t-chat"><?= lang('Files.Chat') ?></span>
                        <span class="badge rounded-pill bg-danger" data-key="t-hot"><?= lang('Files.Hot') ?></span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-envelope icon nav-icon"></i>
                        <span class="menu-item" data-key="t-email"><?= lang('Files.Email') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox" data-key="t-inbox"><?= lang('Files.Inbox') ?></a></li>
                        <li><a href="email-read" data-key="t-read-email"><?= lang('Files.Read Email') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-store icon nav-icon"></i>
                        <span class="menu-item" data-key="t-ecommerce"><?= lang('Files.Ecommerce') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ecommerce-products" data-key="t-products"><?= lang('Files.Products') ?></a></li>
                        <li><a href="ecommerce-product-detail" data-key="t-product-detail"><?= lang('Files.Product Detail') ?></a></li>
                        <li><a href="ecommerce-orders" data-key="t-orders"><?= lang('Files.Orders') ?></a></li>
                        <li><a href="ecommerce-customers" data-key="t-customers"><?= lang('Files.Customers') ?></a></li>
                        <li><a href="ecommerce-cart" data-key="t-cart"><?= lang('Files.Cart') ?></a></li>
                        <li><a href="ecommerce-checkout" data-key="t-checkout"><?= lang('Files.Checkout') ?></a></li>
                        <li><a href="ecommerce-shops" data-key="t-shops"><?= lang('Files.Shops') ?></a></li>
                        <li><a href="ecommerce-add-product" data-key="t-add-product"><?= lang('Files.Add Product') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-receipt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-invoices"><?= lang('Files.Invoices') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="invoices-list" data-key="t-invoice-list"><?= lang('Files.Invoice List') ?></a></li>
                        <li><a href="invoices-detail" data-key="t-invoice-detail"><?= lang('Files.Invoice Detail') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bxs-user-detail icon nav-icon"></i>
                        <span class="menu-item" data-key="t-contacts"><?= lang('Files.Contacts') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="contacts-grid" data-key="t-user-grid"><?= lang('Files.User Grid') ?></a></li>
                        <li><a href="contacts-list" data-key="t-user-list"><?= lang('Files.User List') ?></a></li>
                        <li><a href="contacts-user-settings" data-key="t-user-settings"><?= lang('Files.User Settings') ?></a></li>
                    </ul>
                </li>

                <li class="menu-title" data-key="t-pages"><?= lang('Files.Pages') ?></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-user-circle icon nav-icon"></i>
                        <span class="menu-item" data-key="t-authentication"><?= lang('Files.Authentication') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login" data-key="t-login"><?= lang('Files.Login') ?></a></li>
                        <li><a href="auth-register" data-key="t-register"><?= lang('Files.Register') ?></a></li>
                        <li><a href="auth-recoverpw" data-key="t-recover-password"><?= lang('Files.Recover Password') ?></a></li>
                        <li><a href="auth-lock-screen" data-key="t-lock-screen"><?= lang('Files.Lock Screen') ?></a></li>
                        <li><a href="auth-logout" data-key="t-logout"><?= lang('Files.Logout') ?></a></li>
                        <li><a href="auth-confirm-mail" data-key="t-confirm-mail"><?= lang('Files.Confirm Mail') ?></a></li>
                        <li><a href="auth-email-verification" data-key="t-email-verification"><?= lang('Files.Email Verification') ?></a></li>
                        <li><a href="auth-two-step-verification" data-key="t-two-step-verification"><?= lang('Files.Two Step Verification') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-file icon nav-icon"></i>
                        <span class="menu-item" data-key="t-utility"><?= lang('Files.Utility') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-maintenance" data-key="t-maintenance"><?= lang('Files.Maintenance') ?></a></li>
                        <li><a href="pages-comingsoon" data-key="t-coming-soon"><?= lang('Files.Coming Soon') ?></a></li>
                        <li><a href="pages-timeline" data-key="t-timeline"><?= lang('Files.Timeline') ?></a></li>
                        <li><a href="pages-faqs" data-key="t-faqs"><?= lang('Files.FAQs') ?></a></li>
                        <li><a href="pages-pricing" data-key="t-pricing"><?= lang('Files.Pricing') ?></a></li>
                        <li><a href="pages-404" data-key="t-error-404"><?= lang('Files.Error') ?> 404</a></li>
                        <li><a href="pages-500" data-key="t-error-500"><?= lang('Files.Error') ?> 500</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="layouts-vertical">
                        <i class="bx bx-layout icon nav-icon"></i>
                        <span class="menu-item" data-key="t-vertical"><?= lang('Files.Vertical') ?></span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-components"><?= lang('Files.Components') ?></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bxl-bootstrap icon nav-icon"></i>
                        <span class="menu-item" data-key="t-bootstrap">Elements</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts" data-key="t-alerts"><?= lang('Files.Alerts') ?></a></li>
                        <li><a href="ui-buttons" data-key="t-buttons"><?= lang('Files.Buttons') ?></a></li>
                        <li><a href="ui-cards" data-key="t-cards"><?= lang('Files.Cards') ?></a></li>
                        <li><a href="ui-carousel" data-key="t-carousel"><?= lang('Files.Carousel') ?></a></li>
                        <li><a href="ui-dropdowns" data-key="t-dropdowns"><?= lang('Files.Dropdowns') ?></a></li>
                        <li><a href="ui-grid" data-key="t-grid"><?= lang('Files.Grid') ?></a></li>
                        <li><a href="ui-images" data-key="t-images"><?= lang('Files.Images') ?></a></li>
                        <li><a href="ui-modals" data-key="t-modals"><?= lang('Files.Modals') ?></a></li>
                        <li><a href="ui-offcanvas" data-key="t-offcanvas"><?= lang('Files.Offcanvas') ?></a></li>
                        <li><a href="ui-placeholders" data-key="t-placeholders"><?= lang('Files.Placeholders') ?></a></li>
                        <li><a href="ui-progressbars" data-key="t-progress-bars"><?= lang('Files.Progress Bars') ?></a></li>
                        <li><a href="ui-tabs-accordions" data-key="t-tabs-accordions"><?= lang('Files.Tabs & Accordions') ?></a></li>
                        <li><a href="ui-typography" data-key="t-typography"><?= lang('Files.Typography') ?></a></li>
                        <li><a href="ui-video" data-key="t-video"><?= lang('Files.Video') ?></a></li>
                        <li><a href="ui-general" data-key="t-general"><?= lang('Files.General') ?></a></li>
                        <li><a href="ui-colors" data-key="t-colors"><?= lang('Files.Colors') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-disc icon nav-icon"></i>
                        <span class="menu-item" data-key="t-extended"><?= lang('Files.Extended') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="extended-lightbox" data-key="t-lightbox"><?= lang('Files.Lightbox') ?></a></li>
                        <li><a href="extended-rangeslider" data-key="t-range-slider"><?= lang('Files.Range Slider') ?></a></li>
                        <li><a href="extended-sweet-alert" data-key="t-sweet-alert"><?= lang('Files.SweetAlert 2') ?></a></li>
                        <li><a href="extended-rating" data-key="t-rating"><?= lang('Files.Rating') ?></a></li>
                        <li><a href="extended-notifications" data-key="t-notifications"><?= lang('Files.Notifications') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bxs-eraser icon nav-icon"></i>
                        <span class="menu-item" data-key="t-forms"><?= lang('Files.Forms') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements" data-key="t-basic-elements"><?= lang('Files.Basic Elements') ?></a></li>
                        <li><a href="form-validation"data-key="t-validation"><?= lang('Files.Validation') ?></a></li>
                        <li><a href="form-advanced"data-key="t-advanced-plugins"><?= lang('Files.Advanced Plugins') ?></a></li>
                        <li><a href="form-editors"data-key="t-editors"><?= lang('Files.Editors') ?></a></li>
                        <li><a href="form-uploads"data-key="t-file-upload"><?= lang('Files.File Upload') ?></a></li>
                        <li><a href="form-wizard"data-key="t-wizard"><?= lang('Files.Wizard') ?></a></li>
                        <li><a href="form-mask" data-key="t-mask"><?= lang('Files.Mask') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-list-ul icon nav-icon"></i>
                        <span class="menu-item" data-key="t-tables"><?= lang('Files.Tables') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic" data-key="t-bootstrap-basic"><?= lang('Files.Bootstrap Basic') ?></a></li>
                        <li><a href="tables-advanced" data-key="t-advanced-tables"><?= lang('Files.Advance Tables') ?></a></li>
                        <li><a href="dynamic-table-advance" data-key="t-dynamic-advanced-tables"><?= lang('Files.Dynamic Advance Table') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bxs-bar-chart-alt-2 icon nav-icon"></i>
                        <span class="menu-item" data-key="t-charts"><?= lang('Files.Charts') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-apex" data-key="t-apex-charts"><?= lang('Files.Apex Charts') ?></a></li>
                        <li><a href="charts-chartjs" data-key="t-chartjs-charts"><?= lang('Files.Chartjs') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-aperture icon nav-icon"></i>
                        <span class="menu-item" data-key="t-icons"><?= lang('Files.Icons') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-feather" data-key="t-feather"><?= lang('Files.Feather') ?></a></li>
                        <li><a href="icons-boxicons" data-key="t-boxicons"><?= lang('Files.Boxicons') ?></a></li>
                        <li><a href="icons-materialdesign" data-key="t-material-design"><?= lang('Files.Material Design') ?></a></li>
                        <li><a href="icons-dripicons" data-key="t-dripicons"><?= lang('Files.Dripicons') ?></a></li>
                        <li><a href="icons-fontawesome" data-key="t-font-awesome"><?= lang('Files.Font Awesome 5') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-map icon nav-icon"></i>
                        <span class="menu-item" data-key="t-maps"><?= lang('Files.Maps') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-google" data-key="t-google"><?= lang('Files.Google') ?></a></li>
                        <li><a href="maps-vector" data-key="t-vector"><?= lang('Files.Vector') ?></a></li>
                        <li><a href="maps-leaflet" data-key="t-leaflet"><?= lang('Files.Leaflet') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-share-alt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-multi-level"><?= lang('Files.Multi Level') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);" data-key="t-level-1.1"><?= lang('Files.Level') ?> 1.1</a></li>
                        <li><a href="javascript: void(0);" class="has-arrow" data-key="t-level-1.2"><?= lang('Files.Level') ?> 1.2</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);" data-key="t-level-2.1"><?= lang('Files.Level') ?> 2.1</a></li>
                                <li><a href="javascript: void(0);" data-key="t-level-2.2"><?= lang('Files.Level') ?> 2.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->