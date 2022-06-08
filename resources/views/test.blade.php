<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scutum Admin Template</title>
    <meta name="description" content="Scutum Admin Template" />

    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/fav/favicon-16x16.png">
    <link rel="mask-icon" href="assets/img/fav/safari-pinned-tab.svg" color="#5bbad5">

    <link rel="manifest" href="manifest.json">
    <meta name="theme-color" content="#00838f">


    <!-- polyfills -->
    <script src="assets/js/vendor/polyfills.min.js"></script>

    <!-- UIKit js -->
    <script src="assets/js/uikit.min.js"></script>
</head>

<body>
    <script>
        // prevent FOUC
        var html = document.getElementsByTagName('html')[0];
        html.style.backgroundColor = '#f5f5f5';
        document.body.style.visibility = 'hidden';
        document.body.style.overflow = 'hidden';
        document.body.style.apacity = '0';
        document.body.style.maxHeight = "100%";
    </script>
    <header id="sc-header">
        <nav class="uk-navbar uk-navbar-container" data-uk-navbar="mode: click; duration: 360">
            <div class="uk-navbar-left nav-overlay-small uk-margin-right uk-navbar-aside">
                <a href="#" id="sc-sidebar-main-toggle"><i class="mdi mdi-backburger sc-menu-close"></i><i class="mdi mdi-menu sc-menu-open"></i></a>
                <div class="sc-brand uk-visible@s">
                    <a href="dashboard-v1.html"><img src="assets/img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="uk-navbar-left nav-overlay uk-margin-right uk-visible@m">
                <ul class="uk-navbar-nav">
                    <li>
                        <a href="javascript:void(0)" class="md-color-white sc-padding-remove-left"><i class="mdi mdi-view-grid"></i></a>
                        <div class="uk-navbar-dropdown sc-padding-medium">
                            <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-grid uk-grid-small" data-uk-grid>
                                <div>
                                    <a href="pages-mailbox.html" class="uk-flex uk-flex-column uk-flex-middle uk-box-shadow-hover-small sc-round sc-padding-small">
                                        <i class="mdi mdi-email-outline sc-icon-32 sc-text-lh-1 md-color-green-700"></i>
                                        <span class="uk-text-medium sc-color-primary">Mailbox</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="pages-poi_listing.html" class="uk-flex uk-flex-column uk-flex-middle uk-box-shadow-hover-small sc-round sc-padding-small">
                                        <i class="mdi mdi-map-marker sc-icon-32 sc-text-lh-1 md-color-red-700"></i>
                                        <span class="uk-text-medium sc-color-primary">POI</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="pages-chat.html" class="uk-flex uk-flex-column uk-flex-middle uk-box-shadow-hover-small sc-round sc-padding-small">
                                        <i class="mdi mdi-message-outline sc-icon-32 sc-text-lh-1 md-color-purple-700"></i>
                                        <span class="uk-text-medium sc-color-primary">Chat</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="plugins-calendar.html" class="uk-flex uk-flex-column uk-flex-middle uk-box-shadow-hover-small sc-round sc-padding-small">
                                        <i class="mdi mdi-calendar sc-icon-32 sc-text-lh-1 md-color-light-blue-700"></i>
                                        <span class="uk-text-medium sc-color-primary">Calendar</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="pages-user_profile.html" class="uk-flex uk-flex-column uk-flex-middle uk-box-shadow-hover-small sc-round sc-padding-small">
                                        <i class="mdi mdi-account sc-icon-32 sc-text-lh-1 md-color-blue-grey-700"></i>
                                        <span class="uk-text-medium sc-color-primary">Profile</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="plugins-charts.html" class="uk-flex uk-flex-column uk-flex-middle uk-box-shadow-hover-small sc-round sc-padding-small">
                                        <i class="mdi mdi-chart-multiline sc-icon-32 sc-text-lh-1 md-color-amber-700"></i>
                                        <span class="uk-text-medium sc-color-primary">Charts</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="nav-overlay nav-overlay-small uk-navbar-right uk-flex-1" hidden>
                <a class="uk-navbar-toggle uk-visible@m" data-uk-toggle="target: .nav-overlay; animation: uk-animation-slide-top" href="#">
                    <i class="mdi mdi-close sc-icon-24"></i>
                </a>
                <a class="uk-navbar-toggle uk-hidden@m uk-padding-remove-left" data-uk-toggle="target: .nav-overlay-small; animation: uk-animation-slide-top" href="#">
                    <i class="mdi mdi-close sc-icon-24"></i>
                </a>
                <div class="uk-navbar-item uk-width-expand uk-padding-remove-right">
                    <form class="uk-search uk-search-navbar uk-width-1-1 uk-flex">
                        <div class="uk-flex-1 uk-position-relative">
                            <a class="uk-form-icon uk-form-icon-flip" href="javascript:void(0)" data-uk-icon="icon: close" data-sc-clear-input></a>
                            <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
                        </div>
                        <button class="sc-button sc-button-default sc-button-small sc-button-icon sc-button-flat uk-margin-small-left" type="button"><i class="mdi mdi-magnify sc-icon-24 md-color-white"></i></button>
                    </form>
                </div>
            </div>
            <div class="nav-overlay nav-overlay-small uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li>
                        <a class="uk-navbar-toggle uk-visible@m" href="#" data-uk-toggle="target: .nav-overlay; animation: uk-animation-slide-top"><i class="mdi mdi-magnify"></i></a>
                        <a class="uk-navbar-toggle uk-hidden@m" href="#" id="sc-search-main-toggle-mobile" data-uk-toggle="target: .nav-overlay-small; animation: uk-animation-slide-top"><i class="mdi mdi-magnify"></i></a>
                    </li>
                    <li class="uk-visible@l">
                        <a href="#" id="sc-js-fullscreen-toggle"><i class="mdi mdi-fullscreen sc-js-el-hide"></i><i class="mdi mdi-fullscreen-exit sc-js-el-show"></i></a>
                    </li>
                    <li class="uk-visible@s">
                        <a href="#" class="sc-text-semibold">
                            EN
                        </a>
                        <div class="uk-navbar-dropdown uk-dropdown-small">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="#">Deutsch</a></li>
                                <li><a href="#">Español</a></li>
                                <li><a href="#">Français</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <span class="mdi mdi-email"></span>
                        </a>
                        <div class="uk-navbar-dropdown sc-padding-remove">
                            <div class="uk-panel uk-panel-scrollable uk-height-medium">
                                <ul class="uk-list uk-list-divider sc-js-edge-fix">
                                    <li class="sc-list-group">
                                        <div class="sc-list-addon">
                                            <span class="sc-avatar-initials md-color-white md-bg-red-500" title="hipolito78">MO</span>
                                        </div>
                                        <a href="#" class="sc-list-body uk-display-block">
                                            <span class="uk-text-small uk-text-muted uk-width-expand">05:13 PM</span>
                                            <span class="uk-display-block uk-text-truncate">Molestias autem quidem explicabo libero consequatur consequatur similique consequatur culpa optio voluptas.</span>
                                        </a>
                                    </li>
                                    <li class="sc-list-group">
                                        <div class="sc-list-addon">
                                            <img src="assets/img/avatars/avatar_05_sm.png" class="sc-avatar " alt="wrippin" />
                                        </div>
                                        <a href="#" class="sc-list-body uk-display-block">
                                            <div class="uk-text-small uk-text-muted uk-width-expand">Feb 8, 2021</div>
                                            <span class="uk-display-block uk-text-truncate">Tempore reprehenderit et quis consequatur qui voluptas.</span>
                                        </a>
                                    </li>
                                    <li class="sc-list-group">
                                        <div class="sc-list-addon">
                                            <span class="sc-avatar-initials md-color-white md-bg-light-green-500" title="wolff.simone">KS</span>
                                        </div>
                                        <a href="#" class="sc-list-body uk-display-block">
                                            <span class="uk-text-small uk-text-muted uk-width-expand">03:13 PM</span>
                                            <span class="uk-display-block uk-text-truncate">Id labore in earum laboriosam laudantium debitis soluta nemo et expedita.</span>
                                        </a>
                                    </li>
                                    <li class="sc-list-group">
                                        <div class="sc-list-addon">
                                            <img src="assets/img/avatars/avatar_06_sm.png" class="sc-avatar " alt="wmcglynn" />
                                        </div>
                                        <a href="#" class="sc-list-body uk-display-block">
                                            <span class="uk-text-small uk-text-muted uk-width-expand">Feb 7, 2021</span>
                                            <span class="uk-display-block uk-text-truncate">Quae qui praesentium voluptas qui sed.</span>
                                        </a>
                                    </li>
                                    <li class="sc-list-group">
                                        <div class="sc-list-addon">
                                            <img src="assets/img/avatars/avatar_02_sm.png" class="sc-avatar " alt="julian.schinner" />
                                        </div>
                                        <a href="#" class="sc-list-body uk-display-block">
                                            <span class="uk-text-small uk-text-muted uk-width-expand">Feb 5, 2021</span>
                                            <span class="uk-display-block uk-text-truncate">Sit asperiores et itaque doloribus quod natus et voluptatem architecto aut consequatur.</span>
                                        </a>
                                    </li>
                                    <li class="sc-list-group">
                                        <div class="sc-list-addon">
                                            <span class="sc-avatar-initials md-color-white md-bg-purple-500" title="reichel.filiberto">FA</span>
                                        </div>
                                        <a href="#" class="sc-list-body uk-display-block">
                                            <span class="uk-text-small uk-text-muted uk-width-expand">Feb 3, 2021</span>
                                            <span class="uk-display-block uk-text-truncate">Asperiores labore a est beatae odio quidem ipsam adipisci.</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a href="pages-mailbox.html" class="uk-flex uk-text-small sc-padding-small-ends sc-padding-medium">Show all in mailbox</a>
                        </div>
                    </li>
                    <li class="uk-visible@s">
                        <a href="#">
                            <span class="mdi mdi-bell uk-display-inline-block">
                                <span class="sc-indicator md-bg-color-red-600"></span>
                            </span>
                        </a>
                        <div class="uk-navbar-dropdown md-bg-grey-100">
                            <div class="sc-padding-medium sc-padding-small-ends">
                                <div class="uk-text-right uk-margin-medium-bottom">
                                    <button class="sc-button sc-button-default sc-button-outline sc-button-mini sc-js-clear-alerts">Clear all</button>
                                </div>
                                <ul class="uk-list uk-margin-remove" id="sc-header-alerts">
                                    <li class="sc-border sc-round md-bg-white">
                                        <div class="uk-margin-right uk-margin-small-left"><i class="mdi mdi-alert-outline md-color-red-600"></i></div>
                                        <div class="uk-flex-1 uk-text-small">
                                            Information Page Not Found!
                                        </div>
                                    </li>
                                    <li class="uk-margin-small-top sc-border sc-round md-bg-white">
                                        <div class="uk-margin-right uk-margin-small-left"><i class="mdi mdi-email-check-outline md-color-blue-600"></i></div>
                                        <div class="uk-flex-1 uk-text-small">
                                            A new password has been sent to your e-mail address.
                                        </div>
                                    </li>
                                    <li class="uk-margin-small-top sc-border sc-round md-bg-white">
                                        <div class="uk-margin-right uk-margin-small-left"><i class="mdi mdi-alert-outline md-color-red-600"></i></div>
                                        <div class="uk-flex-1 uk-text-small">
                                            You do not have permission to access the API!
                                        </div>
                                    </li>
                                    <li class="uk-margin-small-top sc-border sc-round md-bg-white">
                                        <div class="uk-margin-right uk-margin-small-left"><i class="mdi mdi-check-all md-color-light-green-600"></i></div>
                                        <div class="uk-flex-1 uk-text-small">
                                            Your enquiry has been successfully sent.
                                        </div>
                                    </li>
                                </ul>
                                <div class="uk-text-medium uk-text-center sc-js-empty-message sc-text-semibold sc-padding-ends" style="display: none">No alerts!</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#"><img src="assets/img/avatars/avatar_default_sm.png" alt=""></a>
                        <div class="uk-navbar-dropdown uk-dropdown-small">
                            <ul class="uk-nav uk-nav-navbar">
                                <li><a href="pages-user_profile.html">Profile</a></li>
                                <li><a href="pages-settings.html">Settings</a></li>
                                <li><a href="login_page.html">Log Out</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <a href="#" class="sc-js-offcanvas-toggle md-color-white uk-margin-left uk-hidden@l">
                    <i class="mdi mdi-menu sc-offcanvas-open"></i>
                    <i class="mdi mdi-arrow-right sc-offcanvas-close"></i>
                </a>
            </div>
        </nav>
    </header>

    <aside id="sc-sidebar-main" class="sc-sidebar-info-fixed">
        <div class="uk-offcanvas-bar">
            <div class="sc-sidebar-main-scrollable" data-sc-scrollbar="visible-y">
                <ul class="sc-sidebar-menu uk-nav">


                    <li class="sc-sidebar-menu-heading"><span>Applications</span></li>


                    <li title="Chat">
                        <a href="pages-chat.html">
                            <span class="uk-nav-icon"><i class="mdi mdi-message-outline"></i>

                            </span><span class="uk-nav-title">Chat</span>
                        </a>
                    </li>

                    <li title="Invoices">
                        <a href="pages-invoices.html">
                            <span class="uk-nav-icon"><i class="mdi mdi-receipt"></i>

                            </span><span class="uk-nav-title">Invoices</span>
                        </a>
                    </li>

                    <li title="Mailbox">
                        <a href="pages-mailbox.html">
                            <span class="uk-nav-icon"><i class="mdi mdi-email-outline"></i>

                            </span><span class="uk-nav-title">Mailbox</span>
                        </a>
                    </li>

                    <li title="Task Board">
                        <a href="pages-task_board.html">
                            <span class="uk-nav-icon"><i class="mdi mdi-calendar-text"></i>

                            </span><span class="uk-nav-title">Task Board</span>
                        </a>
                    </li>

                    <li title="Notes">
                        <a href="pages-notes.html">
                            <span class="uk-nav-icon"><i class="mdi mdi-note-outline"></i>

                            </span><span class="uk-nav-title">Notes</span>
                        </a>
                    </li>


                    <li class="sc-sidebar-menu-heading"><span>Menu</span></li>


                    <li title="Dashboards">
                        <a href="#">
                            <span class="uk-nav-icon"><i class="mdi mdi-view-dashboard-variant"></i>

                            </span><span class="uk-nav-title">Dashboards</span>
                        </a>

                        <ul class="sc-sidebar-menu-sub">

                            <li>

                                <a href="dashboard-v1.html"> Dashboard 1 </a>

                            </li>



                            <li>

                                <a href="dashboard-v2.html"> Dashboard 2 </a>

                            </li>



                        </ul>
                    </li>

                    <li title="Forms">
                        <a href="#">
                            <span class="uk-nav-icon"><i class="mdi mdi-format-line-style"></i>

                            </span><span class="uk-nav-title">Forms</span>
                        </a>

                        <ul class="sc-sidebar-menu-sub">

                            <li>

                                <a href="forms-regular_elements.html"> Regular Elements </a>

                            </li>



                            <li>

                                <a href="forms-advanced_elements.html"> Advanced Elements </a>

                            </li>



                            <li>

                                <a href="forms-dynamic_fields.html"> Dynamic Fields </a>

                            </li>



                            <li>

                                <a href="forms-validation.html"> Validation </a>

                            </li>


                            <li>
                                <a href="#">Form Examples</a>
                                <ul>
                                    <li>
                                        <a href="forms_examples-advertising_evaluation_form.html"> Advertising Evaluation Form </a>
                                    </li>
                                    <li>
                                        <a href="forms_examples-booking_form.html"> Booking Form </a>
                                    </li>
                                    <li>
                                        <a href="forms_examples-car_rental_form.html"> Car Rental Form </a>
                                    </li>
                                    <li>
                                        <a href="forms_examples-checkout_form.html"> Checkout Form </a>
                                    </li>
                                    <li>
                                        <a href="forms_examples-contact_forms.html"> Contact Forms </a>
                                    </li>
                                    <li>
                                        <a href="forms_examples-job_application_form.html"> Job Application Form </a>
                                    </li>
                                    <li>
                                        <a href="forms_examples-medical_history_form.html"> Medical History Form </a>
                                    </li>
                                    <li>
                                        <a href="forms_examples-registration_form.html"> Registration Form </a>
                                    </li>
                                    <li>
                                        <a href="forms_examples-rental_application_form.html"> Rental Application Form </a>
                                    </li>
                                    <li>
                                        <a href="forms_examples-transaction_feedback_form.html"> Transaction Feedback Form </a>
                                    </li>

                                </ul>
                            </li>



                            <li>
                                <a href="#">Wizard</a>
                                <ul>
                                    <li>
                                        <a href="forms_wizard-horizontal.html"> Horizontal </a>
                                    </li>
                                    <li>
                                        <a href="forms_wizard-horizontal_minimal.html"> Horizontal Minimal </a>
                                    </li>
                                    <li>
                                        <a href="forms_wizard-vertical.html"> Vertical </a>
                                    </li>
                                    <li>
                                        <a href="forms_wizard-vertical_minimal.html"> Vertical Minimal </a>
                                    </li>

                                </ul>
                            </li>



                            <li class="sc-sidebar-menu-heading"><span>WYSIWYG Editors</span></li>
                            <li>
                                <a href="forms_wysiwyg-ckeditor.html"> CKEditor </a>
                            </li>
                            <li>
                                <a href="forms_wysiwyg-tinymce.html"> TinyMCE </a>
                            </li>





                        </ul>
                    </li>

                    <li title="Components">
                        <a href="#">
                            <span class="uk-nav-icon"><i class="mdi mdi-puzzle"></i>

                            </span><span class="uk-nav-title">Components</span>
                        </a>

                        <ul class="sc-sidebar-menu-sub">

                            <li>

                                <a href="components-accordion.html"> Accordion </a>

                            </li>



                            <li>

                                <a href="components-alert.html"> Alert </a>

                            </li>



                            <li>

                                <a href="components-animations.html"> Animations </a>

                            </li>



                            <li>

                                <a href="components-avatars.html"> Avatars </a>

                            </li>



                            <li>

                                <a href="components-badge_label.html"> Badge, Label </a>

                            </li>



                            <li>

                                <a href="components-base.html"> Base </a>

                            </li>



                            <li>

                                <a href="components-breadcrumb.html"> Breadcrumb </a>

                            </li>



                            <li>

                                <a href="components-buttons.html"> Buttons </a>

                            </li>



                            <li>

                                <a href="components-fab_buttons.html"> FAB Buttons </a>

                            </li>



                            <li>

                                <a href="components-cards.html"> Cards </a>

                            </li>



                            <li>

                                <a href="components-color_palette.html"> Color Palette </a>

                            </li>



                            <li>

                                <a href="components-drop_dropdowns.html"> Drop/Dropdowns </a>

                            </li>



                            <li>

                                <a href="components-filters.html"> Filters </a>

                            </li>



                            <li>

                                <a href="components-footer.html"> Footer </a>

                            </li>



                            <li>

                                <a href="components-fancy_footer.html"> <span class="uk-label">new</span>
                                    Fancy Footer </a>

                            </li>



                            <li>

                                <a href="components-grid.html"> Grid </a>

                            </li>



                            <li>

                                <a href="components-icons.html"> Icons </a>

                            </li>



                            <li>

                                <a href="components-lists.html"> Lists </a>

                            </li>



                            <li>

                                <a href="components-masonry.html"> Masonry </a>

                            </li>



                            <li>

                                <a href="components-modals_dialogs.html"> Modals/Dialogs </a>

                            </li>



                            <li>

                                <a href="components-notifications.html"> Notifications </a>

                            </li>



                            <li>

                                <a href="components-overlay.html"> Overlay </a>

                            </li>



                            <li>

                                <a href="components-pagination.html"> Pagination </a>

                            </li>



                            <li>

                                <a href="components-progress_spinners.html"> Progress/Spinners </a>

                            </li>



                            <li>

                                <a href="components-scrollable.html"> Scrollable </a>

                            </li>



                            <li>

                                <a href="components-slider.html"> Slider </a>

                            </li>



                            <li>

                                <a href="components-sortable.html"> Sortable </a>

                            </li>



                            <li>

                                <a href="components-swiped_list.html"> <span class="uk-label">new</span>
                                    Swiped List </a>

                            </li>



                            <li>

                                <a href="components-tables.html"> Tables </a>

                            </li>



                            <li>

                                <a href="components-tabs.html"> Tabs </a>

                            </li>



                            <li>

                                <a href="components-timeline.html"> Timeline </a>

                            </li>



                            <li>

                                <a href="components-toolbar.html"> Toolbar </a>

                            </li>



                            <li>

                                <a href="components-tooltips.html"> Tooltips </a>

                            </li>



                        </ul>
                    </li>

                    <li title="Pages">
                        <a href="#">
                            <span class="uk-nav-icon"><i class="mdi mdi-application"></i>

                            </span><span class="uk-nav-title">Pages</span>
                        </a>

                        <ul class="sc-sidebar-menu-sub">

                            <li>

                                <a href="pages-blank.html"> Blank </a>

                            </li>



                            <li>

                                <a href="pages-blank_header_expanded.html"> Blank (expanded header) </a>

                            </li>



                            <li class="sc-page-active">

                                <a href="pages-contact_list.html"> Contact List </a>

                            </li>



                            <li>

                                <a href="pages-contact_list_single.html"> Contact List (single) </a>

                            </li>



                            <li>

                                <a href="pages-data_visualization.html"> Data visualization </a>

                            </li>


                            <li class="sc-sidebar-menu-heading"><span>Error Pages</span></li>
                            <li>
                                <a href="error_404.html"> Error 404 </a>
                            </li>
                            <li>
                                <a href="error_500.html"> Error 500 </a>
                            </li>



                            <li class="sc-sidebar-menu-separator"></li>


                            <li>

                                <a href="pages-gallery.html"> Gallery </a>

                            </li>



                            <li>

                                <a href="pages-help_faq.html"> Help/Faq </a>

                            </li>



                            <li>

                                <a href="pages-invoice_create.html"> Invoice (new) </a>

                            </li>


                            <li class="sc-sidebar-menu-heading"><span>Issue Tracker</span></li>
                            <li>
                                <a href="pages-issues_list.html"> List View </a>
                            </li>
                            <li>
                                <a href="pages-issue_details.html"> Issue Details </a>
                            </li>



                            <li class="sc-sidebar-menu-separator"></li>


                            <li>

                                <a href="login_page.html"> Login Page </a>

                            </li>



                            <li>

                                <a href="pages-poi_listing.html"> POI listing </a>

                            </li>



                            <li>

                                <a href="pages-pricing_tables.html"> Pricing Tables </a>

                            </li>



                            <li>

                                <a href="pages-settings.html"> Settings </a>

                            </li>



                            <li>

                                <a href="pages-user_profile.html"> User Profile </a>

                            </li>



                        </ul>
                    </li>

                    <li title="Plugins">
                        <a href="#">
                            <span class="uk-nav-icon"><i class="mdi mdi-power-plug"></i>

                            </span><span class="uk-nav-title">Plugins</span>
                        </a>

                        <ul class="sc-sidebar-menu-sub">

                            <li>

                                <a href="plugins-ajax.html"> Ajax </a>

                            </li>



                            <li>

                                <a href="plugins-calendar.html"> Calendar </a>

                            </li>



                            <li>

                                <a href="plugins-calendar_events.html"> <span class="uk-label">new</span>
                                    Calendar/Events </a>

                            </li>



                            <li>

                                <a href="plugins-charts.html"> Charts </a>

                            </li>



                            <li>

                                <a href="plugins-code_editor.html"> Code Editor </a>

                            </li>



                            <li>

                                <a href="plugins-data_grid.html"> Data Grid </a>

                            </li>



                            <li>

                                <a href="plugins-datatables.html"> Datatables </a>

                            </li>



                            <li>

                                <a href="plugins-diff_tool.html"> Diff Tool </a>

                            </li>



                            <li>

                                <a href="plugins-gantt_chart.html"> Gantt Chart </a>

                            </li>



                            <li>

                                <a href="plugins-google_maps.html"> Google Maps </a>

                            </li>



                            <li>

                                <a href="plugins-idle_timeout.html"> Idle Timeout </a>

                            </li>



                            <li>

                                <a href="plugins-image_cropper.html"> Image Cropper </a>

                            </li>



                            <li>

                                <a href="plugins-push_notifications.html"> Push Notifications </a>

                            </li>



                            <li>

                                <a href="plugins-tour.html"> Tour </a>

                            </li>



                            <li>

                                <a href="plugins-tree.html"> Tree </a>

                            </li>



                            <li>

                                <a href="plugins-vector_maps.html"> Vector Maps </a>

                            </li>



                        </ul>
                    </li>

                    <li title="Layout">
                        <a href="#">
                            <span class="uk-nav-icon"><i class="mdi mdi-view-compact-outline"></i>

                            </span><span class="uk-nav-title">Layout</span>
                        </a>

                        <ul class="sc-sidebar-menu-sub">

                            <li>

                                <a href="layout-top_menu.html"> Top Menu </a>

                            </li>



                            <li>

                                <a href="layout-mini_sidebar.html"> Mini Sidebar </a>

                            </li>



                            <li>

                                <a href="layout-offcanvas_sidebar.html"> <span class="uk-label">new</span>
                                    Offcanvas Sidebar </a>

                            </li>



                        </ul>
                    </li>
                    <li title="Multi-level">
                        <a href="#">
                            <span class="uk-nav-icon"><i class="mdi mdi-format-line-weight"></i></span><span class="uk-nav-title">Multi level</span>
                        </a>
                        <ul class="sc-sidebar-menu-sub">
                            <li><a href="#">Submenu 1</a></li>
                            <li class="sc-js-submenu-trigger sc-has-submenu">
                                <a href="#">Submenu 2</a>
                                <ul>
                                    <li><a href="#">Submenu 2.1</a></li>
                                    <li>
                                        <a href="#">Submenu 2.2</a>
                                        <ul>
                                            <li><a href="#">Submenu 2.2.1</a></li>
                                            <li><a href="#">Submenu 2.2.2</a></li>
                                            <li><a href="#">Submenu 2.2.3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Submenu 2.3</a></li>
                                    <li><a href="#">Submenu 2.4</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Submenu 3</a></li>
                            <li>
                                <a href="#">Submenu 4</a>
                                <ul>
                                    <li>
                                        <a href="#">Submenu 4.1</a>
                                        <ul>
                                            <li><a href="#">Submenu 4.1.1</a></li>
                                            <li><a href="#">Submenu 4.1.2</a></li>
                                            <li><a href="#">Submenu 4.1.3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Submenu 4.2</a></li>
                                    <li><a href="#">Submenu 4.3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <div class="sc-sidebar-info">
                version: 2.5.0
            </div>
        </div>
    </aside>

    <div id="sc-page-wrapper">
        <div id="sc-page-content">

            <ul id="sc-contact-list" class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" data-uk-grid>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-1" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_08_md.png" class="sc-avatar sc-border" alt="xerdman" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Alisa Ritchie </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Pacocha-Blick</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">459-780-8784 x0585</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">bernier.renee@hotmail.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">72878 Derick Row
                                                        Tillmanview, MS 71171-4052</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">At aperiam aut voluptates voluptas consequatur ut et ipsam.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-light-green-50">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-2" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_04_md.png" class="sc-avatar sc-border" alt="wilkinson.laney" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Kade Corwin </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Greenfelder LLC</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">241-576-6520 x733</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">felix68@gmail.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">7225 Marlin Village
                                                        Tatyanashire, AZ 98487</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Rerum iure doloremque totam sunt quo at esse.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-3" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_01_md.png" class="sc-avatar sc-border" alt="effertz.maritza" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Tanner Kub </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Sanford, McDermott and Reilly</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">867-993-9592 x65160</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">isac51@yahoo.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">959 Halvorson Islands Apt. 194
                                                        North Wileyview, ND 52533-1871</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Et non tenetur repudiandae modi consequatur quia maiores temporibus rerum.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-brown-50">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-4" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_06_md.png" class="sc-avatar sc-border" alt="nkautzer" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Anjali Haley </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Feeney LLC</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">854-862-9896 x4240</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">ioberbrunner@hotmail.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">47484 Hermiston Squares
                                                        Robertsmouth, MI 65024</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Magnam blanditiis voluptas aliquid error excepturi repellendus aspernatur alias voluptate ut.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-5" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_03_md.png" class="sc-avatar sc-border" alt="laurianne71" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Carlo Parker </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Maggio LLC</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">(732) 633-6067</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">oconnell.carmelo@yahoo.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">3173 Abraham Drive
                                                        Port Cassandraville, IL 27932-0586</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Quos quisquam eius occaecati ut totam dolor animi sit beatae neque autem voluptatem.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-6" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_04_md.png" class="sc-avatar sc-border" alt="tmohr" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Izaiah Torp </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Huel, Rice and McClure</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">(548) 279-2418 x56011</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">gemmerich@stanton.biz</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">69777 Orrin Field
                                                        Russellland, ID 93710</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Aliquam tenetur corporis facilis quis ex maiores qui impedit.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-7" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_06_md.png" class="sc-avatar sc-border" alt="iebert" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Sherman Wilderman </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Conroy, O'Hara and VonRueden</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">207-666-7448 x861</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">scartwright@hayes.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">57374 Russel Ridges
                                                        East Lorenzview, PA 26506</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Quas nemo et ad at id hic accusantium ut quis culpa aut ex.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-8" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_06_md.png" class="sc-avatar sc-border" alt="buford01" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Kim Reilly </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Sauer LLC</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">+1-406-888-9634</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">upton.jaydon@runolfsson.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">454 Hamill Mews
                                                        Leochester, NH 70362</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Necessitatibus vel et assumenda est dolores pariatur est esse corrupti.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-9" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_03_md.png" class="sc-avatar sc-border" alt="sfeeney" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Anne Spencer </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Hodkiewicz PLC</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">(761) 277-0128 x52821</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">ajacobson@gmail.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">7633 Julie Motorway
                                                        O'Keefeton, CA 15797-7830</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Harum porro modi veniam suscipit pariatur recusandae vel ut hic quidem.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-10" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_08_md.png" class="sc-avatar sc-border" alt="missouri05" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Jadyn Collier </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Hand Group</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">521-691-4074 x11068</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">vince.dibbert@considine.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">2923 Casper Brook Apt. 418
                                                        Romaguerahaven, LA 85419</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Vel expedita qui voluptatem rem vitae tempore qui reiciendis quod earum rerum aut.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-11" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_01_md.png" class="sc-avatar sc-border" alt="ashly.hettinger" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Laurence Farrell </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Robel-Champlin</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">(526) 996-9333</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">ehowell@gmail.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">4628 Krystel Walk
                                                        Lake Waldoburgh, MS 33728-3053</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Et ut omnis veritatis id alias ipsam quo praesentium sunt expedita et.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-12" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_05_md.png" class="sc-avatar sc-border" alt="valentin.kihn" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Clare Russel </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Hoppe, Grant and Hartmann</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">+1-510-382-5659</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">lester96@yahoo.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">7605 Barton Motorway Apt. 715
                                                        North Kennedystad, DE 15297-9000</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Ea earum corporis et ut natus minus quis iure ipsum maxime quo perspiciatis quos.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-13" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_06_md.png" class="sc-avatar sc-border" alt="jedediah46" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Roberto Hermann </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Stanton Group</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">1-940-773-4141 x8754</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">kadin.strosin@gmail.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">83069 O'Kon Light Apt. 961
                                                        New Verla, HI 36085-8202</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Hic velit sit ut magni et illo quia dicta quae deserunt et et veritatis.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-14" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_07_md.png" class="sc-avatar sc-border" alt="lweimann" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Roderick Gorczany </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Schaden and Sons</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">629-420-6659 x537</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">wava42@weber.net</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">3620 Hauck Brook Apt. 721
                                                        Pinkiemouth, PA 62015-4724</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Blanditiis quod sunt dicta adipisci consequuntur sit dignissimos culpa.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-15" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_03_md.png" class="sc-avatar sc-border" alt="jerad07" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Mariam Adams </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Stiedemann-Johnson</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">232-925-4670</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">jklocko@hotmail.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">783 Boehm Crescent Apt. 870
                                                        Milfordshire, PA 61081-0367</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Aut repellendus deserunt fugit vero unde quasi facere libero labore harum consectetur est ipsa.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-16" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_02_md.png" class="sc-avatar sc-border" alt="rbashirian" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Thalia Gulgowski </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Berge, Kris and Hagenes</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">+1-489-948-0963</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">rau.talon@romaguera.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">76424 Ford Throughway
                                                        West Ashley, ME 75134</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Fuga recusandae repellendus id dolorem dolor commodi fugit.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-17" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_06_md.png" class="sc-avatar sc-border" alt="xraynor" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Domenic Morissette </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Jacobi, Hyatt and Ankunding</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">+1-973-861-4988</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">ricky.kautzer@yahoo.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">292 Barton Views
                                                        East Tiffany, MT 95067</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Vel quaerat quis aperiam molestiae adipisci consectetur aut reprehenderit mollitia dolores suscipit dolores non.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-18" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_01_md.png" class="sc-avatar sc-border" alt="mitchell.jessyca" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Chaim McLaughlin </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Keebler, Pollich and Daugherty</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">646-798-6965</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">lauryn33@gmail.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">1519 Kessler Stream Apt. 622
                                                        North Lawrence, DE 65697</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Iste sint in sunt ea hic sit consequatur rerum impedit consequatur laborum odit.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-19" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_03_md.png" class="sc-avatar sc-border" alt="schuster.candido" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Noelia Homenick </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Braun, Batz and Koch</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">412-563-0885</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">earnestine.bayer@hotmail.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">680 Florencio Neck
                                                        Nevaburgh, AK 12602-7174</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Doloremque vitae doloribus doloremque ad voluptatem cum iure fuga ipsa aut qui occaecati.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-20" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_04_md.png" class="sc-avatar sc-border" alt="vlang" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Donald Glover </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Grimes, Sauer and Renner</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">+1-593-912-0270</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">johnpaul.dickens@yahoo.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">59749 Vivianne Island Suite 661
                                                        Lake Percyhaven, CO 80580</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Quia labore provident laudantium voluptatem ab enim eius aut eligendi maxime quas ut.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-21" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_02_md.png" class="sc-avatar sc-border" alt="melany25" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Brycen Cummerata </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Rowe, Krajcik and Herzog</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">794.584.2640 x621</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">wellington12@yahoo.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">403 Abshire Parkways
                                                        Ephraimland, ND 85773-2011</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Optio qui iusto adipisci ea accusantium architecto aut est dolor eos cumque.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-22" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_03_md.png" class="sc-avatar sc-border" alt="marcelle51" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Robyn Tromp </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Kunze-Purdy</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">1-239-458-3121 x856</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">borer.dorian@yahoo.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">14755 Rosalind Vista Apt. 297
                                                        Pfeffermouth, GA 89835-5034</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Et unde non sed totam occaecati iste velit excepturi earum dolorum ea.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-23" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_03_md.png" class="sc-avatar sc-border" alt="thill" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Harmony Bailey </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Nitzsche Ltd</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">+1 (564) 290-4459</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">myrtis.maggio@hotmail.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">2790 Keebler Stream Apt. 355
                                                        Schaeferland, NM 60721</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Sint nesciunt laudantium commodi vel pariatur minus veritatis enim autem repellat quis.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-24" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_06_md.png" class="sc-avatar sc-border" alt="romaguera.gabriella" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Lori Wyman </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Kiehn-Abshire</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">994-749-9386</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">theresia59@beer.org</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">56689 Cathrine Flats
                                                        Gerholdtown, AK 18155-3521</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Eos non rerum eum reprehenderit nesciunt aut sint aut numquam ducimus et.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-25" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_03_md.png" class="sc-avatar sc-border" alt="dkoss" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Brionna Kuhn </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">King, Gutkowski and Steuber</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">547-284-9749 x4579</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">dbogisich@beer.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">798 Rau Avenue Apt. 753
                                                        Elianshire, OK 82399-0358</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Magnam quasi impedit quibusdam et ut eaque voluptatem amet laborum ut ratione consectetur.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-26" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_07_md.png" class="sc-avatar sc-border" alt="feeney.robbie" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Filiberto Schmidt </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Schoen, Schaefer and Jenkins</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">580.709.9489 x4687</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">lily.spencer@gmail.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">939 Monahan Summit Suite 683
                                                        Port Noe, WY 51340</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Aliquam natus iusto sapiente eaque aut vitae rerum cum porro voluptatum.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-27" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_05_md.png" class="sc-avatar sc-border" alt="bella26" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Felix Wolff </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Schimmel PLC</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">(889) 519-3775 x00677</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">htromp@shanahan.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">491 Barrows Lake Apt. 167
                                                        East Xzavierport, LA 80424-9857</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Magni quia iste at velit numquam est aliquid ad accusamus aperiam corporis repellendus accusantium.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-28" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_02_md.png" class="sc-avatar sc-border" alt="elna49" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Kenyon Metz </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Farrell-Crooks</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">(691) 224-7177</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">nikolas06@yost.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">9917 Nikolaus Common Suite 940
                                                        Port Noeliaside, IN 90225</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Ex maiores est qui fugit eos sequi sapiente deleniti velit iusto.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-29" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_05_md.png" class="sc-avatar sc-border" alt="fcruickshank" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Bettye Gislason </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Crooks LLC</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">1-640-950-5511 x313</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">abelardo.jerde@rath.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">464 Batz River Suite 091
                                                        North Gunnerview, ND 02752</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Ratione nostrum quas voluptate atque possimus modi.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-30" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_07_md.png" class="sc-avatar sc-border" alt="daugherty.geovanny" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Lenna Kessler </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Thompson, Leffler and Stark</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">814.553.6003 x5255</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">francisco93@yahoo.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">55273 Raynor Tunnel
                                                        South Jalenside, VT 10375</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Nulla veniam veniam voluptas eius rem reprehenderit id facere unde.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-31" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_01_md.png" class="sc-avatar sc-border" alt="obie64" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Jensen Carroll </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Shanahan Inc</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">660-852-6925 x2185</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">wunsch.lowell@yahoo.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">678 Albertha Crossing
                                                        West Brianborough, IA 99991-6605</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Molestiae ratione in nesciunt nihil beatae voluptatum natus nobis et.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-32" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_06_md.png" class="sc-avatar sc-border" alt="labadie.ronaldo" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Peter Schmeler </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Corwin-Brown</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">591.300.2788</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">iturner@hotmail.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">73635 Mervin Lodge Apt. 818
                                                        North Althea, NJ 75434</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Officiis laborum blanditiis suscipit in animi sint sit dolorum qui quia explicabo exercitationem quae.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-33" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_01_md.png" class="sc-avatar sc-border" alt="cassandra.jaskolski" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Stewart Cormier </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Fahey PLC</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">1-456-742-8503 x77520</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">adele23@hettinger.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">846 Rigoberto Junction Suite 742
                                                        Terrenceport, FL 91981-4586</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Dolorem dolorem veritatis ipsam et ipsam incidunt eum qui ut eum voluptatem fugit.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-34" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_01_md.png" class="sc-avatar sc-border" alt="htromp" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Alana Okuneva </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Tremblay-Hane</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">643.480.5730 x1860</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">david02@gmail.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">337 Luettgen Rapids
                                                        Kyleeland, GA 97241-8335</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Aliquam quidem similique error commodi atque maiores fugiat.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-35" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_07_md.png" class="sc-avatar sc-border" alt="smurphy" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Ena Roberts </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">McLaughlin, Dach and Eichmann</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">418-366-2513 x79791</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">wconsidine@grant.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">7564 Santiago Brook Suite 239
                                                        Purdyland, MI 93254</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Voluptate nulla temporibus perspiciatis mollitia ut quod recusandae adipisci praesentium est fugiat vero quis.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-36" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_02_md.png" class="sc-avatar sc-border" alt="deontae.blick" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Charlotte Dickinson </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Olson-Murray</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">(521) 309-6854 x80425</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">qmosciski@streich.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">38882 Dicki Knoll Apt. 181
                                                        Kozeyview, RI 28576</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Nostrum doloribus dolorem ad dolorem tempora asperiores voluptas fuga harum dolorum.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-37" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_05_md.png" class="sc-avatar sc-border" alt="brooke.swaniawski" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Margarette Labadie </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Kemmer-Koelpin</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">(574) 785-3237 x367</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">xschumm@yahoo.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">557 Russel Walk
                                                        Hicklehaven, PA 91310-8222</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Saepe ipsa dolor autem consectetur et architecto corrupti sunt mollitia quia officiis nam explicabo.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-38" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_07_md.png" class="sc-avatar sc-border" alt="jamal.cummerata" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Maya VonRueden </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Stracke-Huels</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">872-405-8838</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">shemar.morar@hotmail.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">59354 Carlee Crossroad
                                                        Davonchester, CA 27396-8249</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Sed voluptatem quaerat ut dolore dignissimos quia blanditiis dolorem ipsum necessitatibus fuga.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-39" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_07_md.png" class="sc-avatar sc-border" alt="jeromy67" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Alize Carroll </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Hayes, Yundt and Goyette</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">292-518-6277 x491</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">larissa.thompson@swift.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">59260 Leta Key Suite 562
                                                        East Rasheed, NV 96912-5476</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Porro neque consequatur consectetur eaque veniam fugit sint enim.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-40" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_06_md.png" class="sc-avatar sc-border" alt="bernita08" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Pierce Spencer </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Kessler Inc</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">+16892849101</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">garry39@hotmail.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">660 Bahringer Brook Apt. 986
                                                        North Orie, VT 86007-1688</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Tempore dolorem qui unde suscipit sequi voluptates sed.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-41" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_02_md.png" class="sc-avatar sc-border" alt="wsenger" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Zelma Weissnat </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Kuhlman-Bahringer</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">602.758.7647 x017</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">mclaughlin.johnpaul@hotmail.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">74870 O'Keefe Islands
                                                        Deloresborough, MI 76517-9058</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Et et magni necessitatibus rem saepe omnis ea explicabo enim quia magni et similique.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-42" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_05_md.png" class="sc-avatar sc-border" alt="heathcote.benton" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Brenda Jerde </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Littel, Leannon and Cormier</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">(793) 460-3296</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">nicklaus.swift@hirthe.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">963 Rau Lights
                                                        Hermanshire, NH 54714</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Minima eos dolor impedit ratione aut consectetur totam aperiam.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-43" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_06_md.png" class="sc-avatar sc-border" alt="hazel29" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Dino Vandervort </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Rippin-Bayer</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">+1.532.915.2940</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">jaida.blick@torphy.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">811 Emery Port
                                                        East Alizeborough, MT 22916-7633</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Quia ipsam possimus eum quia excepturi non unde perspiciatis recusandae.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-44" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_05_md.png" class="sc-avatar sc-border" alt="hilda04" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Jeramy Johnston </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Ebert-Veum</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">+1 (478) 346-2270</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">pink.brakus@gmail.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">36085 Beer Creek
                                                        Lionelborough, ID 02658-1467</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Voluptate numquam fuga aspernatur saepe est qui dolore qui repellat et placeat sint.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-45" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_08_md.png" class="sc-avatar sc-border" alt="zola52" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Lisette Lubowitz </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Welch PLC</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">704-491-1018 x237</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">nikolaus.cesar@gmail.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">24806 Sherwood Well Suite 580
                                                        Novatown, TN 05136-0360</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Odio fuga aspernatur corporis voluptate et sunt odio.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-46" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_01_md.png" class="sc-avatar sc-border" alt="sven.mckenzie" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Enola Feeney </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Schultz Inc</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">682-229-2953</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">jarrell20@luettgen.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">604 Ritchie Meadows
                                                        Watsicamouth, DC 08500</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Et magni aut mollitia neque esse repudiandae ad voluptate quas.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-47" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_02_md.png" class="sc-avatar sc-border" alt="phowell" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Jan Hahn </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Nolan PLC</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">442-457-4509</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">eugenia05@ebert.biz</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">177 Ethan Parks Suite 076
                                                        New Guy, NH 22337-4255</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Autem architecto error sapiente autem ex ad voluptatem tempora.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-48" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_05_md.png" class="sc-avatar sc-border" alt="iprosacco" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Pedro Dibbert </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Von, Von and Christiansen</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">334-806-8124</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">izabella.leffler@schaden.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">807 Raynor Curve
                                                        Floydburgh, AZ 01397-7132</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Molestiae deleniti excepturi ipsa ipsum voluptates dolorem odio dolorem accusamus ullam numquam nobis maxime.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-49" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_07_md.png" class="sc-avatar sc-border" alt="lori68" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Annabelle Bosco </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Hand Ltd</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">635-543-0186</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">arlo.ruecker@gmail.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">334 Annetta Plains
                                                        New Nikkobury, AR 61687</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Sapiente esse sit vel quisquam quas minus rerum veniam ipsam unde sunt et.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-50" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_02_md.png" class="sc-avatar sc-border" alt="gulgowski.jeffrey" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Melany Kuhlman </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Buckridge-Lang</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">+1-226-297-1642</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">ylemke@hotmail.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">3711 Abbott Spur Suite 891
                                                        Ivashire, NC 07062</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Enim dolorem eos voluptatem minima velit sit odit.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-51" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_01_md.png" class="sc-avatar sc-border" alt="al.hermann" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Kip Schumm </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Weimann, Turcotte and Konopelski</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">293.881.8626</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">malcolm.gusikowski@bauch.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">748 Bergnaum Fort Apt. 831
                                                        Nelsbury, FL 34115-1861</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Tempore quidem aut aut labore delectus id delectus veniam cum aut.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-52" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_05_md.png" class="sc-avatar sc-border" alt="ljaskolski" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Sarai Hirthe </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Daugherty-Berge</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">1-997-908-0632</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">hlangworth@harvey.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">7794 Borer Mill
                                                        West Lela, MT 98944</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Voluptas est officia dolorem vel aliquid est alias reiciendis doloribus voluptate ut autem ab.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-53" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_02_md.png" class="sc-avatar sc-border" alt="altenwerth.leatha" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Randy Parisian </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Ortiz, Hirthe and Bode</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">632-714-3063 x44496</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">amckenzie@gmail.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">2728 Hessel Junction
                                                        Lake Kristafort, NY 60586-9744</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Quod voluptas minus voluptas suscipit iusto eum.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-54" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_07_md.png" class="sc-avatar sc-border" alt="becker.tyra" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Raquel Hickle </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Klein Inc</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">824.478.8639 x4978</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">zcollier@gmail.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">893 Okuneva Squares Suite 283
                                                        East Khalilchester, VA 24729</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Aliquam autem dolorum in ut et quae provident.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-55" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_06_md.png" class="sc-avatar sc-border" alt="domenico.kozey" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Estefania Schneider </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">O'Reilly Group</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">938.864.9310 x130</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">zwilkinson@hotmail.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">7027 Katlyn Landing
                                                        Rohanborough, ID 95129-6596</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Sunt ratione consequuntur fuga aut nisi dolores ducimus sit vero tenetur et.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-56" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_03_md.png" class="sc-avatar sc-border" alt="ylarson" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Steve Bergnaum </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Auer Ltd</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">+17965933241</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">zola.roob@rippin.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">150 Monahan Pines
                                                        Kallieton, NM 30011</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Nisi aut et sed nam dolorem voluptas pariatur enim similique aliquam id accusamus ipsum.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-57" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_01_md.png" class="sc-avatar sc-border" alt="kimberly.streich" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Hailey Lind </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Lindgren, Emmerich and Schulist</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">432.438.4849 x95164</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">hweber@grimes.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">16160 Walsh Branch Apt. 532
                                                        Kulasland, PA 46118-7740</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Iste voluptas molestiae neque nobis tempora officia ut atque nobis.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-58" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_08_md.png" class="sc-avatar sc-border" alt="kreiger.theresia" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Trudie Block </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Waters Inc</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">953-393-2334</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">hmitchell@bradtke.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">6844 Riley Tunnel Suite 397
                                                        West Nella, TN 29976-6478</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Molestias hic pariatur eum et odit amet fuga officia quia commodi non.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-hover">
                        <div class="uk-card-body sc-padding-remove">
                            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative">
                                    <div class="uk-position-absolute uk-position-top-left uk-margin-small-left uk-margin-small-top ">
                                        <input type="checkbox" id="square-checkbox-59" data-sc-icheck>
                                    </div>
                                    <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-mini-top">
                                        <div class="sc-actions">
                                            <div class="sc-dropdown sc-dropdown-ico">
                                                <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                                                <div class="uk-dropdown-small" data-uk-dropdown="mode:click">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Action 1</a></li>
                                                        <li><a href="#">Action 2</a></li>
                                                        <li><a href="#">Action 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-padding-medium uk-text-center">
                                        <img src="assets/img/avatars/avatar_05_md.png" class="sc-avatar sc-border" alt="llarkin" />
                                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                            Kira Luettgen </p>
                                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">Crona LLC</p>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@l">
                                    <div class="sc-padding-medium">
                                        <ul class="uk-list uk-list-divider">
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove sc-text-semibold">(310) 202-4710 x232</p>
                                                    <span class="sc-list-secondary-text">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove">hsenger@hammes.com</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">4845 Pfeffer Wall Apt. 473
                                                        Brownville, NY 99492-5793</p>
                                                </div>
                                            </li>
                                            <li class="sc-list-group">
                                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                                <div class="sc-list-body">
                                                    <p class="uk-margin-remove uk-text-wrap">Enim voluptatem est ab est velit voluptatem odio.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
    </div>



    <!-- async assets-->
    <script src="assets/js/vendor/loadjs.min.js"></script>
    <script>
        var html = document.getElementsByTagName('html')[0];
        // ----------- CSS
        // md icons
        loadjs('assets/css/materialdesignicons.min.css', {
            preload: true
        });
        // UIkit
        loadjs('node_modules/uikit/dist/css/uikit.min.css', {
            preload: true
        });
        // themes
        loadjs('assets/css/themes/themes_combined.min.css', {
            preload: true
        });
        // mdi icons (base64) & google fonts (base64)
        loadjs([
            'assets/css/fonts/mdi_fonts.css',
            'assets/css/fonts/roboto_base64.css',
            'assets/css/fonts/sourceCodePro_base64.css'
        ], {
            preload: true
        });
        // main stylesheet
        loadjs('assets/css/main.min.css', function() {});
        // vendor
        loadjs('assets/js/vendor.min.js', function() {
            // scutum common functions/helpers
            loadjs('assets/js/scutum_common.min.js', function() {
                scutum.init();
                loadjs('assets/js/views/pages/contact_list.min.js', {
                    success: function() {
                        $(function() {
                            scutum.pages.contactList.init()
                        });
                    }
                })
                // show page
                setTimeout(function() {
                    // clear styles (FOUC)
                    $(html).css({
                        'backgroundColor': '',
                    });
                    $('body').css({
                        'visibility': '',
                        'overflow': '',
                        'apacity': '',
                        'maxHeight': ''
                    });
                }, 100);
                // style switcher
                loadjs([
                    'assets/js/style_switcher.min.js',
                    'assets/css/plugins/style_switcher.min.css'
                ], {
                    success: function() {
                        $(function() {
                            scutum.styleSwitcher();
                        });
                    }
                });
            });
        });
    </script>



</body>

</html>