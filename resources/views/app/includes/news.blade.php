<section id="news" class="featurette" style="padding: 70px 20px;">
    <div class="container">
        <div class="row">
            <h2 class="text-center" style="font-size: 40px; font-weight: 700;margin-bottom: 20px;">Новини
                медицини</h2>
            @foreach($news as $new)
                <div class="col col-md-4">
                    <div class="card">
                        <img src="{{ $new->img }}" class="card-img-top"
                             title="{{ $new->title }}"
                             alt="{{ $new->title }}">
                        <div class="card-body">
                            <a style="color: #0a001f; text-decoration: none;" href="{{ route('news.more', $new->slug) }}"><h3
                                    class="card-title">{{ $new->getTitlePreview() }}</h3></a>
                            <strong> Додано: {{ $new->createdAtForHumans() }}</strong>
                            <p class="card-text">{!! $new->getContentPreview() !!}</p>
                            <hr>
                            <a href="{{ route('news.more', $new->slug) }}" class="btn btn-info">Докладніше</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="row justify-content-center mt-5">
                <a href="{{ route('news') }}" class="btn btn-success col-md-4 text-uppercase">всі новини <i
                        class="fa-solid fa-align-left"></i></a>
            </div>

        </div>
    </div>
</section>
