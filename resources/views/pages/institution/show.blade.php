@extends('layouts.app')

@section('content')
    <div class="py-4">
            <h3 class="fw-bold mb-2 pb-2 border-bottom">Detail Institution</h3>

            <a href="{{ route('admin.institution.index') }}" class="btn btn-sm btn-secondary mb-2">Back</a>

            <table class="table table-striped table-bordered">
              <tr>
                <th>ID</th>
                 <td><Strong>#{{ $institution->id }}</strong></td>
            </tr>
           
            <tr>
                <td>Name</td>
                <td>{{ $institution->name }}</td>
            </tr>
           
            
            <tr>
                <td>Created At</td>
                <td>{{ \Carbon\Carbon::parse($institution->created_at)->isoFormat('DD MMM Y HH:mm') }}</td>
            </tr>
            <tr>
                <td>Update At</td>
                <td>{{ \Carbon\Carbon::parse($institution->update_at)->isoFormat('DD MMM Y HH:mm') }}</td>
            </tr>
        </table>
    </div>
@endsection