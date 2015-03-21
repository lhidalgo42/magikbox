<!DOCTYPE html>
<html lang="en">

<head>
    <?php $user = Auth::user(); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - {{$user->name}} {{$user->lastname_1}}</title>

    <!-- Bootstrap Core CSS -->
    {{ HTML::style('/packages/bootstrap/dist/css/bootstrap.min.css') }}

    <!-- MetisMenu CSS -->
    {{ HTML::style('/packages/metisMenu/dist/metisMenu.min.css') }}

    <!-- Timeline CSS -->
    {{ HTML::style('/css/timeline.css') }}

    <!-- Custom CSS -->
    {{ HTML::style('/css/sb-admin-2.css') }}

    <!-- Morris Charts CSS -->
    {{ HTML::style('/packages/morrisjs/morris.css') }}

    <!-- Custom Fonts -->
    {{ HTML::style('/packages/font-awesome/css/font-awesome.min.css') }}

    <!-- Custom Css -->
    @yield('css','')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    {{ HTML::script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}
    {{ HTML::script('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
    <![endif]-->

</head>

<body>

<div id="wrapper">
    
@include('layouts.nav.app')
    
@yield('content')

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="/packages/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/packages/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="/packages/metisMenu/dist/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="/packages/raphael/raphael-min.js"></script>
<script src="/packages/morrisjs/morris.min.js"></script>
<script src="/js/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/js/sb-admin-2.js"></script>

@yield('js','')

</body>

</html>
