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
        <div class="row justify-content-center">
            <div class="col-6 text-center">
                <h1 class="my-3"><i>Gallery</i></h1>
            </div>
        </div>
    </section>

    <section class="container py-90">
        <div class="row align-items-center">
            <div class="col-6">
                <img src="https://via.placeholder.com/715x700" class="w-100 h-100 object-fit-cover object-position-center">
            </div>
            <div class="col-6">
                <img src="https://via.placeholder.com/715x900" class="w-100 h-100 object-fit-cover object-position-center">
            </div>
        </div>
    </section>

    <section class="container py-90">
        <div class="row align-items-center">
            <div class="col-6">
                <img src="https://via.placeholder.com/715x900" class="w-100 h-100 object-fit-cover object-position-center">
            </div>
            <div class="col-6">
                <img src="https://via.placeholder.com/715x700" class="w-100 h-100 object-fit-cover object-position-center">
            </div>
        </div>
    </section>

    <section class="container py-90">
        <div class="row align-items-center">
            <div class="col-6">
                <img src="https://via.placeholder.com/715x700" class="w-100 h-100 object-fit-cover object-position-center">
            </div>
            <div class="col-6">
                <img src="https://via.placeholder.com/715x900" class="w-100 h-100 object-fit-cover object-position-center">
            </div>
        </div>
    </section>

    <section class="container py-90">
        <div class="row align-items-center">
            <div class="col-6">
                <img src="https://via.placeholder.com/715x900" class="w-100 h-100 object-fit-cover object-position-center">
            </div>
            <div class="col-6">
                <img src="https://via.placeholder.com/715x700" class="w-100 h-100 object-fit-cover object-position-center">
            </div>
        </div>
    </section>

    <section class="container py-90">
        <div class="row align-items-center">
            <div class="col-6">
                <img src="https://via.placeholder.com/715x700" class="w-100 h-100 object-fit-cover object-position-center">
            </div>
            <div class="col-6">
                <img src="https://via.placeholder.com/715x900" class="w-100 h-100 object-fit-cover object-position-center">
            </div>
        </div>
    </section>

    <section class="container py-90">
        <div class="row align-items-center">
            <div class="col-6">
                <img src="https://via.placeholder.com/715x900" class="w-100 h-100 object-fit-cover object-position-center">
            </div>
            <div class="col-6">
                <img src="https://via.placeholder.com/715x700" class="w-100 h-100 object-fit-cover object-position-center">
            </div>
        </div>
    </section>

</x-p-j-v>