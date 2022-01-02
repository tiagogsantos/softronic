<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>{{ config('app.name') }} | @yield('title')</title>
<meta name="description" content="@yield('description')" />

<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="baseUrl" content="{{ url('/') }}">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

<link href="https://fonts.googleapis.com/css?family=Lato:400,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pretty-checkbox/3.0.0/pretty-checkbox.min.css">

<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
