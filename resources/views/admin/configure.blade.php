@extends('layouts.admin')
@section('content')

<div class="uk-child-width-1-3@l uk-grid uk-grid-stack" data-uk-grid="">
    <div class="uk-first-column">
        <form action="{{route('currency.change')}}" method="post">
            @csrf
            <div class="uk-card">
                <div class="uk-card-body uk-height-small">
                    <h6>change currency symbol </h6>
                    <input class="form-control" type="text" value="{{$currency->value}}" name="currency">
                </div><br>
                <div class="sc-fab-card-wrapper uk-position-bottom-right">
                    <button type="submit" class="sc-fab md-bg-light-green-600 sc-fab-dark"><i class="mdi mdi-send"></i></button>
                </div>
            </div>
        </form>
    </div>
    <div>
        <form action="{{route('date.change')}}" method="post">
            @csrf
            <div class="uk-card">
                <div class="uk-card-body uk-height-small">
                    <h6>change Date Format</h6>

                    <select name="date" class="form-control">
                        <option value="1" {{$dateConfigure->value == '1' ? 'selected':''}}>YY/MM/DD</option>
                        <option value="2" {{$dateConfigure->value == '2' ? 'selected':''}}>DD/MM/YY</option>
                        <option value="3" {{$dateConfigure->value == '3' ? 'selected':''}}>MM/DD/YY</option>
                    </select>
                </div><br>

                <div class="sc-fab-card-wrapper uk-position-bottom-right">
                    <button type="submit" class="sc-fab md-bg-light-green-600 sc-fab-dark"><i class="mdi mdi-send"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {

        $('.page-active').removeClass('sc-page-active')
        $('.page-Configuration').addClass('sc-page-active')

       
    });
</script>
@endsection