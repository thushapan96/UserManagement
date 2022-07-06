@extends('layouts.admin')
@section('content')
<h6 style="text-align:center">privilege Settings </h6>
<div class='uk-card col-md-10 ' style="margin-left:auto !important;margin-right:auto !important">
    <div class="uk-card-body sc-padding-medium">
        <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
            <form id="form" action="{{route('add.privillage')}}" method="post">
                @csrf
                <input type="text" name="roleType" value="{{request()->query('roleType')}}" hidden>
                <div class="col-lg-6 col-md-6 col-12">
                    <label>Select Role Type</label>
                    <select id="role" name="role" class="form-control" required>
                        <!-- <option value="1" {{request()->query('roleType') == "1" ? 'selected':''}}>Super Admin</option> -->
                        <option value="2" {{request()->query('roleType') == "2" ? 'selected':''}}>Admin</option>
                        <option value="3" {{request()->query('roleType') == "3" ? 'selected':''}}>Accountant</option>
                        <option value="4" {{request()->query('roleType') == "4" ? 'selected':''}}>Co-Ordinator</option>
                        <option value="5" {{request()->query('roleType') == "5" ? 'selected':''}}>Entry Level User</option>
                    </select><br>
                </div>
                @php
                $roleType = request()->query('roleType');
                if($roleType){
                $ArraypermissonId = \App\Models\RolePermisson::where(['role_id' => $roleType])->get()->pluck('permisson_id');
                }else{
                $ArraypermissonId = \App\Models\RolePermisson::where(['role_id' => 2])->get()->pluck('permisson_id');
                }
                @endphp
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="form-group">
                        <h6>Access</h6>
                        @foreach($permissons as $row)
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="checkbox-{{$loop->iteration}}" name="access[]" value="{{$row->id}}" {{ $ArraypermissonId->contains($row->id) ? ' checked' : '' }}>
                            <label class="custom-control-label" for="checkbox-{{$loop->iteration}}">{{$row->name}}</label><br>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="float-right">
                    <button type="submit" id="submit" class="client-btn uk-button uk-button-primary">Save </button>
                </div>
            </form>
        </fieldset>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#role').on('change', function() {
            var roleType = $('#role').val();
            window.location.assign('/privillage/setup?roleType=' + roleType);
        });
    });
</script>
@endsection