<!-- Header Navigation -->
<div class="menu-block-wrapper">
    <div class="menu-overlay"></div>
    <nav class="menu-block" id="append-menu-header">
        <div class="mobile-menu-head">
            <div class="go-back">
                <i class="fa-solid fa-angle-left"></i>
            </div>
            <div class="current-menu-title"></div>
            <div class="mobile-menu-close">&times;</div>
        </div>
        <ul class="site-menu-main">
            @foreach ($menus as $menu)
                <li class="nav-item {{ $menu->children->count() > 0 ? 'nav-item-has-children' : '' }}">
                    @if (!empty($menu->page_id) && empty($menu->url))
                        <a href="/page/{{ $menu->page->slug }}"
                            class="nav-link-item {{ $menu->children->count() > 0 ? 'drop-trigger' : '' }}"
                            @if ($menu->is_blank) target="_blank" @endif>{{ $menu->title }}
                            @if ($menu->children->count() > 0)
                                <i class="fa-solid fa-angle-down"></i>
                            @endif
                        </a>
                    @elseif (!empty($menu->url) && empty($menu->page_id))
                        <a href="{{ $menu->url }}"
                            class="nav-link-item {{ $menu->children->count() > 0 ? 'drop-trigger' : '' }}"
                            @if ($menu->is_blank) target="_blank" @endif>{{ $menu->title }}
                            @if ($menu->children->count() > 0)
                                <i class="fa-solid fa-angle-down"></i>
                            @endif
                        </a>
                    @else
                        @if ($menu->type === 'product')
                            <a href="/produk"
                                class="nav-link-item {{ $menu->children->count() > 0 ? 'drop-trigger' : '' }}">{{ $menu->title }}
                                @if ($menu->children->count() > 0)
                                    <i class="fa-solid fa-angle-down"></i>
                                @endif
                            </a>
                        @elseif ($menu->type === 'blog')
                            <a href="/blog"
                                class="nav-link-item {{ $menu->children->count() > 0 ? 'drop-trigger' : '' }}">{{ $menu->title }}
                                @if ($menu->children->count() > 0)
                                    <i class="fa-solid fa-angle-down"></i>
                                @endif
                            </a>
                        @else
                            <a href="#"
                                class="nav-link-item {{ $menu->children->count() > 0 ? 'drop-trigger' : '' }}">{{ $menu->title }}
                                @if ($menu->children->count() > 0)
                                    <i class="fa-solid fa-angle-down"></i>
                                @endif
                            </a>
                        @endif
                    @endif



                    @if ($menu->children->count() > 0)
                        <ul class="sub-menu">
                            @foreach ($menu->childrenRecursive as $child)
                                @include('livewire.components.child_menu', ['child' => $child])
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
            {{-- <li class="nav-item">
                <a href="/" class="nav-link-item">Beranda </a>
            </li>
            <li class="nav-item">
                <a class="nav-link-item" href="#">Tentang Kami</a>
            </li>
            <li class="nav-item nav-item-has-children">
                <a href="#" class="nav-link-item drop-trigger">Produk
                    <i class="fa-solid fa-angle-down"></i>
                </a>
                <ul class="sub-menu" id="submenu-2">
                    <li class="sub-menu--item">
                        <a href="#">Produk 1</a>
                    </li>
                    <li class="sub-menu--item">
                        <a href="#">Produk 2</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link-item">Artikel</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link-item">F.A.Q</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link-item">Hubungi Kami</a>
            </li> --}}
        </ul>
    </nav>
</div>
<!-- Header Navigation -->
