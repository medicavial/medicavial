    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    
    <title>@yield('titulo')</title>
    <meta name="description" content="@yield('descripcion')">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
    
    {{ HTML::style('css/jquery-ui-1.10.3.custom.css') }}
    {{ HTML::style('css/animate.css') }}
    {{ HTML::style('css/font-awesome.min.css') }}
    {{ HTML::style('css/blue.css') }}
    {{ HTML::style('rs-plugin/css/settings.min.css') }}
    {{ HTML::style('css/slides.css') }}
    {{ HTML::style('css/inline.min.css') }}
    {{ HTML::style('css/style.css') }}
    {{ HTML::style('css/bootstrap-datetimepicker.min.css') }}

    <!-- REVOLUTION BANNER CSS SETTINGS -->
   
    <!--[if IE 9]>
    	<link rel="stylesheet" type="text/css" href="css/ie9.css" />
    <![endif]-->    
    
    <link rel="icon" type="image/png" href="{{ URL::asset('images/favicon.png') }}" />