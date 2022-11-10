<div class="col col-md-12">
    <h2>Новини медицини</h2>
    @foreach($news as $new)
        <h3>{{ $new->name }}</h3>
        Додано: {{ $new->createdAtForHumans() }}
        <p class="lead">{!! $new->getContentPreview() !!}</p>
        <a href="{{ route('news.more', $new->slug) }}"
           class="btn btn-info">Докладніше</a>
    @endforeach
</div>
