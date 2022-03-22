<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $attributes['title'] }}</title>
    <link rel="icon" type="image/png" href="https://scontent.fsgn4-1.fna.fbcdn.net/v/t39.30808-6/253805501_1110233596439222_954872362996586157_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=MV7W3_jbWCoAX8s0yfR&_nc_ht=scontent.fsgn4-1.fna&oh=00_AT-1VsmRP9Xz9cAIYIK2n_9AeEEd3L7_9ynpxKkDunm3-g&oe=62385C90" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header id="header" class="bg-light shadow-sm">
        <div class="container bg-light">
            <div class="row d-flex py-3" style="align-items: center;">
                <div class="col-lg-6">
                    <div class="logo_home">
                        {{-- <img src="{{asset('/img/lensko.png')}}" alt=""> --}}
                        <h5>Fashion</h5>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                    <ul class="d-flex m-0 p-0" style="list-style: none;">
                        <li class="mx-2"><a href="" class="link-secondary text-decoration-none"><i
                                    class="mx-1 fas fa-shopping-cart"></i>Cart</a></li>
                        <li class="mx-2">/</li>
                        <li class="mx-2"><a href="" class="link-secondary text-decoration-none"><i
                                    class="mx-1 fas fa-user"></i>Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <nav id="navbar" class="my-1">
        <div class="container py-3 shadow-sm rounded">
            <ul class="d-flex m-0 p-0" style="list-style: none;">
                <li class=""><a class="text-decoration-none text-danger"
                        href="{{ route('trangchu') }}">HOME</a></li>
                <li class="mx-2"><a class="text-decoration-none text-secondary"
                        href="{{ route('about') }}">ABOUT</a></li>
                <li class=""><a class="text-decoration-none text-secondary" href="">CONTACT</a></li>
            </ul>
        </div>
    </nav>

    {{-- <section id="slides">
        <div class="container shadow rounded">
            <div class="row">
                <x-slides />
            </div>
        </div>
    </section> --}}

    <section>
        <div class="container py-2 my-5 shadow rounded">
            <div class="row">
                <div class="col-lg-3 border-end border-info shadow-sm">
                    <h5 class="text-center fw-bold badge bg-secondary w-100">Category</h5>
                    <ul class="list-group">
                        @foreach ($danhmuc as $item)
                            <li class="list-group-item list-group-item-action"><a
                                    class="text-decoration-none text-secondary" href="{{route('sp_theo_dm',['id'=>$item->id])}}">{{ $item->tendanhmuc }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-9">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-light text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a target="_blank" class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;"
                    href="https://www.facebook.com/LenskoLSN/" role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a target="_blank" class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#!"
                    role="button"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a target="_blank" class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;" href="#!"
                    role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a target="_blank" class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;"
                    href="https://www.instagram.com/namlee_2291/" role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a target="_blank" class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#!"
                    role="button"><i class="fab fa-linkedin-in"></i></a>
                <!-- Github -->
                <a target="_blank" class="btn btn-primary btn-floating m-1" style="background-color: #333333;"
                    href="https://github.com/lenskolsn" role="button"><i class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3 bg-dark">
            © 2022 All right reserved
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
