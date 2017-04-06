<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">
    <link rel="icon" href="https://v4-alpha.getbootstrap.com/favicon.ico">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @include('glayouts.style')

    <title>GetRiuh - Boards Listing</title>

</head>

<body class="homepage">
<div class="page-wrapper">
    @include('glayouts.header')

    <div id="page-content">

        @yield('content')



    </div>
    <!--end page-content-->

    @include('glayouts.footer')


</div>
<!--end page-wrapper-->
<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>

@include('glayouts.script')

<script>
    var CSRF_TOKEN = "{{ csrf_token() }}";
    var optimizedDatabaseLoading = 1;
    var _latitude = 3.191172;
    var _longitude = 101.693352;
    var element = "map-homepage";
    var markerTarget = "infobox"; // use "sidebar", "infobox" or "modal" - defines the action after click on marker
    var sidebarResultTarget = "sidebar"; // use "sidebar", "modal" or "new_page" - defines the action after click on marker
    var showMarkerLabels = true;
    heroMap(_latitude,_longitude, element, markerTarget, sidebarResultTarget, showMarkerLabels);
</script>

</body>

