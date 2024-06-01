<!--...::: Testimonial Section Start :::... -->
<div>
    @if (!empty($ceo_remark))
        <section class="section-testimonial">
            <!-- Section Background -->
            <div class="bg-ColorOffWhite">
                <!-- Section Space -->
                <div class="section-space">
                    <!-- Section Container -->
                    <div class="container-custom">
                        <!-- Section Content Wrapper -->
                        <div class="jos mb-[60px] xl:mb-20">
                            <!-- Section Content Block -->
                            <div class="mx-auto max-w-[625px]">
                                <h2 class="text-center">
                                    {{ $ceo_remark->title ?? '' }}
                                </h2>
                            </div>
                            <!-- Section Content Block -->
                        </div>
                        <!-- Section Content Wrapper -->

                        <!-- Testimonial Area -->
                        <div
                            class="grid items-center gap-10 lg:grid-cols-2 xl:gap-20 xxl:grid-cols-[1.1fr_minmax(0,_1fr)]">
                            <img src="assets/img/th-1/testimonial-image-1.jpg" alt="testimonial-image-1" width="636"
                                height="446" class="jos h-auto w-full rounded-2xl" data-jos_animation="fade-right" />
                            <div class="jos flex flex-col text-ColorBlack" data-jos_animation="fade-left">
                                <img src="assets/img/icons/icon-blue-quote-right-reverse.svg"
                                    alt="icon-blue-quote-right-reverse" width="90" height="60"
                                    class="h-auto w-10 xl:w-[90px] mb-6" />
                                {{-- {!! str_replace(
                                    '<p>',
                                    '<p class="mt-[30px] text-xl font-semibold leading-[1.33] -tracking-[0.5px] lg:text-2xl">',
                                    str_replace(
                                        '<li>',
                                        '<li><span class="mr-3 inline-block text-xl text-ColorBlue"><i class="fa-solid fa-badge-check"></i></span>',
                                        $ceo_remark->body,
                                    ),
                                ) ?? '' !!} --}}

                                {!! str_replace(
                                    '<li>',
                                    '<li><span class="mr-3 inline-block text-xl text-ColorBlue"><i class="fa-solid fa-badge-check"></i></span>',
                                    $ceo_remark->body,
                                ) ?? '' !!}
                                <a class="group text-base font-bold capitalize leading-[1.5] hover:text-ColorBlue mt-2"
                                    href="#">Lebh lanjut
                                    <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                        <!-- Testimonial Area -->
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Section Space -->
            </div>
            <!-- Section Background -->
        </section>
    @endif
</div>
<!--...::: Testimonial Section End :::... -->
