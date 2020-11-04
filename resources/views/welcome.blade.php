<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Restaurant reservation app powered by virtual and interactive restaurant content. Featuring table layouts and 360° content. A COVID conscious reservation app." />

        <title>Virtual Restaurant and Interactive Reservation App | SelecTable</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
        <link rel="manifest" href="/favicon/site.webmanifest">
        <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#e89d05">
        <meta name="msapplication-TileColor" content="#2d89ef">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>
        <div class="container-fluid landing_bg">
            <img src="#" alt="selectable restaurant and table reservation background" class="sr-only">
            @if(session()->has('message'))
                <div class="alert alert-success custom-success mx-auto mt-1">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('img/land_logo.svg') }}" alt="selectable logo" class="mx-auto d-block scale-20 mt-3">
                    <img src="{{ asset('img/land_yellow_text.svg') }}" class="mx-auto d-block scale-30" alt="selctable logo text">
                    <div class="slogan mobile-show">
                        <img src="{{ asset('img/white_coming-01.svg') }}" alt="restaurant reservation app coming soon" class="mx-auto d-block mt-lg-5 scale-40">
                        <div class="col-sm-12 mx-auto">
                            <div class="card trans mt-2 mb-4">
                                <div class="card-body">
                                    <p class="text-center">A modern restaurant reservation app providing 360° interactive table content and venue floor layout. Restaurant reservations never looked so good!</p>
                                    <p class="text-center"> Welcome to the new norm.</p>
                                    <p class="text-center">Check us out on:</p>
                                    <div class="row flex justify-content-center">
                                            <a href="https://www.facebook.com/selectableapp" class="fa fa-facebook"></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <h1 class="ml-2 mr-2 mt-2 text-center mobile-text">Join our platform or find out more information!</h1>
                     <div class="ml-3 mr-3">
                        <form method="post" action="{{ route('contacts.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group " >
                                        <label class="moble-text mobile-show" for="firstName">Name:</label>
                                        <label class="moble-text mobile-hide" for="firstName">First Name:</label>
                                        <input type="text" class="form-control form-custom @if ($errors->has('firstName')) custom-alert @endif" name="firstName">
                                        @if ($errors->has('firstName'))
                                            <p class="text-red">{{ $errors->first('firstName') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6 mobile-hide">
                                    <div class="form-group ">
                                        <label class="moble-text" for="lastName">Last Name (optional):</label>
                                        <input type="text" class="form-control form-custom @if ($errors->has('lastName')) custom-alert @endif" name="lastName">
                                        @if ($errors->has('lastName'))
                                            <p class="text-red">{{ $errors->first('lastName') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="moble-text" for="email">Email:</label>
                                        <input type="text" class="form-control form-custom @if ($errors->has('email')) custom-alert @endif" name="email">
                                        @if ($errors->has('email'))
                                            @foreach ($errors->get('email') as $error)
                                                <p class="text-red">{{ $error }}</p>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="moble-text" for="company">Company (optional):</label>
                                        <input type="text" class="form-control form-custom" name="company">
                                        @if ($errors->has('company'))
                                            <p class="text-red">{{ $errors->first('company') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="message">Message (optional):</label>
                                    <textarea class="custom-message @if ($errors->has('message')) custom-alert @endif" name="message" id="message" cols="" rows="" placeholder="Write your message here..."></textarea>
                                    @if ($errors->has('message'))
                                    @foreach ($errors->get('message') as $error)
                                        <p class="text-red">{{ $error }}</p>
                                    @endforeach
                                @endif
                                </div>
                            </div>
                            <button class="btn btn-custom btn-block mt-2">Submit</button>
                        </form>
                        <img src="{{ asset('img/siloh_logo.svg') }}" alt="resaurant table reservation logo" class="responsive mx-auto scale-30 mobile-show">
                    </div>
                </div>
                <div class="col-md-6 mt-5 slogan mobile-hide">
                    <img src="{{ asset('img/white_coming-01.svg') }}" alt="reservtion app coming soon" class="mx-auto d-block mt-lg-5 scale-40">
                    <div class="col-sm-12 mx-auto">
                        <div class="card trans mt-2">
                            <div class="card-body">
                                <p class="text-center">A modern restaurant reservation app providing 360° interactive table content and venue floor layout. Restaurant reservations never looked so good!</p>
                                <p class="text-center"> Welcome to the new norm.</p>
                                <p class="text-center">Check us out on:</p>
                                <div class="row flex justify-content-center">
                                        <a href="https://www.facebook.com/selectableapp" class="fa fa-facebook"></a>
                                        <a href="https://www.instagram.com/selectable.ie/" class="fa fa-instagram"></a>
                                </div>

                            </div>
                        </div>
                        <img src="{{ asset('img/siloh_logo.svg') }}" alt="selectable restaurant reservation logo" class="responsive mx-auto d-block scale-30">
                    </div>
                </div>
            </div>

        </div>

    </body>
</html>

<script>
    $(".alert-success").fadeTo(3000, 1000).slideUp(1000, function(){
    $(".alert-success").slideUp(1000);
});

</script>

