<table class="table table-hover">
    <tr>
        <th>Name</th>
        <td>{{$institutions->name}}</td>
        <th>Street</th>
        <td>{{$institutions->streat}}
    </tr>
    <tr>
        <th>City</th>
        <td> {{$institutions->city}}</td>
        <th>Province</th>
        <td>{{$institutions->region}}
        </td>
    </tr>
    <tr>
        <th>Country</th>
        <td> {{$institutions->country}}</td>
        <th>Postal Code</th>
        <td> {{$institutions->postal_code}}</td>
    </tr>
    <tr>
        <th>Contact Number</th>
        <td>{{$institutions->phone}}</td>
        <th>Dean Email ID</th>
        <td>{{$institutions->dean_email}}
        </td>
    </tr>
    <tr>
        <th>URL Website Address</th>
        <td> {{$institutions->website_address}}</td>
        <th>Correspondence Email</th>
        <td>{{$institutions->email}}
        </td>
    </tr>
    <tr>

        <th>Admission Cell - Contact Person</th>
        <td>{{$institutions->admission_phone}}</td>
        <th>Registered Office - Location</th>
        <td>{{$institutions->registrar_office_area}}
        </td>
    </tr>

</table>