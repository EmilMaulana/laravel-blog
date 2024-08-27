<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Teknik Rekayasa | {{ $title }}</title>

</head>
<body class="bg-dark">
  {{-- login assets --}}
  <!-- General CSS Files -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('admin') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/css/components.css">
    <link rel="icon" href="{{ asset('assets/img/icon.png') }}" type="image/png" />

    <div class="container mt-4">
        @yield('container')
    </div>

    <!-- Template JS File -->
    <script src="{{ asset('admin') }}/js/scripts.js"></script>
    <script src="{{ asset('admin') }}/js/custom.js"></script>

  
</body>
</html>