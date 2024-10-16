<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="/" class="logo logo-dark">
            <span class="logo-sm">
                <img src="/assets/images/logo-sm.svg" alt="" height="22"> 
            </span>
            <span class="logo-lg">
                <img src="/assets/images/logo-sm.svg" alt="" height="22"> <span class="logo-txt"><?= lang('Files.Symox') ?></span>
            </span>
        </a>

        <a href="/" class="logo logo-light">
            <span class="logo-lg">
                <img src="/assets/images/logo-sm.svg" alt="" height="22"> <span class="logo-txt"><?= lang('Files.Symox') ?></span>
            </span>
            <span class="logo-sm">
                <img src="/assets/images/logo-sm.svg" alt="" height="22">
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
                        <li><a href="pages-starter" data-key="t-starter-page"><?= lang('Files.Starter Page') ?></a></li>
                        <li><a href="pages-maintenance" data-key="t-maintenance"><?= lang('Files.Maintenance') ?></a></li>
                        <li><a href="pages-comingsoon" data-key="t-coming-soon"><?= lang('Files.Coming Soon') ?></a></li>
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