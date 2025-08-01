<div class="row text-center mb-5">
    @foreach ($contactinfos as $contactinfo)
        <div class="contact col-md-4 mb-4">
            <a href="{{ $contactinfo->url }}">
                <i class="{{ $contactinfo->icon_class }} fs-2 mb-2 text-warning"></i>
                <h6 class="fw-bold">{{ $contactinfo->label }}</h6>
                <p>{{ $contactinfo->value }}</p>
            </a>
        </div>
    @endforeach
</div>
