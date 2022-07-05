@extends('layouts.admin')
@section('content')
<form id="form" action="{{route('user.add')}}" method="post">

    @csrf
    <div class='col-md-10 ' style="margin-left:auto !important;margin-right:auto !important">
        <h3 class="" style="text-align:center">Add Users</h3>

    </div>
    <div class='uk-card col-md-10 ' style="margin-left:auto !important;margin-right:auto !important">
        <div class="uk-card-body sc-padding-medium">
            <fieldset class="uk-fieldset md-bg-grey-100 sc-padding">
                <div class="row">

                    <input id="Id" type="text" class="form-control modelView" value="" disabled hidden />


                    <div class="col-md-6">
                        <label> First Name</label>
                        <div class="form-group">
                            <input id="first_name" name="first_name" type="text" class="form-control modelView" value="" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label> Last Name</label>
                        <div class="form-group">
                            <input id="last_name" name="last_name" type="text" class="form-control modelView" value="" required />
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6">
                        <label>Email</label>
                        <div class="form-group">
                            <input id="email" name="email" type="text" class="form-control modelView" value="" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label>Phone</label>
                        <div class="form-group">
                            <input id="phone" name="phone" type="text" class="form-control modelView" value="" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label>Role</label>
                        <div class="form-group">
                            <select id="role" name="role" class="form-control " required>
                                <option value="Super Admin" role="1">Super Admin</option>
                                <option value="Admin" role="2">Admin</option>
                                <option value="Accountant" role="3">Accountant</option>
                                <option value="Co-Ordinator" role="4">Co-Ordinator</option>
                                <option value="Entry Level User" role="5">Entry Level User</option>
                            </select>
                        </div>
                    </div>
                    <input id="role_id" name="role_id" type="text" class="form-control" value="" hidden />

                    <div class="col-md-6">
                        <label>Password</label>
                        <div class="form-group">
                            <input id="password" name="password" type="text" class="form-control modelView" required />
                        </div>
                    </div>



                </div>

                <div class="float-right">
                    <button class="sc-button sc-button-success sc-js-button-wave-light waves-effect waves-button waves-light" type="submit">Submit</button>
                </div>
            </fieldset>
        </div>
    </div>
</form>
<script>
    $(document).ready(function() {
        $('.page-active').removeClass('sc-page-active')
        $('.page-Ma').addClass('sc-page-active')
        $('#role').on('change',function(){
            var role_id = $('option:selected', this).attr('role');
            $('#role_id').val(role_id);
        });
    });
</script>
@endsection