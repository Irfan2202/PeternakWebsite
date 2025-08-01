<section class="services" id="services">
    <div class="container text-center">
        <h6 class="text-uppercase  text-warning fw-semibold mb-2">{{ $serviceSection->name }}</h6>
        <h1 class="display-5 fw-bold mb-5 text-white">
            {{ $serviceSection->title }}
        </h1>
        <livewire:show-services />
    </div>
</section>
