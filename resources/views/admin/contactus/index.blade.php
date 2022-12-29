@section('title', 'Contact Us')
@section('contact_us_active', 'active')

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

                </div>
                <form method="POST" action="{{ route('contact-us-setting.update', [$setting->id]) }}" enctype="multipart/form-data" class="col-lg-12">
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
                                        <textarea id="excerpt" name="excerpt">{{ $setting->excerpt }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea id="description" name="description">{{ $setting->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Meta Title</label>
                                        <input type="text" class="form-control" placeholder="Type something" name="meta_title" value="{{ $setting->meta_title }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Meta Description</label>
                                        <textarea id="metadescription" name="meta_description">{{ $setting->meta_description }}</textarea>
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
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label for="phone-icon">Phone Icon</label>
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="phone-icon" name="phone_icon">
                                                    <label class="custom-file-label" for="phone-icon">Choose file</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="d-block">Current Icon</label>
                                                <img src="{{ asset($setting->phone_icon) }}" style="width: 32px">
                                                <input type="hidden" name="old_phone_icon" value="{{ $setting->phone_icon }}">
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" placeholder="Type something" name="phone_no" value="{{ $setting->phone_no }}">
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <label for="address-icon">Address Icon</label>
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="address-icon" name="address_icon">
                                                    <label class="custom-file-label" for="address-icon">Choose file</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="d-block">Current Icon</label>
                                                <img src="{{ asset($setting->address_icon) }}" style="width: 32px">
                                                <input type="hidden" name="old_address_icon" value="{{ $setting->address_icon }}">
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Address</label>
                                            <input type="text" class="form-control" placeholder="Type something" name="address_text" value="{{ $setting->address_text }}">
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <label for="email-icon">Email Icon</label>
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="email-icon" name="email_icon">
                                                    <label class="custom-file-label" for="email-icon">Choose file</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="d-block">Current Icon</label>
                                                <img src="{{ asset($setting->email_icon) }}" style="width: 32px">
                                                <input type="hidden" name="old_email_icon" value="{{ $setting->email_icon }}">
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="Type something" name="email_text" value="{{ $setting->email_text }}">
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <label for="whatsapp-icon">Whatsapp Icon</label>
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="whatsapp-icon" name="whatsapp_icon">
                                                    <label class="custom-file-label" for="whatsapp-icon">Choose file</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="d-block">Current Icon</label>
                                                <img src="{{ asset($setting->whatsapp_icon) }}" style="width: 32px">
                                                <input type="hidden" name="old_whatsapp_icon" value="{{ $setting->whatsapp_icon }}">
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Whatsapp Number</label>
                                            <input type="text" class="form-control" placeholder="Type something" name="whatsapp_no" value="{{ $setting->whatsapp_no }}">
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label>Whatsapp Text</label>
                                            <input type="text" class="form-control" placeholder="Type something" name="whatsapp_text" value="{{ $setting->whatsapp_text }}">
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <label>General</label>
                                            <input type="text" class="form-control" placeholder="Type something" name="general_text" value="{{ $setting->general_text }}">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>General Email</label>
                                            <input type="text" class="form-control" placeholder="Type something" name="general_email" value="{{ $setting->general_email }}">
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <label>Media</label>
                                            <input type="text" class="form-control" placeholder="Type something" name="media_text" value="{{ $setting->media_text }}">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Media Email</label>
                                            <input type="text" class="form-control" placeholder="Type something" name="media_email" value="{{ $setting->media_email }}">
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>Google Map</label>
                                            <input type="text" class="form-control" placeholder="Type something" name="google_map" value="{{ $setting->google_map }}">
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label>Google Map Preview</label>
                                            <div class="d-block">
                                                {!! $setting->google_map !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>