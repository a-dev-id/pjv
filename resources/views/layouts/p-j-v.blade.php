<!doctype html>
<html lang="en">

<head>
    <script type="text/javascript">
        if (screen.width < 768) {
    			let url = "/";
    			if (url == '/thank-you-newsletter') {
    				window.location = "{{ route('m.index') }}/thank-you-enquiry";
    			} else if (url == '/thank-you-enquiry') {
    				window.location = "{{ route('m.index') }}/thank-you-enquiry";
    			} else {
    				window.location = "{{ route('m.index') }}";
    			}
    		}
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    @stack('css')
</head>

<body>
    <header>
        <div class="fixed-top">
            <nav class="grow-menu navbar navbar-expand navbar-dark bg-dark bg-opacity-50">
                <div class="container-fluid justify-content-center text-uppercase">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item"><a href="{{ route('index') }}" class="nav-link text-white px-2 px-xl-3"><i class="fa fa-home"></i></a></li>
                        <li class="nav-item"><a href="{{ route('accommodation.index') }}" class="nav-link text-white px-2 px-xl-3">Accommodations</a></li>
                        {{-- <li class="nav-item"><a href="{{ route('activities.index') }}" class="nav-link text-white px-2 px-xl-3">Activities</a></li> --}}
                        <li class="nav-item"><a href="{{ route('dining.index') }}" class="nav-link text-white px-2 px-xl-3">Dining</a></li>
                    </ul>
                    <a href="{{ route('index') }}" class="navbar-brand mx-2">
                        <img src="{{ asset('images/logo/logo.png') }}" class="navlogo fade-in">
                    </a>
                    <ul class="navbar-nav align-items-center">
                        {{-- <li class="nav-item"><a href="{{ route('spa.index') }}" class="nav-link text-white px-2 px-xl-3">Spa</a></li> --}}
                        {{-- <li class="nav-item"><a href="{{ route('event.index') }}" class="nav-link text-white px-2 px-xl-3">Event</a></li> --}}
                        <li class="nav-item"><a href="{{ route('wedding.index') }}" class="nav-link text-white px-2 px-xl-3">Weddings</a></li>
                        <li class="nav-item"><a href="{{ route('gallery.index') }}" class="nav-link text-white px-2 px-xl-3">Gallery</a></li>
                        <li class="nav-item"><a href="{{ route('contact-us.index') }}" class="nav-link text-white px-2 px-xl-3">Contact Us</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="booking-wrapper">
            <div class="booking-inner">
                <div class="booking-form-wrapper">
                    <div class="booking-form-wrapper-inner">
                        <form class="d-flex h-100" action="https://book-directonline.com/properties/privatejetvillahanginggardensdirect?locale=en&trackPage=yes" method="get" target="_blank">
                            <input type="hidden" name="id" value="2583">
                            <div class="col px-1 position-relative h-100">
                                <label class="booking-field-text">Arrival</label>
                                <input type="text" class="form-control booking-field-input h-100 w-100 datepicker" id="fromDate" value="{{ \Carbon\Carbon::now()->format('d-m-Y') }}" readonly="true">
                                <i class="fa fa-calendar booking-field-icon"></i>
                                <input type="hidden" name="checkInDate" class="datepicker-input" value="{{ \Carbon\Carbon::now()->format('d-m-Y') }}">
                                <input type="hidden" name="currency" value="USD">
                            </div>
                            <div class="col px-1 position-relative h-100">
                                <label class="booking-field-text">Departure</label>
                                <input type="text" class="form-control booking-field-input h-100 w-100 datepicker" id="toDate" value="{{ \Carbon\Carbon::now()->addDays(1)->format('d-m-Y') }}" readonly="true">
                                <i class="fa fa-calendar booking-field-icon"></i>
                                <input type="hidden" name="checkOutDate" class="datepicker-input" value="{{ \Carbon\Carbon::now()->addDays(1)->format('d-m-Y') }}">
                            </div>
                            <div class="col px-1 position-relative h-100">
                                <label class="booking-field-text">Guests</label>
                                <select class="form-control booking-field-input h-100 w-100">
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="3">03</option>
                                    <option value="4">04</option>
                                    <option value="5">05</option>
                                    <option value="more...">more...</option>
                                </select>
                                <i class="fa fa-chevron-down booking-field-icon"></i>
                            </div>
                            <div class="col px-1 position-relative h-100">
                                <label class="booking-field-text">Promo code</label>
                                <input type="text" class="form-control booking-field-input h-100 w-100" name="promo" placeholder="...">
                                <i class="fa fa-tag booking-field-icon"></i>
                            </div>
                            <div class="col px-1 position-relative h-100">
                                <button type="submit" class="btn btn-primary text-uppercase rounded-0 fw-bold h-100 w-100">BOOK</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="special-offers-link">
            <div>
                <a href="{{ route('offers.index') }}" class="btn btn-primary rounded-pill text-uppercase px-3 w-100">
                    <small class="fw-bold"><i class="fa fa-gift me-2"></i> Special Offers</small>
                </a>
                <div class="mt-2 offers-link-hover opacity-0">
                    <div class="px-3 py-2 bg-dark bg-opacity-75 rounded-3">
                        <p class="text-xxl-start text-center text-white mb-0 small">Find out exclusive offers<br>in our official website</p>
                    </div>
                </div>
            </div>
        </div>

    </header>

    {{ $slot }}

    <div class="w-100 border-top border-light"></div>
    @yield('home_address')

    <footer class="py-90 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-4">
                    <img src="{{ asset('images/logo/logo.png') }}" style="width: 100%">
                </div>
                <div class="col-8 px-5">
                    <div class="row">
                        <div class="col-4">
                            <h3 class="text-uppercase fw-bold mb-3">about</h3>
                            <ul class="p-0">
                                <li class="mt-2"><a href="{{ route('story.index') }}" class="link text-black text-uppercase text-decoration-none">story</a></li>
                                <li class="mt-2"><a href="{{ route('awards.index') }}" class="link text-black text-uppercase text-decoration-none">awards</a></li>
                                <li class="mt-2"><a href="{{ route('press-room.index') }}" class="link text-black text-uppercase text-decoration-none">press room</a></li>
                                <li class="mt-2"><a href="{{ route('contact-us.index') }}" class="link text-black text-uppercase text-decoration-none">contact us</a></li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <h3 class="text-uppercase fw-bold mb-3">others</h3>
                            <ul class="p-0">
                                <li class="mt-2"><a href="{{ route('terms-conditions.index') }}" class="link text-black text-uppercase text-decoration-none">Terms &amp; Conditions</a></li>
                                <li class="mt-2"><a href="{{ route('blog.index') }}" class="link text-black text-uppercase text-decoration-none">blog</a></li>
                                <li class="mt-2"><a href="{{ route('careers.index') }}" class="link text-black text-uppercase text-decoration-none">careers</a></li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <h3 class="text-uppercase fw-bold mb-3">follow us</h3>
                            <nav class="nav flex-row">
                                <a href="https://www.instagram.com/" class="nav-link social-media-share social-media-share-instagram me-2"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.facebook.com/" class="nav-link social-media-share social-media-share-facebook me-2"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/" class="nav-link social-media-share social-media-share-twitter me-2"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.youtube.com/" class="nav-link social-media-share social-media-share-youtube me-2"><i class="fab fa-youtube"></i></a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <footer class="py-3" style="background-color: #6c471d">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="fw-bold text-white">Copyright © 2022 Private Jet Villa</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script type="text/javascript">
        $('#reserveddate_enquiry').datepicker({
    			format: 'dd-mm-yyyy',
    			startDate: "16-12-2022",
    			autoclose: true
    		});
    		$('#fromDate').datepicker({
    			format: 'dd-mm-yyyy',
    			startDate: "{{ \Carbon\Carbon::now()->format('d-m-Y') }}",
    			autoclose: true
    		});
    		$('#toDate').datepicker({
    			format: 'dd-mm-yyyy',
    			startDate: "{{ \Carbon\Carbon::now()->addDays(1)->format('d-m-Y') }}",
    			autoclose: true
    		});
    		$('#fromDate, #toDate').change(function(e) {
    			let str = $(this).val();
    			let res =  str.split("-");
    			// $(this).closest('.col').find('.datepicker-input').val(res[2]+'-'+res[1]+'-'+res[0]);
    			$(this).closest('.col').find('.datepicker-input').val(res[0]+'-'+res[1]+'-'+res[2]);
    		});
    		$('#fromDate').change(function(e) {
    			let str = $(this).val();
    			let res =  str.split("-");
    			let dat = res[2]+'-'+res[1]+'-'+res[0];
    			let date = new Date(dat);
    			date.setDate(date.getDate() + 1);
    
    			let dd = (date.getDate() < 10) ? "0" + date.getDate().toString() : date.getDate();
    			let mm = (date.getMonth() < 9  ) ? "0" + (date.getMonth() + 1).toString() : (date.getMonth() + 1);
    			let y = date.getFullYear();
    
    			$('#toDate').val(dd+'-'+mm+'-'+y);
    			// $('#toDate').closest('.col').find('.datepicker-input').val(y+'-'+mm+'-'+dd);
    			$('#toDate').closest('.col').find('.datepicker-input').val(dd+'-'+mm+'-'+y);
    			
    			$('#toDate').datepicker('destroy');
    			$('#toDate').datepicker({
    				format: 'dd-mm-yyyy',
    				startDate: dd+'-'+mm+'-'+y,
    				autoclose: true
    			});
    		});
    </script>


    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

    @stack('js')
</body>

</html>