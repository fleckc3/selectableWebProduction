<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SelecTable</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    </head>
    <body>
        <div class="container-fluid landing_bg">
            <div class="row">
                <div class="col-sm-6">
                    <img src="{{ asset('img/land_logo.svg') }}" alt="" class="mx-auto d-block scale-60 mt-3">
                    <img src="{{ asset('img/land_yellow_text.svg') }}" class="mx-auto d-block scale-60" alt="">
                </div>
                <div class="col-sm-6 slogan">
                    <img src="{{ asset('img/white_coming-01.svg') }}" alt="" class="mx-auto d-block mt-lg-5">
                    <div class="col-sm-12 mx-auto">
                        <div class="card trans mt-5">
                            <div class="card-body">
                                <p class="text-center">A modern reservation platform providing 360° interactive table content and venue floor layouts.</p>
                                <p class="text-center">Welcome to the new norm.</p>
                                <p class="text-center">Check us out on:</p>
                                <div class="row flex justify-content-center">
                                        <a href="https://www.facebook.com/selectableapp" class="fa fa-facebook"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="arrow bounce hide"><i class="fa fa-angle-down fa-5x" aria-hidden="true"></i></div>
            </div>
        </div>
        <div class="container-fluid land-bottom">
            <div class="row">
                <div class="col-sm-6 mt-3 mb-5 pl-5 pr-5 hide">
                    <img src="{{ asset('img/contact_under_con-01.svg') }}" alt="" class="responsive mx-auto d-block scale-70">

                    {{-- <h1 class="text-white text-center">Join our platform or find out more information!</h1>
                    <div>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <br/>
                        @endif

                        <form method="POST" action="{{ route('contacts.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstName" class="text-white">First Name:</label>
                                        <input type="text" class="form-control" name="firstName">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastName" class="text-white">Last Name:</label>
                                        <input type="text" class="form-control" name="lastName">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email" class="text-white">Email:</label>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="company" class="text-white">Company:</label>
                                        <input type="text" class="form-control" name="company">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-outline-light btn-block mt-2">Submit</button>
                        </form>
                    </div> --}}
                </div>
                <div class="col-sm-6">
                    <img src="{{ asset('img/bot_img-01.svg') }}" alt="" class="responsive mx-auto d-block scale-70">

                </div>
            </div>
        </div>
        <script>
            $(window).scroll(function(){
            $(".arrow").css("opacity", 1 - $(window).scrollTop() / 250);
          //250 is fade pixels
          });

        </script>
    </body>
</html>



