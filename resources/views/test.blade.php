<li>
    <input id="type" value="${row.type}" hidden>
    <div class="uk-card uk-card-hover " style="height:100%">
        <div class="uk-card-body sc-padding-remove">
            <div class="uk-grid-divider uk-grid-collapse" data-uk-grid>
                <div class="uk-width-1-3@l uk-flex uk-flex-middle uk-flex-center uk-position-relative md-bg-light-green-50">

                    <div class="sc-padding-medium uk-text-center">
                        <img id="img-${index}" src="${baseUrlAsset}/${row.img}" class="sc-avatar sc-border" alt="xerdman" />

                        <p class="sc-text-semibold uk-margin uk-margin-remove-bottom sc-js-contact-name">
                            ${row.name}
                        </p>
                        <p class="uk-margin-remove sc-color-secondary uk-text-medium">${row.registration_number}</p>
                    </div>
                </div>

                <div class="uk-width-2-3@l ">
                    <div class="sc-padding-medium">
                        <ul class="uk-list uk-list-divider">
                            <li class="sc-list-group">
                                <div class="sc-list-addon"><i class="mdi mdi-phone"></i></div>
                                <div class="sc-list-body">
                                    <p class="uk-margin-remove sc-text-semibold">${row.phone}</p>
                                </div>
                            </li>
                            <li class="sc-list-group">
                                <div class="sc-list-addon"><i class="mdi mdi-email"></i></div>
                                <div class="sc-list-body">
                                    <p class="uk-margin-remove">${row.email}</p>
                                </div>
                            </li>
                            <li class="sc-list-group">
                                <div class="sc-list-addon"> <i class="fas fa-cloud"></i></div>
                                <div class="sc-list-body">
                                    <p class="uk-margin-remove uk-text-wrap">${row.website_address}</p>
                                </div>
                            </li>
                            <li class="sc-list-group">
                                <div class="sc-list-addon"><i class="mdi mdi-office-building"></i></div>
                                <div class="sc-list-body">
                                    <p class="uk-margin-remove uk-text-wrap">${row.city} ${row.region} ${row.country}</p>
                                </div>
                            </li>

                            <li class="sc-list-group">
                                <div class="sc-list-addon"><i class="mdi mdi-information-outline"></i></div>
                                <div class="sc-list-body">
                                    <p class="uk-margin-remove uk-text-wrap" id="services-${index}">

                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>