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
										<span class="sc-avatar-initials md-color-white md-bg-red-500" title="heidi.sanford">MO</span>
									</div>
									<a href="#" class="sc-list-body uk-display-block">
										<span class="uk-text-small uk-text-muted uk-width-expand">05:13 PM</span>
										<span class="uk-display-block uk-text-truncate">Sint reprehenderit hic est quia aut.</span>
									</a>
								</li>
								<li class="sc-list-group">
									<div class="sc-list-addon">
										<img src="assets/img/avatars/avatar_05_sm.png" class="sc-avatar " alt="hayden39"/>
									</div>
									<a href="#" class="sc-list-body uk-display-block">
										<div class="uk-text-small uk-text-muted uk-width-expand">Feb 8, 2021</div>
										<span class="uk-display-block uk-text-truncate">Ipsa expedita aut inventore asperiores fugiat.</span>
									</a>
								</li>
								<li class="sc-list-group">
									<div class="sc-list-addon">
										<span class="sc-avatar-initials md-color-white md-bg-light-green-500" title="leila44">KS</span>
									</div>
									<a href="#" class="sc-list-body uk-display-block">
										<span class="uk-text-small uk-text-muted uk-width-expand">03:13 PM</span>
										<span class="uk-display-block uk-text-truncate">Consequatur maiores quia qui laudantium adipisci accusantium enim.</span>
									</a>
								</li>
								<li class="sc-list-group">
									<div class="sc-list-addon">
										<img src="assets/img/avatars/avatar_06_sm.png" class="sc-avatar " alt="ferry.molly"/>
									</div>
									<a href="#" class="sc-list-body uk-display-block">
										<span class="uk-text-small uk-text-muted uk-width-expand">Feb 7, 2021</span>
										<span class="uk-display-block uk-text-truncate">Consequatur est corporis consectetur et recusandae pariatur.</span>
									</a>
								</li>
								<li class="sc-list-group">
									<div class="sc-list-addon">
										<img src="assets/img/avatars/avatar_02_sm.png" class="sc-avatar " alt="cjerde"/>
									</div>
									<a href="#" class="sc-list-body uk-display-block">
										<span class="uk-text-small uk-text-muted uk-width-expand">Feb 5, 2021</span>
										<span class="uk-display-block uk-text-truncate">Occaecati neque ea reiciendis illum rerum beatae mollitia earum minus.</span>
									</a>
								</li>
								<li class="sc-list-group">
									<div class="sc-list-addon">
										<span class="sc-avatar-initials md-color-white md-bg-purple-500" title="kaylin91">FA</span>
									</div>
									<a href="#" class="sc-list-body uk-display-block">
										<span class="uk-text-small uk-text-muted uk-width-expand">Feb 3, 2021</span>
										<span class="uk-display-block uk-text-truncate">Et sequi velit corrupti placeat earum aspernatur dolor omnis minus numquam.</span>
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
	                            
	                                <a href="dashboard-v1.html">		                                		                                Dashboard 1	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="dashboard-v2.html">		                                		                                Dashboard 2	                                </a>
	                            
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
	                            
	                                <a href="forms-regular_elements.html">		                                		                                Regular Elements	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="forms-advanced_elements.html">		                                		                                Advanced Elements	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="forms-dynamic_fields.html">		                                		                                Dynamic Fields	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="forms-validation.html">		                                		                                Validation	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        	                            	                                <li>
	                                    <a href="#">Form Examples</a>	                                    <ul>
	                                    	                                        <li>
	                                            <a href="forms_examples-advertising_evaluation_form.html">		                                            		                                            Advertising Evaluation Form	                                            </a>
	                                        </li>
	                                    	                                        <li>
	                                            <a href="forms_examples-booking_form.html">		                                            		                                            Booking Form	                                            </a>
	                                        </li>
	                                    	                                        <li>
	                                            <a href="forms_examples-car_rental_form.html">		                                            		                                            Car Rental Form	                                            </a>
	                                        </li>
	                                    	                                        <li>
	                                            <a href="forms_examples-checkout_form.html">		                                            		                                            Checkout Form	                                            </a>
	                                        </li>
	                                    	                                        <li>
	                                            <a href="forms_examples-contact_forms.html">		                                            		                                            Contact Forms	                                            </a>
	                                        </li>
	                                    	                                        <li>
	                                            <a href="forms_examples-job_application_form.html">		                                            		                                            Job Application Form	                                            </a>
	                                        </li>
	                                    	                                        <li>
	                                            <a href="forms_examples-medical_history_form.html">		                                            		                                            Medical History Form	                                            </a>
	                                        </li>
	                                    	                                        <li>
	                                            <a href="forms_examples-registration_form.html">		                                            		                                            Registration Form	                                            </a>
	                                        </li>
	                                    	                                        <li>
	                                            <a href="forms_examples-rental_application_form.html">		                                            		                                            Rental Application Form	                                            </a>
	                                        </li>
	                                    	                                        <li>
	                                            <a href="forms_examples-transaction_feedback_form.html">		                                            		                                            Transaction Feedback Form	                                            </a>
	                                        </li>
	                                    
	                                    </ul>
	                                </li>
	                            
	                        
	                        
	                    	                        	                            	                                <li>
	                                    <a href="#">Wizard</a>	                                    <ul>
	                                    	                                        <li>
	                                            <a href="forms_wizard-horizontal.html">		                                            		                                            Horizontal	                                            </a>
	                                        </li>
	                                    	                                        <li>
	                                            <a href="forms_wizard-horizontal_minimal.html">		                                            		                                            Horizontal Minimal	                                            </a>
	                                        </li>
	                                    	                                        <li>
	                                            <a href="forms_wizard-vertical.html">		                                            		                                            Vertical	                                            </a>
	                                        </li>
	                                    	                                        <li>
	                                            <a href="forms_wizard-vertical_minimal.html">		                                            		                                            Vertical Minimal	                                            </a>
	                                        </li>
	                                    
	                                    </ul>
	                                </li>
	                            
	                        
	                        
	                    	                        	                            	                                <li class="sc-sidebar-menu-heading"><span>WYSIWYG Editors</span></li>
	                                	                                    <li>
	                                    	                                        <a href="forms_wysiwyg-ckeditor.html">		                                        		                                        CKEditor	                                        </a>
	                                    	                                    </li>
	                                	                                    <li>
	                                    	                                        <a href="forms_wysiwyg-tinymce.html">		                                        		                                        TinyMCE	                                        </a>
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
	                            
	                                <a href="components-accordion.html">		                                		                                Accordion	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-alert.html">		                                		                                Alert	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-animations.html">		                                		                                Animations	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-avatars.html">		                                		                                Avatars	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-badge_label.html">		                                		                                Badge, Label	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-base.html">		                                		                                Base	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-breadcrumb.html">		                                		                                Breadcrumb	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-buttons.html">		                                		                                Buttons	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-fab_buttons.html">		                                		                                FAB Buttons	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-cards.html">		                                		                                Cards	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-color_palette.html">		                                		                                Color Palette	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-drop_dropdowns.html">		                                		                                Drop/Dropdowns	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-filters.html">		                                		                                Filters	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-footer.html">		                                		                                Footer	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-fancy_footer.html">		                                			                                <span class="uk-label">new</span>
		                                		                                Fancy Footer	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-grid.html">		                                		                                Grid	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-icons.html">		                                		                                Icons	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-lists.html">		                                		                                Lists	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-masonry.html">		                                		                                Masonry	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-modals_dialogs.html">		                                		                                Modals/Dialogs	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-notifications.html">		                                		                                Notifications	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-overlay.html">		                                		                                Overlay	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-pagination.html">		                                		                                Pagination	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li class="sc-page-active">
	                            
	                                <a href="components-progress_spinners.html">		                                		                                Progress/Spinners	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-scrollable.html">		                                		                                Scrollable	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-slider.html">		                                		                                Slider	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-sortable.html">		                                		                                Sortable	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-swiped_list.html">		                                			                                <span class="uk-label">new</span>
		                                		                                Swiped List	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-tables.html">		                                		                                Tables	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-tabs.html">		                                		                                Tabs	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-timeline.html">		                                		                                Timeline	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-toolbar.html">		                                		                                Toolbar	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="components-tooltips.html">		                                		                                Tooltips	                                </a>
	                            
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
	                            
	                                <a href="pages-blank.html">		                                		                                Blank	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="pages-blank_header_expanded.html">		                                		                                Blank (expanded header)	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="pages-contact_list.html">		                                		                                Contact List	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="pages-contact_list_single.html">		                                		                                Contact List (single)	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="pages-data_visualization.html">		                                		                                Data visualization	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        	                            	                                <li class="sc-sidebar-menu-heading"><span>Error Pages</span></li>
	                                	                                    <li>
	                                    	                                        <a href="error_404.html">		                                        		                                        Error 404	                                        </a>
	                                    	                                    </li>
	                                	                                    <li>
	                                    	                                        <a href="error_500.html">		                                        		                                        Error 500	                                        </a>
	                                    	                                    </li>
	                                
	                            
	                        
	                        	                            <li class="sc-sidebar-menu-separator"></li>
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="pages-gallery.html">		                                		                                Gallery	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="pages-help_faq.html">		                                		                                Help/Faq	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="pages-invoice_create.html">		                                		                                Invoice (new)	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        	                            	                                <li class="sc-sidebar-menu-heading"><span>Issue Tracker</span></li>
	                                	                                    <li>
	                                    	                                        <a href="pages-issues_list.html">		                                        		                                        List View	                                        </a>
	                                    	                                    </li>
	                                	                                    <li>
	                                    	                                        <a href="pages-issue_details.html">		                                        		                                        Issue Details	                                        </a>
	                                    	                                    </li>
	                                
	                            
	                        
	                        	                            <li class="sc-sidebar-menu-separator"></li>
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="login_page.html">		                                		                                Login Page	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="pages-poi_listing.html">		                                		                                POI listing	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="pages-pricing_tables.html">		                                		                                Pricing Tables	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="pages-settings.html">		                                		                                Settings	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="pages-user_profile.html">		                                		                                User Profile	                                </a>
	                            
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
	                            
	                                <a href="plugins-ajax.html">		                                		                                Ajax	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="plugins-calendar.html">		                                		                                Calendar	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="plugins-calendar_events.html">		                                			                                <span class="uk-label">new</span>
		                                		                                Calendar/Events	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="plugins-charts.html">		                                		                                Charts	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="plugins-code_editor.html">		                                		                                Code Editor	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="plugins-data_grid.html">		                                		                                Data Grid	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="plugins-datatables.html">		                                		                                Datatables	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="plugins-diff_tool.html">		                                		                                Diff Tool	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="plugins-gantt_chart.html">		                                		                                Gantt Chart	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="plugins-google_maps.html">		                                		                                Google Maps	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="plugins-idle_timeout.html">		                                		                                Idle Timeout	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="plugins-image_cropper.html">		                                		                                Image Cropper	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="plugins-push_notifications.html">		                                		                                Push Notifications	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="plugins-tour.html">		                                		                                Tour	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="plugins-tree.html">		                                		                                Tree	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="plugins-vector_maps.html">		                                		                                Vector Maps	                                </a>
	                            
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
	                            
	                                <a href="layout-top_menu.html">		                                		                                Top Menu	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="layout-mini_sidebar.html">		                                		                                Mini Sidebar	                                </a>
	                            
	                        </li>
	                        
	                        
	                    	                        
	                        <li>
	                            
	                                <a href="layout-offcanvas_sidebar.html">		                                			                                <span class="uk-label">new</span>
		                                		                                Offcanvas Sidebar	                                </a>
	                            
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
		<div class="uk-child-width-1-2@l" data-uk-grid>
			<div>
				<div class="uk-card">
					<h3 class="uk-card-title">CSS Spinners</h3>
					<div class="uk-card-body">
						<div class="uk-child-width-auto uk-grid-margin uk-flex-middle" data-uk-grid>
							<div>
								<div class="sc-spinner sc-spinner-small"></div>
							</div>
							<div>
								<div class="sc-spinner"></div>
							</div>
							<div>
								<div class="sc-spinner sc-spinner-large"></div>
							</div>
							<div>
								<div class="sc-spinner sc-spinner-small sc-spinner-secondary"></div>
							</div>
							<div>
								<div class="sc-spinner sc-spinner-secondary"></div>
							</div>
							<div>
								<div class="sc-spinner sc-spinner-large sc-spinner-secondary"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="uk-card uk-margin">
					<h3 class="uk-card-title">UIkit Spinners</h3>
					<div class="uk-card-body">
						<div class="uk-child-width-auto uk-grid-margin uk-flex-middle" data-uk-grid>
							<div>
								<div data-uk-spinner="ratio: 0.6"></div>
							</div>
							<div>
								<div data-uk-spinner></div>
							</div>
							<div>
								<div data-uk-spinner="ratio: 3"></div>
							</div>
							<div>
								<div class="md-color-red-600" data-uk-spinner="ratio: 2"></div>
							</div>
							<div>
								<div class="md-color-blue-600" data-uk-spinner="ratio: 2"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="uk-card uk-margin uk-position-relative" id="sc-spinner-container">
					<h3 class="uk-card-title">Overlay Spinners</h3>
					<div class="uk-card-body">
                        <div class="uk-height-medium uk-flex-bottom uk-flex">
                            <div class="uk-child-width-auto uk-flex-middle uk-grid-medium" data-uk-grid>
                                <div>
                                    <button class="sc-button sc-js-spinner-css">CSS</button>
                                </div>
                                <div>
                                    <button class="sc-button sc-js-spinner-uikit">UIkit</button>
                                </div>
                                <div>
                                    <button class="sc-button sc-js-spinner-in-container">In container</button>
                                </div>
                                <div>
                                    <button class="sc-button sc-js-spinner-hide">Hide</button>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
			<div>
				<div class="uk-card">
					<h3 class="uk-card-title">Progress</h3>
					<div class="uk-card-body">
						<p class="sc-color-secondary uk-margin-small">Default</p>
						<div class="sc-progress uk-margin-remove">
							<div class="sc-progress-bar md-bg-light-green-400" style="width: 62%"></div>
						</div>
						<hr>
						<p class="sc-color-secondary uk-margin-small">Small</p>
						<div class="sc-progress sc-progress-small uk-margin-remove">
							<div class="sc-progress-bar md-bg-red-400" style="width: 21%"></div>
						</div>
						<hr>
						<p class="sc-color-secondary uk-margin-small">Group</p>
						<div class="sc-progress sc-progress-small uk-margin-remove sc-progress-group">
							<div class="sc-progress-bar md-bg-red-400" style="width: 14%"></div>
							<div class="sc-progress-bar md-bg-amber-400" style="width: 25%"></div>
							<div class="sc-progress-bar md-bg-light-green-400" style="width: 31%"></div>
						</div>
						<hr>
						<div class="sc-progress sc-progress-small">
							<span class="sc-progress-label uk-text-center">Progress Label</span>
							<div class="sc-progress-bar md-bg-light-blue-800" style="width: 21%"></div>
						</div>
						<hr>
						<p class="sc-color-secondary uk-margin-small">Indeterminate</p>
						<div class="sc-progress sc-progress-small uk-margin-remove sc-progress-indeterminate">
							<div class="sc-progress-bar md-bg-light-blue-800"></div>
						</div>
						<hr>
						<p class="sc-color-secondary uk-margin-small">Dynamic progress</p>
						<div class="sc-progress sc-progress-small uk-margin-remove sc-js-progress">
							<div class="sc-progress-bar md-bg-red-400" style="width: 12%"></div>
						</div>
					</div>
				</div>
				<div class="uk-card uk-margin">
					<h3 class="uk-card-title">UIkit Progress</h3>
					<div class="uk-card-body">
						<progress class="uk-progress" value="10" max="100"></progress>
						<hr>
						<progress id="sc-js-progress-uikit" class="uk-progress" value="10" max="100"></progress>
					</div>
				</div>
			</div>
		</div>
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
	loadjs('assets/js/vendor.min.js', function () {
        // scutum common functions/helpers
        loadjs('assets/js/scutum_common.min.js', function() {
            scutum.init();
            loadjs('assets/js/views/components/progress_spinners.min.js', { success: function() { $(function(){scutum.components.progressSpinners.init()}); } })
            // show page
            setTimeout(function () {
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
                    $(function(){
                        scutum.styleSwitcher();
                    });
                }
            });
        });
	});
