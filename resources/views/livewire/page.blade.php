<div>

    <!--...::: Breadcrumb Section Start :::... -->
    <section class="section-breadcrumb">
        <!-- Breadcrumb Section Spacer -->
        <div class="breadcrumb-wrapper">
            <!-- Section Container -->
            <div class="container-default">
                <div class="breadcrumb-block">
                    <h1 class="breadcrumb-title mt-16">{{ $page->title ?? '' }}</h1>
                    {{-- <ul class="breadcrumb-nav">
                        <li><a href='index.html'>Home</a></li>
                        <li>Pages</li>
                    </ul> --}}
                </div>
            </div>
            <!-- Section Container -->

            <!-- Breadcrumb Shape - 1 -->
            <div class="absolute left-0 top-0 -z-10">
                <img src="{{ asset('assets/img/elements/breadcrumb-shape-1.svg') }}" alt="hero-shape-1" width="291"
                    height="380" />
            </div>

            <!-- Breadcrumb Shape - 2 -->
            <div class="absolute bottom-0 right-0 -z-[1]">
                <img src="{{ asset('assets/img/elements/breadcrumb-shape-2.svg') }}" alt="hero-shape-2" width="291"
                    height="380" />
            </div>
        </div>
        <!-- Breadcrumb Section Spacer -->
    </section>
    <!--...::: Breadcrumb Section End :::... -->

    <!--...::: Blog Section Start :::... -->
    <div class="blog-section">
        <!-- Section Spacer -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <div class="grid grid-cols-1 gap-x-6 gap-y-10 lg:grid-cols-[1fr,minmax(416px,_0.45fr)]">
                    <div class="flex flex-col gap-y-10 lg:gap-y-14 xl:gap-y-20">
                        <!-- Blog Post Area -->
                        <div class="flex flex-col gap-6">
                            <!-- Blog Post Article -->
                            <article class="jos overflow-hidden bg-white">
                                {!! $page->content ?? 'nothing to show' !!}
                            </article>
                            <!-- Blog Post Article -->



                            <!-- Horizontal Line Separator -->
                            <div class="horizontal-line bg-ColorBlack"></div>
                            <!-- Horizontal Line Separator -->


                        </div>
                        <!-- Blog Post DetailArea -->
                    </div>
                    <!-- Blog Aside -->
                    <aside class="jos flex flex-col gap-y-[30px] mt-8">
                        <!-- Single Sidebar -->
                        <div class="rounded-[10px] bg-ColorOffWhite p-5">
                            <!-- Sidebar Search -->
                            <form action="#" method="post" class="relative h-[60px]">
                                <input type="search" name="sidebar-search" id="sidebar-search"
                                    placeholder="Type to search..."
                                    class="focus:border-colortext-ColorBlue h-full w-full rounded-[50px] border border-[#E1E1E1] bg-white py-[15px] pl-16 pr-8 text-lg text-ColorBlack outline-none transition-all placeholder:text-ColorBlack"
                                    required />
                                <button type="submit" class="absolute left-[30px] top-0 h-full hover:text-ColorBlue">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </form>
                            <!-- Sidebar Search -->
                        </div>
                        <!-- Single Sidebar -->
                        <!-- Single Sidebar -->
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
                                <!-- Blog Categories List -->
                            </div>
                        @endif
                        <!-- Single Sidebar -->
                        <!-- Single Sidebar -->
                        {{-- <div class="rounded-[10px] bg-ColorOffWhite p-8">
                            <div
                                class="relative mb-[30px] inline-block pb-[10px] text-lg font-semibold text-ColorBlack after:absolute after:bottom-0 after:left-0 after:h-[2px] after:w-full after:bg-black">
                                Recent Posts
                            </div>

                            <ul class="flex flex-col gap-y-6">
                                <li class="group flex flex-col items-center gap-x-4 gap-y-4 sm:flex-row">
                                    <a class='inline-block h-[100px] w-full overflow-hidden rounded-[5px] sm:w-[150px]'
                                        href='blog-details.html'>
                                        <img src="assets/img/th-1/blog-recent-img-1.jpg" alt="blog-recent-img-1"
                                            width="150" height="100"
                                            class="h-full w-full scale-100 object-cover transition-all duration-300 group-hover:scale-105" />
                                    </a>
                                    <div class="flex w-full flex-col gap-y-3 sm:w-auto sm:flex-1">
                                        <a class='flex items-center gap-[10px] text-sm hover:text-ColorBlue'
                                            href='blog-details.html'>
                                            <i class="fa-regular fa-calendar"></i>
                                            June 12, 2024
                                        </a>
                                        <a class='line-clamp-2 text-base font-semibold text-ColorBlack hover:text-ColorBlue'
                                            href='blog-details.html'>Six ‘what ifs’ that could transformdigital agency
                                        </a>
                                    </div>
                                </li>
                                <li class="group flex flex-col items-center gap-x-4 gap-y-4 sm:flex-row">
                                    <a class='inline-block h-[100px] w-full overflow-hidden rounded-[5px] sm:w-[150px]'
                                        href='blog-details.html'>
                                        <img src="assets/img/th-1/blog-recent-img-2.jpg" alt="blog-recent-img-2"
                                            width="150" height="100"
                                            class="h-full w-full scale-100 object-cover transition-all duration-300 group-hover:scale-105" />
                                    </a>
                                    <div class="flex w-full flex-col gap-y-3 sm:w-auto sm:flex-1">
                                        <a class='flex items-center gap-[10px] text-sm hover:text-ColorBlue'
                                            href='blog-details.html'>
                                            <i class="fa-regular fa-calendar"></i>
                                            June 13, 2024
                                        </a>
                                        <a class='line-clamp-2 text-base font-semibold text-ColorBlack hover:text-ColorBlue'
                                            href='blog-details.html'>Case story: How to the design avatar generator
                                        </a>
                                    </div>
                                </li>
                                <li class="group flex flex-col items-center gap-x-4 gap-y-4 sm:flex-row">
                                    <a class='inline-block h-[100px] w-full overflow-hidden rounded-[5px] sm:w-[150px]'
                                        href='blog-details.html'>
                                        <img src="assets/img/th-1/blog-recent-img-3.jpg" alt="blog-recent-img-3"
                                            width="150" height="100"
                                            class="h-full w-full scale-100 object-cover transition-all duration-300 group-hover:scale-105" />
                                    </a>
                                    <div class="flex w-full flex-col gap-y-3 sm:w-auto sm:flex-1">
                                        <a class='flex items-center gap-[10px] text-sm hover:text-ColorBlue'
                                            href='blog-details.html'>
                                            <i class="fa-regular fa-calendar"></i>
                                            June 07, 2024
                                        </a>
                                        <a class='line-clamp-2 text-base font-semibold text-ColorBlack hover:text-ColorBlue'
                                            href='blog-details.html'>Build a digital agency website in 4 easy steps
                                        </a>
                                    </div>
                                </li>
                            </ul>

                        </div> --}}
                        <!-- Single Sidebar -->

                        <!-- Single Sidebar -->
                        {{-- <div class="rounded-[10px] bg-ColorOffWhite p-8">
                            <div
                                class="relative mb-[30px] inline-block pb-[10px] text-lg font-semibold text-ColorBlack after:absolute after:bottom-0 after:left-0 after:h-[2px] after:w-full after:bg-black">
                                Subscribe
                            </div>

                            <p class="mb-3 text-ColorBlack">
                                Subscribe to our newsletter and get the latest news
                                updates lifetime
                            </p>

                            <form action="#" method="post" class="flex flex-col">
                                <input type="email" name="sidebar-newsletter" id="sidebar-newsletter"
                                    placeholder="Enter your email address"
                                    class="border-colorCodGray focus:border-colortext-ColorBlue h-[60px] w-full rounded-[50px] border bg-transparent px-10 py-[15px] text-lg outline-none transition-all placeholder:text-black"
                                    required />
                                <button type="submit" class="btn is-blue is-rounded is-large group mt-8 lg:mt-4">
                                    Subscribe Now
                                </button>
                            </form>
                        </div> --}}
                        <!-- Single Sidebar -->
                    </aside>
                    <!-- Blog Aside -->
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Spacer -->
    </div>
    <!--...::: Blog Section End :::... -->
</div>
