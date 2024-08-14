<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? config('app.name', 'CV Pewali') }}</title>
    <meta name="description" content="AIMass Tailwind based SASS Template" />

    <link rel="icon" href="{{ asset('assets/img/favicon-32x32.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/iconfonts/font-awesome/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/webfonts/inter/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/webfonts/plus-jakarta-sans/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/jos.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/menu.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-QEH6GG6PLQ"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-QEH6GG6PLQ');
</script>

<body>
    <div class="page-wrapper relative z-[1] bg-white">
        <header class="site-header site-header--absolute is--white py-3" id="sticky-menu">
            <div class="container-default">
                <div class="flex items-center justify-between gap-x-8">
                    <a class="logo" href="/">
                        <img src="{{ asset('assets/img/pewali.svg') }}" alt="Pewali" width="120" />
                    </a>

                    <livewire:components.top-menu />

                    <div class="flex items-center gap-6">
                        <div class="block lg:hidden">
                            <button id="openBtn" class="hamburger-menu mobile-menu-trigger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="main-wrapper relative overflow-hidden">
            {{ $slot }}
        </main>

        <footer class="section-footer">
            <div class="bg-ColorBlack">
                <div class="relative z-10">
                    <div class="pb-[60px] pt-20 lg:pb-20 lg:pt-[100px] xl:pt-[120px]">
                        <div class="container-default">
                            <div
                                class="flex flex-wrap items-center justify-center text-center lg:text-left lg:justify-between gap-8">
                                <div class="max-w-[400px] md:max-w-[500px] lg:max-w-[550px]">
                                    <h2 class="text-white">
                                        Sudah menemukan kebutuhan bisnis Anda?
                                    </h2>
                                </div>
                                <a class="btn is-blue is-rounded btn-animation is-large group"
                                    href="#"><span>Let's start the project</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="absolute right-[9%] top-8 -z-10 hidden xxl:block">
                        <img src="{{ asset('assets/img/elements/cta-1-shape-1.svg') }}" alt="cta-1-shape-1"
                            width="115" height="130" />
                    </div>
                </div>

                <div class="horizontal-line bg-white"></div>

                <div class="text-white">
                    <div class="py-[60px] lg:py-20">
                        <div class="container-default">
                            <div
                                class="grid gap-x-16 gap-y-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-[1fr_repeat(3,_auto)] xl:gap-x-24 xxl:gap-x-[134px]">
                                <div class="flex flex-col gap-y-7 md:col-span-3 lg:col-span-1">
                                    <a href="/">
                                        <img class="logo" src="{{ asset('assets/img/pewali.svg') }}"
                                            alt="PEWALI" />
                                    </a>
                                    <div>
                                        <div class="lg:max-w-[416px]">
                                            Dari bekasi, berkarya untuk Indonesia, sejak tahun 2015.
                                        </div>
                                        <a href="mailto:hello@pewali.com"
                                            class="my-6 block underline-offset-4 transition-all duration-300 hover:underline">hello@pewali.com</a>
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
                                </div>

                                <livewire:components.bottom-menu />

                                <div class="flex flex-col gap-y-6 md:col-span-1 lg:col-span-1">
                                    <div class="text-xl font-semibold capitalize">&nbsp;</div>
                                    <ul class="flex flex-col gap-y-[10px] capitalize">
                                        <li>
                                            <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer"
                                                class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Support</a>
                                        </li>
                                        <li>
                                            <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer"
                                                class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Privacy
                                                policy</a>
                                        </li>
                                        <li>
                                            <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer"
                                                class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Terms
                                                & Conditions</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white bg-opacity-5">
                    <div class="py-[18px]">
                        <div class="container-default">
                            <div class="text-center text-white text-opacity-80">
                                &copy; Copyright 2024, All Rights Reserved by PEWALI
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <script src="{{ asset('assets/js/vendors/counterup.js') }}" type="module"></script>
    <script src="{{ asset('assets/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/fslightbox.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jos.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/menu.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>
