<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('DataTables/datatables.min.css')}}">

</head>
<body>
    <main>
        <div class="wrapper ">
            <x-sidebar />
            <div class="main-panel">
                <div class="content">
                    <div class="row">
                        <x-navbar />
                        {{$slot}}
                    </div>
                    <x-footer />
                </div>
            </div>
        </div>
    </main>
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{asset('DataTables/datatables.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.js"></script>

@stack('change-script')
@stack('addrow-section')
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });

    </script>
    

$(document).ready(function(){
 <script>
     CKEDITOR.replace( 'content' );
</script>
})

</body>
</html>
