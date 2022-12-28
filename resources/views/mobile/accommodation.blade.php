@section('accommodation_active', 'active')
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
    .room-view .panel-body .room-amn ul {
        column-gap: unset;
        column-count: unset;
        width: 100%;
    }

    .room-view .panel-body .room-amn ul li {
        display: inline;
    }

    .amenities--icon--room {
        width: 20px !important;
    }

    .fa-angle-right {
        transform: rotate(0deg);
        transition: transform 0.25s linear;
    }

    .fa-angle-right.active {
        transform: rotate(90deg);
        transition: transform 0.25s linear;
    }

    .mdi-room-info-btn {
        border: 2px solid;
        font-size: 9px;
        padding: 5px 10px;
        width: 90px;
    }

    .panel.panel-default {
        border: .5px solid transparent;
    }

    .mdi-room-title {
        font-size: 20px;
    }

</style>
@endpush

@push('js')
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js" defer></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js'></script>
<script type="text/javascript">
    $(".carousel-inner").swipe({
            swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
                if (direction == 'left') $(this).carousel('next');
                if (direction == 'right') $(this).carousel('prev');
            },
            allowPageScroll: "vertical"
        });
</script>
<script type="text/javascript">
    $('a').on('click', function(e) {
            $(this).find('[class*="angle"]').toggleClass('fa-angle-down fa-angle-up')
        });

        $('.go').on('click', function(e) {
            $(this).css({
                transform: 'rotate(0deg)',
                transition: 'transform .5s'
            });
        });
</script>
@endpush
<x-mobile>

    <div class="container visible-xs visible-sm">
        @foreach ($villas as $data)
        <div class="bck-room">
            <div class="room-generate">
                <div class="row">
                    <div class="col-xs-12 slide-room">

                        <div id="riverside-pool-villa-target" class="carousel-fade slide carousel" data-ride="carousel" data-interval="7000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner text-center">
                                @foreach (App\Models\VillaImage::where('villa_id', '=', $data->id)->get() as $image)
                                <div class="item @if ($image->id == '1') active @else @endif">
                                    <div style="background:url({{ asset($image->image) }}) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                @endforeach
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#riverside-pool-villa-target" data-slide="prev">
                                <span class="glyphicon glyphicon-menu-left im-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#riverside-pool-villa-target" data-slide="next">
                                <span class="glyphicon glyphicon-menu-right im-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-8">
                        <h3 class="m-t-10 mdi-room-title" style="font-weight: bold;">{{ $data->title }}</h3>
                    </div>
                    <div class="col-xs-4">
                        <a class="m-t-10 mdi-room-info-btn" data-toggle="collapse" data-parent="#accordion0" href="#collapse20">ROOM INFO <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="room-view">
                <div class="row">
                    <div style="padding: 0px 6px;" class="col-xs-12">
                        <div style="color: black;" class="panel-group" id="accordion0">
                            <div class="panel panel-default">
                                <div id="collapse20" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="col-xs-12 room-amn m-b-20">

                                            <h4>Villa Facilities</h4>
                                            <ul style="padding-left: 0!important;">
                                                @foreach (App\Models\VillaFeature::where('villa_id', $data->id)->get() as $facility)
                                                @foreach (\App\Models\Feature::where('id', '=', $facility->feature_id)->get() as $data_feature)
                                                <li style="padding-right: 0;">&#8226; {{ $data_feature->title }} | </li>
                                                @endforeach
                                                @endforeach
                                            </ul>
                                        </div>

                                        <div class="clr-bth"></div>
                                        <hr>
                                        <div class="container-price">
                                            <a href="https://book-directonline.com/properties/hanginggardensofbalidirect" target="_blank" class="btn-default">BOOK NOW</a>
                                            <div class="assis-home">
                                                <a style="border-bottom: 1px solid white;" data-toggle="modal" data-target="#myassist"><i class="fa fa-question-circle" aria-hidden="true"></i> CLICK HERE FOR MORE ASSISTANCE</a>
                                            </div>
                                            <div class="contain-asis">
                                                <div class="intro-less-box">
                                                    {!! $data->description !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clr-bth"></div>
        @endforeach
    </div>


    <!-- Modal -->
    <div class="modal fade" id="myassist" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">NEED ASSISTANCE</h4>
                </div>
                <div class="modal-body">
                    <p>SHOULD YOU NEED FURTHER ASSISTANCE FOR THE OFFERS OR YOU WANT TO ARRANGE A COSTUMISED BOOKING, OUR RESERVATION WILL HELP YOU. PLEASE SUBMIT YOUR ENQUIRY BY CLICKING THE BUTTON BELOW </p>
                </div>
                <div class="modal-footer">
                    <a href="https://api.whatsapp.com/send/?phone=628113800988&text&app_absent=0" class="btn-default">
                        <span>CHAT WITH US</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-mobile>