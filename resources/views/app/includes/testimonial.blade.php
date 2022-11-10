<section class="partners">
    <div class="col col-md-12">
        <div class="container">
            <h2>Відгуки про клініку Healing</h2>
            @foreach($testimonials as $testimonial)
                <h3>{{ $testimonial->name }}</h3>
                Додано: {{ $testimonial->createdAtForHumans() }}
                <p class="lead">{!! $testimonial->getBodyPreview() !!}</p>
                <a href="{{ route('testimonial.more', $testimonial->slug) }}"
                   class="btn btn-info">Докладніше</a>
            @endforeach
        </div>
    </div>
</section>
