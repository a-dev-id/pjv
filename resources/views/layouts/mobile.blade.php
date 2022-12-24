<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('meta')

    <script type="text/javascript">
        if (screen.width > 768) {
            window.location = "{{ route('index') }}";
        }
    </script>

    <link rel="Shortcut Icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon" />
    <link rel="preload" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" as="font" onload="this.rel='stylesheet'" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
    <link href="{{ asset('css/mobile.css') }}" rel="stylesheet">

    @stack('css')


</head>

<body id="home" style="margin-bottom: 145px">


    <!--<a data-toggle="modal" data-target="#promoBanner" href="javascript:void(0)" class="promo-banner-trigger"><i class="fa fa-tags"></i></a>-->
    <a href="https://wa.me/628113800988" target="_blank" rel="noopener" class="whatsapp-floating"><img src="https://hanginggardensofbali.com/themes/mindimedia-theme/assets/images/whatsapp-logo.png" alt="whatsapp"></a>
    <a href="https://t.me/HGOB2022" target="_blank" rel="noopener" class="telegram-floating"><img src="https://hanginggardensofbali.com/themes/mindimedia-theme/assets/images/logo-telegram.png" alt="whatsapp"></a>
    <a href="https://www.tripadvisor.com/Hotel_Review-g608492-d583286-Reviews-Hanging_Gardens_of_Bali-Payangan_Gianyar_Regency_Bali.html" target="_blank" rel="noopener" class="trip-floating"><img src="https://hanginggardensofbali.com/themes/mindimedia-theme/assets/images/trip.png" alt="whatsapp"></a>


    <div id="shareModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="facebook-container social-container">
                        <div class="icon-container">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </div>
                        <a href="javascript:void(0)" data-sharer="facebook" data-url="{{ route('mobile.home') }}"> Share on Facebook</a>
                    </div>
                    <div class="twitter-container social-container">
                        <div class="icon-container">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </div>
                        <a href="javascript:void(0)" data-sharer="twitter" data-url="{{ route('mobile.home') }}"> Share on Twitter</a>
                    </div>
                    <div class="whatsapp-container social-container">
                        <div class="icon-container">
                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                        </div>
                        <a href="javascript:void(0)" data-sharer="whatsapp" data-title="" data-url="{{ route('mobile.home') }}"> Share on Whatsapp</a>
                    </div>
                    <div class="mail-container social-container">
                        <div class="icon-container">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </div>
                        <a href="mailto:?subject=&body={{ route('mobile.home') }}"> Share on Email</a>
                    </div>
                    <div class="phone-container social-container">
                        <div class="icon-container">
                            <i class="fa fa-copy" aria-hidden="true"></i>
                        </div>
                        <a onclick="copyToClipboard('#myText')" id="copyUrl" value="{{ route('mobile.home') }}" href="javascript:void(0)"> Copy URL to clipboard</a>
                        <span id="myText" class="hide">{{ route('mobile.home') }}</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section class="slider relative">
        <div class="mdi-header-carousel owl-carousel owl-theme">
            @foreach (App\Models\HomeSlider2::all() as $data)
                <div class="header-bg relative" style="background: linear-gradient(180deg, transparent 90%, #fff), url({{ asset($data->image) }}) no-repeat;background-size: cover;background-position: bottom;"></div>
            @endforeach
        </div>
        <a target="_blank" class="mdi-map-btn" href="https://g.page/hanginggardensofbali?share"><i class="fa fa-map-marker"></i> MAP</a>
        {{-- <a class="mdi-share-btn" href="javascript:void(0)" data-toggle="modal" data-target="#shareModal"><i class="fa fa-share-alt"></i></a>
        <img src="" class="logo-invert logo-header-mobile"> --}}
    </section>

    {{ $slot }}

    <div class="container-fluid container-fixed-menu">
        <a href="https://book-directonline.com/properties/privatejetvillahanginggardensdirect" class="book-mobile-fixed" target="_blank">
            <i class="fa fa-calendar"></i>Check Availability
            <i class="fa fa-angle-right pull-right angle-right-fixed"></i>
        </a>
        <a href="{{ route('mobile.home') }}" class="menu-box">
            <div class="menu-box-item @yield('home_active')">
                <i class="fa fa-home"></i>
                <p>Home</p>
            </div>
        </a>
        <a href="{{ route('mobile.accommodation') }}" class="menu-box">
            <div class="menu-box-item @yield('accommodation_active')">
                <i class="fa fa-bed"></i>
                <p>Accommodation</p>
            </div>
        </a>
        <a href="{{ route('mobile.offer') }}" class="menu-box">
            <div class="menu-box-item @yield('offer_active')">
                <i class="fa fa-tags"></i>
                <p>Offers</p>
            </div>
        </a>
        <a href="{{ route('mobile.dining') }}" class="menu-box">
            <div class="menu-box-item @yield('dining_active')">
                {{-- <i class="fa fa-tags"></i> --}}
                <i class="fas fa-utensils"></i>
                <p>Dining</p>
            </div>
        </a>
        <a href="{{ route('mobile.gallery') }}" class="menu-box">
            <div class="menu-box-item @yield('gallery_active')">
                <i class="fa fa-image"></i>
                <p>Gallery</p>
            </div>
        </a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        $('#contact-us-menu').click(function(event) {
            $('.contact-us-box').toggle();
        });
        $('.items-contact-us').click(function(event) {
            $('.contact-us-box').toggle();
        });
        $('.tawk-btn').click(function(event) {
            $('.container-fixed-menu').css('z-index', 10);
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#BannerPopUp').modal('show');
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#show").click(function() {
                $("#hide").show(1000);
                $("#show").hide();
            });
        });
    </script>

    <script type="text/javascript">
        $('.read-more-mobile').click(function(event) {
            $('.intro-less-box').hide();
            $('.intro-more-box').show();
        });

        $('.read-less-mobile').click(function(event) {
            $('.intro-more-box').hide();
            $('.intro-less-box').show();
        });
    </script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.theme.default.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.mdi-header-carousel').owlCarousel({
                items: 1,
                nav: true,
                dots: false,
                loop: true,
                autoplay: true,
                navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
            });
        });
    </script>
    <script>
        function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            alert("URL copied to clipboard");
            $temp.remove();
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".header-in").click(function() {
                $("#search-text").toggle();
            });
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('#nav a[href~="' + location.href + '"]').parents('li').addClass('active-item');
        });
    </script>

    <script>
        jQuery.event.special.touchstart = {
            setup: function(_, ns, handle) {
                this.addEventListener("touchstart", handle, {
                    passive: true
                });
            }
        };
        window.addEventListener('load', function() {
            jQuery('a:contains("book now")').click(function() {
                ga('send', 'event', 'button', 'click', 'mobile book now');
            })
            jQuery('a:contains("check availability")').click(function() {
                ga('send', 'event', 'button', 'click', 'mobile check availability');
            })
            jQuery('a:contains("select offer")').click(function() {
                // alert('test');
                ga('send', 'event', 'button', 'click', 'mobile select offer');
            })
        })
    </script>
    <script type="text/javascript">
        $('.datepicker, #reserveddate').datepicker({
            format: 'dd-mm-yyyy',
            startDate: "19-12-2022",
            autoclose: true
        });
        $('.datepicker').change(function(e) {
            let str = $(this).val();
            var res = str.split("-");
            $(this).closest('.col').find('.datepicker-input').val(res[2] + '-' + res[1] + '-' + res[0]);
        });
    </script>

    @stack('js')
</body>

</html>
