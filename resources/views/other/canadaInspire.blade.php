@extends('layouts.layoutss')

@section('content')
<style>
    textarea {
        text-align: justify;
    }

    .service_img {
        border: 1px solid #555;
        border-radius: 5%;
    }
</style>


<h6 style="text-decoration:underline;text-align:center">Canada Inspire provides Additional Services</h6>

<div class=" col-md-10" style="margin-left:auto !important;margin-right:auto;margin-top:3%">

    <div class="col-lg-12 col-md-12 col-12">


        <img class="service_img" src="{{asset('files/newcanada1.png')}}" alt="" width="100%">

    </div>
</div>

<script>
    $(document).ready(function() {
        $('.page-active').removeClass('sc-page-active')
        $('.page-Services').addClass('sc-page-active')
    });
</script>
@endsection