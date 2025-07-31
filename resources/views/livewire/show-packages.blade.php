<div class="row ">
    @foreach ($packages as $package)
        <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 400 }}">
            <div class="card h-100 rounded-4">
                <div class="card-body p-4 ">
                    <h5 class="fw-bold mb-3 fs-5 text-center">{{ $package->name }}</h5>
                    <h2 class="display-5 fw-bold text-center text-warning mb-3">
                        <small class="d-block text-muted fs-6">Start from</small>
                        Rp{{ number_format($package->price, 0, ',', '.') }}
                    </h2>
                    <ul class=" mb-4 text-muted">
                        @foreach ($package->features as $feature)
                            <li class="mb-4">
                                {{ $feature->name }}
                            </li>
                        @endforeach
                    </ul>
                    <div class="justify-content-center text-center">
                        <a href="{{ $package->button_link ?? '#' }}"
                            class="btn btn-warning text-white fw-semibold rounded">
                            {{ $package->button_text }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
