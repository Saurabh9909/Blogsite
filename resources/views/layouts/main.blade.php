<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('layouts.include.header.header_link')
</head>
<body>
    @include('layouts.include.header.header')
    @yield('content')
    @include('layouts.include.footer.footer')
</body>
    @include('layouts.include.footer.footer_script')
</html>