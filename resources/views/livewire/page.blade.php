<div>
    <section class="section-breadcrumb">
        <div class="breadcrumb-wrapper">
            <div class="container-default">
                <div class="breadcrumb-block">
                    <h1 class="breadcrumb-title mt-16">{{ $page->title ?? '' }}</h1>
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
                            <article class="jos overflow-hidden bg-white">
                                {!! $page->content ?? 'nothing to show' !!}
                            </article>

                            <div class="horizontal-line bg-ColorBlack"></div>

                        </div>
                    </div>

                    <aside class="jos flex flex-col gap-y-[10px] mt-1">
                        @if ($is_product_knowledge)
                            <div class="rounded-[10px] bg-ColorOffWhite p-8">
                                <div
                                    class="relative mb-[30px] inline-block pb-[10px] text-lg font-semibold text-ColorBlack after:absolute after:bottom-0 after:left-0 after:h-[2px] after:w-full after:bg-black">
                                    Halaman Terkait
                                </div>
                                <!-- Blog Categories List -->
                                <ul class="text-ColorBlack">
                                    @foreach ($product_knowledge as $item)
                                        @if ($item->id === $page->id)
                                            <li
                                                class="border-b border-ColorBlack/10 pb-[14px] pt-[14px] first:pt-0 last:border-b-0 last:pb-0 text-ColorBlue">
                                                {{ $item->title ?? '' }}</li>
                                        @else
                                            <li
                                                class="border-b border-ColorBlack/10 pb-[14px] pt-[14px] first:pt-0 last:border-b-0 last:pb-0">
                                                <a class='hover:text-ColorBlue'
                                                    href='/page/{{ $item->slug }}'>{{ $item->title ?? '' }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
