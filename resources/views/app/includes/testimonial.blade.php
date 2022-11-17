<section class="partners">
    <div class="container">
        <div class="row">
            <h2>Відгуки про клініку Healing</h2>
            @foreach($testimonials as $testimonial)
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">{{ $testimonial->name }}</h3>
                            <strong> Додано: {{ $testimonial->createdAtForHumans() }}</strong>
                            <p class="card-text">{!! $testimonial->getBodyPreview() !!}</p>
                            <a href="{{ route('testimonial.more', $testimonial->slug) }}"
                               class="btn btn-info">Докладніше</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="row justify-content-center mt-5">
                <a href="{{ route('testimonial.index') }}" class="btn btn-success col col-md-4 text-uppercase">всі
                    відгуки <i class="fa-solid fa-align-left"></i></a>
            </div>
        </div>
    </div>
</section>
