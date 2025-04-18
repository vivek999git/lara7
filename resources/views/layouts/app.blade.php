<!DOCTYPE html>
<!--  <html lang="en"> -->
<html lang="en" data-sidenav-size="sm-hover" data-bs-theme="light" data-menu-color="dark" data-topbar-color="light" data-layout-mode="fluid" class="">


<head>
    <meta charset="utf-8" />
    <title>@yield('pageTitle')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- App favicon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="wrapper"> 

@include('layouts.header')
 

 
 @yield('content')

 @include('layouts.footer')

</div>
</body>



</html>