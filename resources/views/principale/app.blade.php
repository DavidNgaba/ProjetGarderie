<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Garderie</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>

    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('acceuil') }}">Garderie</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-5 navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('acceuil') }}">Acceuil</a>
                        </li>
                    </ul>

                    {{-- Si un utilisateur est connecté, n'afficher que le bouton de deconnection, si non, afficher le bouton
                    de connection --}}
                    @if (Auth::guard('admin')->check())
                        <div>
                            <p>{{ Auth::guard('admin')->user()->username }}</p>

                            <a class="btn btn-outline-primary mr-2" href="{{ route('pageAdmin') }}">Espace
                                admin</a>

                            {{-- On utilise un formulaire pour des raisons de securite, mais un simple bouton marche aussi --}}
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Se déconnecter</button>
                            </form>

                        </div>
                    @elseif(Auth::guard('educatrice')->check())
                        <div>
                            <p>{{ Auth::guard('educatrice')->user()->name }}</p>

                            <a class="btn btn-outline-primary mr-2" href="{{ route('pageEducatrice') }}">Espace
                                educatrice</a>

                            {{-- On utilise un formulaire pour des raisons de securite, mais un simple bouton marche aussi --}}
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Se déconnecter</button>
                            </form>

                        </div>
                    @else
                        <div>
                            <a class="btn btn-outline-primary mr-2" href="{{ route('login') }}">Espace admin</a>
                            <a class="btn btn-outline-primary mr-2" href="{{ route('logineducatrice') }}">Espace
                                educatrice</a>{{-- <a
                                class="btn btn-primary" href="{{ route('register') }}">Sign Up</a> --}}
                        </div>
                    @endif


                </div>
            </div>
        </nav>
    </section>

    @yield('content')
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <script>
        //Pour Validtion d'un formulaire (peut etre ignoré)
        (function() {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()

    </script>
</body>

</html>
