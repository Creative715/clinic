<div class="main-menu">
    <nav class="navbar navbar-expand-lg navbar-light" style="position:relative; width:100%">
        <div class="d-block d-lg-none">
            <div id="mySidebar" class="sidebar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <h4>Услуги</h4>
                @foreach($services as $service)
                    <a href="{{ route('pagero', $service->slug) }}">{{ $service->title }}</a>
                @endforeach
                <h4>Консультация у врача</h4>
                @foreach($consults as $consult)
                    <a href="{{ route('pagero', $consult->slug) }}">{{ $consult->title }}</a>
                @endforeach
                <h4>О центре</h4>
                @foreach($abouts as $about)
                    <a href="{{ route('pagero', $about->slug) }}">{{ $about->title }}</a>
                @endforeach
                <h4><a href="#call_us">Контакт</a></h4>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav col col-md-auto mb-2 justify-content-center mb-md-0">
                <div class="dropdown">
                    <button class="btn btn-link nav-link px-2 link-dark dropbtn dropdown-toggle">услуги</button>
                    <div class="dropdown-menu dropdown-content">
                        @foreach($services1 as $service)
                        <a class="dropdown-item" href="{{ route('pagero', $service->slug) }}">{{ $service->title }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="dropdown">
                    <button class="btn btn-link nav-link px-2 link-dark dropbtn dropdown-toggle">консультация у врача</button>
                    <div class="dropdown-menu dropdown-content">
                        @foreach($consults1 as $consult)
                        <a class="dropdown-item" href="{{ route('pagero', $consult->slug) }}">{{ $consult->title }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="dropdown">
                    <button class="btn btn-link nav-link px-2 link-dark dropbtn dropdown-toggle">о центре</button>
                    <div class="dropdown-menu dropdown-content">
                        @foreach($abouts1 as $about)
                            <a class="dropdown-item" href="{{ route('pagero', $about->slug) }}">{{ $about->title }}</a>
                        @endforeach
                    </div>
                </div>
                <li><a href="#call_us" class="nav-link px-2 link-dark">Контакт</a></li>
            </ul>
        </div>

    </nav>
</div>
