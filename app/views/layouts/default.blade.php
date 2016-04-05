<!doctype html>
<!--[if gt IE 8]> <html class="ie9" lang="es-MX"> <![endif]-->
<html class="ihome" ng-app="chat" lang="es-MX">
<head>
    @include('includes.head')
</head>
<body>
    
    <div id="loader-overlay"><img src="{{ URL::asset('images/loader1.gif') }}" alt="Loading" /></div>

    <header>
        @include('includes.header')
    </header>

    <div class="complete-content">

            @yield('content')

    </div>

    <div class="complete-footer">
        @include('includes.footer')
    </div>

    
    @include('includes.script')

</body>
</html>