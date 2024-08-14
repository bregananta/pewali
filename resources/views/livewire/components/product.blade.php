<section class="section-portfolio">
    <div class="relative z-10 overflow-hidden">
        <div class="section-space">
            <div class="container-default">
                <div class="jos mb-[60px] flex flex-wrap items-end justify-between gap-8 xl:mb-20">
                    <div class="max-w-[550px]">
                        <h2>
                            Kami Merancang &amp;Memproduksi Produk Berkualitas Tinggi
                        </h2>
                    </div>
                    <a class="btn is-blue is-rounded btn-animation is-large group" href="/products"><span>Lihat lebih
                            banyak</span></a>
                </div>

                <div class="grid gap-8 md:grid-cols-2 lg:gap-10 xl:gap-[60px]">
                    @foreach ($products as $product)
                        <div class="jos w-1/2" data-jos_delay="0">
                            <div class="group">
                                <div
                                    class="overflow-hidden max-h-[350px] group rounded-[10px] border border-[#E6E6E6] bg-white p-8 transition-all duration-300 ease-in-out hover:border-ColorOffWhite hover:bg-ColorOffWhite lg:p-10 h-full">
                                    <img src="{{ $product->getMedia()[0]->getUrl() }}" alt="portfolio-img-1"
                                        class="max-h-[350px] object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                </div>
                                <div class="mt-6">
                                    <div
                                        class="mb-5 flex flex-wrap justify-between gap-5 text-ColorBlack lg:flex-nowrap xl:mb-7">
                                        <a class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue xl:text-2xl"
                                            href="#">{{ $product->name }}</a>

                                    </div>
                                    <p>{{ $product->sku }}</p>
                                    <a class="text-base font-bold capitalize leading-[1.5] group-hover:text-ColorBlue"
                                        href="#">Lihat
                                        <span
                                            class="inline-block transition-all duration-150 group-hover:translate-x-2"><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="absolute right-0 top-0 -z-10">
            <img src="assets/img/elements/portfolio-1-shape-1.svg" alt="portfolio-1-shape-1" width="467"
                height="609" />
        </div>
    </div>
</section>
