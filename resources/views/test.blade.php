<fieldset class="uk-fieldset md-bg-grey-300 sc-padding">
    <h6 style="text-decoration:underline;">Personal Information</h6>

    <div class="row custom-box">
        <div class="col-md-5">
            <strong class="ps">Name</strong>
        </div>

        <div class="col-md-7">
            <p class="ps">
                {{$institutions->name}}
            </p>
        </div>
    </div>

    <div class="row custom-box">
        <div class="col-md-5">
            <strong class="ps">Contact Number</strong>
        </div>

        <div class="col-md-7">
            <p class="ps"> {{$institutions->phone}}
            </p>
        </div>
    </div>

    <div class="row custom-box">
        <div class="col-md-5">
            <strong class="ps">Admission Cell - Contact Person</strong>
        </div>

        <div class="col-md-7">
            <p class="ps"> {{$institutions->admission_phone}}
            </p>
        </div>
    </div>
    <div class="row custom-box">
        <div class="col-md-5">
            <strong class="ps">Correspondence Email</strong>
        </div>

        <div class="col-md-7">
            <p class="ps"> {{$institutions->email}}
            </p>
        </div>
    </div>
    <div class="row custom-box">
        <div class="col-md-5">
            <strong class="ps">Dean Email ID</strong>
        </div>

        <div class="col-md-7">
            <p class="ps"> {{$institutions->dean_email}}
            </p>
        </div>
    </div>
    <div class="row custom-box">
        <div class="col-md-5">
            <strong class="ps">URL Website Address</strong>
        </div>

        <div class="col-md-7">
            <p class="ps">{{$institutions->website_address}}
            </p>
        </div>
    </div>
</fieldset><br>
<fieldset class="uk-fieldset md-bg-grey-300 sc-padding">
    <h6 style="text-decoration:underline;">Address</h6>

    <div class="row custom-box">
        <div class="col-md-5">
            <strong class="ps">postal Code</strong>
        </div>

        <div class="col-md-7">
            <p class="ps">
                {{$institutions->postal_code}}
            </p>
        </div>
    </div>
    <div class="row custom-box">
        <div class="col-md-5">
            <strong class="ps">Street</strong>
        </div>

        <div class="col-md-7">
            <p class="ps">
                {{$institutions->streat}}
            </p>
        </div>
    </div>
    <div class="row custom-box">
        <div class="col-md-5">
            <strong class="ps">City</strong>
        </div>

        <div class="col-md-7">
            <p class="ps">{{$institutions->city}}
            </p>
        </div>
    </div>
    <div class="row custom-box">
        <div class="col-md-5">
            <strong class="ps">province</strong>
        </div>

        <div class="col-md-7">
            <p class="ps">
                {{$institutions->region}}
            </p>
        </div>
    </div>
    <div class="row custom-box">
        <div class="col-md-5">
            <strong class="ps">Country</strong>
        </div>

        <div class="col-md-7">
            <p class="ps">{{$institutions->country}}
            </p>
        </div>
    </div>
    <div class="row custom-box">
        <div class="col-md-5">
            <strong class="ps">Registered Office - Locations</strong>
        </div>

        <div class="col-md-7">
            <p class="ps">{{$institutions->registrar_office_area}}
            </p>
        </div>
    </div>
</fieldset><br>