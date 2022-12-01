@section('title', 'Villa')
@section('villa_active', 'active')

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
            selector: 'textarea#description',
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
                        <li class="breadcrumb-item"><a href="{{ route('villa-list.index') }}">Home</a></li>
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
                        <h5><i class="icon fas fa-check"></i> Success!</h5>
                        {{ session('message') }}
                    </div>
                    @endif

                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold"><i class="fas fa-list"></i> List</h3>
                            <div class="card-tools">
                                <a href="{{ route('villa-list.create') }}" class="btn btn-success font-weight-bold"><i class="fas fa-plus"></i> New
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="list" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($villas as $data)
                                    <tr>
                                        <td>{{ $data->title }}</td>
                                        <td><img src="{{ asset($data->banner_image) }}" style="width: 200px"></td>
                                        <td>{!! Str::limit($data->description, 100) !!}</td>
                                        <td>
                                            @if ($data->status == '1')
                                            <span class="badge badge-success"><i class="fas fa-check-circle"></i> Published</span>
                                            @else
                                            <span class="badge badge-secondary"><i class="fas fa-minus-circle"></i> Draft</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('villa-image.show', [$data->id]) }}" class="btn btn-sm btn-secondary" data-toggle="tooltip" data-placement="top" title="Villa Images"><i class="fas fa-images"></i></a>
                                            <a href="{{ route('villa-feature.show', [$data->id]) }}" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Villa Feature"><i class="fas fa-star"></i></a>
                                            <a href="{{ route('villa-list.edit', [$data->id]) }}" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
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
                                                            <form method="POST" action="{{ route('villa-list.destroy', [$data->id]) }}">
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
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <form method="POST" action="{{ route('villa-setting.update', [$setting->id]) }}" enctype="multipart/form-data" class="col-lg-8">
                    @method('PUT')
                    @csrf
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold"><i class="fas fa-cogs"></i> Setting</h3>
                            <div class="card-tools">
                                <button class="btn btn-primary font-weight-bold"><i class="fas fa-save"></i> Save</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" placeholder="Type something" name="title" value="{{ $setting->title }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Subtitle</label>
                                        <input type="text" class="form-control" placeholder="Type something" name="subtitle" value="{{ $setting->subtitle }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Excerpt</label>
                                        <textarea id="excerpt" name="excerpt" class="form-control">{{ $setting->excerpt }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea id="description" name="description">{{ $setting->description }}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="banner-image">Banner Image</label>
                                        <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="banner-image" name="banner_image">
                                                <label class="custom-file-label" for="banner-image">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="d-block">Current Image</label>
                                            <img src="{{ asset($setting->banner_image) }}" style="width: 100%">
                                            <input type="hidden" name="old_banner_image" value="{{ $setting->banner_image }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Meta Title</label>
                                        <input type="text" class="form-control" placeholder="Type something" name="meta_title" value="{{ $setting->meta_title }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Meta Description</label>
                                        <textarea id="metadescription" name="meta_description" class="form-control">{{ $setting->meta_description }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="col-lg-4">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold"><i class="fas fa-star"></i> Feature</h3>
                            <div class="card-tools">
                                <button class="btn btn-success font-weight-bold" data-toggle="modal" data-target="#modal_feature_add" data-placement="top" title="New">
                                    <i class="fas fa-plus"></i> New
                                </button>
                                {{-- new modal --}}
                                <form method="POST" action="{{ route('feature-list.store') }}" enctype="multipart/form-data" class="modal fade" id="modal_feature_add">
                                    @csrf
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-success">
                                                <h4 class="modal-title"><i class="fas fa-plus"></i> New Feature</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-left">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control" placeholder="Type something" name="title">
                                                </div>
                                                <div class="form-group">
                                                    <label for="icon">Icon</label>
                                                    <div class="input-group mb-3">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="icon" name="icon">
                                                            <label class="custom-file-label" for="icon">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control" name="status">
                                                        <option value="1">Publish</option>
                                                        <option value="0">Draft</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-ban"></i> Cancel</button>
                                                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="list" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Icon</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($feature as $data)
                                    <tr>
                                        <td>{{ $data->title }}</td>
                                        <td><img src="{{ asset($data->icon) }}" style="width: 32px"></td>
                                        <td>
                                            @if ($data->status == '1')
                                            <span class="badge badge-success"><i class="fas fa-check-circle"></i> Published</span>
                                            @else
                                            <span class="badge badge-secondary"><i class="fas fa-minus-circle"></i> Draft</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span data-toggle="tooltip" data-placement="top" title="Edit"><button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal_feature_edit_{{ $data->id }}" data-placement="top" title="Edit"><i class="fas fa-edit"></i></button></span>
                                            <span data-toggle="tooltip" data-placement="top" title="Delete"><button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal_feature_delete_{{ $data->id }}" data-placement="top" title="Delete"><i class="fas fa-trash"></i></button></span>

                                            {{-- delete modal --}}
                                            <div class="modal fade" id="modal_feature_delete_{{ $data->id }}">
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
                                                            <form method="POST" action="{{ route('feature-list.destroy', [$data->id]) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- edit modal --}}
                                            <form method="POST" action="{{ route('feature-list.update', [$data->id]) }}" enctype="multipart/form-data" class="modal fade" id="modal_feature_edit_{{ $data->id }}">
                                                @method('PUT')
                                                @csrf
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-warning">
                                                            <h4 class="modal-title"><i class="fas fa-edit"></i> Edit Feature</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body text-left">
                                                            <div class="form-group">
                                                                <label>Title</label>
                                                                <input type="text" class="form-control" placeholder="Type something" name="title" value="{{ $data->title }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="icon">Icon</label>
                                                                <div class="input-group mb-3">
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="icon" name="icon">
                                                                        <label class="custom-file-label" for="icon">Choose file</label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="d-block">Current Icon</label>
                                                                    <img src="{{ asset($data->icon) }}" style="width: 32px">
                                                                    <input type="hidden" name="old_icon" value="{{ $setting->icon }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Status</label>
                                                                <select class="form-control" name="status">
                                                                    <option value="1" @if ($data->status == '1') selected @else @endif>Publish</option>
                                                                    <option value="0" @if ($data->status == '0') selected @else @endif>Draft</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-ban"></i> Cancel</button>
                                                            <button type="submit" class="btn btn-warning"><i class="fas fa-save"></i> Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Title</th>
                                        <th>Icon</th>
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