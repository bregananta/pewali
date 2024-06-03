<li class="sub-menu--item {{ $child->children->count() > 0 ? 'nav-item-has-children' : '' }}">
    {{-- @if (!empty($child->page_id))
        <a href="/page/{{ $child->page->slug }}">{{ $child->title }}</a>
    @endif
    @if (!empty($child->url))
        <a href="{{ $child->url }}">{{ $child->title }}</a>
    @endif --}}
    @if (!empty($child->page_id) && empty($child->url))
        <a href="/page/{{ $child->page->slug }}" class="{{ $child->children->count() > 0 ? 'drop-trigger' : '' }}"
            @if ($child->is_blank) target="_blank" @endif>{{ $child->title }}
            @if ($child->children->count() > 0)
                <i class="fa-solid fa-angle-right"></i>
            @endif
        </a>
    @elseif (!empty($child->url) && empty($child->page_id))
        <a href="{{ $child->url }}" class="{{ $child->children->count() > 0 ? 'drop-trigger' : '' }}"
            @if ($child->is_blank) target="_blank" @endif>{{ $child->title }}
            @if ($child->children->count() > 0)
                <i class="fa-solid fa-angle-right"></i>
            @endif
        </a>
    @else
        <a href="#" class="{{ $child->children->count() > 0 ? 'drop-trigger' : '' }}">{{ $child->title }}
            @if ($child->children->count() > 0)
                <i class="fa-solid fa-angle-right"></i>
            @endif
        </a>
    @endif

    @if ($child->children->count() > 0)
        <ul class="sub-menu shape-none">
            @foreach ($child->children as $item)
                @include('livewire.components.child_menu', ['child' => $item])
            @endforeach
        </ul>
    @endif
</li>
