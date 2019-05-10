<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #D6E3DA;
            color: #157fb5;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif


    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>

        <div class="links">
            <a href={{route('contact')}}>Contact</a>
            <a href={{route('about')}}>About</a>
        </div>


        <br>

        <div class='card mt-4 pl-5 pr-5'>
            <div class='card'>

                <div class='card-title'><h1>Contact Page</h1>
                    <p class="lead">Please fill out the below form to contact site owner.</p>

                    <form method="post" action="{{route('contact.store')}}" >
                        @csrf
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <input name = 'first_name' type="text" class="form-control" id = 'first_name' placeholder="First Name" required>
                                </div>
                                <div class="col">
                                    <input name = 'last_name' type="text" class="form-control" id = 'last_name' placeholder="Last Name" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email"></label>
                            <input name='email' type="email" class="form-control" id="email" placeholder="Email Address" required>
                        </div>

                        <div class="form-group">
                            <label for="body"></label>
                            <textarea name='body' class="form-control" id="message" rows="3" placeholder="Type your inquiry here..." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mb-2">Submit</button>

                    </form>
                </div>
            </div>

</body>
</html>