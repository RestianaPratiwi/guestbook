@extends('layouts.app')

@section('content')
    <div class="py-4">
            <h3 class="fw-bold mb-2 pb-2 border-bottom">Detail Guest</h3>

            <a href="{{ route('admin.guests.index') }}" class="btn btn-sm btn-secondary mb-2">Back</a>

            <table class="table table-striped table-bordered">
              <tr>
                <th>ID</th>
                 <td><Strong>#{{ $guest->id }}</strong></td>
            </tr>
           
            <tr>
                <td>Guest Name</td>
                <td>{{ $guest->fullname }}</td>
            </tr>

             <tr>
                <td>From</td>
                <td>{{ $guest->from }}</td>
            </tr>

             <tr>
                <td>Phone Number</td>
                <td>{{ $guest->phonenumber }}</td>
            </tr>

             <tr>
                <td>Email</td>
                <td>{{ $guest->email }}</td>
            </tr>

             <tr>
                <td>Note</td>
                <td>{{ $guest->note }}</td>
            </tr>
           
            
            <tr>
                <td>Created At</td>
                <td>{{ \Carbon\Carbon::parse($guest->created_at)->isoFormat('DD MMM Y HH:mm') }}</td>
            </tr>
            <tr>
                <td>Update At</td>
                <td>{{ \Carbon\Carbon::parse($guest->update_at)->isoFormat('DD MMM Y HH:mm') }}</td>
            </tr>
        </table>
    </div>
@endsection