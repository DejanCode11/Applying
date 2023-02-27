<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ url('css/home.css') }}">
    <link rel="stylesheet" href="{{ url('css/sendFeedback.css') }}">
    <link rel="stylesheet" href="{{ url('css/feedback.css') }}">
    </head>
    <body>
        <div class="navigation">
            <div class="phone-container">
                <div class="logo">LOGO</div> 
                <div id="burger-js" class="hamburger">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
        </div>
            {{-- <span class="nav-menu"></span>
            <span class="nav-menu"></span>
            <span class="nav-menu"></span> --}}
            
            <nav id="nav" class="hidden">
                <a href="{{route('home.index')}}">Home</a>
                <a href="{{route('home.sendFeedback')}}">Send Feedback</a>
                <a href="{{route('home.feedback')}}">Feedback</a>
            </nav>
               
            
        </div>
             @yield('content')

        @yield('scripts')
        <footer>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id, obcaecati.</footer>
        <script src="{{url('javascript/nav.js')}}"></script>
    </body>
</html>
