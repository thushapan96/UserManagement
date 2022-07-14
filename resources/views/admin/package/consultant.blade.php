@extends('layouts.admin')

@section('content')
<div id="modal-close-Price" data-uk-modal>
    <div class="uk-modal-dialog uk-modal-body" style="width:300px !important">
        <button class="uk-modal-close-default" type="button" data-uk-close></button>
        <form action="{{route('provider.price.post')}}" method="post">
            @csrf
            <h6> Change pricee</h6>
            <input type="text" id="type" class="form-control" name="type" hidden>
            <input type="text" id="duration" class="form-control" name="duration" hidden>

            <input type="number" id="price" class="form-control" name="price" min="0">
            <p class="uk-text-center">
                <button class="sc-button" type="submit">Confirm</button>
            </p>
        </form>
    </div>
</div>

<h6 style="text-align:center">Packages</h6>
<div class="col-md-8 uk-card" style="margin-left:auto !important;margin-right:auto !important">
    <div class="uk-card-body">
        <div class="uk-overflow-auto">
            <table class="uk-table uk-table-hover uk-table-divider">

                <thead>
                    <tr>
                        <th class="uk-text-nowrap">Package Name</th>
                        <th class="uk-text-nowrap">Duration</th>
                        <th class="uk-text-nowrap">Price</th>
                        <th class="uk-text-nowrap">Change Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($membershipCandidate as $row)
                    <tr>
                        <td>{{$row->type == 'Stanadard' ? 'Standard':$row->type}}</td>
                        <td>{{$row->duration}} Months</td>
                        <td>{{$row->price}} {{$currencyPrice}}</td>
                        <td>
                            <button class="sc-button sc-button-mini" data-price="{{$row->price}}" data-type="{{$row->type}}" data-duration="{{$row->duration}}" data-uk-toggle="target: #modal-close-Price">Change Price</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
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