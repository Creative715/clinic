<!doctype html>
<html lang="uk-UA">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="&quot;HEALING&quot; - один з небагатьох лікувальних закладів в Україні, який спеціалізується виключно на сучасних безпечних малоінвазивних методах лікування">
    <meta name="author" content="Healing">
    <title>Healing - приватна клініка, Житомир</title>
    <meta property="og:url" content="https://healing.zt.ua" />
    <meta property="og:title" content="Healing - приватна клініка, Житомир" />
    <meta property="og:description" content="&quot;HEALING&quot; - один з небагатьох лікувальних закладів в Україні, який спеціалізується виключно на сучасних безпечних малоінвазивних методах лікування" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('/img/clinic.jpg') }}" />
    <link rel="canonical" href="https://healing.zt.ua">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <!-- custom styles for healing clinic -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
{{--    <link rel="shortcut icon" href="/img/favicon.ico">--}}
    <link href="{{ asset('/css/healing.css') }}" rel="stylesheet">
    <!-- bootstap styles -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- custom styles for carousel -->
    <link href="{{ asset('/css/carousel.css') }}" rel="stylesheet">
    <!-- fontawesome styles -->
    <link rel="stylesheet" href="{{ asset('/font/css/all.css') }}">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>
@yield('content')
<script>
    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
    }

</script>
<script>
    //Get the button
    var mybutton = document.getElementById("toTop");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>


</body>
</html>
