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
        <div class="uk-card">
            <div class="uk-card-body uk-height-small">
                <h6>change Date Format</h6>
            </div><br>
            <div class="sc-fab-card-wrapper uk-position-bottom-right">
                <button class="sc-fab md-bg-light-green-600 sc-fab-dark"><i class="mdi mdi-send"></i></button>
            </div>
        </div>
    </div>
</div>
@endsection