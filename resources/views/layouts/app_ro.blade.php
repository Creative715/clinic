<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Healing">
    <title>{{ $title ?? 'Healing - приватна клініка, Житомир' }}</title>
    <meta name="description" content="{{ $description ?? '' }}">
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
    <link href="{{ asset('/css/healing.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/body_style.min.css') }}">
    <!-- bootstap styles -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
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
<body>
@yield('content')
<script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>
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
<script>
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{asset('/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ asset('/js/bootstrap-datepicker.uk.min.js') }}"></script>
    @vite('resources/js/app.js')
    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker({
                format: 'dd.mm.yyyy',
                language: 'uk',
                autoclose: true,
                startDate: '-3d'
            });
        });
    </script>

</body>
</html>
