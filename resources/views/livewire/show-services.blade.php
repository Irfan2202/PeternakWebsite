<div class="row justify-content-center">
    @foreach ($services as $service)
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 400 }}">
            <div class="card shadow-sm rounded-4 h-100">
                <div class="card-body py-5">
                    <i class="{{ $service->icon_class }} fs-1 text-warning mb-3"></i>
                    <h5 class="card-title fw-bold">{{ $service->title }}</h5>
                    <p class="card-text">
                        {{ $service->description }}
                </div>
            </div>
        </div>
    @endforeach
</div>
