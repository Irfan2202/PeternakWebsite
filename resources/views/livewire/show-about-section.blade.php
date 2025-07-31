<section class="about">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6 mx-auto">
                <img src="{{ $about->image_url }}" class="rounded-2 img-fluid mx-auto d-block"
                    alt="{{ $about->image_alt }}" data-aos="flip-up" data-aos-duration="1000" />
            </div>
            <div class="col-lg-6" data-aos="fade-up-left" data-aos-duration="1000">
                <h6 class="text-uppercase text-warning fw-semibold mb-3">
                    {{ $about->section_name }}
                </h6>
                <h2 class="display-4 fw-bold mb-3">
                    {{ $about->title }}
                </h2>
                <p class="text-muted">
                    {{ $about->description }}
                </p>
                <a href="{{ $about->button_link }}"
                    class="btn btn-warning text-white fw-semibold rounded">{{ $about->button_text }}</a>
            </div>
        </div>
    </div>
</section>
