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

    <section class="py-90 bg-light-gray">
        <div class="container">
            <div class="row pb-5 justify-content-center">
                <div class="col-6 text-center">
                    <h2 class="mb-3"><i>Ut volutpat ultricies ante vitae blandit.</i></h2>
                </div>
            </div>
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
            <div class="row pt-5 justify-content-center">
                <div class="col-6 text-center">
                    <p>Proin placerat libero ipsum, ac feugiat lacus volutpat vel. Maecenas quis gravida felis,
                        ac viverra ante. Vestibulum imperdiet erat ut odio mollis convallis. Donec ac maximus
                        mauris, ac tempus leo.</p>
                    <div class="mt-4">
                        <button class="btn btn-primary rounded-0 px-5">Button text</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-90">
        <div class="container">
            <div class="row pb-5 justify-content-center">
                <div class="col-10">
                    <div class="row">
                        <div class="col-7 px-4">
                            <h2 class="mb-5"><i>Maecenas auctor facilisis rutrum</i></h2>
                            <img src="https://via.placeholder.com/595x800" style="width: 100%" />
                        </div>
                        <div class="col-5 px-4">
                            <img src="https://via.placeholder.com/410x550" style="width: 100%" />
                            <div class="mt-4">
                                <p>Proin ornare sem non euismod volutpatpraesent vitae rutrum libero, in ultrices odio
                                    maecenas vehicula molestie ante a ultricies.</p>

                                <p>Praesent vestibulum dictum quam at hendrerit
                                    nam felis ex, fermentum ac leo quis, pellentesque
                                    dictum tellus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-image-fixed">
        <div class="container-fluid">
            <div class="row justify-content-end align-items-end" style="height: 850px">
                <div class="col-9 bg-white">
                    <div class="row justify-content-center align-items-center px-5" style="height: 650px;">
                        <div class="col-4 text-center align-self-center pe-5">
                            <h2 class="mb-3"><i>Maecenas auctor facilisis rutrum</i></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum maxime iusto harum adipisci, animi officiis quisquam, assumenda consectetur a numquam quas. Voluptatum nesciunt nam ea repudiandae! Modi quidem ullam aut?</p>
                        </div>
                        <div class="col-8">
                            <div class="row">
                                <div class="col-4">
                                    <img src="https://via.placeholder.com/295x395" style="width: 100%">
                                    <h3 class="my-2"><i>Maecenas auctor facilisis rutrum</i></h3>
                                    <div class="py-2">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos, officiis. Provident sequi quidem aliquam totam</p>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary px-5 rounded-0">DISCOVER</button>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <img src="https://via.placeholder.com/295x395" style="width: 100%">
                                    <h3 class="my-2"><i>Maecenas auctor facilisis rutrum</i></h3>
                                    <div class="py-2">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos, officiis. Provident sequi quidem aliquam totam</p>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary px-5 rounded-0">DISCOVER</button>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <img src="https://via.placeholder.com/295x395" style="width: 100%">
                                    <h3 class="my-2"><i>Maecenas auctor facilisis rutrum</i></h3>
                                    <div class="py-2">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos, officiis. Provident sequi quidem aliquam totam</p>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary px-5 rounded-0">DISCOVER</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-90">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19732.80105663574!2d115.093741!3d-8.837301!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x82cc528e4e7bd43d!2sMandala%20Airlines%20PK-RII!5e1!3m2!1sen!2sus!4v1667971356357!5m2!1sen!2sus" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
</x-p-j-v>