<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts.include.header.admin_header_link")
</head>

<body>
    @include("layouts.include.header.admin_navbar")
    @include("admin.sidebar")
    @yield('content')
    @yield('script')
    @include("layouts.include.footer.admin_footer_script")
</body>

</html>