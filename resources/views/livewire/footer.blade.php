<!-- Footer Section -->
<footer class="overlay text-white pt-5" id="contact">
    <div class="container">

        <!-- Top Contact Info -->

        <livewire:show-contact />

        <!-- Divider -->
        <hr class="border-light" />

        <!-- Middle Content: Company Info, Services, Quick Links -->
        <div class="row text-start">
            <!-- Company Description -->
            <div class="col-md-4 mb-4">
                <a class="navbar-brand fw-bold" href="#">
                    Peternak<span class="text-warning">Website</span>
                </a>
                <p>
                    {{ $about->description }}
                </p>
            </div>

            <!-- List of Services -->
            <div class="col-md-4 mb-4">
                <h6 class="fw-bold">// Layanan</h6>
                <ul class="list-unstyled">
                    @foreach ($services as $service)
                        <li class="text-white text-decoration-none d-block py-1">
                            {{ $service->title }}
                        </li>
                    @endforeach

                </ul>
            </div>

            <!-- Quick Navigation Links -->
            <div class="col-md-4 mb-4">
                <h6 class="fw-bold">// Tautan Cepat</h6>
                <ul class="list-unstyled">
                    <li>
                        <a href="#about" class="text-white text-decoration-none d-block py-1">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="#services" class="text-white text-decoration-none d-block py-1">Layanan</a>
                    </li>
                    <li>
                        <a href="#pricing" class="text-white text-decoration-none d-block py-1">Harga</a>
                    </li>
                    <li>
                        <a href="#contact" class="text-white text-decoration-none d-block py-1">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Divider -->
        <hr class="border-light" />

        <!-- Bottom Footer Section -->
        <div
            class="d-flex flex-column flex-md-row justify-content-between align-items-center py-3 border-top border-light mt-4">

            <!-- Copyright -->
            <div class="text-white small mb-2 mb-md-0">
                &copy; 2025 Dibuat oleh
                <a href="#" class="text-warning text-decoration-none">Peternak Website</a>
            </div>

            <!-- Social Media Icons + Back to Top -->
            <div class="d-flex align-items-center gap-2">
                <livewire:show-social-media />

                <!-- Scroll to Top Button -->
                <a href="#"
                    class="bg-warning text-white rounded-circle d-flex align-items-center justify-content-center ms-2"
                    style="width: 35px; height: 35px">
                    <i class="bi bi-chevron-up"></i>
                </a>
            </div>
        </div>
    </div>
</footer>
