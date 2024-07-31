<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? config('app.name', 'CV Pewali') }}</title>
    <meta name="description" content="AIMass Tailwind based SASS Template" />

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('assets/img/favicon-32x32.png') }}" />

    <!-- Icon Font -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/iconfonts/font-awesome/stylesheet.css') }}" />
    <!-- Site font -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/webfonts/inter/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/webfonts/plus-jakarta-sans/stylesheet.css') }}" />

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/jos.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/menu.css') }}" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />

    <!-- Development css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

    <!-- Production css -->
    <!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->
</head>

<body>
    {{-- @include('chat') --}}
    <div class="page-wrapper relative z-[1] bg-white">
        <!--...::: Header Start :::... -->
        <header class="site-header site-header--absolute is--white py-3" id="sticky-menu">
            <div class="container-default">
                <div class="flex items-center justify-between gap-x-8">
                    <!-- Header Logo -->
                    <a class="logo" href="/">
                        <img src="{{ asset('assets/img/pewali.svg') }}" alt="Pewali" width="120" />
                    </a>
                    <!-- Header Logo -->

                    <livewire:components.top-menu />

                    <!-- Header User Event -->
                    <div class="flex items-center gap-6">
                        <!-- Responsive Offcanvas Menu Button -->
                        <div class="block lg:hidden">
                            <button id="openBtn" class="hamburger-menu mobile-menu-trigger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <!-- Header User Event -->
                </div>
            </div>
        </header>
        <!--...::: Header End :::... -->

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-LZGM3L63YD"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-LZGM3L63YD');
        </script>

        <main class="main-wrapper relative overflow-hidden">
            {{ $slot }}
        </main>

        <!--...::: Footer Section Start :::... -->
        <footer class="section-footer">
            <div class="bg-ColorBlack">
                <!-- Footer Area Top -->
                <div class="relative z-10">
                    <!-- Footer Top Spacing -->
                    <div class="pb-[60px] pt-20 lg:pb-20 lg:pt-[100px] xl:pt-[120px]">
                        <!-- Section Container -->
                        <div class="container-default">
                            <!-- Section Wrapper -->
                            <div
                                class="flex flex-wrap items-center justify-center text-center lg:text-left lg:justify-between gap-8">
                                <!-- Section Block -->
                                <div class="max-w-[400px] md:max-w-[500px] lg:max-w-[550px]">
                                    <h2 class="text-white">
                                        Sudah menemukan kebutuhan bisnis Anda?
                                    </h2>
                                </div>
                                <!-- Section Block -->
                                <a class="btn is-blue is-rounded btn-animation is-large group"
                                    href="#"><span>Let's start the project</span></a>
                            </div>
                            <!-- Section Wrapper -->
                        </div>
                        <!-- Section Container -->
                    </div>
                    <!-- Footer Top Spacing -->

                    <!-- CTA Shape -->
                    <div class="absolute right-[9%] top-8 -z-10 hidden xxl:block">
                        <img src="{{ asset('assets/img/elements/cta-1-shape-1.svg') }}" alt="cta-1-shape-1"
                            width="115" height="130" />
                    </div>
                </div>
                <!-- Footer Area Top -->

                <!-- Horizontal Line Separator -->
                <div class="horizontal-line bg-white"></div>
                <!-- Horizontal Line Separator -->

                <!-- Footer Area Center -->
                <div class="text-white">
                    <!-- Footer Center Spacing -->
                    <div class="py-[60px] lg:py-20">
                        <!-- Section Container -->
                        <div class="container-default">
                            <!-- Footer Widget List -->
                            <div
                                class="grid gap-x-16 gap-y-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-[1fr_repeat(3,_auto)] xl:gap-x-24 xxl:gap-x-[134px]">
                                <!-- Footer Widget Item -->
                                <div class="flex flex-col gap-y-7 md:col-span-3 lg:col-span-1">
                                    <!-- Footer Logo -->
                                    <a href="index.html">
                                        <img class="logo" src="{{ asset('assets/img/pewali.svg') }}"
                                            alt="PEWALI" />
                                    </a>
                                    <!-- Footer Content -->
                                    <div>
                                        <!-- Footer About Text -->
                                        <div class="lg:max-w-[416px]">
                                            Dari bekasi, berkarya untuk Indonesia, sejak tahun 2015.
                                        </div>
                                        <!-- Footer Mail -->
                                        <a href="mailto:hello@pewali.com"
                                            class="my-6 block underline-offset-4 transition-all duration-300 hover:underline">hello@pewali.com</a>
                                        <!-- Footer Social Link -->
                                        <div class="flex flex-wrap gap-5">
                                            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer"
                                                class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-white bg-opacity-5 text-sm text-white transition-all duration-300 hover:bg-ColorBlue"
                                                aria-label="twitter">
                                                <i class="fa-brands fa-x-twitter"></i>
                                            </a>
                                            <a href="https://www.facebook.com/" target="_blank"
                                                rel="noopener noreferrer"
                                                class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-white bg-opacity-5 text-sm text-white transition-all duration-300 hover:bg-ColorBlue"
                                                aria-label="facebook">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                            <a href="https://www.instagram.com/" target="_blank"
                                                rel="noopener noreferrer"
                                                class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-white bg-opacity-5 text-sm text-white transition-all duration-300 hover:bg-ColorBlue"
                                                aria-label="instagram">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Footer Content -->
                                </div>
                                <!-- Footer Widget Item -->

                                <!-- Footer Widget Item -->
                                <div class="flex flex-col gap-y-7 md:col-span-1 lg:col-span-1">
                                    <!-- Footer Widget Title -->
                                    <div class="text-xl font-semibold capitalize">&nbsp;</div>
                                    <!-- Footer Navbar -->
                                    <ul class="flex flex-col gap-y-[10px] capitalize">
                                        <li>
                                            <a class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline"
                                                href="/">Home</a>
                                        </li>
                                        <li>
                                            <a class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline"
                                                href="#">Tentang Kami</a>
                                        </li>
                                        <li>
                                            <a class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline"
                                                href="#">Produk</a>
                                        </li>
                                        <li>
                                            <a class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline"
                                                href="#">Artikel</a>
                                        </li>
                                        <li>
                                            <a class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline"
                                                href="#">F.A.Q</a>
                                        </li>
                                        <li>
                                            <a class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline"
                                                href="#">Hubungi Kami</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Footer Widget Item -->

                                <!-- Footer Widget Item -->
                                <div class="flex flex-col gap-y-6 md:col-span-1 lg:col-span-1">
                                    <!-- Footer Title -->
                                    <div class="text-xl font-semibold capitalize">&nbsp;</div>
                                    <!-- Footer Title -->

                                    <!-- Footer Navbar -->
                                    <ul class="flex flex-col gap-y-[10px] capitalize">
                                        <li>
                                            <a href="https://www.example.com/" target="_blank"
                                                rel="noopener noreferrer"
                                                class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Support</a>
                                        </li>
                                        <li>
                                            <a href="https://www.example.com/" target="_blank"
                                                rel="noopener noreferrer"
                                                class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Privacy
                                                policy</a>
                                        </li>
                                        <li>
                                            <a href="https://www.example.com/" target="_blank"
                                                rel="noopener noreferrer"
                                                class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Terms
                                                & Conditions</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Footer Widget Item -->
                            </div>
                            <!-- Footer Widget List -->
                        </div>
                        <!-- Section Container -->
                    </div>
                    <!-- Footer Center Spacing -->
                </div>
                <!-- Footer Area Center -->

                <!-- Footer Bottom -->
                <div class="bg-white bg-opacity-5">
                    <!-- Footer Bottom Spacing -->
                    <div class="py-[18px]">
                        <!-- Section Container -->
                        <div class="container-default">
                            <div class="text-center text-white text-opacity-80">
                                &copy; Copyright 2024, All Rights Reserved by PEWALI
                            </div>
                        </div>
                        <!-- Section Container -->
                    </div>
                    <!-- Footer Bottom Spacing -->
                </div>
                <!-- Footer Bottom -->
            </div>
        </footer>
        <!--...::: Footer Section End :::... -->
    </div>

    <!--Vendor js-->
    <script src="{{ asset('assets/js/vendors/counterup.js') }}" type="module"></script>
    <script src="{{ asset('assets/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/fslightbox.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jos.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/menu.js') }}"></script>

    <!-- Main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
