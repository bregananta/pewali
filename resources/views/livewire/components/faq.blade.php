<section class="section-faq">
    <div class="relative z-10 overflow-hidden">
        <div class="section-space">
            <div class="container-default">
                <div class="jos mb-[60px] xl:mb-20">
                    <div class="mx-auto max-w-[625px]">
                        <h2 class="text-center">
                            Pertanyaan Yang Sering Timbul (F.A.Q)
                        </h2>
                    </div>
                </div>
                <div class="jos">
                    <ul class="mx-auto max-w-[1076px] rounded-[10px] border border-ColorBlack">

                        @foreach ($faqs as $faq)
                            <li
                                class="accordion-item {{ $loop->index === 0 ? 'active' : '' }} overflow-hidden border-b border-ColorBlack p-[30px] last:border-b-0">
                                <div
                                    class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                    <button class="flex-1 text-left">
                                        Q. {{ $faq->question }}
                                    </button>
                                    <div
                                        class="accordion-icon-1 relative flex h-5 w-5 items-center justify-center rounded-[50%] bg-ColorBlue">
                                        <span class="inline-block h-0.5 w-[10px] rounded-sm bg-white"></span>
                                        <span
                                            class="absolute inline-block h-[10px] w-0.5 rotate-0 rounded-sm bg-white"></span>
                                    </div>
                                </div>
                                <div class="accordion-body max-w-[826px] opacity-80">
                                    <p class="pt-5">
                                        {!! $faq->answer !!}
                                    </p>
                                </div>
                            </li>
                        @endforeach

                    </ul>

                    <div class="jos mt-[60px] flex justify-center xl:mt-20">
                        <a class="btn is-blue is-rounded btn-animation is-large group"
                            href="/page/kontak-kami"><span>Masih
                                memiliki pertanyaan? Hubungi Kami</span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute left-0 top-0 -z-10">
            <img src="assets/img/elements/faq-1-shape-1.svg" alt="service-section-shape" width="390"
                height="507" />
        </div>

        <div class="absolute bottom-0 right-0 -z-10">
            <img src="assets/img/elements/faq-1-shape-2.svg" alt="service-section-shape" width="467"
                height="609" />
        </div>
    </div>
</section>
