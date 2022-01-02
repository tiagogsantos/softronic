<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
@if (session()->has('success'))
<script type="text/javascript">
    Toastify({
        text: " {{session('success')}}",
        duration: 3000,
        backgroundColor: "#00a65a"
    }).showToast();
</script>
@endif
@if (session()->has('error'))
<script type="text/javascript">
    Toastify({
        text: " {{session('error')}}",
        duration: 3000,
        backgroundColor: "#dd4b39"
    }).showToast();
</script>
@endif
@if (session()->has('info'))
<script type="text/javascript">
    Toastify({
        text: " {{session('info')}}",
        duration: 3000,
        backgroundColor: "#00c0ef"
    }).showToast();
</script>
@endif
@if ($errors->any())
@foreach ($errors->all() as $error)
<script type="text/javascript">
    Toastify({
        text: " {{$error}}",
        duration: 3000,
        backgroundColor: "#dd4b39"
    }).showToast();
</script>
@endforeach

@endif