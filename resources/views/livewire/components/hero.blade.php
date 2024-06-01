<!--...::: Hero Section Start :::... -->
<div>
    @if (!empty($hero))

        <section class="section-hero">
            <div class="relative z-10 overflow-hidden bg-[#FAF9F5]">
                <!-- Section Space -->
                <div class="pb-[60px] pt-28 md:pb-20 md:pt-36 lg:pb-[100px] lg:pt-[150px] xxl:pb-[120px] xxl:pt-[185px]">
                    <!-- Section Container -->
                    <div class="container-custom">
                        <!-- Hero Area -->
                        <div class="grid gap-10 lg:grid-cols-2 xxl:grid-cols-[1.1fr_minmax(0,_1fr)]">
                            <!-- Hero Content Block -->
                            <div class="jos">
                                <div class="has-container-custom">
                                    <h1 class="mb-6">{{ $hero->title ?? '' }}</h1>
                                    <p>
                                        {!! str_replace(
                                            '<li>',
                                            '<li><span class="mr-3 inline-block text-xl text-ColorBlue"><i class="fa-solid fa-badge-check"></i></span>',
                                            $hero->body,
                                        ) ?? '' !!}
                                    </p>
                                </div>
                            </div>
                            <!-- Hero Content Block -->

                            <!-- Hero Image Block -->
                            <div class="jos">
                                <div class="relative flex items-center justify-center rounded">
                                    @if (!empty($hero))
                                        <img src="{{ $hero->getMedia()[0]->getUrl() }}" alt="hero image"
                                            class="h-auto w-full rounded-lg" />
                                    @endif
                                </div>
                            </div>
                            <!-- Hero Image Block -->
                        </div>
                        <!-- Hero Area -->
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Section Space -->

                <!-- Hero Shape - 1 -->
                <div class="absolute left-0 top-0 -z-10">
                    <img src="assets/img/elements/hero-1-shape-1.svg" alt="hero-shape-1" width="607" height="792"
                        class="" />
                </div>

                <!-- Hero Shape - 2 -->
                <div class="absolute bottom-0 right-0 -z-[1]">
                    <img src="assets/img/elements/hero-1-shape-2.svg" alt="hero-shape-2" width="607"
                        height="792" />
                </div>
            </div>
        </section>

    @endif
</div>
<!--...::: Hero Section End :::... -->
