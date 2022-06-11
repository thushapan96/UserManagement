<div class="row custom-box">

    <div class="col-lg-3 col-md-3 col-12">
        <div class="form-group">
            <label>Postal Code *
            </label>

            <input class="form-control " type="text" name="postal_code" value="{{$institutions->postal_code}}">
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-12">
        <div class="form-group">
            <label>Email address for correspondence *
            </label>
            <input class="form-control" type="email" id="email" name="email" value="{{$institutions->email}}">
            <div id="append_email" class="mail" style="color:#f30404"></div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-12">
        <div class="form-group">
            <label>URL - Website Address *
            </label>

            <input class="form-control " type="text" name="website_address" value="{{$institutions->website_address}}">
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-12">
        <div class="form-group">
            <label>Contact Number *
            </label>

            <input class="form-control " type="number" name="phone" value="{{$institutions->phone}}">
        </div>
    </div>


</div>
<hr>
<div class="row custom-box">

    <div class="col-lg-4 col-md-4 col-12">
        <div class="form-group">
            <label>Admission Cell - Contact Person *

            </label>
            <input class="form-control " type="text" name="admission_phone" value="{{$institutions->admission_phone}}">
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-12">
        <div class="form-group">
            <label>Email address of Admission Cell *

            </label>
            <input class="form-control " type="email" id="admission_email" name="admission_email" value="{{$institutions->admission_email}}">
            <div id="append_admission_email" class="mail" style="color:tomato"></div>

        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-12">
        <div class="form-group">
            <label>Dean - Contact Name *

            </label>

            <input class="form-control " type="text" name="dean_name" value="{{$institutions->dean_name}}">
        </div>
    </div>


</div>

<div class="row custom-box">
    <div class="col-lg-5 col-md-5 col-12">
        <div class="form-group">
            <label>Dean Email ID *
            </label>

            <input class="form-control " id="dean_email" type="email" name="dean_email" value="{{$institutions->dean_email}}">
            <div id="append_dean_email" class="mail" style="color:tomato"></div>

        </div>
    </div>
    <div class="col-lg-5 col-md-5 col-12">
        <div class="form-group">
            <label>Dean Contact Number *
            </label>
            <input class="form-control " type="number" name="dean_phone" value="{{$institutions->dean_phone}}">
        </div>
    </div>
    @if(request()->query('service') == 'School')
    <div class="col-lg-2 col-md-2 col-12">
        <div class="form-group">
            <label>Medium
            </label>

            <select class="form-control " name="medium">
                <option value="Domestic" {{ $institutions->medium == 'English'? 'selected':'' }}>English</option>
                <option value="International" {{ $institutions->medium == 'French'? 'selected':'' }}>French</option>
            </select>
        </div>
    </div>
    @endif
</div>