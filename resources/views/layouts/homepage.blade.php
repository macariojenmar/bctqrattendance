<html>
    <header>
        <title>BCT Attendance - QR Code</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" media='all' rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" media='all'>

    </header>
    <body class="text-font">
        @include('inc.navbarhomepage')
            
            <div class="container animateFast" style="padding-left: 3em; padding-right: 3em; padding-bottom: 3em">
                @yield('content')
            </div>
        @include('inc.footer')

    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>

    </body>
</html>