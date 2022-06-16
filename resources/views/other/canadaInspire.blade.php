@extends('layouts.layoutss')

@section('content')
<style>
    textarea{
        text-align: justify;
    }
</style>


<h6 style="text-decoration:underline;text-align:center">Canada Inspire provides Additional Services</h6>

<div class="uk-card col-md-10" style="margin-left:auto !important;margin-right:auto;margin-top:3%">
    <div class="uk-card-body sc-padding-medium">
        <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
            <div class="row custom-box">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="form-group">

                        <textarea style="width:100%;background:white !important; box-shadow: none ;" rows="12" id="field_cutjx" data-invmsg="Canada Inspire provides Additional Services :- is invalid" aria-invalid="false" spellcheck="false">
we  have a Team of professionals who are having expert in Application Development, Solutions and Services. 
          1. Is your Company looking for Website Design/Re Design or Development to give professional look
             and exposure for International community?
          2. Are you looking for development of Online Appointments and Payment Gateway or Integration 
             on your Website?
          3. Are you looking for Mobile Application Development to ease your Prospects and Customers?
          4. Are you interested to develop Enquiry form, Query, Survey or feedback form to improve and 
             enhance your services?
          5. Are you looking for CRM - Customer Relation Management Solutions to maintain and manage 
             your company marketing activities,  follow-up, and efficiency to generate good revenues
             for your company and always ahead with your competitors?</textarea>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.page-active').removeClass('sc-page-active')
        $('.page-Services').addClass('sc-page-active')
    });
</script>
@endsection