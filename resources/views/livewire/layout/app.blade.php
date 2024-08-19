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
                                    href="/page/kontak-kami"><span>Let's start the project</span></a>
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
                                            <a href="/privasi"
                                                class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Kebijakan
                                                Privasi</a>
                                        </li>
                                        <li>
                                            <a href="/syarat-ketentuan"
                                                class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Syarat
                                                &amp; Ketentuan</a>
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

    <a href="https://wa.me/6282123346815" target="_blank" class="float"
        style="position: fixed;
    width: 60px;
    height: 60px;
    bottom: 40px;
    right: 40px;
    background-color: #fff;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    box-shadow: 2px 2px 3px #999; z-index: 10;">
        <svg viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <title>Whatsapp-color</title>
                <desc>Created with Sketch.</desc>
                <defs> </defs>
                <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Color-" transform="translate(-700.000000, -360.000000)" fill="#67C15E">
                        <path
                            d="M723.993033,360 C710.762252,360 700,370.765287 700,383.999801 C700,389.248451 701.692661,394.116025 704.570026,398.066947 L701.579605,406.983798 L710.804449,404.035539 C714.598605,406.546975 719.126434,408 724.006967,408 C737.237748,408 748,397.234315 748,384.000199 C748,370.765685 737.237748,360.000398 724.006967,360.000398 L723.993033,360.000398 L723.993033,360 Z M717.29285,372.190836 C716.827488,371.07628 716.474784,371.034071 715.769774,371.005401 C715.529728,370.991464 715.262214,370.977527 714.96564,370.977527 C714.04845,370.977527 713.089462,371.245514 712.511043,371.838033 C711.806033,372.557577 710.056843,374.23638 710.056843,377.679202 C710.056843,381.122023 712.567571,384.451756 712.905944,384.917648 C713.258648,385.382743 717.800808,392.55031 724.853297,395.471492 C730.368379,397.757149 732.00491,397.545307 733.260074,397.27732 C735.093658,396.882308 737.393002,395.527239 737.971421,393.891043 C738.54984,392.25405 738.54984,390.857171 738.380255,390.560912 C738.211068,390.264652 737.745308,390.095816 737.040298,389.742615 C736.335288,389.389811 732.90737,387.696673 732.25849,387.470894 C731.623543,387.231179 731.017259,387.315995 730.537963,387.99333 C729.860819,388.938653 729.198006,389.89831 728.661785,390.476494 C728.238619,390.928051 727.547144,390.984595 726.969123,390.744481 C726.193254,390.420348 724.021298,389.657798 721.340985,387.273388 C719.267356,385.42535 717.856938,383.125756 717.448104,382.434484 C717.038871,381.729275 717.405907,381.319529 717.729948,380.938852 C718.082653,380.501232 718.421026,380.191036 718.77373,379.781688 C719.126434,379.372738 719.323884,379.160897 719.549599,378.681068 C719.789645,378.215575 719.62006,377.735746 719.450874,377.382942 C719.281687,377.030139 717.871269,373.587317 717.29285,372.190836 Z"
                            id="Whatsapp"> </path>
                    </g>
                </g>
            </g>
        </svg>
    </a>

</body>

</html>
