<div>
    <section class="section-breadcrumb">
        <div class="breadcrumb-wrapper">
            <div class="container-default">
                <div class="breadcrumb-block">
                    <h1 class="breadcrumb-title mt-16">Produk CV Pewali</h1>
                </div>
            </div>

            <div class="absolute left-0 top-0 -z-10">
                <img src="{{ asset('assets/img/elements/breadcrumb-shape-1.svg') }}" alt="hero-shape-1" width="291"
                    height="380" />
            </div>

            <div class="absolute bottom-0 right-0 -z-[1]">
                <img src="{{ asset('assets/img/elements/breadcrumb-shape-2.svg') }}" alt="hero-shape-2" width="291"
                    height="380" />
            </div>
        </div>
    </section>

    <div class="blog-section">
        <div class="section-space">
            <div class="container-default">
                <div class="grid grid-cols-1 gap-x-6 gap-y-10 lg:grid-cols-[1fr,minmax(416px,_0.45fr)]">
                    <div class="flex flex-col gap-y-10 lg:gap-y-14 xl:gap-y-20">
                        <div class="flex flex-col gap-6">

                            @if ($featured_products->isNotEmpty())
                                <h5>Produk Unggulan</h5>
                            @endif
                            <div class="grid gap-8 md:grid-cols-2 lg:gap-10 xl:gap-[60px]">
                                @foreach ($featured_products as $item)
                                    <div class="jos" data-jos_delay="0">
                                        <div class="group">
                                            <a href="/product/{{ $item->sku }}">
                                                <div
                                                    class="overflow-hidden group rounded-[10px] border border-[#E6E6E6] bg-white p-8 transition-all duration-300 ease-in-out hover:border-ColorOffWhite hover:bg-ColorOffWhite lg:p-10 h-full">
                                                    <img src="{{ $item->getMedia()[0]->getUrl() }}"
                                                        alt="portfolio-img-1" height="350"
                                                        class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                                </div>
                                            </a>
                                            <div class="mt-6">
                                                <div
                                                    class="mb-5 flex flex-wrap justify-between gap-5 text-ColorBlack lg:flex-nowrap xl:mb-7">
                                                    <a class="leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue"
                                                        href="/product/{{ $item->sku }}">{{ $item->name ?? '' }}</a>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach

                            </div>

                            @if ($products->isNotEmpty())
                                <h5>Produk Tersedia</h5>
                            @endif
                            <div class="grid gap-8 md:grid-cols-2 lg:gap-10 xl:gap-[60px]">
                                @foreach ($products as $item)
                                    <div class="jos" data-jos_delay="0">
                                        <div class="group">
                                            <a href="/products/{{ $item->sku }}">
                                                <div
                                                    class="overflow-hidden group rounded-[10px] border border-[#E6E6E6] bg-white p-8 transition-all duration-300 ease-in-out hover:border-ColorOffWhite hover:bg-ColorOffWhite lg:p-10 h-full">
                                                    <img src="{{ $item->getMedia()[0]->getUrl() }}"
                                                        alt="portfolio-img-1" height="350"
                                                        class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                                </div>
                                            </a>
                                            <div class="mt-6">
                                                <div
                                                    class="mb-5 flex flex-wrap justify-between gap-5 text-ColorBlack lg:flex-nowrap xl:mb-7">
                                                    <a class="leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue"
                                                        href="/products/{{ $item->sku }}">{{ $item->name ?? '' }}</a>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach

                            </div>

                            <div class="horizontal-line bg-ColorBlack"></div>

                        </div>
                    </div>
                    <aside class="jos flex flex-col gap-y-[30px] mt-8">
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
