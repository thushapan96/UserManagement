@extends('layouts.admin')

@section('content')
<div id="modal-close-Price" data-uk-modal>
    <div class="uk-modal-dialog uk-modal-body" style="width:700px">
        <button class="uk-modal-close-default" type="button" data-uk-close></button>
        <form action="{{route('institution.price.post')}}" method="post">
            @csrf
            <div class="uk-overflow-auto">
                <table class="uk-table uk-table-hover uk-table-divider">

                    <thead>
                        <tr>
                            <th class="uk-text-nowrap" style="color: white !important; background-color: #343a40 !important;">Package Name</th>
                            <th class="uk-text-nowrap" style="color: white !important; background-color: #343a40 !important;">Duration</th>
                            <th class="uk-text-nowrap" style="color: white !important; background-color: #343a40 !important;">Price</th>
                            <!-- <th class="uk-text-nowrap">Change Price</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($membershipCandidate as $row)
                        <tr>
                            <td>{{$row->type == 'Stanadard' ? 'Standard':$row->type}}</td><input type="text" value="{{$row->type}}" name="type[]" hidden>
                            <td>{{$row->duration}} Months</td><input type="text" value="{{$row->duration}}" name="duration[]" hidden>
                            <td> <input type="number" id="price" class="form-control" name="price[]" min="0" value="{{$row->price}}">
                            </td>
                            <!-- <td>
                            <button class="sc-button sc-button-mini" data-price="{{$row->price}}" data-type="{{$row->type}}" data-duration="{{$row->duration}}" data-uk-toggle="target: #modal-close-Price">Change Price</button>
                        </td> -->
                        </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>

            <p class="uk-text-right">
                <button class="sc-button" type="submit">Confirm</button>
            </p>
        </form>
    </div>
</div>

<h6 style="text-align:center;color:#3f6791">Institution Package Price</h6>
<div class="col-md-8 uk-card" style="margin-left:auto !important;margin-right:auto !important">
    <div class="uk-card-body">
        <div class="uk-overflow-auto">
            <table class="uk-table uk-table-hover uk-table-divider">

                <thead>
                    <tr>
                        <th class="uk-text-nowrap" style="color: white !important; background-color: #343a40 !important;">Package Name</th>
                        <th class="uk-text-nowrap" style="color: white !important; background-color: #343a40 !important;">Duration</th>
                        <th class="uk-text-nowrap" style="color: white !important; background-color: #343a40 !important;">Price</th>
                        <!-- <th class="uk-text-nowrap">Change Price</th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($membershipCandidate as $row)
                    <tr>
                        <td>{{$row->type == 'Stanadard' ? 'Standard':$row->type}}</td>
                        <td>{{$row->duration}} Months</td>
                        <td>{{$row->price}} {{$currencyPrice}}</td>
                        <!-- <td>
                            <button class="sc-button sc-button-mini" data-price="{{$row->price}}" data-type="{{$row->type}}" data-duration="{{$row->duration}}" data-uk-toggle="target: #modal-close-Price">Change Price</button>
                        </td> -->
                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>
</div><br>
<div class="col-md-8 " style="margin-left:auto !important;margin-right:auto !important">
    <button class="sc-button sc-button" data-price="" data-type="" data-duration="" data-uk-toggle="target: #modal-close-Price">Change Price</button>
</div>



<script>
    $(document).ready(function() {
        $('.page-active').removeClass('sc-page-active')
        $('.page-Packages-Institution ').addClass('sc-page-active')

        $('.sc-button-mini').on('click', function() {
            var price = $(this).attr('data-price');
            var type = $(this).attr('data-type');
            var duration = $(this).attr('data-duration');
            $('#price').val(price);
            $('#type').val(type);
            $('#duration').val(duration);
        });
    });
</script>
@endsection