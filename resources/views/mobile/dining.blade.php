@section('dining_active', 'active')
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

        .enq-button {
            border: 1px solid #999;
            background: #000;
            color: #fff !important;
            padding: 10px 20px;
            transition: all 500ms;
            text-transform: uppercase;
            display: table;
            margin: 0 auto;
        }

        .text-justify {
            text-align: justify;
        }

        .btn-enquire {
            width: 100%;
            background-color: #fff;
            color: #CC9930;
            border: 2px solid #CC9930;
            font-weight: 700;
            display: inline-block;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-menu {
            width: 100%;
            background-color: #CC9930;
            color: #fff;
            border: 2px solid #CC9930;
            font-weight: 700;
            display: inline-block;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .padding-top-30 {
            padding-top: 30px !important
        }

        .reserve-modal .modal-dialog {
            min-height: 500px;
            width: 100%;
        }

        .reserve-modal iframe {
            height: 680px;
            width: 100%;
            overflow: hidden;
            display: block;
            min-height: 100% !important;
        }
    </style>
@endpush

<x-mobile>
    <div class="container">
        <div class="row dining-row-item">
            <div class="col-xs-12">
                <a class="d-block" href="javascript:void(0)">
                    <div style="background: url('https://hanginggardensofbali.com/storage/app/media/B0035909.jpg') no-repeat center; height: 230px; background-size: cover;"></div>
                </a>
            </div>
            <div class="col-xs-12 dining-item-description">
                <div class="block-content">
                    <a href="javascript:void(0)">
                        <h1>Three Elements Restaurant</h1>
                    </a>
                    <div class="text-justify">
                        A culinary journey through the ingredients, the flavors and the seasons of Bali. Three Elements Restaurant has been awarded "World Luxury Restaurant Award 2019", and offers an à la carte selection of appetizers, entrées and desserts as well as two unique tasting menus with optional wine pairing using the highest quality products and impeccable technique to create a modern Western and Indonesian cuisine.
                    </div>

                    <div class="padding-top-30">
                        <div class="col-xs-6">
                            <a target="_blank" href="#reserveRestaurant" data-toggle="modal" style="width:100%!important" class="btn-enquire">Reserve Now</a>
                        </div>
                        <div class="col-xs-6">
                            <a target="_blank" href="https://hanginggardensofbali.com/storage/app/media/Hanging%20Gardens%20of%20Bali%20All%20Day%20Dining%20Menu%202023.pdf" class="btn-menu">View Menu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="reserveRestaurant" tabindex="-1" aria-labelledby="reserveRestaurant" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered reserve-modal">
            <div class="modal-content">
                <iframe src="https://bookv5.chope.co/booking?rid=threeelements2203bal&source=rest_threeelementsrestaurant.com"></iframe>
            </div>
        </div>
    </div>

</x-mobile>
