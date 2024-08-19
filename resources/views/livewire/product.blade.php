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


                            <div class="w-full">
                                <h5>{{ $product->name ?? '' }}</h5>

                                <div class="flex px-8 py-10">
                                    @foreach ($product->getMedia() as $item)
                                        <div class="flex flex-col gap-x-[30px] mt-8">
                                            <img src="{{ $item->getUrl() }}" width="300px" />
                                        </div>
                                    @endforeach
                                </div>

                                <div>
                                    {!! $product->description ?? '' !!}
                                </div>

                            </div>


                            <div class="horizontal-line bg-ColorBlack"></div>

                        </div>
                    </div>
                    <aside class="jos flex flex-col gap-y-[30px]" style="margin-top: 50px;">
                        <div class="rounded-[10px] bg-ColorOffWhite p-8">
                            <div
                                class="relative mb-[30px] inline-block pb-[10px] text-lg font-semibold text-ColorBlack after:absolute after:bottom-0 after:left-0 after:h-[2px] after:w-full after:bg-black">
                                Kategori Produk
                            </div>
                            <ul>
                                @foreach ($categories as $category)
                                    @if ($product->category->id === $category->id)
                                        <li class="pb-[10px] text-ColorBlue">
                                            <a href="/product-category/{{ $category->id }}">{{ $category->title }}</a>
                                        @else
                                        <li class="pb-[10px]">
                                            <a href="/product-category/{{ $category->id }}">{{ $category->title }}</a>
                                    @endif

                                    @if ($category->children->count() > 0)
                                        <ul style="padding-top: 10px;">
                                            @foreach ($category->childrenRecursive as $child)
                                                @include('livewire.components.child_category', [
                                                    'child' => $child,
                                                ])
                                            @endforeach
                                        </ul>
                                    @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
