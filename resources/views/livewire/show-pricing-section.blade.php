<section class="pricing" id="pricing">
    <div class="container">
        <div class="justify-content-center text-center">
            <h6 class="text-uppercase text-warning fw-semibold mb-2">
                {{ $pricing->name }}
            </h6>
            <h1 class="display-5 fw-bold mb-5">{{ $pricing->title }}</h1>
        </div>
        <livewire:show-packages />
    </div>
</section>
