@extends('layouts.layoutss')

@section('content')
<h6 style="text-decoration:underline;text-align:center">Feedback of Canada Inspire</h6>

<div class="uk-card col-md-10" style="margin-left:auto !important;margin-right:auto;margin-top:3%">
    <div class="uk-card-body sc-padding-medium">
        <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
            <div class="row custom-box">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="form-group">
                       
                        <textarea style="width:100%;background-color:white !important; box-shadow: none ;" rows="9" name="Comment" value="{{$feedback}}" disabled>{{$feedback}}</textarea>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>
@endsection