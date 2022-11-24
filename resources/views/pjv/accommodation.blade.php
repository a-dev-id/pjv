@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .item {
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        width: 100%;
        height: 100%;
    }

</style>
@endpush
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.slider-section').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        fade: true,
        cssEase: 'linear',
        draggable: false,
        pauseOnDotsHover: false,
        pauseOnHover: false,
        pauseOnFocus: false,
        });
</script>

<script>
    $('.slider-center').slick({
        centerMode: true,
        slidesToShow: 3,
        dots: true,
        infinite: true,
        centerPadding: '0px',
        speed: 500,
        variableWidth: true,
        arrows: true
        });
        
</script>
@endpush
<x-p-j-v>
    <section class="slider-section">
        <div class="vh-100 overflow-hidden position-relative">
            <img src="https://via.placeholder.com/1920x1080/000" class="h-100 w-100 object-fit-cover object-position-center">
        </div>
        <div class="vh-100 overflow-hidden position-relative">
            <img src="https://via.placeholder.com/1920x1080/0f0" class="h-100 w-100 object-fit-cover object-position-center">
        </div>
        <div class="vh-100 overflow-hidden position-relative">
            <img src="https://via.placeholder.com/1920x1080" class="h-100 w-100 object-fit-cover object-position-center">
        </div>
    </section>

    <section class="py-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 text-center">
                    <h1 class="mb-3"><i>Donec convallis nisl</i></h1>
                    <p>Ut arcu metus, consectetur vel massa in, pellentesque aliquet arcu. Aliquam
                        vitae elit eu orci laoreet vulputate. Nulla vel eros sed augue euismod feugiat.
                        Praesent semper purus ex, sit amet tristique diam mattis sed.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-image-fixed" style="height:900px">
    </section>

    <section class="py-90">
        <div class="container">
            <div class="slider slider-center">
                <div>
                    <img src="https://via.placeholder.com/455x680" />
                </div>
                <div>
                    <img src="https://via.placeholder.com/455x680" />
                </div>
                <div>
                    <img src="https://via.placeholder.com/455x680" />
                </div>
                <div>
                    <img src="https://via.placeholder.com/455x680" />
                </div>
                <div>
                    <img src="https://via.placeholder.com/455x680" />
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="https://via.placeholder.com/715x900" class="w-100 h-100 object-fit-cover object-position-center">
                </div>
                <div class="col-6 p-5">
                    <h2 class="mb-3"><i>Donec convallis nisl</i></h2>
                    <ul style="list-style-type:disc">
                        <li class="mb-3">Private plunge pool in four of the eight suites</li>
                        <li class="mb-3">Private terrace overlooking the Indian Ocean or resort gardens with two daybeds</li>
                        <li class="mb-3">King-size bed</li>
                        <li class="mb-3">Open plan sitting area with desk</li>
                        <li class="mb-3">Large bathroom with twin basins, circular bath, separate rain shower, with outdoor rain shower</li>
                        <li class="mb-3">Personal Bar with Nespresso coffee machine</li>
                        <li class="mb-3">Hair dryer</li>
                        <li class="mb-3">Bathroom scales</li>
                        <li class="mb-3">Unpacking and packing service (as per guest request)</li>
                        <li class="mb-3">Daily laundry (excluding dry cleaning)</li>
                        <li class="mb-3">High-speed WiFi and international calling</li>
                        <li class="mb-3">Netflix, Apple TV, and Apple Music</li>
                        <li class="mb-3">Suitable for guests with accessibility needs with seamless ramp addition</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</x-p-j-v>