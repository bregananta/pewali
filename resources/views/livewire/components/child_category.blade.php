@if ($product)
    @if ($product->category->id === $child->id)
        <li class="pl-8 pb-[10px] last:pb-0 text-ColorBlue">
            <a href="/product-category/{{ $child->id }}">{{ $child->title }}</a>
        @else
        <li class="pl-8 pb-[10px] last:pb-0 text-ColorBlack">
            <a href="/product-category/{{ $child->id }}">{{ $child->title }}</a>
    @endif
@else
    @if ($category->id === $child->id)
        <li class="pl-8 pb-[10px] last:pb-0 text-ColorBlue">
            <a href="/product-category/{{ $child->id }}">{{ $child->title }}</a>
        @else
        <li class="pl-8 pb-[10px] last:pb-0 text-ColorBlack">
            <a href="/product-category/{{ $child->id }}">{{ $child->title }}</a>
    @endif
@endif
@if ($child->children->count() > 0)
    <ul>
        @foreach ($child->children as $item)
            @include('livewire.components.child_category', ['child' => $item])
        @endforeach
    </ul>
@endif
</li>
