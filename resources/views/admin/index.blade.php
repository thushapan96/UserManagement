@extends('layouts.admin')
@section('content')

<style>
    .rwd-table {
        margin: auto;
        min-width: 300px;
        max-width: 100%;
        border-collapse: collapse;
    }

    .custom-txt-right {
        text-align: right !important;
    }

    .rwd-table tr:first-child {
        border-top: none;
        color: #495057;

    }

    .rwd-table td {
        border-top: 0 !important;

    }

    .rwd-table th {
        color: #3f6791;
        display: none;
    }

    .rwd-table td {
        display: block;
    }

    .rwd-table td:first-child {
        margin-top: .5em;
    }

    .rwd-table td:last-child {
        margin-bottom: .5em;
    }

    .rwd-table td:before {
        content: attr(data-th) "";
        font-weight: bold;
        width: 120px;
        display: inline-block;
        color: #495057;
    }


    .rwd-table th,
    .rwd-table td {
        text-align: left;
    }

    .rwd-table {
        color: #333;
        border-radius: .4em;
        overflow: hidden;
    }

    .rwd-table tr {
        border-color: #bfbfbf;
    }

    .rwd-table th,
    .rwd-table td {
        padding: .5em 1em;
    }

    @media screen and (max-width: 601px) {
        .rwd-table tr:nth-child(2) {
            border-top: none;
        }

        .rwd-table td:nth-of-type(1) {
            background-color: #495057;
            color: white;
            display: grid;
        }

        .rwd-table td:nth-of-type(1):before {
            content: "" !important;
        }

        .custom-txt-right {
            text-align: left !important;
        }



    }

    @media screen and (min-width: 600px) {
        .rwd-table tr:hover:not(:first-child) {
            background-color: #d8e7f3;
        }

        .rwd-table td:before {
            display: none;
        }

        .rwd-table th,
        .rwd-table td {
            display: table-cell;
            padding: .25em .5em;
        }

        .rwd-table th:first-child,
        .rwd-table td:first-child {
            padding-left: 0;
        }

        .rwd-table th:last-child,
        .rwd-table td:last-child {
            padding-right: 0;
        }

        .rwd-table th,
        .rwd-table td {
            padding: 1em !important;
        }


    }
</style>

<div class="row">
    <div class="col-sm-12">
        <a href="{{route('user.create')}}"> <button type="button" class="uk-button uk-button-primary " data_id=""> <i class="fas fa-user mr-2"></i> Add New User</button></a>
    </div>

</div>
<br>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">

                <table class="uk-table uk-table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Password</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody data-ic-target="closest tr" class="sc-ajax-slide-right uk-table-middle">
                        @foreach($users as $user)
                        <tr id="{{$user->id}}">
                            <td data-th="First Name">{{$user->id}}</td>
                            <td data-th="First Name">{{$user->first_name}}</td>
                            <td data-th="Role">{{$user->role}}</td>
                            <td data-th="Email">{{$user->email}}</td>
                            <td data-th="Phone">{{$user->phone}}</td>
                            <td data-th="Last Name">{{$user->password}}</td>
                            <td data-th="Actions">
                                <a href="{{route('user.edit',['id' => $user->id])}}"> <button type="button" class="add-btn uk-button uk-button-primary " data_id="{{$user->id}}">Edit</button></a>
                                <a  class="delete" data-id="{{$user->id}}">
                                    <button type="button" class="uk-button uk-button-danger" data-id="{{$user->id}}">Delete</button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.page-active').removeClass('sc-page-active')
        $('.page-Ma').addClass('sc-page-active')
        $('.delete').click(function() {
            if (confirm("Are You Sure!") == true) {
                var id = $(this).attr('data-id')
                window.location = '{{ url("/user/delete/" ) }}' +'/'+ id;
            } else {
            
            }


        });
    });
</script>

@endsection