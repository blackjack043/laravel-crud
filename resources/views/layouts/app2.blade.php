    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500;700&display=swap" rel="stylesheet">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
        <script src="/js/app.js"></script>
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body style="font-family: 'Open Sans', sans-serif;">
        <div id="app"  style="display: flex" >



            <div style=" width:100%" >
            <nav class="" style="height: 50px; background: white; color:#f5f5f5">
                <div>


                    <div style="display: flex; justify-content:space-between">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-left">
                            &nbsp;
                            <li style="border-bottom: 2px solid red; color: red"><a href="#" style="color: red; font-weight: bold">Продукты</a></li>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav " style="align-self:flex-end">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                                <li><a href="{{ url('/login') }}">Login</a></li>
                                <li><a href="{{ url('/register') }}">Register</a></li>
                            @else
                                @if (Auth::user()->admin == 1)
                                <li><a href="#">Вы админ</a></li>

                                @endif


                                    <a href="#" >
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul >
                                        <li>
                                            <a href="{{ url('/logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>

                            @endif
                        </ul>
                    </div>
                </div>

            </nav>

            @yield('content')
        </div>
        </div>
        <!-- Scripts -->


    </body>
    </html>
