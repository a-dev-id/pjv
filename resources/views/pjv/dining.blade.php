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
            <div class="row justify-content-center pb-90">
                <div class="col-6 text-center">
                    <h1 class="my-3"><i>Donec convallis nisl</i></h1>
                    <p>Ut arcu metus, consectetur vel massa in, pellentesque aliquet arcu. Aliquam
                        vitae elit eu orci laoreet vulputate. Nulla vel eros sed augue euismod feugiat.
                        Praesent semper purus ex, sit amet tristique diam mattis sed.</p>
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
            {{-- <div class="row pt-5 justify-content-center">
                <div class="col-6 text-center">
                    <h2 class="mb-3"><i>Donec convallis nisl</i></h2>
                    <p>Proin placerat libero ipsum, ac feugiat lacus volutpat vel. Maecenas quis gravida felis,
                        ac viverra ante. Vestibulum imperdiet erat ut odio mollis convallis. Donec ac maximus
                        mauris, ac tempus leo.</p>
                </div>
            </div> --}}
        </div>
    </section>

    <section class="container py-90">
        <div class="row align-items-center">
            <div class="col-6 p-5">
                <h2 class="mb-3"><i>Donec convallis nisl</i></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia fugiat cum inventore voluptatum officia est aliquam. Consequatur eius facilis aliquid suscipit. Deleniti, non ut? Laborum, eum voluptates eaque pariatur fugit, nobis quae optio adipisci debitis cum culpa perferendis id quas necessitatibus tenetur sit, nihil nostrum voluptas explicabo odit ipsam.</p><br>
                <p> Itaque consectetur ipsa fuga! Asperiores quae nisi blanditiis ullam earum voluptatum ea animi! Facere, atque assumenda. Sapiente blanditiis cumque veniam repellat, dolorem tempore ut itaque cum? Voluptate incidunt autem adipisci enim maxime harum deleniti, eum architecto. Dicta dolore non ratione natus ullam explicabo at fugit dolores velit corporis, repellat tenetur porro.</p>
                <div class="mt-4">
                    <button class="btn btn-primary rounded-0 px-5">Button text</button>
                </div>
            </div>
            <div class="col-6">
                <img src="https://via.placeholder.com/715x900" class="w-100 h-100 object-fit-cover object-position-center">
            </div>
        </div>
    </section>

    <section class="bg-light-gray py-90">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-8 text-center">
                    <h2 class="mb-3"><i>Donec convallis nisl</i></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum vero autem deserunt quaerat libero sapiente consequatur suscipit, recusandae, quae dolor nihil. Officiis veritatis eveniet voluptatem distinctio soluta, quo laboriosam consequatur voluptas corrupti tempore repellendus voluptates asperiores voluptatibus quaerat placeat eum, excepturi nesciunt earum temporibus, quas unde architecto ipsa aliquid porro! Nesciunt ducimus maiores quam aperiam autem blanditiis vel laboriosam corrupti velit voluptatum sapiente quod pariatur sint perferendis sit?</p>
                </div>
            </div>
        </div>
    </section>
</x-p-j-v>