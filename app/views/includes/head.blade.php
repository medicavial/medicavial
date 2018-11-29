    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <title>@yield('titulo')</title>
    <meta name="description" content="@yield('descripcion')">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic' rel='stylesheet' type='text/css'>

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
    <style>
      .completo{
        width: 100%;
      }

      .modal {
        text-align: center;
        padding: 0!important;
      }

      .modal:before {
        content: '';
        display: inline-block;
        height: 100%;
        vertical-align: middle;
        margin-right: -4px;
      }

      .modal-dialog {
        display: inline-block;
        text-align: left;
        vertical-align: middle;
      }
      .azul{
        color: #107fc9;
      }
      html, body {
        overscroll-behavior-y: contain;
        -webkit-user-select: none;
        -webkit-tap-highlight-color: transparent;
        -webkit-touch-callout: none;
    }
    </style>

    <link rel="manifest" href="manifest.json">
    <link rel="icon" type="image/png" href="{{ URL::asset('images/mv-blanco-144.png') }}" />
    <meta name="theme-color" content="#ffffff">

    <!-- iOS Web App-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon" href="{{ URL::asset('images/mv-blanco-144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('images/mv-blanco-144.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('images/mv-blanco-144.png') }}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{ URL::asset('images/mv-blanco-144.png') }}">

    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Twittor!">


    <!-- OG Protocol -->
    <meta property="og:title" content="@yield('titulo')" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="@yield('descripcion')" />
    <meta property="og:url" content="@yield('enlace')" />
    <meta property="og:image" content="@yield('imgEnlace')" />

    <!-- twitter card -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@MedicaVial" />
    <meta name="twitter:creator" content="@samus_rr" />
    <meta property="og:url" content="@yield('enlace')" />
    <meta property="og:title" content="@yield('titulo')" />
    <meta property="og:description" content="@yield('descripcion')" />
    <meta property="og:image" content="@yield('imgEnlace')" />
