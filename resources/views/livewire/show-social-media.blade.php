<div class="d-flex align-items-center gap-2">
    @foreach ($socialmedias as $socialmedia)
        <a href="{{ $socialmedia->social_link }}"
            class="bg-white text-primary rounded-circle d-flex align-items-center justify-content-center"
            style="width: 35px; height: 35px">
            <i class="{{ $socialmedia->social_icon }}"></i>
        </a>
    @endforeach
</div>
