<!--...::: Product Knowledge Section Start :::... -->
<div>
    @if (!empty($product_knowledge))

        <section class="section-service">
            <div class="relative z-10 overflow-hidden">
                <!-- Section Space -->
                <div class="section-space">
                    <!-- Section Container -->
                    <div class="container-custom">
                        <!-- Section Content Wrapper -->
                        <div class="jos mb-[60px] xl:mb-20">
                            <!-- Section Content Block -->
                            <div class="mx-auto max-w-[590px]">
                                <h2 class="text-center">
                                    Temukan Jumbo Bag (FIBC) Yang Tepat Untuk Keperluan Anda
                                </h2>
                            </div>
                            <!-- Section Content Block -->
                        </div>
                        <!-- Section Content Wrapper -->

                        <!-- Product Knowledge List -->
                        <div class="grid gap-6 sm:grid-cols-2">

                            @foreach ($product_knowledge as $item)
                                <!-- Product Knowledge Item -->
                                <div class="jos" data-jos_delay="0">
                                    <div
                                        class="group rounded-[10px] border border-[#E6E6E6] bg-white p-8 transition-all duration-300 ease-in-out hover:border-ColorOffWhite hover:bg-ColorOffWhite lg:p-10 h-full">
                                        <div class="flex flex-col gap-x-10 gap-y-6 sm:gap-y-8 lg:flex-row">
                                            <div
                                                class="relative mx-auto flex w-16 items-center justify-center lg:w-[98px]">
                                                <img src="{{ $item->getMedia('hover-icon')[0]->getUrl() }}"
                                                    alt="Lifting Options" width="98" height="100"
                                                    class="opcity-100 h-auto w-full transition-all duration-300 ease-in-out group-hover:opacity-0" />
                                                <img src="{{ $item->getMedia('hover-icon')[1]->getUrl() }}"
                                                    alt="icon-service-1" width="98" height="100"
                                                    class="absolute h-auto w-full opacity-0 transition-all duration-300 ease-in-out group-hover:opacity-100" />
                                            </div>
                                            <div class="flex-1 text-center lg:text-left">
                                                <div
                                                    class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                                    {{ $item->title ?? '' }}
                                                </div>
                                                <p class="mb-5 line-clamp-2 text-ColorBlack/80">
                                                    {!! $item->body ?? '' !!}
                                                </p>
                                                <a class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue"
                                                    href="/page/{{ $item->page->slug }}">Lebih lanjut
                                                    <span
                                                        class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Knowledge Item -->
                            @endforeach

                        </div>
                        <!-- Product Knowledge List -->
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Section Space -->

                <!-- Product Knowledge Shape -->
                <div class="absolute bottom-0 left-0 -z-10">
                    <img src="assets/img/elements/service-1-shape-1.svg" alt="service-section-shape" width="390"
                        height="507" />
                </div>
                <!-- Product Knowledge Shape -->
            </div>
        </section>

    @endif
</div>
<!--...::: Product Knowledge Section End :::... -->
