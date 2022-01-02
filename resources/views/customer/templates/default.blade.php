<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('customer.includes.head')
</head>

<body class="{{request()->is('/') ? '' : 'no-index'}}">

    @include('customer.includes.header')
    

    @yield('content')


    @include('customer.includes.footer')
    
    @include('components.alerts')
</body>

</html>