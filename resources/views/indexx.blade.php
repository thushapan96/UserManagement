@extends('layouts.layoutss')

@section('content')
<div class="uk-child-width-1-5@xl uk-child-width-1-3@l uk-child-width-1-2@s uk-grid-match" data-uk-grid data-uk-sortable>
    <div>
        <div class="uk-card sc-widget uk-flex">
            <div class="uk-width-1-4 md-bg-cyan-600 uk-flex-middle uk-flex uk-flex-center">
                <i class="mdi mdi-memory md-color-white sc-icon-24"></i>
            </div>
            <div class="uk-flex-1">
                <div class="uk-card-body">
                    <h3 class="uk-card-title">New Enquiries</h3>
                    <p class="uk-text-meta">1 45</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-card sc-widget uk-flex">
            <div class="uk-width-1-4 md-bg-red-600 uk-flex-middle uk-flex uk-flex-center">
                <i class="mdi mdi-account-card-details md-color-white sc-icon-24"></i>
            </div>
            <div class="uk-flex-1">
                <div class="uk-card-body">
                    <h3 class="uk-card-title"> Express Entry</h3>
                    <p class="uk-text-meta">1 453</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-card sc-widget uk-flex">
            <div class="uk-width-1-4 md-bg-light-green-600 uk-flex-middle uk-flex uk-flex-center">
                <i class="mdi mdi-car md-color-white  sc-icon-24"></i>
            </div>
            <div class="uk-flex-1">
                <div class="uk-card-body">
                    <h3 class="uk-card-title">PNP</h3>
                    <p class="uk-text-meta">1 453</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-card sc-widget uk-flex">
            <div class="uk-width-1-4 md-bg-amber-600 uk-flex-middle uk-flex uk-flex-center">
                <i class="mdi mdi-currency-eur md-color-white sc-widget-addon"></i>
            </div>
            <div class="uk-flex-1">
                <div class="uk-card-body">
                    <h3 class="uk-card-title">1.135873</h3>
                    <p class="uk-text-meta">AIP</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-card sc-widget uk-flex">
            <div class="uk-width-1-4 md-bg-purple-600 uk-flex-stretch uk-flex-middle uk-flex uk-flex-center">
                <i class="mdi mdi-server md-color-white sc-icon-24"></i>
            </div>
            <div class="uk-flex-1">
                <div class="uk-card-body">
                    <h3 class="uk-card-title">99.95 </h3>
                    <p class="uk-text-meta">Visas</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-child-width-1-4@xl uk-child-width-1-2@s sc-sequence-show-manual" data-uk-grid data-sc-sequence-show='{ "target": ".uk-card" }'>
    <div>
        <div class="uk-card sc-widget">
            <div class="sc-widget-content">
                <div class="uk-flex uk-flex-middle">
                    <div class="uk-flex-1">
                        <h3 class="uk-card-title"> New Enrolments</h3>
                        <p class="uk-text-meta">Jan - Jun 2018</p>
                    </div>
                    <div>
                        <span class="sc-widget-addon md-color-green-600">+20%</span>
                    </div>
                </div>
            </div>
            <div class="sc-chart sc-chart-widget sc-js-chart-widget" data-chart-data="[120, 60, 400, 150, 390, 35]" data-chart-color="#E53935"></div>
        </div>
    </div>
    <div>
        <div class="uk-card sc-widget">
            <div class="sc-widget-content">
                <div class="uk-flex uk-flex-middle">
                    <div class="uk-flex-1">
                        <h3 class="uk-card-title">Follow-Ups</h3>
                        <p class="uk-text-meta">Last 7 days</p>
                    </div>
                    <div>
                        <span class="sc-widget-addon md-color-blue-grey-600"><i class="mdi mdi-comment-text-multiple-outline"></i></span>
                    </div>
                </div>
            </div>
            <div class="sc-chart sc-chart-widget sc-js-chart-widget" data-chart-data="[3, 16, 12, 0, 32, 18, 4]" data-chart-x="-,7,d" data-chart-color="#F9A825"></div>
        </div>
    </div>
    <div>
        <div class="uk-card sc-widget">
            <div class="sc-widget-content">
                <div class="uk-flex uk-flex-middle">
                    <div class="uk-flex-1">
                        <h3 class="uk-card-title">Registered Candidates</h3>
                        <p class="uk-text-meta">02.2018 - 07.2018</p>
                    </div>
                    <div>
                        <span class="sc-widget-addon md-color-red-600">+ $2230.00</span>
                    </div>
                </div>
            </div>
            <div class="sc-chart sc-chart-widget sc-js-chart-widget" data-chart-data="[12000, 26000, 10000, 15000, 12000, 50000]" data-chart-color="#03A9F4"></div>
        </div>
    </div>
    <div>
        <div class="uk-card sc-widget">
            <div class="sc-widget-content">
                <div class="uk-flex uk-flex-middle">
                    <div class="uk-flex-1">
                        <h3 class="uk-card-title">Expected Revenues</h3>
                        <p class="uk-text-meta">02.2018 - 07.2018</p>
                    </div>
                    <div>
                        <span class="sc-widget-addon md-color-blue-grey-600"><i class="mdi mdi-cart"></i></span>
                    </div>
                </div>
            </div>
            <div class="sc-chart sc-chart-widget sc-js-chart-widget" data-chart-data="[120, 40, 210, 360, 510, 242]" data-chart-color="#7CB342"></div>
        </div>
    </div>
