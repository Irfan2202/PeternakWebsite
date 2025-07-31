<div>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            @foreach ($heroes as $hero)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ $hero->image_url }}" class="d-block w-100" alt="{{ $hero->image_alt }}" />
                    <div class="carousel-caption d-md-block position-absolute top-50 start-50 translate-middle w-100">
                        <h6 class="text-uppercase text-warning fw-semibold mb-3">
                            {{ $hero->tagline }}
                        </h6>
                        <h1 class="display-4 fw-bold text-white">
                            {{ $hero->title }}
                        </h1>
                        <p class="lead text-light mb-4">
                            {{ $hero->description }}
                        </p>
                        <a href="{{ $hero->button_link }}" class="btn btn-warning text-white fw-semibold rounded">
                            {{ $hero->button_text }}
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
