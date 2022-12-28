@section('meta')
<title>Hanging Garden of Bali | Homepage</title>
<meta name="description" content="">
<meta property="og:title" content="" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://hanginggardensofbali.com/m" />
<meta property="og:image" content="" />
@endsection

@push('css')
<style type="text/css">
    h1 {
        font-size: 25px;
    }

    .text-justify {
        text-align: justify;
    }

</style>
@endpush
<x-mobile>
    <div class="container">
        @foreach ($blogs as $data)
        <div class="row dining-row-item">
            <div class="col-xs-12">
                <a class="d-block" href="javascript:void(0)">
                    <div style="background: url({{asset($data->banner_image)}}) no-repeat center; height: 350px; background-size: cover;"></div>
                </a>
            </div>
            <div class="col-xs-12 dining-item-description">
                <div class="block-content">
                    <a href="javascript:void(0)">
                        <h4>{{$data->title}}</h4>
                        <p>Posted on {{date('M d, Y', strtotime($blog->created_at))}}</p>
                    </a>
                    <div class="text-justify">
                        {{ Str::limit($data->excerpt, 200) }}

                        <a href="{{route('mobile.blog-detail', [$data->slug])}}" style="color:#b3a59e; text-decoration:underline;">Read More</a>
                    </div>

                </div>
            </div>
        </div>
        <hr class="hr-title">
        @endforeach
    </div>
</x-mobile>