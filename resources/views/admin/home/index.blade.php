@section('title', 'Home Setting')
@section('home_active', 'active')

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
            $("#slider").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#slider_wrapper .col-md-6:eq(0)');
        });
</script>
<script>
    $(function() {
            $("#slider_two").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#slider_two_wrapper .col-md-6:eq(0)');
        });
</script>
<script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
    tinymce.init({
            selector: 'textarea#descriptions',
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
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
                <div class="col-12">
                    @if (session('message'))
                    <div class="alert alert-success alert-dismissible" id="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="far fa-times-circle text-white"></i></button>
                        <h5><i class="icon fas fa-check"></i> Success!</h5>
                        {{ session('message') }}
                    </div>
                    @endif
                </div>
                {{-- setting section --}}
                <form method="POST" action="{{ route('home-setting.update', [$setting->id]) }}" enctype="multipart/form-data" class="col-lg-12">
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
                                <div class="col-lg-6">
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
                                        <textarea id="descriptions" name="description">{{ $setting->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="image">
                                                <label class="custom-file-label" for="image">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="d-block">Current Image</label>
                                            <img src="{{ asset($setting->image) }}" style="width: 100%">
                                            <input type="hidden" name="old_image" value="{{ $setting->image }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="image1">Image 1</label>
                                        <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image1" name="image1">
                                                <label class="custom-file-label" for="image1">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="d-block">Current Image 1</label>
                                            <img src="{{ asset($setting->image1) }}" style="width: 100%">
                                            <input type="hidden" name="old_image1" value="{{ $setting->image1 }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Title 1</label>
                                        <input type="text" class="form-control" placeholder="Type something" name="title1" value="{{ $setting->title1 }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Excerpt 1</label>
                                        <textarea id="excerpt" name="excerpt1" class="form-control">{{ $setting->excerpt1 }}</textarea>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label>Title 2</label>
                                        <input type="text" class="form-control" placeholder="Type something" name="title2" value="{{ $setting->title2 }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Excerpt 2</label>
                                        <textarea id="excerpt" name="excerpt2" class="form-control">{{ $setting->excerpt2 }}</textarea>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label>Title 3</label>
                                        <input type="text" class="form-control" placeholder="Type something" name="title3" value="{{ $setting->title3 }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Excerpt 3</label>
                                        <textarea id="excerpt" name="excerpt3" class="form-control">{{ $setting->excerpt3 }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="image2">Image 2</label>
                                        <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image2" name="image2">
                                                <label class="custom-file-label" for="image2">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="d-block">Current Image 2</label>
                                            <img src="{{ asset($setting->image2) }}" style="width: 100%">
                                            <input type="hidden" name="old_image2" value="{{ $setting->image2 }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="image3">Image 3</label>
                                        <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image3" name="image3">
                                                <label class="custom-file-label" for="image3">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="d-block">Current Image 3</label>
                                            <img src="{{ asset($setting->image3) }}" style="width: 100%">
                                            <input type="hidden" name="old_image3" value="{{ $setting->image3 }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                {{-- slider --}}
                <div class="col-lg-6">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold"><i class="fas fa-list"></i> Slider List</h3>
                            <div class="card-tools">
                                <button class="btn btn-success font-weight-bold" data-toggle="modal" data-target="#modal_slider_add" data-placement="top" title="New">
                                    <i class="fas fa-plus"></i> New
                                </button>
                                <form method="POST" action="{{ route('home-slider.store') }}" enctype="multipart/form-data" class="modal fade" id="modal_slider_add">
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
                                                    <label for="image">Image</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="image" name="image">
                                                            <label class="custom-file-label" for="image">Choose file</label>
                                                        </div>
                                                    </div>
                                                    <div class="d-block form-text mb-3" style="margin-top: 0.25rem; font-size: .875em; color: #6c757d;">Image size: 1920 x 1080 pixel</div>
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
                            <table id="slider" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $data)
                                    <tr>
                                        <td>{{ $data->title }}</td>
                                        <td><img src="{{ asset($data->image) }}" style="width: 200px"></td>
                                        <td>
                                            <span data-toggle="tooltip" data-placement="top" title="Delete"><button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal_delete_{{ $data->id }}" data-placement="top" title="Delete"><i class="fas fa-trash"></i></button></span>


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
                                                            <form method="POST" action="{{ route('home-slider.destroy', [$data->id]) }}">
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
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- slider 2 --}}
                <div class="col-lg-6">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold"><i class="fas fa-list"></i> Slider 1 List</h3>
                            <div class="card-tools">
                                <button class="btn btn-success font-weight-bold" data-toggle="modal" data-target="#modal_slider_two_add" data-placement="top" title="New">
                                    <i class="fas fa-plus"></i> New
                                </button>
                                <form method="POST" action="{{ route('home-slider2.store') }}" enctype="multipart/form-data" class="modal fade" id="modal_slider_two_add">
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
                                                    <label for="image">Image</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="image" name="image" aria-describedby="imageSize">
                                                            <label class="custom-file-label" for="image">Choose file</label>
                                                        </div>
                                                    </div>
                                                    <div class="d-block form-text mb-3" style="margin-top: 0.25rem; font-size: .875em; color: #6c757d;">Image size: 455 x 680 pixel</div>
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
                            <table id="slider_two" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders2 as $data)
                                    <tr>
                                        <td>{{ $data->title }}</td>
                                        <td><img src="{{ asset($data->image) }}" style="width: 200px"></td>
                                        <td>
                                            <span data-toggle="tooltip" data-placement="top" title="Delete"><button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal_delete_two_{{ $data->id }}" data-placement="top" title="Delete"><i class="fas fa-trash"></i></button></span>


                                            <div class="modal fade" id="modal_delete_two_{{ $data->id }}">
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
                                                            <form method="POST" action="{{ route('home-slider2.destroy', [$data->id]) }}">
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