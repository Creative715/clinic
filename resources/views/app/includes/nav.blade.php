<div class="main-menu">
    <nav class="navbar navbar-expand-lg navbar-light" style="position:relative; width:100%">
        <div class="d-block d-lg-none">
            <div id="mySidebar" class="sidebar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <h4><a href="{{ url('/') }}">Головна</a></h4>
                <h4>Послуги</h4>
                @foreach($services as $service)
                    <a href="{{ route('page', $service->slug) }}">{{ $service->title }}</a>
                @endforeach
                <h4>Консультація у лікаря</h4>
                @foreach($consults as $consult)
                    <a href="{{ route('page', $consult->slug) }}">{{ $consult->title }}</a>
                @endforeach
                <h4>Про центр</h4>
                @foreach($abouts as $about)
                    <a href="{{ route('page', $about->slug) }}">{{ $about->title }}</a>
                @endforeach
                <h4><a href="{{ route('testimonial.index') }}">Відгуки</a></h4>
                <h4><a href="#call_us">Контакти</a></h4>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav col col-md-auto mb-2 justify-content-center mb-md-0">
                <div class="dropdown">
                    <button class="btn btn-link nav-link px-2 link-dark dropbtn dropdown-toggle">послуги</button>
                    <div class="dropdown-menu dropdown-content">
                        @foreach($services as $service)
                        <a class="dropdown-item" href="{{ route('page', $service->slug) }}">{{ $service->title }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="dropdown">
                    <button class="btn btn-link nav-link px-2 link-dark dropbtn dropdown-toggle">консультація у лікаря</button>
                    <div class="dropdown-menu dropdown-content">
                        @foreach($consults as $consult)
                        <a class="dropdown-item" href="{{ route('page', $consult->slug) }}">{{ $consult->title }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="dropdown">
                    <button class="btn btn-link nav-link px-2 link-dark dropbtn dropdown-toggle">про центр</button>
                    <div class="dropdown-menu dropdown-content">
                        @foreach($abouts as $about)
                            <a class="dropdown-item" href="{{ route('page', $about->slug) }}">{{ $about->title }}</a>
                        @endforeach
                    </div>
                </div>
                <li><a href="{{ route('testimonial.index') }}" class="nav-link px-2 link-dark">Відгуки</a></li>
                <li><a href="#call_us" class="nav-link px-2 link-dark">Контакти</a></li>
            </ul>
        </div>

    </nav>
</div>
