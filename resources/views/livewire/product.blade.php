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
                <div class="flex flex-col">
                    <div class="flex flex-col">

                        <h5>{{ $product->name ?? '' }}</h5>

                        <div class="flex">
                            @foreach ($product->getMedia() as $item)
                                <div class="flex flex-col gap-x-[30px] mt-8">
                                    <img src="{{ $item->getUrl() }}" width="300px" />
                                </div>
                            @endforeach
                        </div>

                        <div>
                            {!! $product->description ?? '' !!}
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
