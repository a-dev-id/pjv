@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    <section class="container pt-90">
        <div class="row justify-content-center pb-90">
            <div class="col-6 text-center">
                <h1 class="my-3"><i>Contact Us</i></h1>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-4">
                <div class="my-3 text-center">
                    <img src="https://via.placeholder.com/60x60" class="mb-3">
                    <p>+62 81 2345 6789</p>
                </div>
            </div>
            <div class="col-4">
                <div class="my-3 text-center">
                    <img src="https://via.placeholder.com/60x60" class="mb-3">
                    <p>Jl. Pantai Nyang-Nyang, Pecatu, Kec. Kuta Sel.,
                        Kabupaten Badung, Bali</p>
                </div>
            </div>
            <div class="col-4">
                <div class="my-3 text-center">
                    <img src="https://via.placeholder.com/60x60" class="mb-3">
                    <p>reservations@privatejetvilla.com</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row justify-content-center py-5">
            <div class="col-4 text-center">
                <a href="http://wa.me/628113800988" target="_blank" class="btn btn-primary text-uppercase rounded-0 fw-bold d-inline-flex p-0">
                    <span class="px-3 d-flex align-items-center">Chat with Us</span>
                    <div class="px-3 py-2 text-white" style="background-color: #128C7E;"><i class="fab fa-whatsapp"></i></div>
                </a>
            </div>
        </div>

        <div class="row justify-content-center pb-3">
            <div class="col-6 text-center">
                <h1 class="my-3"><i>Donec convallis nisl</i></h1>
                <p>Ut arcu metus, consectetur vel massa in</p>
            </div>
        </div>

        <div class="row justify-content-center pb-90">
            <div class="col-6 text-center">
                <h1 class="my-3"><i>Donec convallis nisl</i></h1>
                <p>Ut arcu metus, consectetur vel massa in</p>
            </div>
        </div>
    </section>

    <section class="mt-90">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19732.80105663574!2d115.093741!3d-8.837301!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x82cc528e4e7bd43d!2sMandala%20Airlines%20PK-RII!5e1!3m2!1sen!2sus!4v1667971356357!5m2!1sen!2sus" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

</x-p-j-v>