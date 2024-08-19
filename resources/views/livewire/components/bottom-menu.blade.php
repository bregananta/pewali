<div class="flex flex-col gap-y-7 md:col-span-1 lg:col-span-1">
    <div class="text-xl font-semibold capitalize">&nbsp;</div>
    <ul class="flex flex-col gap-y-[10px] capitalize">
        @foreach ($menus as $menu)
            <li>
                @if (!empty($menu->page_id))
                    <a href="/page/{{ $menu->page->slug }}"
                        class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline"
                        @if ($menu->is_blank) target="_blank" @endif>{{ $menu->title }}
                    </a>
                @elseif (!empty($menu->url))
                    <a href="{{ $menu->url }}"
                        class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline"
                        @if ($menu->is_blank) target="_blank" @endif>{{ $menu->title }}
                    </a>
                @else
                    @if ($menu->type === 'product')
                        <a href="/products"
                            class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">{{ $menu->title }}
                        </a>
                    @elseif ($menu->type === 'blog')
                        <a href="/blog"
                            class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">{{ $menu->title }}
                        </a>
                    @else
                        <a href="/page/{{ $menu->children?->first()?->page?->slug }}"
                            class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">{{ $menu->title }}
                        </a>
                    @endif
                @endif

            </li>
        @endforeach
    </ul>
</div>
