<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{ asset('') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../frontend/css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        var base_url = '<?php echo e(url('/')); ?>';
    </script>
    <title>Rent House</title>

</head>

<body>
<div class="root">
    @include('frontend.layouts.banner')
    <!-- thanh header -->
    <div class="header">
        @include('frontend.layouts.header')
    </div>
    <!-- thanh header -->

    <!-- noi dung -->
    @yield('content')
    <!-- noi dung -->

    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark ">
        @include('frontend.layouts.footer')
    </footer>
    <!-- Footer -->
</div>
<script src="../frontend/js/drop_menu.js"></script>
<script src="../frontend/js/main.js" ></script>
</body>

</html>
