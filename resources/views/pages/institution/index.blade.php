@extends('layouts.app')

@section('content')
<div class="page-heading">
    <div class="page-title mb-3">
        <h3>
            <span class="bi bi-building"></span>
            Institution
        </h3>
    </div>

    <a href="{{route('admin.institution.create') }}"
    class="btn btn-primary mb-3">
    <span class="bi bi-plus-circle"></span>
    Create new
    </a>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table id="datatable"class="table table-striped">
                    <thead>
                        <tr>
                            <th>Institution Name</th>
                            <th>Actions</th>
                        <tr>
                    </thead>
                    <tbody>
                        @foreach ($institutions as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <a href="{{ route('admin.institution.show', $item->id)}}" class="btn btn-outline-secondary btn-sm me-1">
                                        <span class="bi bi-eye"></span>
                                        Show
                                    </a>
                                    <a href="{{ route('admin.institution.edit', $item->id)}}" class="btn btn-secondary btn-sm me-1">
                                        <span class="bi bi-pencil"></span>
                                        Edit
                                    </a>
                                      <a href="#" class="btn btn-sm btn-danger" onclick="handleDestroy(`{{ route('admin.institution.destroy', $item->id) }}`)">
                                      <span class="bi bi-trash"></span>
                                      Delete
                                      </a>
                                     
                                    
                                </td>
                            </tr>
                        @endforeach


                    </tbody>


                </table>
            </div>
        </div>
    </section>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('/vendors/simple-datatables/style.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('/vendors/simple-datatables/simple-datatables.js') }}"></script>
<script>
    // Simple Datatable
    let datatable = document.querySelector('#datatable');
    new simpleDatatables.DataTable(datatable);
</script>
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <script type="text/javascript">
    function handleDestroy(url) {
        swal({
            tittle: "Apakah anda yakin?",
            text: "Setelah dihapus, anda tidak akan dapat mengembalikannya",
            icon: "warning",
            buttons: ["Batal", "Ya, Hapus!"],
            dangerMode: true,
        }).then((confrimed) => {
            if (confrimed) {
                $('#form-delete').attr('action', url);
                $('#form-delete').submit();
            }
        });
        }
    </script>
@endpush