</div>
<div data-uk-grid>
    <div class="uk-width-1-3@l">
        <div class="uk-child-width-1-1@l uk-child-width-1-2@m uk-child-width-1-2@s" data-uk-grid>
            <div>
                <div class="uk-card">
                    <div class="uk-card-header">
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-flex-1">
                                <h3 class="uk-card-title">Enquiry Type</h3>
                            </div>
                            <div class="sc-actions">
                                <a href="#" class="sc-actions-icon mdi mdi-close sc-js-card-close"></a>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body" dir="ltr">
                        <div class="sc-chart uk-flex uk-flex-center sc-js-traffic-sources sc-sequence-show sc-sequence-show-manual" style="animation-delay: 200ms;-webkit-animation-delay: 200ms"></div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card">
                    <div class="uk-card-header">
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-flex-1">
                                <h3 class="uk-card-title">Best Sellers</h3>
                            </div>
                            <div class="sc-actions">
                                <a href="#" class="sc-actions-icon mdi mdi-close sc-js-card-close"></a>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body" dir="ltr">
                        <div class="sc-chart uk-flex uk-flex-center sc-chart-labels sc-js-best-sellers sc-sequence-show sc-sequence-show-manual" style="animation-delay: 400ms;-webkit-animation-delay: 400ms"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-width-2-3@l">
        <div class="uk-card uk-margin">
            <div class="uk-card-header">
                <div class="uk-flex uk-flex-middle">
                    <div class="uk-flex-1">
                        <h3 class="uk-card-title uk-margin-remove-bottom"> Candidate Visits</h3>
                        <p class="uk-text-meta"><time datetime="2018-01-01">Jan 01, 2018</time> - <time datetime="2018-06-30">Jun 30, 2018</time></p>
                    </div>
                    <div class="sc-actions">
                        <a href="#" class="sc-actions-icon mdi mdi-refresh sc-js-card-reload"></a>
                        <a href="#" class="sc-actions-icon mdi mdi-fullscreen sc-js-card-fullscreen"></a>
                        <a href="#" class="sc-actions-icon mdi mdi-window-minimize sc-js-card-toggle"></a>
                    </div>
                </div>
            </div>
            <div class="sc-card-content">
                <div>
                    <div id="sc-js-map-visits" class="sc-vmap"></div>
                </div>
                <div class="uk-overflow-auto">
                    <table class="uk-table uk-table-divider uk-table-striped uk-table-hover uk-table-middle sc-js-map-table uk-margin-remove">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Country</th>
                                <th>Jan</th>
                                <th>Feb</th>
                                <th>Mar</th>
                                <th>Apr</th>
                                <th>May</th>
                                <th>Jun</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-region="br">
                                <td class="uk-table-shrink sc-padding-left"><span class="flag flag-br"></span></td>
                                <td><strong>Brasil</strong></td>
                                <td class="uk-text-nowrap">23 083</td>
                                <td class="uk-text-nowrap">37 376</td>
                                <td class="uk-text-nowrap">30 369</td>
                                <td class="uk-text-nowrap">17 113</td>
                                <td class="uk-text-nowrap">13 086</td>
                                <td class="uk-text-nowrap">23 202</td>
                            </tr>
                            <tr data-region="us">
                                <td class="uk-table-shrink sc-padding-left"><span class="flag flag-us"></span></td>
                                <td><strong>USA</strong></td>
                                <td class="uk-text-nowrap">20 194</td>
                                <td class="uk-text-nowrap">48 918</td>
                                <td class="uk-text-nowrap">46 894</td>
                                <td class="uk-text-nowrap">25 894</td>
                                <td class="uk-text-nowrap">32 838</td>
                                <td class="uk-text-nowrap">46 969</td>
                            </tr>
                            <tr data-region="pl">
                                <td class="uk-table-shrink sc-padding-left"><span class="flag flag-pl"></span></td>
                                <td><strong>Poland</strong></td>
                                <td class="uk-text-nowrap">7 840</td>
                                <td class="uk-text-nowrap">6 649</td>
                                <td class="uk-text-nowrap">7 681</td>
                                <td class="uk-text-nowrap">8 060</td>
                                <td class="uk-text-nowrap">7 642</td>
                                <td class="uk-text-nowrap">8 206</td>
                            </tr>
                            <tr data-region="au">
                                <td class="uk-table-shrink sc-padding-left"><span class="flag flag-au"></span></td>
                                <td><strong>Australia</strong></td>
                                <td class="uk-text-nowrap">17 491</td>
                                <td class="uk-text-nowrap">8 334</td>
                                <td class="uk-text-nowrap">5 411</td>
                                <td class="uk-text-nowrap">27 317</td>
                                <td class="uk-text-nowrap">17 830</td>
                                <td class="uk-text-nowrap">12 709</td>
                            </tr>
                            <tr data-region="cn">
                                <td class="uk-table-shrink sc-padding-left"><span class="flag flag-cn"></span></td>
                                <td><strong>China</strong></td>
                                <td class="uk-text-nowrap">49 365</td>
                                <td class="uk-text-nowrap">78 538</td>
                                <td class="uk-text-nowrap">92 283</td>
                                <td class="uk-text-nowrap">36 363</td>
                                <td class="uk-text-nowrap">48 549</td>
                                <td class="uk-text-nowrap">96 596</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-child-width-1-3@l uk-child-width-1-2@m uk-grid-match" data-uk-grid data-uk-height-match="target: > div > div > .uk-card-header > div">
    <div>
        <div class="uk-card">
            <div class="uk-card-header">
                <div class="uk-flex uk-flex-middle">
                    <div class="uk-flex-1">
                        <h3 class="uk-card-title"> To Do Task Board</h3>
                        <p class="uk-text-meta"></p>
                    </div>
                    <div class="sc-actions">
                        <a href="#" class="sc-actions-icon mdi mdi-window-minimize sc-js-card-toggle"></a>
                        <div class="sc-dropdown sc-dropdown-ico">
                            <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                            <div data-uk-dropdown="mode:click">
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li class="uk-nav-header">Header</li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#">Item</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sc-card-content">
                <div class="uk-card-body">
                    <ul class="uk-list uk-list-divider sc-js-checklist">
                        <li class="sc-list-group">
                            <div class="sc-list-addon">
                                <input type="checkbox" id="todo-item-1" data-sc-icheck>
                            </div>
                            <div class="sc-list-body">
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-flex-1">
                                        <label for="todo-item-1">Pay electricity bill <span>$248.00 (25/11/2018)</span></label>
                                    </div>
                                    <span class="uk-label md-bg-grey-600 uk-margin-small-left sc-flex-no-shrink">Other</span>
                                </div>
                            </div>
                        </li>
                        <li class="sc-list-group">
                            <div class="sc-list-addon">
                                <input type="checkbox" id="todo-item-2" data-sc-icheck>
                            </div>
                            <div class="sc-list-body">
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-flex uk-flex-middle uk-flex-1 uk-text-truncate">
                                        <i class="mdi mdi-airplane sc-icon-24 uk-margin-small-right"></i>
                                        <label for="todo-item-2">Book flight to Dublin</label>
                                    </div>
                                    <span class="uk-label md-bg-green-400 uk-margin-small-left sc-flex-no-shrink">Family</span>
                                </div>
                            </div>
                        </li>
                        <li class="sc-list-group">
                            <div class="sc-list-addon">
                                <input type="checkbox" id="todo-item-3" data-sc-icheck>
                            </div>
                            <div class="sc-list-body">
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-flex-1 uk-text-truncate">
                                        <label for="todo-item-3">Call <strong>Titus Murphy</strong><span>Short descriprtion&hellip;</span></label>
                                    </div>
                                    <span class="uk-label md-bg-blue-400 uk-margin-small-left sc-flex-no-shrink">Work</span>
                                </div>
                            </div>
                        </li>
                        <li class="sc-list-group">
                            <div class="sc-list-addon">
                                <input type="checkbox" id="todo-item-4" data-sc-icheck checked>
                            </div>
                            <div class="sc-list-body">
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-flex-1 uk-text-truncate">
                                        <label for="todo-item-4">Contact service center <span>15/09/2018</span></label>
                                    </div>
                                    <span class="uk-label md-bg-red-400 uk-margin-small-left sc-flex-no-shrink">Important</span>
                                </div>
                            </div>
                        </li>
                        <li class="sc-list-group">
                            <div class="sc-list-addon">
                                <input type="checkbox" id="todo-item-5" data-sc-icheck>
                            </div>
                            <div class="sc-list-body">
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-flex-1 uk-text-truncate">
                                        <label for="todo-item-5">Email team for updates <span>BCC: king08@gmail.com</span></label>
                                    </div>
                                    <span class="uk-badge md-bg-blue-400 uk-margin-small-left sc-flex-no-shrink">Work</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-card">
            <div class="uk-card-header">
                <div class="uk-flex uk-flex-middle">
                    <h3 class="uk-card-title">Enquiries</h3>
                </div>
            </div>
            <div class="uk-card-body">
                <div>
                    <h5 class="uk-margin-bottom">Received</h5>
                    <div class="sc-progress uk-margin-medium-top sc-progress-small">
                        <span class="sc-progress-label uk-text-center">100%</span>
                        <div class="sc-progress-bar md-bg-light-green-800" style="width: 100%"></div>
                    </div>
                </div>
                <hr>
                <div>
                    <h5 class="uk-margin-bottom">Replied</h5>
                    <div class="sc-progress uk-margin-medium-top sc-progress-small">
                        <span class="sc-progress-label"><span class="uk-text-center uk-display-inline-block" style="width: 64%">64%</span></span>
                        <div class="sc-progress-bar md-bg-amber-800" style="width: 64%"></div>
                    </div>
                </div>
                <hr>
                <div>
                    <h5 class="uk-margin-bottom">Not Responded</h5>
                    <div class="sc-progress uk-margin-medium-top sc-progress-small">
                        <span class="sc-progress-label"><span class="uk-text-center uk-display-inline-block" style="width: 37%">37%</span></span>
                        <div class="sc-progress-bar md-bg-red-800" style="width: 37%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-card">
            <div class="uk-card-header">
                <div class="uk-flex uk-flex-middle">
                    <div class="uk-flex-1">
                        <h3 class="uk-card-title">Sign-Up</h3>
                    </div>
                    <div class="sc-actions">
                        <div class="sc-dropdown">
                            <a href="#" class="sc-actions-icon mdi mdi-dots-vertical"></a>
                            <div data-uk-dropdown="mode:click">
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li class="uk-nav-header">Header</li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#">Item</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-card-body">
                <div class="uk-child-width-1-4@s uk-grid-divider uk-grid-small" data-uk-grid>
                    <div class="uk-text-center">
                        <span class="uk-text-medium md-color-blue-600">Jan-Mar</span>
                        <h4 class="uk-margin-mini-top">62</h4>
                    </div>
                    <div class="uk-text-center">
                        <span class="sc-color-secondary uk-text-medium"> Apr-June </span>
                        <h4 class="uk-margin-mini-top">482</h4>
                    </div>
                    <div class="uk-text-center">
                        <span class="sc-color-secondary uk-text-medium">jul-sep</span>
                        <h4 class="uk-margin-mini-top">1709</h4>
                    </div>
                    <div class="uk-text-center">
                        <span class="sc-color-secondary uk-text-medium"> Oct-Dec</span>
                        <h4 class="uk-margin-mini-top">1709</h4>
                    </div>
                </div>
                <hr>
                <div>
                    <span class="sc-color-secondary uk-text-medium">Summary</span>
                    <div class="sc-progress sc-progress-group uk-margin-medium-top">
                        <div class="sc-progress-bar md-bg-light-green-600 uk-text-center" style="width:65%">Completed</div>
                        <div class="sc-progress-bar md-bg-grey-600 uk-text-center" style="width:20%">Pending</div>
                        <div class="sc-progress-bar md-bg-red-600 uk-text-center" style="width:15%">Closed</div>
                    </div>
                </div>
                <hr>
                <div>
                    <span class="sc-color-secondary uk-text-medium">Quick Info</span>
                    <p class="uk-margin-remove-bottom uk-margin-small-top">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, tenetur...</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection