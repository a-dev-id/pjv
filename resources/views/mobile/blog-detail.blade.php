@section('meta')
<title>Private jet Villa | Blog | {{ $detail->title }}</title>
<meta name="description" content="{{ $detail->excerpt }}">
<meta property="og:title" content="{{ $detail->title }}" />
<meta property="og:description" content="{{ $detail->excerpt }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ route('mobile.blog-detail', [$detail->slug]) }}" />
<meta property="og:image" content="{{ asset($detail->banner_image) }}" />
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
        <div class="row dining-row-item">
            <div class="col-xs-12">
                <a class="d-block" href="javascript:void(0)">
                    <div style="background: url({{asset($detail->banner_image)}}) no-repeat center; height: 350px; background-size: cover;"></div>
                </a>
            </div>
            <div class="col-xs-12 dining-item-description">
                <div class="block-content">
                    <h4>{{$detail->title}}</h4>
                    <p>Posted on {{date('M d, Y', strtotime($detail->created_at))}}</p>
                    <div class="text-justify">
                        {!! $detail->description !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-mobile>