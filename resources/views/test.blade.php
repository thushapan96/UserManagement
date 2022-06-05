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
                            <img src="{{url('files/'.$row->img)}}" class="sc-avatar sc-border" alt="xerdman" />
                            <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                                {{$row->company_name}}
                            </p>
                            <p class="uk-margin-remove sc-color-secondary uk-text-medium">{{$row->company_name}}</p>
                        </div>
                    </div>
                    <div class="uk-width-2-3@l">
                        <div class="sc-padding-medium">
                            <ul class="uk-list uk-list-divider">
                                <li class="sc-list-group">
                                    <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                    <div class="sc-list-body">
                                        <p class="uk-margin-remove sc-text-semibold">{{$row->phone}}</p>
                                    </div>
                                </li>
                                <li class="sc-list-group">
                                    <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                    <div class="sc-list-body">
                                        <p class="uk-margin-remove">{{$row->email}}</p>
                                    </div>
                                </li>
                                <li class="sc-list-group">
                                    <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                    <div class="sc-list-body">
                                        <p class="uk-margin-remove uk-text-wrap">{{$row->streat}},{{$row->city}},{{$row->region}},{{$row->country}}</p>
                                    </div>
                                </li>
                                <li class="sc-list-group">
                                    <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                    <div class="sc-list-body">
                                        <p class="uk-margin-remove uk-text-wrap">{{$row->offering_service}}</p>
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