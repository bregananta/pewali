    <div class="section-brand">
        @if ($clients->count() > 0)
            <div class="jos">
                <div class="py-[60px] md:py-20 lg:py-[100px]">
                    <div class="container-default">
                        <div
                            class="mx-auto mb-10 max-w-[80%] text-center text-xl font-semibold leading-[1.4] opacity-70 md:mb-16 lg:mb-20 lg:max-w-2xl">
                            Mulai dari UMKM hingga Korporasi Besar telah menggunakan
                            produk PEWALI
                        </div>
                        <div class="swiper brand-slider">
                            <div class="swiper-wrapper">

                                @foreach ($clients as $client)
                                    <div class="swiper-slide">
                                        <img src="{{ $client->getMedia()[0]->getUrl() }}" alt="{{ $client->name }}"
                                            width="186" height="46" class="h-auto w-fit" />
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
