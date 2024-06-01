<!--...::: Content Section Start :::... -->
<div>
    @if (!empty($blocks))

        <section class="section-content">
            <!-- Section Background -->
            <div class="bg-ColorOffWhite">
                <!-- Section Spacer -->
                <div class="section-space">
                    <!-- Section Container -->
                    <div class="container-custom">
                        <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">

                            @foreach ($blocks as $i => $item)
                                @if ($i % 2 === 0)
                                    <!-- Content Area Single -->
                                    <div
                                        class="grid items-center gap-10 lg:grid-cols-2 lg:gap-24 xl:grid-cols-[1.2fr_minmax(0,_1fr)] xl:gap-[135px]">
                                        <!-- Content Block Left -->
                                        <div class="jos" data-jos_animation="fade-right">
                                            <!-- Section Wrapper -->
                                            <div>
                                                <!-- Section Block -->
                                                <div class="mb-5">
                                                    <h2>
                                                        {{ $item->title ?? '' }}
                                                    </h2>
                                                </div>
                                                <!-- Section Block -->
                                            </div>
                                            <!-- Section Wrapper -->

                                            {!! str_replace(
                                                '<li>',
                                                '<li><span class="mr-3 inline-block text-xl text-ColorBlue"><i class="fa-solid fa-badge-check"></i></span>',
                                                $item->body,
                                            ) ?? '' !!}

                                            <div class="jos mt-[60px] flex justify-center xl:mt-20">
                                                <a class="btn is-blue is-rounded btn-animation is-large group"
                                                    href="#"><span>Konsultasikan Kebutuhan Anda
                                                        Sekarang</span></a>
                                            </div>
                                        </div>
                                        <!-- Content Block Left -->
                                        <!-- Content Block Right -->
                                        <div class="jos relative" data-jos_animation="fade-left">
                                            <div class="rounded-[10px] bg-[#FCEDCF] p-[30px] lg:p-10 xl:p-[50px]">
                                                <!-- Content Image -->
                                                <img src="{{ $item->getMedia()[0]->getUrl() }}" alt="content-img-1"
                                                    width="426" height="398"
                                                    class="h-auto w-full rounded-[10px]" />
                                            </div>
                                            <!-- Content Shape -->
                                            <img src="assets/img/elements/content-shape-1.svg" alt="content-shape-1"
                                                width="168" height="61" class="absolute -right-16 -top-16" />
                                        </div>
                                        <!-- Content Block Right -->
                                    </div>
                                    <!-- Content Area Single -->
                                @else
                                    <!-- Content Area Single -->
                                    <div
                                        class="grid items-center gap-10 lg:grid-cols-2 lg:gap-24 xl:grid-cols-[1fr_minmax(0,_1.2fr)] xl:gap-[135px]">
                                        <!-- Content Block Left -->
                                        <div class="jos lg:order-2" data-jos_animation="fade-left">
                                            <!-- Section Wrapper -->
                                            <div>
                                                <!-- Section Block -->
                                                <div class="mb-5">
                                                    <h2>
                                                        {{ $item->title ?? '' }}
                                                    </h2>
                                                </div>
                                                <!-- Section Block -->
                                            </div>
                                            <!-- Section Wrapper -->
                                            {!! str_replace(
                                                '<li>',
                                                '<li><span class="mr-3 inline-block text-xl text-ColorBlue"><i class="fa-solid fa-badge-check"></i></span>',
                                                $item->body,
                                            ) ?? '' !!}
                                        </div>
                                        <!-- Content Block Left -->
                                        <!-- Content Block Right -->
                                        <div class="jos relative lg:order-1" data-jos_animation="fade-right">
                                            <div class="rounded-[10px] bg-[#BEF8FC] p-[30px] lg:p-10 xl:p-[50px]">
                                                <!-- Content Image -->
                                                <img src="{{ $item->getMedia()[0]->getUrl() }}" alt="content-img-1"
                                                    width="426" height="398"
                                                    class="h-auto w-full rounded-[10px]" />
                                            </div>
                                            <!-- Content Shape -->
                                            <img src="assets/img/elements/content-shape-2.svg" alt="content-shape-1"
                                                width="107" height="105" class="absolute -bottom-1 -left-1" />
                                        </div>
                                        <!-- Content Block Right -->
                                    </div>
                                    <!-- Content Area Single -->
                                @endif
                            @endforeach

                        </div>
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Section Spacer -->
            </div>
            <!-- Section Background -->
        </section>

    @endif
</div>
<!--...::: Content Section End :::... -->
