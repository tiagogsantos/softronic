<!DOCTYPE html>
<html lang="pt-BR">

<head>
    @include('admin.includes.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    @include('admin.includes.header')
    
    @include('admin.includes.sidebar')

    @yield('content')

    @include('admin.includes.modals')

    @include('admin.includes.footer')

</body>

</html>