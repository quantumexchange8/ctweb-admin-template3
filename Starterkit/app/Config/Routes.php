<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('login', 'AuthController::index');
$routes->post('authCheck', 'AuthController::authCheck');
$routes->get('register', 'AuthController::register');
$routes->post('registerStore', 'AuthController::register_store');

$routes->get('email-verify', 'AuthController::email_verify');
$routes->post('otp-verify', 'AuthController::otp_verify');
$routes->get('otp-resend', 'AuthController::otp_resend');

$routes->get('forget-password', 'AuthController::forget_password');
$routes->post('email-check', 'AuthController::email_check');
$routes->get('reset-password/(:alphanum)', 'AuthController::reset_password/$1');
$routes->post('reset-password-update', 'AuthController::reset_password_update');

$routes->group('', ['filter'=>'AuthCheck'], function ($routes){
    $routes->get('/', 'Home::index');
    $routes->get('/lang/{locale}', 'Language::index');
    $routes->get('logout', 'AuthController::logout');

    $routes->get('dynamic-table-advance', 'ContactController::index');
    $routes->get('contact-fetch', 'ContactController::fetch');
    $routes->post('contact-add', 'ContactController::add_update');
    $routes->post('contact-delete', 'ContactController::delete');
    $routes->post('contact-edit', 'ContactController::edit');
    $routes->get('contact-delete-all/(:any)', 'ContactController::delete_all/$1');
    $routes->post('contact-status-change', 'ContactController::status_change');

    //App page routing
    $routes->get('calendar', 'AppController::calendar');
    $routes->get('chat', 'AppController::chat');

    $routes->get('email-inbox', 'AppController::email_inbox');
    $routes->get('email-read', 'AppController::email_read');

    $routes->get('ecommerce-products', 'AppController::ecommerce_products');
    $routes->get('ecommerce-product-detail', 'AppController::ecommerce_product_detail');
    $routes->get('ecommerce-orders', 'AppController::ecommerce_orders');
    $routes->get('ecommerce-customers', 'AppController::ecommerce_customers');
    $routes->get('ecommerce-cart', 'AppController::ecommerce_cart');
    $routes->get('ecommerce-checkout', 'AppController::ecommerce_checkout');
    $routes->get('ecommerce-shops', 'AppController::ecommerce_shops');
    $routes->get('ecommerce-add-product', 'AppController::ecommerce_add_product');

    $routes->get('invoices-list', 'AppController::invoices_list');
    $routes->get('invoices-detail', 'AppController::invoices_detail');
    $routes->get('contacts-grid', 'AppController::contacts_grid');
    $routes->get('contacts-list', 'AppController::contacts_list');
    $routes->get('contacts-user-settings', 'AppController::contacts_user_settings');

    //Component section routing
    $routes->get('ui-alerts', 'ComponentController::ui_alerts');
    $routes->get('ui-buttons', 'ComponentController::ui_buttons');
    $routes->get('ui-cards', 'ComponentController::ui_cards');
    $routes->get('ui-carousel', 'ComponentController::ui_carousel');
    $routes->get('ui-dropdowns', 'ComponentController::ui_dropdowns');
    $routes->get('ui-grid', 'ComponentController::ui_grid');
    $routes->get('ui-images', 'ComponentController::ui_images');
    $routes->get('ui-modals', 'ComponentController::ui_modals');
    $routes->get('ui-offcanvas', 'ComponentController::ui_offcanvas');
    $routes->get('ui-placeholders', 'ComponentController::ui_placeholders');
    $routes->get('ui-progressbars', 'ComponentController::ui_progressbars');
    $routes->get('ui-tabs-accordions', 'ComponentController::ui_tabs_accordions');
    $routes->get('ui-typography', 'ComponentController::ui_typography');
    $routes->get('ui-video', 'ComponentController::ui_video');
    $routes->get('ui-general', 'ComponentController::ui_general');
    $routes->get('ui-colors', 'ComponentController::ui_colors');

    $routes->get('extended-lightbox', 'ComponentController::extended_lightbox');
    $routes->get('extended-rangeslider', 'ComponentController::extended_rangeslider');
    $routes->get('extended-sweet-alert', 'ComponentController::extended_sweet_alert');
    $routes->get('extended-rating', 'ComponentController::extended_rating');
    $routes->get('extended-notifications', 'ComponentController::extended_notifications');

    $routes->get('form-elements', 'ComponentController::form_elements');
    $routes->get('form-validation', 'ComponentController::form_validation');
    $routes->get('form-advanced', 'ComponentController::form_advanced');
    $routes->get('form-editors', 'ComponentController::form_editors');
    $routes->get('form-uploads', 'ComponentController::form_uploads');
    $routes->get('form-wizard', 'ComponentController::form_wizard');
    $routes->get('form-mask', 'ComponentController::form_mask');

    $routes->get('tables-basic', 'ComponentController::tables_basic');
    $routes->get('tables-advanced', 'ComponentController::tables_advanced');

    $routes->get('charts-apex', 'ComponentController::charts_apex');
    $routes->get('charts-chartjs', 'ComponentController::charts_chartjs');

    $routes->get('icons-feather', 'ComponentController::icons_feather');
    $routes->get('icons-boxicons', 'ComponentController::icons_boxicons');
    $routes->get('icons-materialdesign', 'ComponentController::icons_materialdesign');
    $routes->get('icons-dripicons', 'ComponentController::icons_dripicons');
    $routes->get('icons-fontawesome', 'ComponentController::icons_fontawesome');

    $routes->get('maps-google', 'ComponentController::maps_google');
    $routes->get('maps-vector', 'ComponentController::maps_vector');
    $routes->get('maps-leaflet', 'ComponentController::maps_leaflet');

    //Page section routing
    $routes->get('auth-login', 'PageController::auth_login');
    $routes->get('auth-register', 'PageController::auth_register');
    $routes->get('auth-recoverpw', 'PageController::auth_recoverpw');
    $routes->get('auth-lock-screen', 'PageController::auth_lock_screen');
    $routes->get('auth-logout', 'PageController::auth_logout');
    $routes->get('auth-confirm-mail', 'PageController::auth_confirm_mail');
    $routes->get('auth-email-verification', 'PageController::auth_email_verification');
    $routes->get('auth-two-step-verification', 'PageController::auth_two_step_verification');

    $routes->get('pages-starter', 'PageController::pages_starter');
    $routes->get('pages-maintenance', 'PageController::pages_maintenance');
    $routes->get('pages-comingsoon', 'PageController::pages_comingsoon');
    $routes->get('pages-timeline', 'PageController::pages_timeline');
    $routes->get('pages-faqs', 'PageController::pages_faqs');
    $routes->get('pages-pricing', 'PageController::pages_pricing');
    $routes->get('pages-404', 'PageController::pages_404');
    $routes->get('pages-500', 'PageController::pages_500');

    $routes->get('layouts-vertical', 'PageController::layouts_vertical');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
