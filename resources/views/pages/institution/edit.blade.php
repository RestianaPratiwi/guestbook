@extends('layouts.app')

@section('content')
    <div class="py4">
         <h3 class="fw-bold mb-2 pb-2 border-bottom">Change Institution</h3>

         <a href="{{ route('admin.institution.index') }}" class="btn btn-sm btn-secondary mb-2">Back</a>

         <form action="{{ route('admin.institution.update', $institution->id) }}" method="POST">
            @csrf
            @method('PUT')
          
            <div class="form-group mb-2">
                <label for="name " class="form-label">Name</label>
                <input type="text" name="name" id="name" value="{{ $institution->name }}"class="form-control" />
            </div>   


            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('admin.institution.index')}}" class="btn btn-secondary">Cancel</a>
         </form>   
    </div>
@endsection