</script>

<div id="sc-style-switcher">
	<a href="#" class="sc-sSw-toggle"><i class="mdi mdi-tune"></i></a>
	<p class="sc-text-semibold uk-margin-top-remove uk-margin-bottom">Themes</p>
	<ul class="sc-sSw-theme-switcher">
		<li class="active">
			<a href="#" class="sc-sSw-theme-switch sc-sW-theme-default" data-theme="">
				<span class="sc-sSw-theme-switch-color-1"></span>
				<span class="sc-sSw-theme-switch-color-2"></span>
			</a>
		</li>
		<li>
			<a href="#" class="sc-sSw-theme-switch sc-sW-theme-a" data-theme="sc-theme-a">
				<span class="sc-sSw-theme-switch-color-1"></span>
				<span class="sc-sSw-theme-switch-color-2"></span>
			</a>
		</li>
		<li>
			<a href="#" class="sc-sSw-theme-switch sc-sW-theme-b" data-theme="sc-theme-b">
				<span class="sc-sSw-theme-switch-color-1"></span>
				<span class="sc-sSw-theme-switch-color-2"></span>
			</a>
		</li>
		<li>
			<a href="#" class="sc-sSw-theme-switch sc-sW-theme-c" data-theme="sc-theme-c">
				<span class="sc-sSw-theme-switch-color-1"></span>
				<span class="sc-sSw-theme-switch-color-2"></span>
			</a>
		</li>
		<li>
			<a href="#" class="sc-sSw-theme-switch sc-sW-theme-d" data-theme="sc-theme-d">
				<span class="sc-sSw-theme-switch-color-1"></span>
				<span class="sc-sSw-theme-switch-color-2"></span>
			</a>
		</li>
		<li>
			<a href="#" class="sc-sSw-theme-switch sc-sW-theme-e" data-theme="sc-theme-e">
				<span class="sc-sSw-theme-switch-color-1"></span>
				<span class="sc-sSw-theme-switch-color-2"></span>
			</a>
		</li>
		<li>
			<a href="#" class="sc-sSw-theme-switch sc-sW-theme-f" data-theme="sc-theme-f">
				<span class="sc-sSw-theme-switch-color-1"></span>
				<span class="sc-sSw-theme-switch-color-2"></span>
			</a>
		</li>
		<li>
			<a href="#" class="sc-sSw-theme-switch sc-sW-theme-g" data-theme="sc-theme-g">
				<span class="sc-sSw-theme-switch-color-1"></span>
				<span class="sc-sSw-theme-switch-color-2"></span>
			</a>
		</li>
		<li>
			<a href="#" class="sc-sSw-theme-switch sc-sW-theme-h" data-theme="sc-theme-h">
				<span class="sc-sSw-theme-switch-color-1"></span>
				<span class="sc-sSw-theme-switch-color-2"></span>
			</a>
		</li>
        <li>
            <a href="#" class="sc-sSw-theme-switch sc-sW-theme-dark" data-theme="sc-theme-dark">
                <span class="sc-sSw-theme-switch-color-1"></span>
                <span class="sc-sSw-theme-switch-color-2"></span>
            </a>
        </li>
	</ul>
	<p class="sc-text-semibold uk-margin-large-top uk-margin-bottom">Main Menu</p>
	<div class="uk-flex uk-flex-middle uk-margin-small-bottom">
		<input type="checkbox" id="sc-menu-scroll-to-active" data-sc-icheck><label for="sc-menu-scroll-to-active">Scroll to active</label>
	</div>
    <div class="uk-flex uk-flex-middle">
        <input type="checkbox" id="sc-menu-accordion-mode" data-sc-icheck><label for="sc-menu-accordion-mode">Accordion mode</label>
    </div>
</div>

</body>
</html>
