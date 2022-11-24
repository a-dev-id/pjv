@section('title', 'Page')
@section('page_active', 'active')

@push('js')
<script src="{{ asset('vendors/adminlte') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('vendors/adminlte') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('vendors/adminlte') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('vendors/adminlte') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('vendors/adminlte') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('vendors/adminlte') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('vendors/adminlte') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('vendors/adminlte') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('vendors/adminlte') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('vendors/adminlte') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('vendors/adminlte') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('vendors/adminlte') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="{{ asset('vendors/adminlte') }}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
    $(function() {
            bsCustomFileInput.init();
        });
</script>
<script>
    $(function() {
            $("#list").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#list_wrapper .col-md-6:eq(0)');
        });
</script>
<script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
    tinymce.init({
            selector: 'textarea#excerpt',
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
        });
</script>
<script>
    tinymce.init({
            selector: 'textarea#description',
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
        });
</script>
<script>
    tinymce.init({
            selector: 'textarea#metadescription',
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
        });
</script>
<script>
    setTimeout(() => {
            const box = document.getElementById('alert');
            box.style.display = 'none';
        }, 3000);
</script>
<script>
    $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
</script>
@endpush

@push('css')
<link rel="stylesheet" href="{{ asset('vendors/adminlte') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('vendors/adminlte') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('vendors/adminlte') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush

<x-app-layout>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">@yield('title')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    @if (session('message'))
                    <div class="alert alert-success alert-dismissible" id="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="far fa-times-circle text-white"></i></button>
                        <h5><i class="image fas fa-check"></i> Success!</h5>
                        {{ session('message') }}
                    </div>
                    @endif

                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold"><i class="fas fa-list"></i> List</h3>
                            <div class="card-tools">
                                <a href="{{ route('page-list.create') }}" class="btn btn-success font-weight-bold"><i class="fas fa-plus"></i> New
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="list" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pages as $data)
                                    <tr>
                                        <td>{{ $data->title }}</td>
                                        <td>{!! Str::limit($data->description, 100) !!}</td>
                                        <td>
                                            @if ($data->status == '1')
                                            <span class="badge badge-success"><i class="fas fa-check-circle"></i> Published</span>
                                            @else
                                            <span class="badge badge-secondary"><i class="fas fa-minus-circle"></i> Draft</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('page-list.edit', [$data->id]) }}" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                            <span data-toggle="tooltip" data-placement="top" title="Delete"><button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal_delete_{{ $data->id }}" data-placement="top" title="Delete"><i class="fas fa-trash"></i></button></span>

                                            {{-- delete modal --}}
                                            <div class="modal fade" id="modal_delete_{{ $data->id }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-danger">
                                                            <h4 class="modal-title"><i class="fas fa-exclamation-triangle"></i> Warning!</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body text-left">
                                                            Are you sure want to delete this <strong>"{{ $data->title }}"</strong> ?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-ban"></i> Cancel</button>
                                                            <form method="POST" action="{{ route('page-list.destroy', [$data->id]) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>