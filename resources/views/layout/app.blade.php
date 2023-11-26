<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <meta name="author" content="Devcrud">
    <title>Portfolio website</title>
    <link rel="stylesheet" href="{{ asset("assets/vendors") }}/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset("assets/css") }}/meyawo.css">
</head>

<body>
    
    @include('component.navbar')


    @include("component.content-area")


    @include('component.footer')


    <script src="{{ asset("assets/vendors") }}/jquery/jquery-3.4.1.js"></script>
    <script src="{{ asset("assets/vendors") }}/bootstrap/bootstrap.bundle.js"></script>
    <script src="{{ asset("assets/vendors") }}/bootstrap/bootstrap.affix.js"></script>
    <script src="{{ asset("assets/js") }}/meyawo.js"></script>

</body>

</html>
