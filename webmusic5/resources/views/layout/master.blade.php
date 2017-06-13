<!DOCTYPE html>
<html>
<head>
    <title>Web Music Library</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/basic.css">
    <link rel="stylesheet" href="/css/responsive/width1200.css" media="screen and (max-width: 1200px)">
    <link rel="stylesheet" href="/css/responsive/width1010.css" media="screen and (max-width: 1010px)">
    <link rel="stylesheet" href="/css/responsive/width850.css" media="screen and (max-width: 850px)">
    <link rel="stylesheet" href="/css/responsive/width768.css" media="screen and (max-width: 768px)">
    <link rel="stylesheet" href="/css/responsive/width600.css" media="screen and (max-width: 600px)">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>

<body>

<!-- Navbar -->

    @include('layout.navigation')

<br class="clearfix">

<!--Page content -->


    @yield('content')

<!-- End Page Content -->



<!-- Footer -->
    @include('layout.footer')
    <script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 6000);
    }
    </script>
</body>
</html>
